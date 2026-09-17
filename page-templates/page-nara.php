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
          30万円から。進捗が見える。いつでも相談できる。<br>
          奈良県奈良市を拠点に、地元企業様・クライアント様のための特別なWeb制作サービス。<br class="sp-only">
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

    <!-- Transparency Section Start -->
    <section class="p-nara__section p-nara__transparency">
      <div class="container">
        <div class="p-nara__section-header js-nara-reveal">
          <span class="p-nara__section-label">Transparency</span>
          <h2 class="p-nara__section-title">制作の進捗、すべて見える。<br class="sp-only">不安をゼロに。</h2>
        </div>

        <div class="p-nara__transparency-grid">
          <div class="p-nara__transparency-card js-nara-reveal">
            <div class="p-nara__transparency-icon">📊</div>
            <h3 class="p-nara__transparency-title">見積〜請求まで<br>すべてオンライン</h3>
            <p class="p-nara__transparency-text">
              自社システム「Spra」で、見積もり・契約・進捗・請求・領収証まで一元管理。いつでもご確認いただけます。
            </p>
          </div>
          <div class="p-nara__transparency-card js-nara-reveal">
            <div class="p-nara__transparency-icon">🔍</div>
            <h3 class="p-nara__transparency-title">制作状況が<br>リアルタイムで分かる</h3>
            <p class="p-nara__transparency-text">
              「今どこまで進んでいるの？」「いつ完成するの？」そんな不安を解消。進捗状況を常に可視化しています。
            </p>
          </div>
          <div class="p-nara__transparency-card js-nara-reveal">
            <div class="p-nara__transparency-icon">💬</div>
            <h3 class="p-nara__transparency-title">修正依頼も<br>履歴で管理</h3>
            <p class="p-nara__transparency-text">
              メールで散在しがちな修正依頼も、システム上で一元管理。「あれ、どこで言ったっけ？」がなくなります。
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Transparency Section End -->

    <!-- Results Section Start -->
    <section class="p-nara__section p-nara__section--light p-nara__results">
      <div class="container">
        <div class="p-nara__section-header js-nara-reveal">
          <span class="p-nara__section-label">Results</span>
          <h2 class="p-nara__section-title">奈良での実績。<br class="sp-only">Web制作からシステム開発まで。</h2>
        </div>

        <div class="p-nara__results-grid">
          <div class="p-nara__results-category js-nara-reveal">
            <h3>🌐 Web制作</h3>
            <ul>
              <li>整骨院・クリニック向けサイト</li>
              <li>農家向けECサイト</li>
              <li>小売店・サービス業向けポータル</li>
              <li>飲食店の予約機能付きサイト</li>
            </ul>
          </div>
          <div class="p-nara__results-category js-nara-reveal">
            <h3>⚙️ システム開発</h3>
            <ul>
              <li>体操教室の業務管理システム</li>
              <li>ECプラットフォーム改修</li>
              <li>自治体向け中継サーバー構築</li>
              <li>コミックアプリのバックエンド実装</li>
            </ul>
          </div>
        </div>

        <p style="text-align: center; margin-top: 32px; font-size: 1.4rem; color: #666;">
          奈良の事業規模なら、Web制作から本格的なシステム開発まで、<br class="sp-only">ワンストップで対応できます。
        </p>
      </div>
    </section>
    <!-- Results Section End -->

    <!-- Pricing Section Start -->
    <section class="p-nara__section p-nara__pricing">
      <div class="container">
        <div class="p-nara__section-header js-nara-reveal">
          <span class="p-nara__section-label">Pricing</span>
          <h2 class="p-nara__section-title">30万円から。<br class="sp-only">わかりやすい料金プラン。</h2>
        </div>

        <div class="p-nara__pricing-grid">
          <div class="p-nara__pricing-card js-nara-reveal">
            <div class="p-nara__pricing-label">ベーシック</div>
            <div class="p-nara__pricing-price">
              <span class="price-from">30万円〜</span>
              <span class="price-suffix">（税込）</span>
            </div>
            <ul class="p-nara__pricing-features">
              <li>5ページまでの小規模サイト</li>
              <li>レスポンシブ対応</li>
              <li>お問い合わせフォーム</li>
              <li>3ヶ月間の無料サポート</li>
            </ul>
          </div>

          <div class="p-nara__pricing-card p-nara__pricing-card--featured js-nara-reveal">
            <div class="p-nara__pricing-badge">人気</div>
            <div class="p-nara__pricing-label">スタンダード</div>
            <div class="p-nara__pricing-price">
              <span class="price-from">60万円〜</span>
              <span class="price-suffix">（税込）</span>
            </div>
            <ul class="p-nara__pricing-features">
              <li>10ページまでの中規模サイト</li>
              <li>WordPress導入</li>
              <li>SEO基本対策</li>
              <li>6ヶ月間の無料サポート</li>
            </ul>
          </div>

          <div class="p-nara__pricing-card js-nara-reveal">
            <div class="p-nara__pricing-label">プレミアム</div>
            <div class="p-nara__pricing-price">
              <span class="price-from">120万円〜</span>
              <span class="price-suffix">（税込）</span>
            </div>
            <ul class="p-nara__pricing-features">
              <li>大規模サイト・EC構築</li>
              <li>カスタム機能開発</li>
              <li>システム連携</li>
              <li>1年間の無料サポート</li>
            </ul>
          </div>
        </div>

        <p class="p-nara__pricing-note js-nara-reveal">
          ※システム開発は別途お見積もり（規模により100万円〜）<br>
          詳細な料金は <a href="<?php echo esc_url(home_url('/service')); ?>" style="color: #2C3E50; font-weight: 700; text-decoration: underline;">サービスページ</a> をご覧ください。
        </p>
      </div>
    </section>
    <!-- Pricing Section End -->

    <!-- Support Section Start -->
    <section class="p-nara__section p-nara__support">
      <div class="container">
        <div class="p-nara__section-header js-nara-reveal">
          <span class="p-nara__section-label">Support</span>
          <h2 class="p-nara__section-title">公開後も安心。<br class="sp-only">月6,600円からの保守プラン。</h2>
        </div>

        <div class="p-nara__support-grid">
          <div class="p-nara__support-card js-nara-reveal">
            <h3>ライト</h3>
            <div class="p-nara__support-price">
              月額 <strong>6,600円</strong>（税込）
            </div>
            <ul>
              <li>WordPress / PHP更新</li>
              <li>プラグイン更新</li>
              <li>セキュリティ監視</li>
            </ul>
          </div>

          <div class="p-nara__support-card p-nara__support-card--featured js-nara-reveal">
            <div class="p-nara__support-badge">人気</div>
            <h3>スタンダード</h3>
            <div class="p-nara__support-price">
              月額 <strong>11,000円</strong>（税込）
            </div>
            <ul>
              <li>上記すべて</li>
              <li>テキスト・画像の軽微な変更</li>
              <li>月1回までの簡易修正</li>
            </ul>
          </div>

          <div class="p-nara__support-card js-nara-reveal">
            <h3>プレミアム</h3>
            <div class="p-nara__support-price">
              月額 <strong>22,000円</strong>（税込）
            </div>
            <ul>
              <li>上記すべて</li>
              <li>月3回までの修正対応</li>
              <li>緊急時の優先対応</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Support Section End -->

    <!-- Service Section Start -->
    <section class="p-nara__section p-nara__section--light p-nara__strengths">
      <div class="container">
        <div class="p-nara__section-header js-nara-reveal">
          <span class="p-nara__section-label">Strengths</span>
          <h2 class="p-nara__section-title">奈良だからこそ、できること。</h2>
        </div>

        <div class="p-nara__strengths-grid">
          <div class="p-nara__strength-card js-nara-reveal">
            <div class="p-nara__strength-icon">🚀</div>
            <h3>即日面談も可能</h3>
            <p>
              奈良市内・近郊であれば、当日中にお伺いすることも可能です。遠方の制作会社では難しい、スピード感のある対応を実現します。
            </p>
          </div>
          <div class="p-nara__strength-card js-nara-reveal">
            <div class="p-nara__strength-icon">🔧</div>
            <h3>Web制作から<br>システム開発まで</h3>
            <p>
              小規模なホームページから、業務システム・ECサイトまで幅広く対応。奈良の事業規模に合わせた、ちょうどいいご提案をいたします。
            </p>
          </div>
          <div class="p-nara__strength-card js-nara-reveal">
            <div class="p-nara__strength-icon">💬</div>
            <h3>柔軟な対応・<br>気軽に相談</h3>
            <p>
              「ちょっと直したい」「こんなことできる？」といった小さな相談も、地域密着だからこそ気軽にご連絡いただけます。
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Service Section End -->

    <!-- FAQ Section Start -->
    <section class="p-nara__section p-nara__faq">
      <div class="container">
        <div class="p-nara__section-header js-nara-reveal">
          <span class="p-nara__section-label">FAQ</span>
          <h2 class="p-nara__section-title">よくあるご質問</h2>
        </div>

        <div class="p-nara__faq-list">
          <div class="p-nara__faq-item js-nara-reveal">
            <h3 class="p-nara__faq-question">見積もりは無料ですか？</h3>
            <p class="p-nara__faq-answer">
              はい、無料です。お電話またはお問い合わせフォームからご相談ください。ヒアリング後、自社システムで見積もりをご確認いただけます。
            </p>
          </div>

          <div class="p-nara__faq-item js-nara-reveal">
            <h3 class="p-nara__faq-question">制作期間はどれくらいですか？</h3>
            <p class="p-nara__faq-answer">
              規模により異なりますが、小規模サイトで1〜2ヶ月、中規模サイトで2〜3ヶ月が目安です。進捗は常にシステム上で確認できます。
            </p>
          </div>

          <div class="p-nara__faq-item js-nara-reveal">
            <h3 class="p-nara__faq-question">途中で連絡が取れなくなることはありませんか？</h3>
            <p class="p-nara__faq-answer">
              ご安心ください。自社システムで進捗を常に可視化しており、定期的なご報告も行っています。奈良という地域密着だからこそ、顔の見える関係を大切にしています。
            </p>
          </div>

          <div class="p-nara__faq-item js-nara-reveal">
            <h3 class="p-nara__faq-question">SNSで見る格安サービスとの違いは何ですか？</h3>
            <p class="p-nara__faq-answer">
              テンプレート販売ではなく、事細かなヒアリングであなたのビジネスを理解し、成長を支援するパートナーとしての価値をご提供しています。完成後も柔軟にサポートいたします。
            </p>
          </div>

          <div class="p-nara__faq-item js-nara-reveal">
            <h3 class="p-nara__faq-question">事務所の住所を教えてください。</h3>
            <p class="p-nara__faq-answer">
              自宅兼オフィスのため、セキュリティ上、契約後に正式な住所をお伝えしております。奈良市内の奈良公園近郊です。ご面談の際は、お客様の事業所または最寄りのカフェ等でお会いすることも可能です。
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- FAQ Section End -->

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

    <!-- Location Note Start -->
    <div class="container">
      <div class="p-nara__location-note">
        <p>
          <strong>📍 事務所について</strong><br>
          セキュリティ上、詳細な住所は契約後にお伝えしております（奈良市内・奈良公園近郊）。<br>
          ご面談は、お客様の事業所またはご指定の場所でも承っております。
        </p>
      </div>
    </div>
    <!-- Location Note End -->

    <!-- Minimal Footer -->
    <footer class="p-nara__footer">
      <p>&copy; <?php echo date('Y'); ?> Katsucode. All Rights Reserved.</p>
    </footer>
  </div>

  <?php wp_footer(); ?>
</body>

</html>