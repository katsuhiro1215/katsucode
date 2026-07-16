<?php

/**
 * Template Name: Service Page
 * Description: サービス一覧ページテンプレート
 * Katsucode WordPress Theme Setup
 * @author Katsuhiro Kakoi <katsuhiro.k1215@katsucode.jp>
 * @link  https://katsucode.jp/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later * 
 */
if (!defined('ABSPATH')) exit;
get_header();
?>

<!-- Intro Section Start -->
<section class="l-section p-page__intro">
  <div class="container">
    <div class="section__header">
      <p class="section__header--lead">かつコードでは、お客様のビジネス課題に合わせた最適なWeb戦略をご提案します。<br>制作から運用・保守まで、一貫してサポートいたします。</p>
    </div>
    <div class="section__body">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/step1.jpg" alt="">
    </div>
  </div>
</section>
<!-- Intro Section End -->

<!-- Service List Section Start -->
<section class="l-section p-service__list">
  <div class="section__header">
    <h2 class="section__header--title">
      <div class="section__header--title-mark">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
      </div>
      <span class="section__header--title-en">Our Services</span>
      <span class="section__header--title-ja">サービス一覧</span>
    </h2>
    <div class="p-service__service">Service</div>
  </div>
  <div class="section__body">
    <div class="container">
      <!-- タブナビゲーション -->
      <div class="p-service__list--nav">
        <button class="p-service__list--tab is-active" data-target="web-production">
          <span class="p-service__list--tab-number">01</span>
          <span class="p-service__list--tab-title">Web制作</span>
        </button>
        <button class="p-service__list--tab" data-target="lp">
          <span class="p-service__list--tab-number">02</span>
          <span class="p-service__list--tab-title">LP制作</span>
        </button>
        <button class="p-service__list--tab" data-target="ec-site">
          <span class="p-service__list--tab-number">03</span>
          <span class="p-service__list--tab-title">ECサイト制作</span>
        </button>
        <button class="p-service__list--tab" data-target="system">
          <span class="p-service__list--tab-number">04</span>
          <span class="p-service__list--tab-title">システム開発</span>
        </button>
        <button class="p-service__list--tab" data-target="app">
          <span class="p-service__list--tab-number">05</span>
          <span class="p-service__list--tab-title">アプリ開発</span>
        </button>
        <button class="p-service__list--tab" data-target="spra">
          <span class="p-service__list--tab-number">06</span>
          <span class="p-service__list--tab-title">Spra SaaS</span>
          <span class="p-service__list--tab-badge">NEW</span>
        </button>
      </div>
    </div>
    <!-- コンテンツエリア -->
    <div class="p-service__list--contents">

      <!-- Web制作 -->
      <article class="p-service__list--item is-active" id="web-production" data-order="odd">
        <div class="p-service__list--image">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.jpg" alt="">
          <?php endif; ?>
        </div>
        <div class="p-service__list--content">
          <div class="p-service__list--content-inner">
            <h3 class="p-service__list--title">
              <span class="p-service__list--title-en">Web Production</span>
              <span class="p-service__list--title-ja">Web制作</span>
            </h3>
            <p class="p-service__list--description">
              企業サイト、コーポレートサイト、採用サイトなど、目的に応じたWebサイトを制作。<br>
              デザインから開発、運用・保守まで一貫してサポートします。
            </p>
            <ul class="p-service__list--features">
              <li>レスポンシブデザイン対応</li>
              <li>CMS導入で更新も簡単</li>
              <li>SEO対策・アクセス解析</li>
              <li>運用・保守サポート</li>
            </ul>
            <div class="p-service__list--tags">
              <span class="p-service__list--tag">制作</span>
              <span class="p-service__list--tag">運用・保守</span>
              <span class="p-service__list--tag">記事作成</span>
            </div>
            <a href="<?php echo esc_url(home_url('/web-production')); ?>" class="p-service__list--btn">
              詳しく見る
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
          </div>
        </div>
      </article>

      <!-- LP制作 -->
      <article class="p-service__list--item" id="lp" data-order="even">
        <div class="p-service__list--image">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.jpg" alt="">
          <?php endif; ?>
        </div>
        <div class="p-service__list--content">
          <div class="p-service__list--content-inner">
            <h3 class="p-service__list--title">
              <span class="p-service__list--title-en">Landing Page</span>
              <span class="p-service__list--title-ja">LP制作</span>
            </h3>
            <p class="p-service__list--description">
              成約率を最大化するランディングページを制作。<br>
              広告運用やABテストにも対応し、継続的な改善をサポートします。
            </p>
            <ul class="p-service__list--features">
              <li>コンバージョン最適化</li>
              <li>ABテスト実施・分析</li>
              <li>広告運用サポート</li>
              <li>高速表示・モバイル最適化</li>
            </ul>
            <div class="p-service__list--tags">
              <span class="p-service__list--tag">CV最適化</span>
              <span class="p-service__list--tag">ABテスト</span>
            </div>
            <a href="<?php echo esc_url(home_url('/lp')); ?>" class="p-service__list--btn">
              詳しく見る
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
          </div>
        </div>
      </article>

      <!-- ECサイト制作 -->
      <article class="p-service__list--item" id="ec-site" data-order="odd">
        <div class="p-service__list--image">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.jpg" alt="">
          <?php endif; ?>
        </div>
        <div class="p-service__list--content">
          <div class="p-service__list--content-inner">
            <h3 class="p-service__list--title">
              <span class="p-service__list--title-en">EC Site</span>
              <span class="p-service__list--title-ja">ECサイト制作</span>
            </h3>
            <p class="p-service__list--description">
              ShopifyやWooCommerceを活用したECサイト構築。<br>
              オリジナル開発にも対応し、売上アップを実現します。
            </p>
            <ul class="p-service__list--features">
              <li>Shopify / WooCommerce</li>
              <li>決済システム導入</li>
              <li>在庫管理・顧客管理</li>
              <li>オリジナル開発も対応</li>
            </ul>
            <div class="p-service__list--tags">
              <span class="p-service__list--tag">Shopify</span>
              <span class="p-service__list--tag">WooCommerce</span>
              <span class="p-service__list--tag">オリジナル</span>
            </div>
            <a href="<?php echo esc_url(home_url('/ec-site')); ?>" class="p-service__list--btn">
              詳しく見る
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
          </div>
        </div>
      </article>

      <!-- システム開発 -->
      <article class="p-service__list--item" id="system" data-order="even">
        <div class="p-service__list--image">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.jpg" alt="">
          <?php endif; ?>
        </div>
        <div class="p-service__list--content">
          <div class="p-service__list--content-inner">
            <h3 class="p-service__list--title">
              <span class="p-service__list--title-en">System Development</span>
              <span class="p-service__list--title-ja">システム開発</span>
            </h3>
            <p class="p-service__list--description">
              業務効率化のための顧客管理システム、予約システム、社内ツールなどを開発。<br>
              お客様の業務に最適化したシステムをご提案します。
            </p>
            <ul class="p-service__list--features">
              <li>顧客管理システム</li>
              <li>予約・スケジュール管理</li>
              <li>業務効率化ツール</li>
              <li>データ分析・可視化</li>
            </ul>
            <div class="p-service__list--tags">
              <span class="p-service__list--tag">顧客管理</span>
              <span class="p-service__list--tag">予約システム</span>
              <span class="p-service__list--tag">業務ツール</span>
            </div>
            <a href="<?php echo esc_url(home_url('/system-development')); ?>" class="p-service__list--btn">
              詳しく見る
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
          </div>
        </div>
      </article>

      <!-- アプリ開発 -->
      <article class="p-service__list--item" id="app" data-order="odd">
        <div class="p-service__list--image">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.jpg" alt="">
          <?php endif; ?>
        </div>
        <div class="p-service__list--content">
          <div class="p-service__list--content-inner">
            <h3 class="p-service__list--title">
              <span class="p-service__list--title-en">App Development</span>
              <span class="p-service__list--title-ja">アプリ開発</span>
            </h3>
            <p class="p-service__list--description">
              iOS/Androidアプリ、Webアプリケーションの開発。<br>
              ユーザー体験を重視した設計で、使いやすいアプリを提供します。
            </p>
            <ul class="p-service__list--features">
              <li>iOS / Androidアプリ</li>
              <li>Webアプリケーション</li>
              <li>クロスプラットフォーム対応</li>
              <li>UX/UIデザイン</li>
            </ul>
            <div class="p-service__list--tags">
              <span class="p-service__list--tag">iOS</span>
              <span class="p-service__list--tag">Android</span>
              <span class="p-service__list--tag">Webアプリ</span>
            </div>
            <a href="<?php echo esc_url(home_url('/app-development')); ?>" class="p-service__list--btn">
              詳しく見る
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
          </div>
        </div>
      </article>

      <!-- Spra SaaS -->
      <article class="p-service__list--item" id="spra" data-order="even">
        <div class="p-service__list--image">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.jpg" alt="">
          <?php endif; ?>
          <div class="p-service__list--image-badge">NEW</div>
        </div>
        <div class="p-service__list--content">
          <div class="p-service__list--content-inner">
            <h3 class="p-service__list--title">
              <span class="p-service__list--title-en">Spra SaaS</span>
              <span class="p-service__list--title-ja">Spra（オールインワンSaaS）</span>
            </h3>
            <p class="p-service__list--description">
              ホームページ×システムが融合。<br>
              低コストですぐに始められるオールインワンプラットフォーム。<br>
              2026年5月13日オープン予定。
            </p>
            <ul class="p-service__list--features">
              <li>月額¥9,800円から利用可能</li>
              <li>業種を問わず柔軟に対応</li>
              <li>導入・設定サポート付き</li>
              <li>モニター募集中（特別価格）</li>
            </ul>
            <div class="p-service__list--tags">
              <span class="p-service__list--tag">月額¥9,800〜</span>
              <span class="p-service__list--tag">業種問わず</span>
              <span class="p-service__list--tag">モニター募集中</span>
            </div>
            <a href="<?php echo esc_url(home_url('/spra')); ?>" class="p-service__list--btn p-service__list--btn-special">
              詳しく見る
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
          </div>
        </div>
      </article>

    </div>
  </div>
