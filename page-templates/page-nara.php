<?php

/**
 * Template Name: Nara LP Page
 * Description: 奈良の地元企業様向け特別サービスLP
 * Katsucode WordPress Theme Setup
 * @author Katsuhiro Kakoi <katsuhiro.k1215@katsucode.jp>
 * @link  https://katsucode.jp/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later *
 */
if (!defined('ABSPATH')) exit;

$nara_title = '奈良の地元企業様へ。想いが伝わるホームページを。';
$nara_description = '奈良県奈良市を拠点に、地元企業様・クライアント様向けの特別なホームページ制作サービスをご提供。対面での丁寧なヒアリングと、地域に根ざした柔軟なサポートで、あなたのビジネスの魅力を伝えます。';
$nara_image = get_template_directory_uri() . '/assets/img/nara/nara.jpg';
$nara_url = get_permalink();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php echo esc_attr($nara_description); ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="theme-color" content="#7FB69B" />
  <!-- OGP -->
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php echo esc_attr($nara_title); ?>" />
  <meta property="og:description" content="<?php echo esc_attr($nara_description); ?>" />
  <meta property="og:url" content="<?php echo esc_url($nara_url); ?>" />
  <meta property="og:site_name" content="katsucode" />
  <meta property="og:image" content="<?php echo esc_url($nara_image); ?>" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?php echo esc_attr($nara_title); ?>" />
  <meta name="twitter:description" content="<?php echo esc_attr($nara_description); ?>" />
  <meta name="twitter:image" content="<?php echo esc_url($nara_image); ?>" />
  <link rel="canonical" href="<?php echo esc_url($nara_url); ?>" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon.ico" />
  <?php wp_head(); ?>
</head>

