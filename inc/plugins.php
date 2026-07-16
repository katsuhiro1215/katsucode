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
 * Plugins - プラグイン連携用関数群
 */
// Contact Form 7の自動整形無効化
add_filter('wpcf7_autop_or_not', '__return_false');

// Gutenbergの読み込み制御
function enqueue_block_library_assets()
{
  if (is_user_logged_in()) {
    wp_enqueue_style('wp-block-library');
    wp_enqueue_script('wp-block-library');
  }
}
add_action('wp_enqueue_scripts', 'enqueue_block_library_assets');