</section>
<!-- Service List Section End -->

<!-- Project Examples Section Start -->
<section class="l-section p-service__examples">
  <div class="container">
    <div class="section__header">
      <h2 class="section__title">
        <span class="section__title-en">Project Examples</span>
        <span class="section__title-ja">制作実績・組み合わせ例</span>
      </h2>
      <p class="section__description">
        実際にご依頼いただいたサービスの組み合わせ例をご紹介します。<br>
        複数のサービスを組み合わせることで、お得なセット価格でのご提供が可能です。
      </p>
    </div>

    <div class="p-service__examples--grid">

      <!-- Example 1: Web制作 + LP制作 + ロゴデザイン -->
      <article class="p-service__examples--card">
        <div class="p-service__examples--card-header">
          <span class="p-service__examples--card-label p-service__examples--card-label--popular">人気</span>
          <h3 class="p-service__examples--card-title">スタートアップパック</h3>
        </div>
        <div class="p-service__examples--card-body">
          <div class="p-service__examples--card-services">
            <div class="p-service__examples--card-service">
              <span class="p-service__examples--card-service-icon">🌐</span>
              <span class="p-service__examples--card-service-name">ホームページ制作</span>
            </div>
            <div class="p-service__examples--card-plus">+</div>
            <div class="p-service__examples--card-service">
              <span class="p-service__examples--card-service-icon">📄</span>
              <span class="p-service__examples--card-service-name">LP制作</span>
            </div>
            <div class="p-service__examples--card-plus">+</div>
            <div class="p-service__examples--card-service">
              <span class="p-service__examples--card-service-icon">🎨</span>
              <span class="p-service__examples--card-service-name">ロゴデザイン</span>
            </div>
          </div>
          <p class="p-service__examples--card-description">
            起業・新規事業立ち上げ時に必要なWeb制作をまとめてご提供。ブランディングから集客まで一貫サポート。
          </p>
          <div class="p-service__examples--card-price">
            <div class="p-service__examples--card-price-original">
              <span class="p-service__examples--card-price-label">通常価格</span>
              <span class="p-service__examples--card-price-value">¥850,000</span>
            </div>
            <div class="p-service__examples--card-price-discount">
              <span class="p-service__examples--card-price-arrow">→</span>
              <span class="p-service__examples--card-price-special">
                <span class="p-service__examples--card-price-label">セット価格</span>
                <span class="p-service__examples--card-price-value">¥680,000</span>
              </span>
              <span class="p-service__examples--card-price-save">¥170,000お得</span>
            </div>
          </div>
          <ul class="p-service__examples--card-features">
            <li>初期費用を大幅削減</li>
            <li>統一感のあるブランディング</li>
            <li>3ヶ月間の無料サポート付き</li>
          </ul>
        </div>
      </article>

      <!-- Example 2: Web制作 → 2つ目のWeb制作 -->
      <article class="p-service__examples--card">
        <div class="p-service__examples--card-header">
          <span class="p-service__examples--card-label p-service__examples--card-label--discount">リピート割引</span>
          <h3 class="p-service__examples--card-title">事業拡大プラン</h3>
        </div>
        <div class="p-service__examples--card-body">
          <div class="p-service__examples--card-services">
            <div class="p-service__examples--card-service">
              <span class="p-service__examples--card-service-icon">🌐</span>
              <span class="p-service__examples--card-service-name">1つ目のサイト制作</span>
            </div>
            <div class="p-service__examples--card-plus">→</div>
            <div class="p-service__examples--card-service">
              <span class="p-service__examples--card-service-icon">🚀</span>
              <span class="p-service__examples--card-service-name">2つ目のサイト制作</span>
            </div>
          </div>
          <p class="p-service__examples--card-description">
            既存のホームページを制作されたお客様が、事業拡大に伴い2つ目のサイトを制作。リピート割引で20%オフ。
          </p>
          <div class="p-service__examples--card-price">
            <div class="p-service__examples--card-price-original">
              <span class="p-service__examples--card-price-label">通常価格</span>
              <span class="p-service__examples--card-price-value">¥500,000</span>
            </div>
            <div class="p-service__examples--card-price-discount">
              <span class="p-service__examples--card-price-arrow">→</span>
              <span class="p-service__examples--card-price-special">
                <span class="p-service__examples--card-price-label">リピート価格</span>
                <span class="p-service__examples--card-price-value">¥400,000</span>
              </span>
              <span class="p-service__examples--card-price-save">¥100,000お得</span>
            </div>
          </div>
          <ul class="p-service__examples--card-features">
            <li>既存サイトとの連携もスムーズ</li>
            <li>デザイントーンを統一可能</li>
            <li>継続サポートで安心</li>
          </ul>
        </div>
      </article>

      <!-- Example 3: Web制作 + システム開発（予約システム） -->
      <article class="p-service__examples--card">
        <div class="p-service__examples--card-header">
          <span class="p-service__examples--card-label p-service__examples--card-label--advanced">高機能</span>
          <h3 class="p-service__examples--card-title">統合ソリューション</h3>
        </div>
        <div class="p-service__examples--card-body">
          <div class="p-service__examples--card-services">
            <div class="p-service__examples--card-service">
              <span class="p-service__examples--card-service-icon">🌐</span>
              <span class="p-service__examples--card-service-name">ホームページ制作</span>
            </div>
            <div class="p-service__examples--card-plus">+</div>
            <div class="p-service__examples--card-service">
              <span class="p-service__examples--card-service-icon">📅</span>
              <span class="p-service__examples--card-service-name">予約システム開発</span>
            </div>
          </div>
          <p class="p-service__examples--card-description">
            美容室・クリニック・教室など向け。ホームページと予約システムを連携させ、業務効率を大幅改善。
          </p>
          <div class="p-service__examples--card-price">
            <div class="p-service__examples--card-price-original">
              <span class="p-service__examples--card-price-label">通常価格</span>
              <span class="p-service__examples--card-price-value">¥1,200,000</span>
            </div>
            <div class="p-service__examples--card-price-discount">
              <span class="p-service__examples--card-price-arrow">→</span>
              <span class="p-service__examples--card-price-special">
                <span class="p-service__examples--card-price-label">セット価格</span>
                <span class="p-service__examples--card-price-value">¥980,000</span>
              </span>
              <span class="p-service__examples--card-price-save">¥220,000お得</span>
            </div>
          </div>
          <ul class="p-service__examples--card-features">
            <li>シームレスな連携で使いやすい</li>
            <li>顧客管理・分析機能付き</li>
            <li>運用サポート6ヶ月間無料</li>
          </ul>
        </div>
      </article>

      <!-- Example 4: Web制作 + ECサイト構築 -->
      <article class="p-service__examples--card">
        <div class="p-service__examples--card-header">
          <span class="p-service__examples--card-label p-service__examples--card-label--ecommerce">EC対応</span>
          <h3 class="p-service__examples--card-title">オンライン販売パック</h3>
        </div>
        <div class="p-service__examples--card-body">
          <div class="p-service__examples--card-services">
            <div class="p-service__examples--card-service">
              <span class="p-service__examples--card-service-icon">🌐</span>
              <span class="p-service__examples--card-service-name">コーポレートサイト</span>
            </div>
            <div class="p-service__examples--card-plus">+</div>
            <div class="p-service__examples--card-service">
              <span class="p-service__examples--card-service-icon">🛒</span>
              <span class="p-service__examples--card-service-name">ECサイト構築</span>
            </div>
          </div>
          <p class="p-service__examples--card-description">
            企業サイトとECサイトを同時に構築。ブランディングと販売を一体化し、売上アップを実現。
          </p>
          <div class="p-service__examples--card-price">
            <div class="p-service__examples--card-price-original">
              <span class="p-service__examples--card-price-label">通常価格</span>
              <span class="p-service__examples--card-price-value">¥1,500,000</span>
            </div>
            <div class="p-service__examples--card-price-discount">
              <span class="p-service__examples--card-price-arrow">→</span>
              <span class="p-service__examples--card-price-special">
                <span class="p-service__examples--card-price-label">セット価格</span>
                <span class="p-service__examples--card-price-value">¥1,200,000</span>
              </span>
              <span class="p-service__examples--card-price-save">¥300,000お得</span>
            </div>
          </div>
          <ul class="p-service__examples--card-features">
            <li>決済システム完全対応</li>
            <li>在庫管理機能搭載</li>
            <li>SEO・マーケティング支援</li>
          </ul>
        </div>
      </article>

    </div>

    <div class="p-service__examples--cta">
      <p class="p-service__examples--cta-text">
        ご予算や目的に応じて、最適なプランをご提案いたします。<br>
        まずはお気軽にご相談ください。
      </p>
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-service__examples--cta-button">
        <span>無料相談・お見積もり</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
      </a>
    </div>
  </div>
</section>
<!-- Project Examples Section End -->

<?php get_footer(); ?>