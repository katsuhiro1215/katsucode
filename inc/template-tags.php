<?php

/**
 * Katsucode WordPress Theme Setup
 * 
 * @author Katsuhiro Kakoi <katsuhiro.k1215@katsucode.jp>
 * @link  https://katsucode.jp/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later * 
 */
if (!defined('ABSPATH')) exit;

/**
 * Template Tags - 共通テンプレート関数群
 */

/**
 * ACF画像フィールドの出力用関数
 * 
 * @param string $field_name  ACFフィールド名
 * @param string $default     画像がない場合のデフォルトURL
 * @param string $alt_default alt属性のデフォルトテキスト
 * @param string $size        画像サイズ（ACFでIDを返す場合に使用）
 */
function the_acf_image($field_name, $default = '', $alt_default = '', $size = 'full')
{
  if (!function_exists('get_field')) return; // ACF未インストール時は何もしない

  $image = get_field($field_name);
  $url = '';
  $alt = '';

  if ($image) {
    if (is_array($image)) {
      $url = $image['url'] ?? '';
      $alt = $image['alt'] ?? $alt_default;
    } elseif (is_numeric($image)) {
      $url = wp_get_attachment_image_url($image, $size);
      $alt = get_post_meta($image, '_wp_attachment_image_alt', true) ?: $alt_default;
    } else {
      $url = $image;
      $alt = $alt_default;
    }
  } else {
    $url = $default ?: get_template_directory_uri() . '/assets/images/no-image.png';
    $alt = $alt_default ?: 'No Image';
  }

  echo '<img src="' . esc_url($url) . '" alt="' . esc_attr($alt) . '">';
}

/**
 * ACFテキストフィールドの出力用関数
 * 
 * @param string $field_name  ACFフィールド名
 * @param string $before      出力前のテキスト
 * @param string $after       出力後のテキスト
 */
if (!function_exists('the_acf_text')) {
  function the_acf_text($field_name, $before = '', $after = '')
  {
    if (function_exists('get_field')) {
      $text = get_field($field_name);
      if ($text) {
        echo $before . wp_kses_post(wpautop($text)) . $after;
      }
    }
  }
}

/**
 * ページや投稿タイプに応じたトップビジュアル（hero）を表示
 * 
 * 固定ページに設定されたタイトル・サブタイトル・リード文・アイキャッチを投稿タイプにも流用
 * 
 * @param string $post_type 投稿タイプ名（例: 'service', 'faq', 'voice', 'news'）
 * @param array  $mapping   投稿タイプと固定ページIDの対応表
 */
function the_page_top_visual($post_type = '', $mapping = [])
{
  // 投稿タイプごとの対応表（固定ページスラッグで管理）
  $default_mapping = [
    'news'    => 8, // 固定ページ「お知らせ」ID
    'voice'   => 503, // 固定ページ「お客様の声」ID
    // 'event'   => 17, // 固定ページ「イベント」ID
    'faq'     => 1348, // 固定ページ「FAQ」ID
  ];

  $mapping = array_merge($default_mapping, $mapping);

  // 現在の投稿タイプを自動検出
  if (empty($post_type)) {
    $post_type = get_post_type();
  }

  $mapping = array_merge($default_mapping, $mapping);

  // 現在の投稿タイプを自動検出
  if (empty($post_type)) {
    $post_type = get_post_type();
  }

  // 対応する固定ページのIDを取得
  $page_id = isset($mapping[$post_type]) ? $mapping[$post_type] : null;

  // 固定ページの場合は現在のページIDを優先
  if (is_page()) {
    $page_id = get_the_ID();
  }

  // 出力開始
  echo '<div class="page-hero-section">';

  // タイトル
  echo '<h2 class="headline">';
  echo '<div class="ja">';
  echo esc_html(get_the_title($page_id));
  echo '</div>';

  // サブタイトル（ACF）
  if (function_exists('get_field')) {
    $sub_title = get_field('sub_title', $page_id);
    if ($sub_title) {
      echo '<div class="en">' . esc_html($sub_title) . '</div>';
    }
  }

  echo '</h2>';

  // リード文（ACF）
  if (function_exists('get_field')) {
    $lead = get_field('lead', $page_id);
    if ($lead) {
      echo '<p class="page-hero-section__lead">' . esc_html($lead) . '</p>';
    }
  }

  // アイキャッチ画像（固定ページ優先）
  if ($page_id && has_post_thumbnail($page_id)) {
    echo get_the_post_thumbnail($page_id, 'full');
  } elseif (has_post_thumbnail()) {
    the_post_thumbnail('full');
  }
  // overlay
  echo '<div class="overlay"></div>';

  echo '</div>'; // /.page-hero-section
}

/**
 * 現在ページの正規URL取得関数（canonical / og:url共通）
 */
function get_canonical_url()
{
  if (is_front_page()) {
    return home_url('/');
  }

  if (is_singular()) {
    $canonical = wp_get_canonical_url();
    return $canonical ? $canonical : get_permalink();
  }

  global $wp;
  return home_url(add_query_arg(array(), $wp->request));
}

/**
 * メインタイトル取得関数
 */
function get_main_title()
{
  if (is_singular('post')) :
    $category_obj = get_the_category();
    return $category_obj[0]->name;
  elseif (is_page()) :
    return get_the_title();
  elseif (is_post_type_archive()) :
    return post_type_archive_title();
  elseif (is_category()) :
    return single_cat_title();
  elseif (is_search()) :
    return '検索結果';
  elseif (is_404()) :
    return '404';
  endif;
};

/**
 * 子ページ取得関数
 */
function get_child_pages($number = -1, $specified_id = null)
{
  if (isset($specified_id)) :
    $parent_id = $specified_id;
  else :
    $parent_id = get_the_ID();
  endif;
  $args = array(
    'posts_per_page' => $number,
    'post_type' => 'page',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'post_parent' => $parent_id,
  );
  $child_pages = new WP_Query($args);
  return $child_pages;
}
