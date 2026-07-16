<?php

/**
 * Katsucode WordPress Theme Setup
 * 
 * @author Katsuhiro Kakoi <katsuhiro.k1215@katsucode.jp>
 * @link  https://katsucode.jp/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later * 
 */
if (!defined('ABSPATH')) exit;

// カスタマイザーに設定項目を追加
function katsucode_customize_register($wp_customize)
{
  // セクションを追加
  $wp_customize->add_section('front_page_settings', array(
    'title' => 'フロントページ設定',
    'priority' => 30,
    'description' => 'トップページのキャッチコピーなどを設定できます',
  ));

  // キャッチコピーの設定
  $wp_customize->add_setting('front_page_catch', array(
    'default' => '『身体の悩みは動いて改善』',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'refresh', // リアルタイムプレビュー
  ));

  $wp_customize->add_control('front_page_catch', array(
    'label' => 'キャッチコピー',
    'section' => 'front_page_settings',
    'type' => 'text',
    'description' => 'トップページのメインキャッチコピーを入力してください',
  ));

  // サブテキストの設定
  $wp_customize->add_setting('front_page_subtext', array(
    'default' => '整体<span>✕</span>ピラティス<span>✕</span>栄養を融合した<br>お薬、お医者さんに頼らない身体作りをサポートする整体院',
    'sanitize_callback' => 'wp_kses_post',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('front_page_subtext', array(
    'label' => 'サブテキスト',
    'section' => 'front_page_settings',
    'type' => 'textarea',
    'description' => 'HTMLタグも使用できます（<br>、<span>など）',
  ));

  // ヘッダーのリード文も追加
  $wp_customize->add_setting('header_lead', array(
    'default' => '姿勢・歪み改善✕慢性症状専門',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('header_lead', array(
    'label' => 'ヘッダーリード文',
    'section' => 'front_page_settings',
    'type' => 'text',
  ));
}
add_action('customize_register', 'katsucode_customize_register');