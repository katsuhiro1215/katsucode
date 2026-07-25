<?php

/**
 * Template Name: Recruit Page
 * Description: 採用情報ページテンプレート
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
        かつコードでは、一緒に働く仲間を募集しています。
      </p>
      <p>
        私たちは、ホームページ制作やシステム開発を通して、<br />
        デジタルの可能性を活かし、人と人とをやさしくつなぐ存在でありたいと考えています。
      </p>
      <p>
        そんな想いに共感していただける方と、一緒に働きたいと思っています。
      </p>
    </div>
  </div>
</section>
<!-- Intro Section End -->

<!-- Why Recruit Section Start -->
<section class="l-section p-recruit why">
  <div class="container">
    <div class="p-recruit__header">
      <span class="p-recruit__header-kicker" aria-hidden="true">Why Katsucode</span>
      <h2 class="p-recruit__header-title">かつコードで働くということ</h2>
      <p class="p-recruit__header-lead">
        少人数だからこそ得られる経験と裁量があります。
      </p>
    </div>

    <div class="p-recruit__feature-grid">
      <div class="p-recruit__feature-card">
        <span class="p-recruit__feature-number" aria-hidden="true">01</span>
        <h3>裁量を持って挑戦できる</h3>
        <p>企画から制作、公開後の運用まで一気通貫で関わることができます。「やってみたい」を形にしやすい環境です。</p>
      </div>
      <div class="p-recruit__feature-card">
        <span class="p-recruit__feature-number" aria-hidden="true">02</span>
        <h3>幅広い技術に触れられる</h3>
        <p>Webサイト制作からシステム開発、これから展開するSaaSプロダクトまで、様々な技術領域に携わることができます。</p>
      </div>
      <div class="p-recruit__feature-card">
        <span class="p-recruit__feature-number" aria-hidden="true">03</span>
        <h3>代表との距離が近い</h3>
        <p>少人数体制だからこそ、日々の相談や意見交換がしやすい環境です。風通しよく、率直に話せる関係を大切にしています。</p>
      </div>
      <div class="p-recruit__feature-card">
        <span class="p-recruit__feature-number" aria-hidden="true">04</span>
        <h3>柔軟な働き方</h3>
        <p>奈良を拠点に、業務内容やライフスタイルに応じた柔軟な働き方をご相談いただけます。</p>
      </div>
    </div>
  </div>
</section>
<!-- Why Recruit Section End -->

<!-- Message Section Start -->
<section class="l-section p-recruit message">
  <div class="container">
    <div class="p-recruit__header">
      <span class="p-recruit__header-kicker" aria-hidden="true">Message</span>
      <h2 class="p-recruit__header-title">大切にしていること</h2>
    </div>

    <div class="p-recruit__message">
      <p>
        私たちが大切にしているのは、"つくること"よりも"伝わること"です。<br>
        お客様の想いや価値を丁寧にくみ取り、必要としている人にきちんと届く形にすること。
      </p>
      <p>
        技術力はもちろん大切ですが、それ以上にお客様やチームと向き合う姿勢を大切にしています。<br>
        一緒に働く仲間にも、そんな想いに共感していただけたら嬉しいです。
      </p>
    </div>
  </div>
</section>
<!-- Message Section End -->

<!-- Recruit Status Section Start -->
<section class="l-section p-recruit status">
  <div class="container">
    <div class="p-recruit__header">
      <span class="p-recruit__header-kicker" aria-hidden="true">Recruit</span>
      <h2 class="p-recruit__header-title">募集要項</h2>
    </div>

    <div class="p-recruit__status-card">
      <p class="p-recruit__status-badge">現在、募集は行っておりません</p>
      <p class="p-recruit__status-text">
        タイミングにより募集を行っていない場合がございますが、<br class="sp-only">
        「かつコードで一緒に働きたい」と思っていただける方からのご連絡は、いつでも歓迎しております。<br>
        募集を再開する際は、ご連絡いただいた方に優先的にご案内いたします。
      </p>
      <a href="<?php echo esc_url(home_url('contact')); ?>" class="p-recruit__status-btn">
        <span>まずはお気軽にご連絡ください</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
      </a>
    </div>
  </div>
</section>
<!-- Recruit Status Section End -->

<?php get_footer(); ?>
