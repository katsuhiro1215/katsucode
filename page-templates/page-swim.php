<?php

/**
 * Template Name: Swim LP Page
 * Description: 水泳関係者様向け特別サービスLP
 * Katsucode WordPress Theme Setup
 * @author Katsuhiro Kakoi <katsuhiro.k1215@katsucode.jp>
 * @link  https://katsucode.jp/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later *
 */
if (!defined('ABSPATH')) exit;

$swim_title = 'スイミングスクール・水泳クラブ様へ。伝わるホームページを。';
$swim_description = 'スイミングスクール・水泳クラブ・コーチ様向けの特別なホームページ制作サービス。教室の雰囲気が伝わるビジュアルと、保護者様にも安心なスケジュール・料金情報の設計で、入会につながるサイトをつくります。';
$swim_image = get_template_directory_uri() . '/assets/img/swim/swimming.jpg';
$swim_url = get_permalink();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php echo esc_attr($swim_description); ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="theme-color" content="#2E9BD6" />
  <!-- OGP -->
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php echo esc_attr($swim_title); ?>" />
  <meta property="og:description" content="<?php echo esc_attr($swim_description); ?>" />
  <meta property="og:url" content="<?php echo esc_url($swim_url); ?>" />
  <meta property="og:site_name" content="katsucode" />
  <meta property="og:image" content="<?php echo esc_url($swim_image); ?>" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?php echo esc_attr($swim_title); ?>" />
  <meta name="twitter:description" content="<?php echo esc_attr($swim_description); ?>" />
  <meta name="twitter:image" content="<?php echo esc_url($swim_image); ?>" />
  <link rel="canonical" href="<?php echo esc_url($swim_url); ?>" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon.ico" />
  <?php wp_head(); ?>
</head>

