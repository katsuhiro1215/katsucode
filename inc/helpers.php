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
 * スラッグまたはIDからページ情報を安全に取得する関数
 * @param string|int $page_identifier ページのスラッグまたはID
 * @param string $field 取得したいフィールド（title, content, excerpt など）
 * @return string|null 取得した値またはnull
 */
function get_page_info_safe($page_identifier, $field = 'title')
{
  // 数値の場合はIDとして扱う
  if (is_numeric($page_identifier)) {
    $page = get_post($page_identifier);
  } else {
    // 文字列の場合はスラッグとして扱う
    $page = get_page_by_path($page_identifier);
  }

  // ページが見つからない場合
  if (!$page || $page->post_status !== 'publish') {
    return null;
  }

  // フィールドに応じて値を返す
  switch ($field) {
    case 'title':
      return get_the_title($page->ID);
    case 'content':
      return apply_filters('the_content', $page->post_content);
    case 'excerpt':
      return get_the_excerpt($page->ID);
    case 'url':
      return get_permalink($page->ID);
    case 'thumbnail':
      return get_the_post_thumbnail_url($page->ID, 'full');
    case 'id':
      return $page->ID;
    default:
      // ACFフィールドまたはカスタムフィールドとして取得を試みる
      if (function_exists('get_field')) {
        $acf_value = get_field($field, $page->ID);
        if ($acf_value !== false) {
          return $acf_value;
        }
      }
      return get_post_meta($page->ID, $field, true);
  }
}

/**
 * 制作の流れ画像取得関数（STEP1〜8）
 * ACFオプションページ（制作の流れ画像設定）で設定されていればその画像を、
 * 未設定であればデフォルト画像（assets/img/flow/stepN.jpg）を返す。
 *
 * @param int $step ステップ番号（1〜8）
 * @return string 画像URL
 */
function katsucode_flow_image($step)
{
  $default = get_template_directory_uri() . '/assets/img/flow/step' . $step . '.jpg';

  if (!function_exists('get_field')) {
    return $default;
  }

  $image = get_field('flow_step_' . $step, 'option');

  return $image ? $image : $default;
}

/**
 * ページ単位のACF画像取得関数（現在の投稿/ページに紐づくフィールド用）
 * ACFで設定されていればその画像を、未設定であればデフォルト画像を返す。
 *
 * @param string $field_name ACFフィールド名
 * @param string $default    デフォルト画像URL
 * @return string 画像URL
 */
function katsucode_page_image($field_name, $default)
{
  if (!function_exists('get_field')) {
    return $default;
  }

  $image = get_field($field_name);

  return $image ? $image : $default;
}

/**
 * 複数のタームから最も深い階層のタームを取得する関数
 *
 * @param array $terms タームオブジェクトの配列
 * @param string $mytaxonomy タクソノミー名
 * @param string|null $myterm 優先的に取得したいターム名（オプション）
 * @return object 最も深い階層のタームオブジェクト
 */
function get_deepest_term($terms, $mytaxonomy, $myterm = null)
{
  global $post;

  if ($myterm) {
    $my_pref_term =  get_term_by('name', $myterm, $mytaxonomy);
    if ($my_pref_term && is_object_in_term($post->ID, $mytaxonomy, $my_pref_term->term_id)) {
      return $deepest =  $my_pref_term;
    }
  }

  if (count($terms) == 1) {
    return $terms[0];
  }

  $deepest = $terms[0];
  $max = 0;

  foreach ($terms as $term) {
    $ancestors = array_reverse(get_ancestors($term->term_id, $term->taxonomy));
    if (count($ancestors) > $max) {
      $max = count($ancestors);
      $deepest = $term;
    }
  }

  return $deepest;
}
