<?php

/**
 * Template Name: Greeting Page
 * Description: 代表挨拶・自己紹介・沿革を伝えるためのページテンプレート
 * Katsucode WordPress Theme Setup
 * @author Katsuhiro Kakoi <katsuhiro.k1215@katsucode.jp>
 * @link  https://katsucode.jp/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later *
 */
if (!defined('ABSPATH')) exit;
get_header();
?>

<!-- Intro Section Start -->
<section class="p-page__intro">
  <div class="container">
    <div class="section__body">
      <p>
        このページでは、かつコード代表の自己紹介と、これまでの歩みをご紹介します。
      </p>
    </div>
  </div>
</section>
<!-- Intro Section End -->

<!-- 自己紹介 Section Start -->
<section class="l-section p-greeting profile">
  <div class="container">
    <div class="p-company__header">
      <span class="p-company__header-kicker" aria-hidden="true">Greeting</span>
      <h3 class="p-company__header-title">はじめまして、<br class="sp-only">かつコードの栫（かこい）です。</h3>
    </div>
    <div class="section__body">
      <div class="p-greeting__profile-wrapper">
        <div class="p-greeting__profile-image">
          <img src="<?php echo esc_url(katsucode_page_image('greeting_profile_image', get_template_directory_uri() . '/assets/img/profile/sample01.jpg')); ?>" alt="代表 栫 勝宏">
        </div>
        <div class="p-greeting__profile-content">
          <p class="p-greeting__profile-name">
            栫 勝宏<span>Katsuhiro Kakoi</span>
          </p>
          <p><?php echo get_field('greeting_profile_description'); ?></p>
          <p class="p-greeting__profile-closing">
            小さなことでもお気軽にご相談ください。
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- 自己紹介 Section End -->

<!-- 沿革 Section Start -->
<section class="l-section p-greeting history">
  <div class="container">
    <div class="p-company__header">
      <span class="p-company__header-kicker" aria-hidden="true">History</span>
      <h3 class="p-company__header-title">これまでの歩み</h3>
      <p class="p-greeting__header-lead">
        かつコードがここまで歩んできた道のりをご紹介します。
      </p>
    </div>
    <div class="section__body">
      <div class="p-greeting__history-list">
        <div class="p-greeting__history-item">
          <span class="p-greeting__history-year" aria-hidden="true"><?php echo get_field('greeting_history_year_1'); ?></span>
          <figure>
            <?php if (get_field('greeting_history_image_1')) : ?>
              <img src="<?php echo esc_url(get_field('greeting_history_image_1')); ?>" alt="かつコード創業">
            <?php else : ?>
              <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/about/step1.jpg'); ?>" alt="かつコード創業">
            <?php endif; ?>
          </figure>
          <div class="p-greeting__history-info">
            <span class="p-greeting__history-date"><?php echo get_field('greeting_history_date_1'); ?></span>
            <h3><?php echo get_field('greeting_history_title_1'); ?></h3>
            <p>
              <?php echo get_field('greeting_history_description_1'); ?>
            </p>
          </div>
        </div>
        <div class="p-greeting__history-item">
          <span class="p-greeting__history-year" aria-hidden="true"><?php echo get_field('greeting_history_year_2'); ?></span>
          <figure>
            <?php if (get_field('greeting_history_image_2')) : ?>
              <img src="<?php echo esc_url(get_field('greeting_history_image_2')); ?>" alt="かつコード創業">
            <?php else : ?>
              <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/about/step1.jpg'); ?>" alt="かつコード創業">
            <?php endif; ?>
          </figure>
          <div class="p-greeting__history-info">
            <span class="p-greeting__history-date"><?php echo get_field('greeting_history_date_2'); ?></span>
            <h3><?php echo get_field('greeting_history_title_2'); ?></h3>
            <p>
              <?php echo get_field('greeting_history_description_2'); ?>
            </p>
          </div>
        </div>
        <div class="p-greeting__history-item">
          <span class="p-greeting__history-year" aria-hidden="true"><?php echo get_field('greeting_history_year_3'); ?></span>
          <figure>
            <?php if (get_field('greeting_history_image_3')) : ?>
              <img src="<?php echo esc_url(get_field('greeting_history_image_3')); ?>" alt="かつコード創業">
            <?php else : ?>
              <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/about/step1.jpg'); ?>" alt="かつコード創業">
            <?php endif; ?>
          </figure>
          <div class="p-greeting__history-info">
            <span class="p-greeting__history-date"><?php echo get_field('greeting_history_date_3'); ?></span>
            <h3><?php echo get_field('greeting_history_title_3'); ?></h3>
            <p>
              <?php echo get_field('greeting_history_description_3'); ?>
            </p>
          </div>
        </div>
        <div class="p-greeting__history-item">
          <span class="p-greeting__history-year" aria-hidden="true"><?php echo get_field('greeting_history_year_4'); ?></span>
          <figure>
            <?php if (get_field('greeting_history_image_4')) : ?>
              <img src="<?php echo esc_url(get_field('greeting_history_image_4')); ?>" alt="かつコード創業">
            <?php else : ?>
              <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/about/step1.jpg'); ?>" alt="かつコード創業">
            <?php endif; ?>
          </figure>
          <div class="p-greeting__history-info">
            <span class="p-greeting__history-date"><?php echo get_field('greeting_history_date_4'); ?></span>
            <h3><?php echo get_field('greeting_history_title_4'); ?></h3>
            <p>
              <?php echo get_field('greeting_history_description_4'); ?>
            </p>
          </div>
        </div>
        <div class="p-greeting__history-item">
          <span class="p-greeting__history-year" aria-hidden="true"><?php echo get_field('greeting_history_year_5'); ?></span>
          <figure>
            <?php if (get_field('greeting_history_image_5')) : ?>
              <img src="<?php echo esc_url(get_field('greeting_history_image_5')); ?>" alt="かつコード創業">
            <?php else : ?>
              <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/about/step1.jpg'); ?>" alt="かつコード創業">
            <?php endif; ?>
          </figure>
          <div class="p-greeting__history-info">
            <span class="p-greeting__history-date"><?php echo get_field('greeting_history_date_5'); ?></span>
            <h3><?php echo get_field('greeting_history_title_5'); ?></h3>
            <p>
              <?php echo get_field('greeting_history_description_5'); ?>
            </p>
          </div>
        </div>
        <div class="p-greeting__history-item">
          <span class="p-greeting__history-year" aria-hidden="true"><?php echo get_field('greeting_history_year_6'); ?></span>
          <figure>
            <?php if (get_field('greeting_history_image_6')) : ?>
              <img src="<?php echo esc_url(get_field('greeting_history_image_6')); ?>" alt="かつコード創業">
            <?php else : ?>
              <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/about/step1.jpg'); ?>" alt="かつコード創業">
            <?php endif; ?>
          </figure>
          <div class="p-greeting__history-info">
            <span class="p-greeting__history-date"><?php echo get_field('greeting_history_date_6'); ?></span>
            <h3><?php echo get_field('greeting_history_title_6'); ?></h3>
            <p>
              <?php echo get_field('greeting_history_description_6'); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- 沿革 Section End -->

<!-- お問い合わせボタン -->
<div class="btn__group">
  <a href="<?php echo esc_url(home_url('contact')); ?>" class="btn btn__primary">
    <span class="btn__primary--text">無料相談はこちら</span>
    <div class="btn__primary--arrow">
      <i class="fa-solid fa-arrow-right"></i>
    </div>
  </a>
</div>

<?php get_footer(); ?>