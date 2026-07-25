<?php

/**
 * Katsucode WordPress Theme Setup
 * 
 * @author Katsuhiro Kakoi <katsuhiro.k1215@katsucode.jp>
 * @link  https://katsucode.jp/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later * 
 */
if (!defined('ABSPATH')) exit; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php
  $seo_description = is_front_page()
    ? get_bloginfo('description')
    : (get_the_excerpt() ?: get_bloginfo('description'));
  $seo_title = is_front_page() ? get_bloginfo('name') : wp_get_document_title();
  $canonical_url = get_canonical_url();
  $og_image = (is_singular() && has_post_thumbnail())
    ? get_the_post_thumbnail_url(get_the_ID(), 'large')
    : get_template_directory_uri() . '/assets/img/noimage.jpg';
  ?>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php echo esc_attr($seo_description); ?>" />
  <meta name="format-detection" content="telephone=no" />
  <?php if (is_search() || is_404()) : ?>
    <meta name="robots" content="noindex, follow" />
  <?php else : ?>
    <meta name="robots" content="index, follow" />
  <?php endif; ?>
  <meta name="theme-color" content="#ffffff" />
  <meta name="msapplication-TitleImage" content="<?php echo esc_url($og_image); ?>" />
  <meta name="msapplication-TitleColor" content="#573312" />
  <!-- OGP Start -->
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:type" content="<?php echo is_front_page() ? 'website' : 'article'; ?>" />
  <meta property="og:title" content="<?php echo esc_attr($seo_title); ?>" />
  <meta property="og:description" content="<?php echo esc_attr($seo_description); ?>" />
  <meta property="og:url" content="<?php echo esc_url($canonical_url); ?>" />
  <meta property="og:site_name" content="katsucode" />
  <meta property="og:image" content="<?php echo esc_url($og_image); ?>" />
  <meta property="og:image:secure_url" content="<?php echo esc_url($og_image); ?>" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?php echo esc_attr($seo_title); ?>" />
  <meta name="twitter:description" content="<?php echo esc_attr($seo_description); ?>" />
  <meta name="twitter:image" content="<?php echo esc_url($og_image); ?>" />
  <!-- OGP End -->
  <!-- URLの正規化 -->
  <link rel="canonical" href="<?php echo esc_url($canonical_url); ?>" />
  <!-- favicon設定 -->
  <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon.ico">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="48x48" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-48x48.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon-180x180.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/site.webmanifest">

  <!-- Adobe Font -->
  <link rel="stylesheet" href="https://use.typekit.net/lpg7pom.css">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- Screen Transition -->
  <div class="transition transition-2 is-active"></div>

  <div class="l-wrapper">
    <!-- Header Start -->
    <header class="l-header">
      <div class="l-header__wrapper">
        <h1 class="l-header__logo">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="ロゴ" />
            <span>Katsucode</span>
          </a>
        </h1>
        <!-- Header Navigation Start -->
        <?php get_template_part('template-parts/nav/header-nav'); ?>
        <!-- Header Navigation End -->

        <button id="menu-toggle" class="menu-toggle">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </button>

        <!-- Drawer Navigation Start -->
        <?php get_template_part('template-parts/nav/drawer-nav'); ?>
        <!-- Drawer Navigation End -->
      </div>
    </header>
    <!-- Main Start -->
    <main class="l-main">
      <?php if (is_front_page()) : ?>

        <div id="p-index">
          <!-- Visual Start -->
          <?php get_template_part('template-parts/header/hero-front') ?>
          <!-- Visual End -->

        <?php else : ?>

          <div class="p-page">
            <!-- Visual Start -->
            <div class="p-page__visual">
              <h2 class="p-page__title">
                <div class="p-page__title-ja">
                  <?php echo get_main_title(); ?>
                </div>
                <div class="p-page__title-en">
                  <!-- <span>英字</span> ACF -->
                </div>
              </h2>
              <div class="p-page__thumbnail">

                <?php if (has_post_thumbnail($post->ID)) : ?>
                  <?php echo get_the_post_thumbnail($post->ID); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.jpg" alt="">
                <?php endif; ?>

              </div>
            </div>
            <!-- Visual End -->

          <?php endif; ?>

          <!-- Global Navigation Start -->
          <nav class="l-global-nav">
            <?php
            wp_nav_menu(
              array(
                'theme_location' => 'global-nav',
                'container' => false,
              )
            );
            ?>
          </nav>
          <!-- Global Navigation End -->