<body <?php body_class('p-swim'); ?>>
  <?php wp_body_open(); ?>

  <div class="p-swim__container">

    <!-- Hero Section Start -->
    <section class="p-swim__hero">
      <div class="p-swim__hero-bg">
        <img src="<?php echo esc_url($swim_image); ?>" alt="スイミングプール" />
      </div>
      <div class="p-swim__hero-bubble p-swim__hero-bubble--1" aria-hidden="true"></div>
      <div class="p-swim__hero-bubble p-swim__hero-bubble--2" aria-hidden="true"></div>
      <div class="p-swim__hero-bubble p-swim__hero-bubble--3" aria-hidden="true"></div>

      <div class="p-swim__hero-content">
        <span class="p-swim__hero-label">Swim Project</span>
        <h1 class="p-swim__hero-title">
          <span class="js-swim-line">水しぶきの向こうに、</span>
          <span class="js-swim-line">伝わるホームページを。</span>
        </h1>
        <p class="p-swim__hero-subtitle">
          スイミングスクール・水泳クラブ・コーチ様のための特別なWeb制作サービス。<br class="sp-only">
          教室の雰囲気が伝わるサイトで、入会したくなる第一印象をつくります。
        </p>
        <div class="p-swim__hero-cta-group">
          <a href="#contact" class="p-swim__hero-cta p-swim__hero-cta--primary">
            <span>無料相談してみる</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
          <a href="#about" class="p-swim__hero-cta p-swim__hero-cta--secondary">
            <span>サービスを見る</span>
          </a>
        </div>
      </div>

      <!-- 波の区切り -->
      <div class="p-swim__wave" aria-hidden="true">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path class="p-swim__wave-path p-swim__wave-path--back" d="M0,64 C300,120 900,0 1200,64 L1200,120 L0,120 Z"></path>
          <path class="p-swim__wave-path p-swim__wave-path--front" d="M0,80 C300,20 900,110 1200,40 L1200,120 L0,120 Z"></path>
        </svg>
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- Message Section Start -->
    <section id="about" class="p-swim__section">
      <div class="container">
        <div class="p-swim__section-header js-swim-reveal">
          <span class="p-swim__section-label">Message</span>
          <h2 class="p-swim__section-title">
            水泳の魅力を、<br class="sp-only">そのままサイトに。
          </h2>
        </div>

        <div class="p-swim__message">
          <p class="js-swim-reveal">
            はじめまして、かつコードです。スイミングスクール・水泳クラブ様に向けたホームページ制作を行っています。
          </p>
          <p class="js-swim-reveal">
            「レッスンの雰囲気が伝わらない」「スケジュールが見づらいと言われる」「保護者様からの問い合わせ対応に追われている」。<br>
            水泳教室ならではのお悩みに寄り添い、伝わる・使いやすいホームページをご提案します。
          </p>
          <p class="js-swim-reveal">
            体験レッスンの申し込みが増える導線設計から、クラス・料金情報の整理まで、丁寧にサポートいたします。
          </p>
        </div>
      </div>
    </section>
    <!-- Message Section End -->

    <!-- Problems Section Start -->
    <section class="p-swim__section p-swim__section--light">
      <div class="container">
        <div class="p-swim__section-header js-swim-reveal">
          <span class="p-swim__section-label">Concerns</span>
          <h2 class="p-swim__section-title">こんなお悩みありませんか？</h2>
        </div>

        <div class="p-swim__concerns">
          <div class="p-swim__concern-item js-swim-reveal">
            <div class="p-swim__concern-icon">🏊</div>
            <h3 class="p-swim__concern-title">教室の雰囲気が伝わらない</h3>
            <p class="p-swim__concern-text">写真や文章だけでは、プールの様子やレッスンの魅力がうまく伝えられていない。</p>
          </div>
          <div class="p-swim__concern-item js-swim-reveal">
            <div class="p-swim__concern-icon">📅</div>
            <h3 class="p-swim__concern-title">スケジュールが見づらい</h3>
            <p class="p-swim__concern-text">クラスや時間割の更新が大変で、古い情報のまま掲載してしまっている。</p>
          </div>
          <div class="p-swim__concern-item js-swim-reveal">
            <div class="p-swim__concern-icon">👨‍👩‍👧</div>
            <h3 class="p-swim__concern-title">保護者様が知りたい情報が少ない</h3>
            <p class="p-swim__concern-text">料金・持ち物・送迎など、保護者様が安心できる情報が整理されていない。</p>
          </div>
          <div class="p-swim__concern-item js-swim-reveal">
            <div class="p-swim__concern-icon">📱</div>
            <h3 class="p-swim__concern-title">スマホで見づらい</h3>
            <p class="p-swim__concern-text">ほとんどの方がスマホで検索するのに、レイアウトが崩れて読みにくい。</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Problems Section End -->

    <!-- Service Section Start -->
    <section class="p-swim__section">
      <div class="container">
        <div class="p-swim__section-header js-swim-reveal">
          <span class="p-swim__section-label">Service</span>
          <h2 class="p-swim__section-title">水泳教室様へお届けする3つの安心</h2>
        </div>

        <div class="p-swim__features">
          <div class="p-swim__feature-card js-swim-reveal">
            <div class="p-swim__feature-icon">🌊</div>
            <h3 class="p-swim__feature-title">魅力が伝わるビジュアル設計</h3>
            <p class="p-swim__feature-text">
              水しぶきや躍動感が伝わる写真の見せ方で、レッスンの雰囲気をそのまま届けます。
            </p>
          </div>
          <div class="p-swim__feature-card js-swim-reveal">
            <div class="p-swim__feature-icon">🗓️</div>
            <h3 class="p-swim__feature-title">更新しやすいスケジュール設計</h3>
            <p class="p-swim__feature-text">
              クラス・時間割・イベント情報をご自身で簡単に更新できる仕組みをご用意します。
            </p>
          </div>
          <div class="p-swim__feature-card js-swim-reveal">
            <div class="p-swim__feature-icon">💙</div>
            <h3 class="p-swim__feature-title">保護者様にも安心な情報設計</h3>
            <p class="p-swim__feature-text">
              料金・持ち物・体験レッスンの流れなど、知りたい情報にすぐたどり着けるサイト構成にします。
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Service Section End -->

    <!-- CTA Section Start -->
    <section id="contact" class="p-swim__cta-section">
      <div class="p-swim__wave p-swim__wave--top" aria-hidden="true">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path class="p-swim__wave-path p-swim__wave-path--light" d="M0,40 C300,110 900,10 1200,60 L1200,0 L0,0 Z"></path>
        </svg>
      </div>
      <div class="container">
        <h2 class="p-swim__cta-title js-swim-reveal">
          まずは、お気軽にご相談ください。
        </h2>
        <p class="p-swim__cta-description js-swim-reveal">
          スイミングスクール・水泳クラブ様からのご相談をお待ちしております。<br>
          体験レッスンにつながるサイトづくりを一緒に。
        </p>
        <div class="p-swim__cta-buttons js-swim-reveal">
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-swim__cta-button p-swim__cta-button--primary">
            <span>無料相談・お問い合わせ</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="p-swim__cta-button p-swim__cta-button--secondary">
            <span>かつコードについて見る</span>
          </a>
        </div>
      </div>
    </section>
    <!-- CTA Section End -->

    <!-- Minimal Footer -->
    <footer class="p-swim__footer">
      <p>&copy; <?php echo date('Y'); ?> Katsucode. All Rights Reserved.</p>
    </footer>
  </div>

  <?php wp_footer(); ?>
</body>

</html>
