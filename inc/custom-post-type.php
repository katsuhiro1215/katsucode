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
 * カスタム投稿タイプの登録
 */
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'blog';
    $args['label'] = 'Blog';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/**
 * カスタム投稿タイプ「プロジェクト」、「お客様の声」
 */
function katsucode_custom_post_type()
{
  register_post_type(
    'project',
    array(
      'label' => 'Project',
      'labels' => array(
        'name'               => '実績',
        'singular_name'      => '実績',
        'add_new'            => '新規追加',
        'add_new_item'       => '新規実績を追加',
        'edit_item'          => '実績の編集',
        'new_item'           => '新しい実績',
        'view_item'          => '実績の表示',
        'search_items'       => '実績の検索',
        'not_found'          => '実績は見つかりませんでした。',
        'not_found_in_trash' => 'ゴミ箱に実績はありませんでした。',
        'all_items'          => 'すべての実績',
        'menu_name'          => '実績',
        'name_admin_bar'     => '実績',
      ),
      'public'       => true,
      'description'  => 'ポートフォリオを投稿するところです。',
      'hierarchical' => true,
      'has_archive'  => true,
      "show_in_rest" => true,
      'menu_position' => 5,
      'supports'     => array(
        'title',
        'editor',
        'thumbnail',
        'excerpt',
        'trackbacks',
        'custom-fields',
        'comments',
        'revisions',
        'author',
        'post-formats',
      ),
      'menu_icon'     => 'dashicons-art'
    )
  );
  register_taxonomy(
    'project-cat',
    'project',
    array(
      'label' => '実績カテゴリー',
      'labels' => array(
        'popular_items' => 'よく使う実績カテゴリー',
        'edit_item' => '実績カテゴリーを編集',
        'add_new_item' => '新規実績カテゴリーを追加',
        'search_items' => '実績カテゴリーを検索'
      ),
      'public' => true,
      'description' => '実績カテゴリーの説明文です。',
      'hierarchical' => true,
      'show_in_rest' => true
    )
  );
  register_taxonomy(
    'project_tag',
    'project',
    array(
      'label' => '実績タグ',
      'labels' => array(
        'popular_items' => 'よく使う実績タグ',
        'edit_item' => '実績タグを編集',
        'add_new_item' => '新規実績タグを追加',
        'search_items' => '実績タグを検索'
      ),
      'public' => true,
      'description' => '実績タグの説明文です。',
      'hierarchical' => false,
      'update_count_callback' => '_update_post_term_count',
      'show_in_rest' => true
    )
  );
  register_post_type(
    'voice',
    array(
      'label' => 'お客様の声',
      'labels' => array(
        'name'               => 'お客様の声',
        'singular_name'      => 'お客様の声',
        'add_new'            => '新規追加',
        'add_new_item'       => '新規お客様の声を追加',
        'edit_item'          => 'お客様の声の編集',
        'new_item'           => '新しいお客様の声',
        'view_item'          => 'お客様の声の表示',
        'search_items'       => 'お客様の声の検索',
        'not_found'          => 'お客様の声は見つかりませんでした。',
        'not_found_in_trash' => 'ゴミ箱にお客様の声はありませんでした。',
        'all_items'          => 'すべてのお客様の声',
        'menu_name'          => 'お客様の声',
        'name_admin_bar'     => 'お客様の声',
      ),
      'public'       => true,
      'description'  => 'お客様の声を投稿するところです。',
      'hierarchical' => true,
      'has_archive'  => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports'     => array(
        'title',
        'editor',
        'thumbnail',
        'excerpt',
        'trackbacks',
        'custom-fields',
        'comments',
        'revisions',
        'author',
        'post-formats',
      ),
      'menu_icon'     => 'dashicons-editor-help'
    )
  );
  register_taxonomy(
    'voice_category',
    'voice',
    array(
      'label' => 'お客様の声カテゴリー',
      'labels' => array(
        'popular_items' => 'よく使うお客様の声カテゴリー',
        'edit_item' => 'お客様の声カテゴリーを編集',
        'add_new_item' => '新規お客様の声カテゴリーを追加',
        'search_items' => 'お客様の声カテゴリーを検索'
      ),
      'public' => true,
      'description' => 'お客様の声カテゴリーの説明文です。',
      'hierarchical' => true,
      'show_in_rest' => true
    )
  );
  register_taxonomy(
    'voice_tag',
    'voice',
    array(
      'label' => 'お客様の声タグ',
      'labels' => array(
        'popular_items' => 'よく使うお客様の声タグ',
        'edit_item' => 'お客様の声タグを編集',
        'add_new_item' => '新規お客様の声タグを追加',
        'search_items' => 'お客様の声タグを検索'
      ),
      'public' => true,
      'description' => 'お客様の声タグの説明文です。',
      'hierarchical' => false,
      'update_count_callback' => '_update_post_term_count',
      'show_in_rest' => true
    )
  );

  // FAQカスタム投稿タイプ
  register_post_type(
    'faq',
    array(
      'label' => 'FAQ',
      'labels' => array(
        'name'               => 'FAQ',
        'singular_name'      => 'FAQ',
        'add_new'            => '新規追加',
        'add_new_item'       => '新規FAQを追加',
        'edit_item'          => 'FAQの編集',
        'new_item'           => '新しいFAQ',
        'view_item'          => 'FAQの表示',
        'search_items'       => 'FAQの検索',
        'not_found'          => 'FAQは見つかりませんでした。',
        'not_found_in_trash' => 'ゴミ箱にFAQはありませんでした。',
        'all_items'          => 'すべてのFAQ',
        'menu_name'          => 'FAQ',
        'name_admin_bar'     => 'FAQ',
      ),
      'public'       => true,
      'description'  => 'よくある質問を投稿するところです。',
      'hierarchical' => true,
      'has_archive'  => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports'     => array(
        'title',
        'editor',
        'excerpt',
        'custom-fields',
        'revisions',
      ),
      'menu_icon'     => 'dashicons-editor-help'
    )
  );
  register_taxonomy(
    'faq-cat',
    'faq',
    array(
      'label' => 'FAQカテゴリー',
      'labels' => array(
        'popular_items' => 'よく使うFAQカテゴリー',
        'edit_item' => 'FAQカテゴリーを編集',
        'add_new_item' => '新規FAQカテゴリーを追加',
        'search_items' => 'FAQカテゴリーを検索'
      ),
      'public' => true,
      'description' => 'FAQカテゴリーの説明文です。',
      'hierarchical' => true,
      'show_in_rest' => true
    )
  );
}
add_action('init', 'katsucode_custom_post_type');

/**
 * 管理画面のカスタム投稿タイプ一覧を日付降順に並び替え
 */
function admin_custom_posttype_order($wp_query)
{
  if (is_admin()) {
    $post_type = $wp_query->query['post_type'];
    if ($post_type == 'project') {
      $wp_query->set('orderby', 'date');
      $wp_query->set('order', 'DESC');
    }
    if ($post_type == 'voice') {
      $wp_query->set('orderby', 'date');
      $wp_query->set('order', 'DESC');
    }
    if ($post_type == 'faq') {
      $wp_query->set('orderby', 'date');
      $wp_query->set('order', 'DESC');
    }
  }
}
add_filter('pre_get_posts', 'admin_custom_posttype_order');

add_action('pre_get_posts', function ($query) {
  if (!is_admin() && $query->is_main_query() && is_post_type_archive('project')) {
    $query->set('order', 'ASC');
    $query->set('orderby', 'date');
  }
  if (!is_admin() && $query->is_main_query() && is_post_type_archive('voice')) {
    $query->set('order', 'ASC');
    $query->set('orderby', 'date');
  }
  if (!is_admin() && $query->is_main_query() && is_post_type_archive('faq')) {
    $query->set('order', 'ASC');
    $query->set('orderby', 'date');
  }
});
