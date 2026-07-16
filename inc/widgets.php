<?php

/**
 * Katsucode WordPress Theme Setup
 * 
 * @author Katsuhiro Kakoi <katsuhiro.k1215@katsucode.jp>
 * @link  https://katsucode.jp/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later * 
 */
if (!defined('ABSPATH')) exit;

function my_theme_widgets_init()
{
  register_sidebar(
    array(
      'name' => esc_html__('Blog Sidebar', 'katsucode'),
      'id' => 'sidebar-1',
      'before_widget' => '<div class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="c-title__secondary"><div class="c-title__secondary-ja">',
      'after_title' => '</div></h4>'
    )
  );
  register_sidebar(
    array(
      'name' => esc_html__('Blog Footer Sidebar', 'katsucode'),
      'id' => 'sidebar-2',
      'before_widget' => '<div class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>'
    )
  );
  register_sidebar(
    array(
      'name' => esc_html__('Page Sidebar', 'katsucode'),
      'id' => 'sidebar-3',
      'before_widget' => '<div class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>'
    )
  );
  register_sidebar(
    array(
      'name' => esc_html__('Footer Sidebar', 'katsucode'),
      'id' => 'sidebar-4',
      'before_widget' => '<div class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>'
    )
  );
}
add_action('widgets_init', 'my_theme_widgets_init');
