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
 * テーマセットアップ
 */
function theme_setup()
{
  // タイトル
  add_theme_support('title-tag');
  // RS-feed
  add_theme_support('automatic-feed-links');
  // ウィジェット再読込
  add_theme_support('customize-selective-refresh-widgets');
  // アイキャッチ画像
  add_theme_support('post-thumbnails');
  add_image_size('archive-blog', 360, 226, true);
  add_image_size('single-blog', 710, 473, true);
  // 投稿フォーマット
  add_theme_support('post-formats', array(
    'aside',
    'image',
    'video',
    'quote',
    'link',
    'gallery',
    'status',
    'audio',
    'chat',
  ));
  // HTML5サポート
  add_theme_support('html5', array(
    'comment-list',
    'comment-form',
    'search-form',
    'gallery',
    'caption',
    'style',
    'script',
  ));
  // ブロックエディターサポート
  add_theme_support('wp-block-styles');
  // 幅広、全幅
  add_theme_support('align-wide');
  // レスポンシブ対応
  add_theme_support('responsive-embeds');
  // フォントサイズのカスタム設定
  add_theme_support('editor-font-sizes', array(
    array(
      'name' => '小',
      'size' => 12,
      'slug' => 'small'
    ),
    array(
      'name' => '中',
      'size' => 16,
      'slug' => 'medium'
    ),
    array(
      'name' => '大',
      'size' => 20,
      'slug' => 'large'
    ),
    array(
      'name' => '特大',
      'size' => 24,
      'slug' => 'xlarge'
    ),
  ));
  // ナビゲーションメニュー登録
  register_nav_menus(array(
    'header-nav' => esc_html__('Header Navigation', 'katsucode'),
    'global-nav' => esc_html__('Global Navigation', 'katsucode'),
    'drawer-nav' => esc_html__('Drawer Navigation', 'katsucode'),
    'footer-nav' => esc_html__('Footer Navigation', 'katsucode'),
    'footer-social' => esc_html__('Footer Social Links', 'katsucode'),
  ));
}
add_action('after_setup_theme', 'theme_setup');

/**
 * コンテンツ幅の設定
 */
function katsucode_content_width()
{
  $GLOBALS['content_width'] = apply_filters('katsucode_content_width', 920);
}
add_action('after_setup_theme', 'katsucode_content_width', 0);