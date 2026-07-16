<?php

/**
 * Template Name: Spra LP Page
 * Description: Spra（ホームページ&システム融合SaaS）紹介LP
 * Katsucode WordPress Theme Setup
 * @author Katsuhiro Kakoi <katsuhiro.k1215@katsucode.jp>
 * @link  https://katsucode.jp/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later * 
 */
if (!defined('ABSPATH')) exit;
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Spra - ホームページとシステムが融合したオールインワンSaaS。低コストで始められ、業種を問わず利用可能。2026年5月13日オープン予定。" />
  <?php wp_head(); ?>
</head>

<body <?php body_class('p-lp p-spra'); ?>>
  <?php wp_body_open(); ?>

  <!-- 戻るボタン -->
  <a href="<?php echo esc_url(home_url('/')); ?>" class="p-lp__back-button">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <line x1="19" y1="12" x2="5" y2="12"></line>
      <polyline points="12 19 5 12 12 5"></polyline>
    </svg>
    <span>ホームへ戻る</span>
  </a>

  <div class="p-lp__container">
    <!-- Hero Section Start -->
    <section class="p-lp__hero p-spra__hero">
      <div class="p-lp__hero-content">
        <span class="p-lp__hero-label">2026年5月13日オープン予定</span>
        <h1 class="p-lp__hero-title">
          ホームページ × システム<br>
          <span class="p-spra__hero-title-highlight">すべてが融合した</span><br>
          オールインワンSaaS
        </h1>
        <p class="p-lp__hero-subtitle">
          Spraなら、ホームページ制作もシステム開発も、すべてノーコードで実現。<br>
          業種を問わず、あなたのビジネスを加速させます。
        </p>
        <div class="p-lp__hero-cta-group">
          <a href="#monitor" class="p-lp__hero-cta p-spra__hero-cta--primary">
            <span>α版モニター募集中</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
          <a href="#features" class="p-lp__hero-cta p-spra__hero-cta--secondary">
            <span>詳しく見る</span>
          </a>
        </div>
        <div class="p-spra__hero-badge">
          <p>先着50社限定！特別価格でご提供</p>
        </div>
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- Problem Section Start -->
    <section class="p-lp__section">
      <div class="container">
        <div class="p-lp__section-header">
          <span class="p-lp__section-label">こんなお悩みありませんか？</span>
          <h2 class="p-lp__section-title">Webサイト制作・運用の課題</h2>
        </div>

        <div class="p-spra__problems">
          <div class="p-spra__problem-item">
            <div class="p-spra__problem-icon">💸</div>
            <h3 class="p-spra__problem-title">制作費用が高すぎる</h3>
            <p class="p-spra__problem-description">ホームページ制作に数十万円、システム開発に数百万円…初期費用が負担に。</p>
          </div>

          <div class="p-spra__problem-item">
            <div class="p-spra__problem-icon">⏰</div>
            <h3 class="p-spra__problem-title">納期が長すぎる</h3>
            <p class="p-spra__problem-description">制作に3ヶ月、システム開発に半年…スピード感のあるビジネスに対応できない。</p>
          </div>

          <div class="p-spra__problem-item">
            <div class="p-spra__problem-icon">🔧</div>
            <h3 class="p-spra__problem-title">更新が大変</h3>
            <p class="p-spra__problem-description">ちょっとした修正でも制作会社に依頼…運用コストと時間がかかりすぎる。</p>
          </div>

          <div class="p-spra__problem-item">
            <div class="p-spra__problem-icon">🧩</div>
            <h3 class="p-spra__problem-title">機能が別々</h3>
            <p class="p-spra__problem-description">ホームページ、予約システム、ECサイトがバラバラ…管理が煩雑で非効率。</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Problem Section End -->

    <!-- Solution Section Start -->
    <section class="p-lp__section p-lp__section--dark p-spra__solution">
      <div class="container">
        <div class="p-lp__section-header">
          <span class="p-lp__section-label">Spraが解決します</span>
          <h2 class="p-lp__section-title">すべてをひとつに統合</h2>
          <p class="p-lp__section-description">
            ホームページ、EC、予約、顧客管理…必要な機能がすべて揃ったオールインワンプラットフォーム。
          </p>
        </div>

        <div class="p-spra__solution-visual">
          <div class="p-spra__solution-circle p-spra__solution-circle--center">
            <span class="p-spra__solution-circle-icon">🚀</span>
            <span class="p-spra__solution-circle-text">Spra</span>
          </div>
          <div class="p-spra__solution-circle p-spra__solution-circle--1">
            <span>🌐 HP</span>
          </div>
          <div class="p-spra__solution-circle p-spra__solution-circle--2">
            <span>🛒 EC</span>
          </div>
          <div class="p-spra__solution-circle p-spra__solution-circle--3">
            <span>📅 予約</span>
          </div>
          <div class="p-spra__solution-circle p-spra__solution-circle--4">
            <span>👥 顧客管理</span>
          </div>
        </div>
      </div>
    </section>
    <!-- Solution Section End -->

    <!-- Features Section Start -->
    <section id="features" class="p-lp__section p-lp__section--gray">
      <div class="container">
        <div class="p-lp__section-header">
          <span class="p-lp__section-label">Spraの特徴</span>
          <h2 class="p-lp__section-title">何ができるのか？</h2>
          <p class="p-lp__section-description">
            ホームページとシステムの融合。業種を問わず、あらゆるビジネスに対応。
          </p>
        </div>

        <div class="p-lp__features">
          <div class="p-lp__feature-card">
            <div class="p-lp__feature-icon">🏠</div>
            <h3 class="p-lp__feature-title">ホームページビルダー</h3>
            <p class="p-lp__feature-description">
              ドラッグ&ドロップで直感的にホームページを作成。デザインテンプレート豊富で、専門知識不要。
            </p>
          </div>

          <div class="p-lp__feature-card">
            <div class="p-lp__feature-icon">🛒</div>
            <h3 class="p-lp__feature-title">ECサイト機能</h3>
            <p class="p-lp__feature-description">
              商品管理、在庫管理、決済システムまで完全装備。オンライン販売をすぐに開始できます。
            </p>
          </div>

          <div class="p-lp__feature-card">
            <div class="p-lp__feature-icon">📅</div>
            <h3 class="p-lp__feature-title">予約システム</h3>
            <p class="p-lp__feature-description">
              美容室、クリニック、教室など、あらゆる業種の予約管理に対応。カレンダー連携も可能。
            </p>
          </div>

          <div class="p-lp__feature-card">
            <div class="p-lp__feature-icon">👥</div>
            <h3 class="p-lp__feature-title">顧客管理（CRM）</h3>
            <p class="p-lp__feature-description">
              顧客情報を一元管理。購買履歴、予約履歴から、効果的なマーケティングを実現。
            </p>
          </div>

          <div class="p-lp__feature-card">
            <div class="p-lp__feature-icon">📊</div>
            <h3 class="p-lp__feature-title">分析ダッシュボード</h3>
            <p class="p-lp__feature-description">
              アクセス解析、売上分析、顧客動向をリアルタイムで可視化。データに基づいた経営判断を。
            </p>
          </div>

          <div class="p-lp__feature-card">
            <div class="p-lp__feature-icon">🔗</div>
            <h3 class="p-lp__feature-title">API連携</h3>
            <p class="p-lp__feature-description">
              既存システムとの連携もスムーズ。会計ソフト、メール配信ツールなど、外部サービスと接続可能。
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Features Section End -->

    <!-- Pricing Section Start -->
    <section class="p-lp__section">
      <div class="container">
        <div class="p-lp__section-header">
          <span class="p-lp__section-label">料金プラン</span>
          <h2 class="p-lp__section-title">プランに応じて選べる</h2>
          <p class="p-lp__section-description">
            小規模からエンタープライズまで、ビジネスの成長に合わせてプランを変更できます。
          </p>
        </div>

        <div class="p-spra__pricing-grid">
          <!-- スタータープラン -->
          <div class="p-spra__pricing-card">
            <h3 class="p-spra__pricing-name">スタータープラン</h3>
            <div class="p-spra__pricing-price">
              <span class="p-spra__pricing-amount">¥9,800</span>
              <span class="p-spra__pricing-unit">/月</span>
            </div>
            <ul class="p-spra__pricing-features">
              <li>✓ ホームページビルダー</li>
              <li>✓ 基本テンプレート利用</li>
              <li>✓ お問い合わせフォーム</li>
              <li>✓ SSL証明書</li>
              <li>✓ メールサポート</li>
            </ul>
          </div>

          <!-- ビジネスプラン -->
          <div class="p-spra__pricing-card p-spra__pricing-card--featured">
            <div class="p-spra__pricing-badge">人気</div>
            <h3 class="p-spra__pricing-name">ビジネスプラン</h3>
            <div class="p-spra__pricing-price">
              <span class="p-spra__pricing-amount">¥29,800</span>
              <span class="p-spra__pricing-unit">/月</span>
            </div>
            <ul class="p-spra__pricing-features">
              <li>✓ すべてのスタータープラン機能</li>
              <li>✓ ECサイト機能</li>
              <li>✓ 予約システム</li>
              <li>✓ 顧客管理（CRM）</li>
              <li>✓ 分析ダッシュボード</li>
              <li>✓ 優先サポート</li>
            </ul>
          </div>

          <!-- エンタープライズプラン -->
          <div class="p-spra__pricing-card">
            <h3 class="p-spra__pricing-name">エンタープライズ</h3>
            <div class="p-spra__pricing-price">
              <span class="p-spra__pricing-amount">お問い合わせ</span>
            </div>
            <ul class="p-spra__pricing-features">
              <li>✓ すべてのビジネスプラン機能</li>
              <li>✓ API連携無制限</li>
              <li>✓ カスタム開発対応</li>
              <li>✓ 専任サポート</li>
              <li>✓ SLA保証</li>
              <li>✓ オンサイトサポート</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Pricing Section End -->

    <!-- Monitor Recruitment Section Start -->
    <section id="monitor" class="p-lp__section p-lp__section--dark p-spra__monitor">
      <div class="container">
        <div class="p-lp__section-header">
          <span class="p-lp__section-label">先着50社限定</span>
          <h2 class="p-lp__section-title">α版モニター募集</h2>
          <p class="p-lp__section-description">
            2026年5月13日のオープンに向けて、α版モニターを募集中。<br>
            特別価格でご利用いただけます。
          </p>
        </div>

        <div class="p-spra__monitor-benefits">
          <div class="p-spra__monitor-benefit">
            <div class="p-spra__monitor-benefit-icon">💰</div>
            <h3 class="p-spra__monitor-benefit-title">初月無料</h3>
            <p class="p-spra__monitor-benefit-description">モニター期間中は完全無料でご利用いただけます</p>
          </div>

          <div class="p-spra__monitor-benefit">
            <div class="p-spra__monitor-benefit-icon">🎁</div>
            <h3 class="p-spra__monitor-benefit-title">特別割引</h3>
            <p class="p-spra__monitor-benefit-description">正式リリース後も6ヶ月間50%OFF</p>
          </div>

          <div class="p-spra__monitor-benefit">
            <div class="p-spra__monitor-benefit-icon">🤝</div>
            <h3 class="p-spra__monitor-benefit-title">専任サポート</h3>
            <p class="p-spra__monitor-benefit-description">モニター様には専任スタッフが丁寧にサポート</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Monitor Recruitment Section End -->

    <!-- CTA Section Start -->
    <section class="p-lp__cta-section">
      <div class="container">
        <h2 class="p-lp__cta-title">
          Spraで、ビジネスを<br class="sp-only">次のステージへ
        </h2>
        <p class="p-lp__cta-description">
          まずは無料相談から。あなたのビジネスに最適なプランをご提案します。
        </p>
        <div class="p-lp__cta-buttons">
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-lp__cta-button p-lp__cta-button--primary">
            <span>無料相談・お問い合わせ</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
          <a href="https://spra.example.com" target="_blank" rel="noopener noreferrer" class="p-lp__cta-button p-lp__cta-button--secondary">
            <span>Spra公式サイトへ</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
              <polyline points="15 3 21 3 21 9"></polyline>
              <line x1="10" y1="14" x2="21" y2="3"></line>
            </svg>
          </a>
        </div>
      </div>
    </section>
    <!-- CTA Section End -->
  </div>

  <?php wp_footer(); ?>
</body>

</html>