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
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php if (is_front_page()): ?>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
  <?php else : ?>
    <meta name="description" content="<?php echo esc_attr(get_the_excerpt() ?: get_bloginfo('description')); ?>" />
  <?php endif; ?>
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="index, follow" />
  <meta name="theme-color" content="#ffffff" />
  <meta name="msapplication-TitleImage" content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/no-image.jpg" />
  <meta name="msapplication-TitleColor" content="#573312" />
  <!-- OPG Start -->
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php bloginfo('name'); ?>" />
  <meta property="og:description" content="<?php bloginfo('description'); ?>" />
  <meta property="og:url" content="https://katsucode.jp/" />
  <meta property="og:site_name" content="katsucode" />
  <meta property="og:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/no-image.jpg" />
  <meta property="og:image:secure_url" content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/no-image.jpg" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta name="facebook:card" content="#" />
  <meta name="twitter:card" content="#" />
  <!-- OGP End -->
  <!-- URLの正規化 -->
  <link rel="canonical" href="https://katsucode.jp/" />
  <!-- favicon設定 -->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon.ico" />
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/android-chrome-192x192.png" />
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