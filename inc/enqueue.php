<?php

/**
 * Katsucode WordPress Theme Setup
 * 
 * @author Katsuhiro Kakoi <katsuhiro.k1215@katsucode.jp>
 * @link  https://katsucode.jp/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later * 
 */
if (!defined('ABSPATH')) exit;

function katsucode_styles_and_scripts()
{
  /* --- Style --- */
  // Font Awesome
  wp_enqueue_style('fontaewsome', get_template_directory_uri() . '/assets/css/all.min.css', array(), '6.1.1');
  // Swiper Style
  wp_enqueue_style('swiper_style', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '8.2.4');
  // Original Style
  wp_enqueue_style('katsucode-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.1');

  /* --- JS --- */
  // WordPressのjQuery解除
  wp_deregister_script('jquery');
  // TweenMax JS
  wp_enqueue_script('tweenmax_js', get_template_directory_uri() . '/assets/js/TweenMax.min.js', array(), '2.1.1', true);
  // Swiper JS
  wp_enqueue_script('swiper_js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), '8.2.4', true);
  // オリジナルJS読み込み
  wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'katsucode_styles_and_scripts');