<body <?php body_class('p-nara'); ?>>
  <?php wp_body_open(); ?>

  <div class="p-nara__container">

    <!-- Hero Section Start -->
    <section class="p-nara__hero">
      <div class="p-nara__hero-bg">
        <img src="<?php echo esc_url($nara_image); ?>" alt="奈良公園の鹿" />
      </div>
      <div class="p-nara__hero-leaf p-nara__hero-leaf--1" aria-hidden="true">🌿</div>
      <div class="p-nara__hero-leaf p-nara__hero-leaf--2" aria-hidden="true">🍃</div>

      <div class="p-nara__hero-content">
        <span class="p-nara__hero-label">Nara Local Project</span>
        <h1 class="p-nara__hero-title">
          <span class="js-nara-line">奈良から、</span>
          <span class="js-nara-line">想いが伝わる</span>
          <span class="js-nara-line">ホームページを。</span>
        </h1>
        <p class="p-nara__hero-subtitle">
          奈良県奈良市を拠点に活動する、地元企業様・クライアント様のための特別なWeb制作サービス。<br class="sp-only">
          顔の見える距離感で、あなたのビジネスの魅力をじっくり形にします。
        </p>
        <div class="p-nara__hero-cta-group">
          <a href="#contact" class="p-nara__hero-cta p-nara__hero-cta--primary">
            <span>無料相談してみる</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
          <a href="#about" class="p-nara__hero-cta p-nara__hero-cta--secondary">
            <span>サービスを見る</span>
          </a>
        </div>
      </div>

      <div class="p-nara__hero-scroll" aria-hidden="true">
        <span></span>
        <p>SCROLL</p>
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- Message Section Start -->
    <section id="about" class="p-nara__section">
      <div class="container">
        <div class="p-nara__section-header js-nara-reveal">
          <span class="p-nara__section-label">Message</span>
          <h2 class="p-nara__section-title">
            奈良だからこそ、<br class="sp-only">できることがあります。
          </h2>
        </div>

        <div class="p-nara__message">
          <p class="js-nara-reveal">
            はじめまして、かつコードです。私たちは奈良県奈良市を拠点に、Web制作・システム開発を行っています。
          </p>
          <p class="js-nara-reveal">
            遠方の制作会社とのやり取りに不安を感じたことはありませんか？画面越しだけでは伝えきれない想いや、地域ならではの空気感。<br>
            私たちは、実際にお会いしてお話をうかがうことを大切にしています。
          </p>
          <p class="js-nara-reveal">
            奈良の街を知っているからこそ提案できるデザインや、顔の見える距離感でのサポート。<br>
            地元だからこそできる、丁寧なものづくりをお約束します。
          </p>
        </div>
      </div>
    </section>
    <!-- Message Section End -->

    <!-- Problems Section Start -->
    <section class="p-nara__section p-nara__section--light">
      <div class="container">
        <div class="p-nara__section-header js-nara-reveal">
          <span class="p-nara__section-label">Concerns</span>
          <h2 class="p-nara__section-title">こんなお悩みありませんか？</h2>
        </div>

        <div class="p-nara__concerns">
          <div class="p-nara__concern-item js-nara-reveal">
            <div class="p-nara__concern-icon">🖥️</div>
            <h3 class="p-nara__concern-title">ホームページが古いまま</h3>
            <p class="p-nara__concern-text">数年前に作ったきりで更新できておらず、今の事業内容と合っていない。</p>
          </div>
          <div class="p-nara__concern-item js-nara-reveal">
            <div class="p-nara__concern-icon">🤔</div>
            <h3 class="p-nara__concern-title">何から相談すればいいかわからない</h3>
            <p class="p-nara__concern-text">WebやITに詳しい知り合いが身近におらず、そもそもの相談先に困っている。</p>
          </div>
          <div class="p-nara__concern-item js-nara-reveal">
            <div class="p-nara__concern-icon">📍</div>
            <h3 class="p-nara__concern-title">地元のお客様に届いていない</h3>
            <p class="p-nara__concern-text">奈良のお客様に向けて、地域に根ざした発信の仕方がわからない。</p>
          </div>
          <div class="p-nara__concern-item js-nara-reveal">
            <div class="p-nara__concern-icon">📞</div>
            <h3 class="p-nara__concern-title">遠方の制作会社は少し不安</h3>
            <p class="p-nara__concern-text">やり取りがオンラインのみで、対応の温度感がつかみにくい。</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Problems Section End -->

    <!-- Service Section Start -->
    <section class="p-nara__section">
      <div class="container">
        <div class="p-nara__section-header js-nara-reveal">
          <span class="p-nara__section-label">Service</span>
          <h2 class="p-nara__section-title">奈良の皆様へお届けする3つの安心</h2>
        </div>

        <div class="p-nara__features">
          <div class="p-nara__feature-card js-nara-reveal">
            <div class="p-nara__feature-icon">🤝</div>
            <h3 class="p-nara__feature-title">対面でじっくりヒアリング</h3>
            <p class="p-nara__feature-text">
              奈良市内・近郊であれば直接お伺いしてお話をお聞きします。画面越しでは伝わりにくい想いも、しっかり形にします。
            </p>
          </div>
          <div class="p-nara__feature-card js-nara-reveal">
            <div class="p-nara__feature-icon">🦌</div>
            <h3 class="p-nara__feature-title">地域に根ざした提案</h3>
            <p class="p-nara__feature-text">
              奈良の街や文化を知っているからこそできる、地元のお客様に伝わりやすいデザイン・言葉選びをご提案します。
            </p>
          </div>
          <div class="p-nara__feature-card js-nara-reveal">
            <div class="p-nara__feature-icon">🌱</div>
            <h3 class="p-nara__feature-title">公開後も気軽に相談できる</h3>
            <p class="p-nara__feature-text">
              近い距離感だからこそ、ちょっとした更新や困りごとも気軽にご相談いただけます。長くお付き合いできる関係を大切にしています。
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Service Section End -->

    <!-- CTA Section Start -->
    <section id="contact" class="p-nara__cta-section">
      <div class="container">
        <div class="p-nara__cta-leaf" aria-hidden="true">🍃</div>
        <h2 class="p-nara__cta-title js-nara-reveal">
          まずは、お気軽にご相談ください。
        </h2>
        <p class="p-nara__cta-description js-nara-reveal">
          奈良の地元企業様・クライアント様からのご相談をお待ちしております。<br>
          対面でのご相談も承っております。
        </p>
        <div class="p-nara__cta-buttons js-nara-reveal">
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-nara__cta-button p-nara__cta-button--primary">
            <span>無料相談・お問い合わせ</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="p-nara__cta-button p-nara__cta-button--secondary">
            <span>かつコードについて見る</span>
          </a>
        </div>
      </div>
    </section>
    <!-- CTA Section End -->

    <!-- Minimal Footer -->
    <footer class="p-nara__footer">
      <p>&copy; <?php echo date('Y'); ?> Katsucode. All Rights Reserved.</p>
    </footer>
  </div>

  <?php wp_footer(); ?>
</body>

</html>
