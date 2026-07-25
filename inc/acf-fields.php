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
 * ACFオプションページ: 制作の流れ画像
 * 「制作の流れ」のSTEP1〜8画像は、page-flow.php・各サービス詳細ページ(page-web-production.php等)で
 * 共通して使い回されているため、1箇所（オプションページ）で管理する。
 */
if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title' => '制作の流れ画像設定',
    'menu_title' => '制作の流れ画像',
    'menu_slug'  => 'katsucode-flow-images',
    'capability' => 'edit_theme_options',
    'icon_url'   => 'dashicons-images-alt2',
    'position'   => 80,
  ));
}

if (function_exists('acf_add_local_field_group')) {
  $katsucode_flow_image_fields = array();

  for ($i = 1; $i <= 8; $i++) {
    $katsucode_flow_image_fields[] = array(
      'key'           => 'field_katsucode_flow_step_' . $i,
      'label'         => 'STEP ' . $i . ' 画像',
      'name'          => 'flow_step_' . $i,
      'type'          => 'image',
      'return_format' => 'url',
      'preview_size'  => 'medium',
      'instructions'  => '未設定の場合はデフォルト画像（assets/img/flow/step' . $i . '.jpg）が表示されます。',
    );
  }

  acf_add_local_field_group(array(
    'key'      => 'group_katsucode_flow_images',
    'title'    => '制作の流れ画像',
    'fields'   => $katsucode_flow_image_fields,
    'location' => array(
      array(
        array(
          'param'    => 'options_page',
          'operator' => '==',
          'value'    => 'katsucode-flow-images',
        ),
      ),
    ),
  ));
}

/**
 * ACFフィールドグループ: Aboutページ（page-about.php）の画像
 */
if (function_exists('acf_add_local_field_group')) {
  acf_add_local_field_group(array(
    'key'    => 'group_katsucode_about_images',
    'title'  => 'Aboutページ画像',
    'fields' => array(
      array(
        'key'   => 'field_katsucode_about_bg_why',
        'label' => 'WHYセクション 背景画像',
        'name'  => 'about_bg_why',
        'type'  => 'image',
        'return_format' => 'url',
        'preview_size'  => 'medium',
        'instructions'  => '未設定の場合はデフォルト画像（assets/img/about/step1.jpg）が表示されます。',
      ),
      array(
        'key'   => 'field_katsucode_about_bg_what',
        'label' => 'WHATセクション 背景画像',
        'name'  => 'about_bg_what',
        'type'  => 'image',
        'return_format' => 'url',
        'preview_size'  => 'medium',
        'instructions'  => '未設定の場合はデフォルト画像（assets/img/about/step2.jpg）が表示されます。',
      ),
      array(
        'key'   => 'field_katsucode_about_bg_how',
        'label' => 'HOWセクション 背景画像',
        'name'  => 'about_bg_how',
        'type'  => 'image',
        'return_format' => 'url',
        'preview_size'  => 'medium',
        'instructions'  => '未設定の場合はデフォルト画像（assets/img/about/step3.jpg）が表示されます。',
      ),
      array(
        'key'   => 'field_katsucode_about_how_image_1',
        'label' => '「丁寧に聞くこと」画像',
        'name'  => 'about_how_image_1',
        'type'  => 'image',
        'return_format' => 'url',
        'preview_size'  => 'medium',
        'instructions'  => '未設定の場合はデフォルト画像（assets/img/about/step1.jpg）が表示されます。',
      ),
      array(
        'key'   => 'field_katsucode_about_how_image_2',
        'label' => '「シンプルでわかりやすく」画像',
        'name'  => 'about_how_image_2',
        'type'  => 'image',
        'return_format' => 'url',
        'preview_size'  => 'medium',
        'instructions'  => '未設定の場合はデフォルト画像（assets/img/about/step2.jpg）が表示されます。',
      ),
      array(
        'key'   => 'field_katsucode_about_how_image_3',
        'label' => '「長く使える設計」画像',
        'name'  => 'about_how_image_3',
        'type'  => 'image',
        'return_format' => 'url',
        'preview_size'  => 'medium',
        'instructions'  => '未設定の場合はデフォルト画像（assets/img/about/step3.jpg）が表示されます。',
      ),
      array(
        'key'   => 'field_katsucode_about_how_image_4',
        'label' => '「継続して支えること」画像',
        'name'  => 'about_how_image_4',
        'type'  => 'image',
        'return_format' => 'url',
        'preview_size'  => 'medium',
        'instructions'  => '未設定の場合はデフォルト画像（assets/img/about/step1.jpg）が表示されます。',
      ),
      array(
        'key'   => 'field_katsucode_about_trust_image',
        'label' => 'TRUSTセクション画像',
        'name'  => 'about_trust_image',
        'type'  => 'image',
        'return_format' => 'url',
        'preview_size'  => 'medium',
        'instructions'  => '未設定の場合はデフォルト画像（assets/img/about/step1.jpg）が表示されます。',
      ),
    ),
    'location' => array(
      array(
        array(
          'param'    => 'page_template',
          'operator' => '==',
          'value'    => 'page-templates/page-about.php',
        ),
      ),
    ),
  ));
}

/**
 * ACFフィールドグループ: Companyページ（page-company.php）の画像
 */
if (function_exists('acf_add_local_field_group')) {
  acf_add_local_field_group(array(
    'key'    => 'group_katsucode_company_images',
    'title'  => 'Companyページ画像',
    'fields' => array(
      array(
        'key'   => 'field_katsucode_company_concept_image_1',
        'label' => '「どんなお役に立てるのか」画像',
        'name'  => 'company_concept_image_1',
        'type'  => 'image',
        'return_format' => 'url',
        'preview_size'  => 'medium',
        'instructions'  => '未設定の場合はデフォルト画像（assets/img/about/step1.jpg）が表示されます。',
      ),
      array(
        'key'   => 'field_katsucode_company_concept_image_2',
        'label' => '「質を優先しています」画像',
        'name'  => 'company_concept_image_2',
        'type'  => 'image',
        'return_format' => 'url',
        'preview_size'  => 'medium',
        'instructions'  => '未設定の場合はデフォルト画像（assets/img/about/step2.jpg）が表示されます。',
      ),
      array(
        'key'   => 'field_katsucode_company_concept_image_3',
        'label' => '「成長させること」画像',
        'name'  => 'company_concept_image_3',
        'type'  => 'image',
        'return_format' => 'url',
        'preview_size'  => 'medium',
        'instructions'  => '未設定の場合はデフォルト画像（assets/img/about/step3.jpg）が表示されます。',
      ),
      array(
        'key'   => 'field_katsucode_company_profile_image',
        'label' => 'プロフィール写真',
        'name'  => 'company_profile_image',
        'type'  => 'image',
        'return_format' => 'url',
        'preview_size'  => 'medium',
        'instructions'  => '未設定の場合はデフォルト画像（assets/img/profile/sample01.jpg）が表示されます。',
      ),
      array(
        'key'   => 'field_katsucode_company_profile_image_hover',
        'label' => 'プロフィール写真（ホバー時）',
        'name'  => 'company_profile_image_hover',
        'type'  => 'image',
        'return_format' => 'url',
        'preview_size'  => 'medium',
        'instructions'  => '未設定の場合はデフォルト画像（assets/img/profile/sample02.jpg）が表示されます。',
      ),
    ),
    'location' => array(
      array(
        array(
          'param'    => 'page_template',
          'operator' => '==',
          'value'    => 'page-templates/page-company.php',
        ),
      ),
    ),
  ));
}
