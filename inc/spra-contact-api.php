<?php

/**
 * Spra（中央管理システム）お問い合わせAPI連携
 *
 * Contact Form 7を廃止し、Spra側のお問い合わせAPI
 * （POST /api/contacts, GET /api/contacts/categories）へ
 * サーバー間通信で連携する。APIキーはブラウザに一切渡さない。
 *
 * wp-config.php に以下を定義しておくこと（このテーマには含めない）:
 *   define('SPRA_CONTACT_API_BASE', 'https://smartsprouts.jp/api/contacts');
 *   define('SPRA_CONTACT_API_KEY', 'Spra管理画面で発行したAPIキー');
 *
 * @author Katsuhiro Kakoi <katsuhiro.k1215@katsucode.jp>
 */
if (!defined('ABSPATH')) exit;

/**
 * Spra側のお問い合わせカテゴリ一覧を取得する（1時間キャッシュ）
 *
 * @return array<int, array{id: string, name: string}>
 */
function spra_get_contact_categories(): array
{
  $cached = get_transient('spra_contact_categories');
  if (is_array($cached)) {
    return $cached;
  }

  if (!defined('SPRA_CONTACT_API_BASE') || !defined('SPRA_CONTACT_API_KEY')) {
    return [];
  }

  $response = wp_remote_get(SPRA_CONTACT_API_BASE . '/categories', [
    'headers' => ['X-Api-Key' => SPRA_CONTACT_API_KEY],
    'timeout' => 10,
  ]);

  if (is_wp_error($response) || wp_remote_retrieve_response_code($response) !== 200) {
    error_log('[Spra Contact API] カテゴリ取得失敗: ' . (is_wp_error($response) ? $response->get_error_message() : wp_remote_retrieve_body($response)));
    return [];
  }

  $body = json_decode(wp_remote_retrieve_body($response), true);
  $categories = $body['categories'] ?? [];

  set_transient('spra_contact_categories', $categories, HOUR_IN_SECONDS);

  return $categories;
}

/**
 * 実訪問者のIPアドレスを取得する（サーバー間通信のため転送が必要）
 */
function spra_get_visitor_ip(): string
{
  foreach (['HTTP_CF_CONNECTING_IP', 'HTTP_X_FORWARDED_FOR', 'REMOTE_ADDR'] as $key) {
    if (!empty($_SERVER[$key])) {
      $ip = explode(',', $_SERVER[$key])[0];
      return trim($ip);
    }
  }

  return '';
}

/**
 * お問い合わせフォームの送信を受け取り、Spra APIへ中継する
 */
function spra_handle_contact_submit(): void
{
  check_admin_referer('spra_contact_submit');

  $redirectTo = !empty($_POST['redirect_to']) ? esc_url_raw($_POST['redirect_to']) : home_url('/contact');

  $categories = spra_get_contact_categories();
  $categoryId = sanitize_text_field($_POST['category'] ?? '');
  $categoryName = collect_category_name($categories, $categoryId);

  $name = sanitize_text_field($_POST['name'] ?? '');
  $nameKana = sanitize_text_field($_POST['name_kana'] ?? '');
  $email = sanitize_email($_POST['email'] ?? '');
  $phone = sanitize_text_field($_POST['tel'] ?? '');
  $company = sanitize_text_field($_POST['company'] ?? '');
  $referral = sanitize_text_field($_POST['referral'] ?? '');
  $message = sanitize_textarea_field($_POST['message'] ?? '');
  $privacyAgreed = !empty($_POST['privacy_agree']);
  $notSalesAgreed = !empty($_POST['not_sales_agree']);

  if (!$name || !$email || !$phone || !$message || !$categoryId || !$privacyAgreed || !$notSalesAgreed) {
    wp_safe_redirect(add_query_arg('contact', 'invalid', $redirectTo));
    exit;
  }

  $messageBody = $message;
  if ($nameKana) {
    $messageBody = "ふりがな: {$nameKana}\n" . $messageBody;
  }
  if ($referral) {
    $messageBody = "当サイトを知ったきっかけ: {$referral}\n" . $messageBody;
  }

  $payload = [
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'company' => $company ?: null,
    'contact_category_id' => $categoryId,
    'subject' => $categoryName ?: 'お問い合わせ',
    'message' => $messageBody,
    'page_url' => $redirectTo,
    'visitor_ip' => spra_get_visitor_ip(),
    'visitor_user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? '',
  ];

  if (!defined('SPRA_CONTACT_API_BASE') || !defined('SPRA_CONTACT_API_KEY')) {
    error_log('[Spra Contact API] SPRA_CONTACT_API_BASE / SPRA_CONTACT_API_KEY が未定義です。');
    wp_safe_redirect(add_query_arg('contact', 'error', $redirectTo));
    exit;
  }

  $response = wp_remote_post(SPRA_CONTACT_API_BASE, [
    'headers' => [
      'X-Api-Key' => SPRA_CONTACT_API_KEY,
      'Content-Type' => 'application/json',
    ],
    'body' => wp_json_encode($payload),
    'timeout' => 10,
  ]);

  if (is_wp_error($response) || wp_remote_retrieve_response_code($response) >= 400) {
    error_log('[Spra Contact API] 送信失敗: ' . (is_wp_error($response) ? $response->get_error_message() : wp_remote_retrieve_body($response)));
    wp_safe_redirect(add_query_arg('contact', 'error', $redirectTo));
    exit;
  }

  wp_safe_redirect(add_query_arg('contact', 'success', $redirectTo));
  exit;
}
add_action('admin_post_spra_contact_submit', 'spra_handle_contact_submit');
add_action('admin_post_nopriv_spra_contact_submit', 'spra_handle_contact_submit');

/**
 * カテゴリ一覧からIDに対応する表示名を探す
 *
 * @param array<int, array{id: string, name: string}> $categories
 */
function collect_category_name(array $categories, string $categoryId): ?string
{
  foreach ($categories as $category) {
    if ((string) $category['id'] === $categoryId) {
      return $category['name'];
    }
  }

  return null;
}
