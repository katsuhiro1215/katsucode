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
          <p>
            はじめまして。奈良県奈良市を拠点に、Web制作・システム開発を行っている「かつコード」代表の栫（かこい）です。
          </p>
          <p>
            これまでシステムエンジニアとして、様々な業種のお客様のホームページ制作や業務システムの開発に携わってきました。<br>
            その中で強く感じたのは、「良いサービスや想いがあっても、それがうまく伝わっていない」ケースがとても多いということです。
          </p>
          <p>
            どれだけ良いものを作っても、伝わらなければ意味がありません。<br>
            だからこそ私は、技術力だけでなく"伝わる設計"を大切にした制作を心がけています。
          </p>
          <p>
            2022年5月、かつコードとして独立し、現在はアシスタント2名とともに、少人数だからこそできる丁寧な対応を強みに活動しています。<br>
            専門的なことがわからない方でも安心してご相談いただけるよう、できるだけわかりやすく、丁寧にサポートいたします。
          </p>
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
          <span class="p-greeting__history-year" aria-hidden="true">2022</span>
          <figure>
            <img src="<?php echo esc_url(katsucode_page_image('greeting_history_image_1', get_template_directory_uri() . '/assets/img/about/step1.jpg')); ?>" alt="かつコード創業">
          </figure>
          <div class="p-greeting__history-info">
            <span class="p-greeting__history-date">2022年5月</span>
            <h3>かつコード創業</h3>
            <p>
              「デジタルの可能性を活かし、人と人とをやさしくつなぐ存在でありたい」という想いのもと、奈良県奈良市にてかつコードを設立。Webサイト制作を中心に活動をスタートしました。
            </p>
          </div>
        </div>
        <div class="p-greeting__history-item">
          <span class="p-greeting__history-year" aria-hidden="true">2023</span>
          <figure>
            <img src="<?php echo esc_url(katsucode_page_image('greeting_history_image_2', get_template_directory_uri() . '/assets/img/about/step2.jpg')); ?>" alt="事業領域の拡大">
          </figure>
          <div class="p-greeting__history-info">
            <span class="p-greeting__history-date">2023年</span>
            <h3>事業領域の拡大</h3>
            <p>
              コーポレートサイトやLP制作に加え、業務システムの受託開発を開始。Webサイトだけでなく、お客様の業務課題そのものに向き合う機会が増えていきました。
            </p>
          </div>
        </div>
        <div class="p-greeting__history-item">
          <span class="p-greeting__history-year" aria-hidden="true">2024</span>
          <figure>
            <img src="<?php echo esc_url(katsucode_page_image('greeting_history_image_3', get_template_directory_uri() . '/assets/img/about/step3.jpg')); ?>" alt="体制の強化">
          </figure>
          <div class="p-greeting__history-info">
            <span class="p-greeting__history-date">2024年</span>
            <h3>体制の強化</h3>
            <p>
              アシスタント2名を迎え、少人数ながらも一貫したサポート体制を構築。ヒアリングから制作、公開後の運用まで、担当が変わることのない安心感を大切にしています。
            </p>
          </div>
        </div>
        <div class="p-greeting__history-item">
          <span class="p-greeting__history-year" aria-hidden="true">2026</span>
          <figure>
            <img src="<?php echo esc_url(katsucode_page_image('greeting_history_image_4', get_template_directory_uri() . '/assets/img/about/step1.jpg')); ?>" alt="新たな挑戦">
          </figure>
          <div class="p-greeting__history-info">
            <span class="p-greeting__history-date">2026年</span>
            <h3>新たな挑戦へ</h3>
            <p>
              ホームページとシステムが融合したオールインワンSaaS「Spra」の開発、奈良の地元企業様・水泳関係者様向けの特化サービスなど、これまで培った技術と経験を活かした新しい取り組みを進めています。
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
