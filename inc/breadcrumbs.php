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
 * パンくずリスト表示関数
 */
function breadcrumb()
{
  $home = '<div class="breadcrumb-item"><a href="' . get_bloginfo('url') . '" ><i class="fas fa-home"></i><span>HOME</span></a></div>';

  if (is_home()) {
    // トップページの場合
  } else if (is_category()) {
    // カテゴリページの場合
    $cat = get_queried_object();
    $cat_id = $cat->parent;
    $cat_list = array();
    while ($cat_id != 0) {
      $cat = get_category($cat_id);
      $cat_link = get_category_link($cat_id);
      array_unshift($cat_list, '<div class="breadcrumb-item"><a href="' . $cat_link . '">' . $cat->name . '</a></div>');
      $cat_id = $cat->parent;
    }
    echo $home;
    foreach ($cat_list as $value) {
      echo $value;
    }
    the_archive_title('<div class="breadcrumb-item">', '</div>');
  } else if (is_archive()) {
    // 月別アーカイブ・タグページの場合
    echo $home;
    the_archive_title('<div class="breadcrumb-item">', '</div>');
  } else if (is_single()) {
    // 投稿ページの場合
    echo $home;
    $cat = get_the_category();
    if (isset($cat[0]->cat_ID)) $cat_id = $cat[0]->cat_ID;
    $cat_list = array();
    while ($cat_id != 0) {
      $cat = get_category($cat_id);
      $cat_link = get_category_link($cat_id);
      array_unshift($cat_list, '<div class="breadcrumb-item"><a href="' . $cat_link . '">' . $cat->name . '</a></div>');
      $cat_id = $cat->parent;
    }
    foreach ($cat_list as $value) {
      echo $value;
    }
    the_title('<div class="breadcrumb-item">', '</div>');
  } else if (is_page()) {
    // 固定ページの場合
    echo $home;
    the_title('<div class="breadcrumb-item">', '</div>');
  } else if (is_search()) {
    // 検索ページの場合
    echo $home;
    echo '<div class="breadcrumb-item">「' . get_search_query() . '」の検索結果</div>';
  } else if (is_404()) {
    // 404ページの場合
    echo $home;
    echo '<div class="breadcrumb-item">ページが見つかりません</div>';
  }
}