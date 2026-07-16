<?php

/**
 * Template Name: SaaS Detail
 * Description: SaaS開発サービス詳細ページ
 * Katsucode WordPress Theme Setup
 * @author Katsuhiro Kakoi <katsuhiro.k1215@katsucode.jp>
 * @link  https://katsucode.jp/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later * 
 */
if (!defined('ABSPATH')) exit;
get_header();
?>

<!-- Service Detail Intro -->
<section class="p-service-detail__intro">
  <div class="container">
    <div class="p-service-detail__intro--header">
      <h1 class="c-title__page-secondary">
        <div class="c-title__page-secondary--logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="かつコード" />
        </div>
        <div class="c-title__page-secondary-en">SaaS Development</div>
        <div class="c-title__page-secondary-ja">SaaS開発</div>
      </h1>
    </div>
    <div class="p-service-detail__intro--body">
      <p>
        月額課金型のSaaSプロダクトを開発します。会員管理、決済システム、マルチテナント対応など、
        SaaSに必要な機能をすべて実装し、スケーラブルなサービスを構築します。
      </p>
      <p>
        アイデア段階からのご相談も可能です。市場調査、ビジネスモデル設計、MVP開発、グロースハック支援まで、
        SaaSビジネスの立ち上げを全面的にサポートします。
      </p>
    </div>
  </div>
</section>

<!-- Service Types -->
<section class="p-service-detail__plans">
  <div class="container">
    <h2 class="p-service-detail__section-title">開発対応SaaS</h2>

    <div class="p-service-detail__additional--grid">
      <div class="p-service-detail__additional--item">
        <h3>BtoB SaaS</h3>
        <p class="p-service-detail__additional--price">300万円〜</p>
        <p class="p-service-detail__additional--description">
          企業向けSaaS。業務管理、プロジェクト管理、顧客管理など、法人向けサービスを開発します。
        </p>
      </div>
      <div class="p-service-detail__additional--item">
        <h3>BtoC SaaS</h3>
        <p class="p-service-detail__additional--price">200万円〜</p>
        <p class="p-service-detail__additional--description">
          個人向けSaaS。オンライン学習、フィットネス、家計簿など、コンシューマー向けサービスを開発します。
        </p>
      </div>
      <div class="p-service-detail__additional--item">
        <h3>マーケットプレイス</h3>
        <p class="p-service-detail__additional--price">400万円〜</p>
        <p class="p-service-detail__additional--description">
          仲介プラットフォーム。マッチング、決済、レビュー機能など、マーケットプレイス構築を支援します。
        </p>
      </div>
      <div class="p-service-detail__additional--item">
        <h3>SaaS MVP開発</h3>
        <p class="p-service-detail__additional--price">150万円〜</p>
        <p class="p-service-detail__additional--description">
          アイデア検証用のMVP（最小機能プロダクト）を短期間で開発。市場投入を早めます。
        </p>
      </div>
      <div class="p-service-detail__additional--item">
        <h3>既存SaaS改善</h3>
        <p class="p-service-detail__additional--price">100万円〜</p>
        <p class="p-service-detail__additional--description">
          既存SaaSの機能追加、UI改善、パフォーマンスチューニングなどを行います。
        </p>
      </div>
      <div class="p-service-detail__additional--item">
        <h3>カスタムSaaS</h3>
        <p class="p-service-detail__additional--price">ご相談ください</p>
        <p class="p-service-detail__additional--description">
          業界特化型SaaS、独自機能を持つSaaSなど、オーダーメイドで開発します。
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Production Flow -->
<section class="p-service-detail__flow">
  <div class="container">
    <h2 class="p-service-detail__section-title">開発の流れ</h2>
    <div class="p-service-detail__flow--list">
      <div class="p-service-detail__flow--item">
        <div class="p-service-detail__flow--step">STEP 01</div>
        <div class="p-service-detail__flow--content">
          <h3 class="p-service-detail__flow--title">アイデア検証・市場調査</h3>
          <p class="p-service-detail__flow--description">
            SaaSのアイデア、ターゲット市場、競合状況を分析。ビジネスモデルの実現可能性を検証します。
          </p>
        </div>
      </div>
      <div class="p-service-detail__flow--item">
        <div class="p-service-detail__flow--step">STEP 02</div>
        <div class="p-service-detail__flow--content">
          <h3 class="p-service-detail__flow--title">ビジネス設計</h3>
          <p class="p-service-detail__flow--description">
            料金プラン設計、顧客獲得戦略、収益シミュレーション。ビジネスとして成立する設計を行います。
          </p>
        </div>
      </div>
      <div class="p-service-detail__flow--item">
        <div class="p-service-detail__flow--step">STEP 03</div>
        <div class="p-service-detail__flow--content">
          <h3 class="p-service-detail__flow--title">要件定義・システム設計</h3>
          <p class="p-service-detail__flow--description">
            会員管理、決済、マルチテナント、権限管理など、SaaSに必要な機能を洗い出し、システム設計を行います。
          </p>
        </div>
      </div>
      <div class="p-service-detail__flow--item">
        <div class="p-service-detail__flow--step">STEP 04</div>
        <div class="p-service-detail__flow--content">
          <h3 class="p-service-detail__flow--title">UI/UX設計・デザイン</h3>
          <p class="p-service-detail__flow--description">
            使いやすい管理画面、直感的なダッシュボード、ユーザビリティの高いUIを設計します。
          </p>
        </div>
      </div>
      <div class="p-service-detail__flow--item">
        <div class="p-service-detail__flow--step">STEP 05</div>
        <div class="p-service-detail__flow--content">
          <h3 class="p-service-detail__flow--title">MVP開発</h3>
          <p class="p-service-detail__flow--description">
            まずは最小限の機能でリリース。市場の反応を見ながら、段階的に機能を追加していきます。
          </p>
        </div>
      </div>
      <div class="p-service-detail__flow--item">
        <div class="p-service-detail__flow--step">STEP 06</div>
        <div class="p-service-detail__flow--content">
          <h3 class="p-service-detail__flow--title">テスト・改善</h3>
          <p class="p-service-detail__flow--description">
            β版でユーザーテストを実施。フィードバックを反映し、サービスを改善します。
          </p>
        </div>
      </div>
      <div class="p-service-detail__flow--item">
        <div class="p-service-detail__flow--step">STEP 07</div>
        <div class="p-service-detail__flow--content">
          <h3 class="p-service-detail__flow--title">正式リリース</h3>
          <p class="p-service-detail__flow--description">
            本番環境へリリース。マーケティング支援、プレスリリース作成もサポートします。
          </p>
        </div>
      </div>
      <div class="p-service-detail__flow--item">
        <div class="p-service-detail__flow--step">STEP 08</div>
        <div class="p-service-detail__flow--content">
          <h3 class="p-service-detail__flow--title">グロース支援</h3>
          <p class="p-service-detail__flow--description">
            ユーザー獲得、機能追加、A/Bテスト、データ分析など、SaaS成長のための施策を継続的に実施します。
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Features -->
<section class="p-service-detail__content-plans">
  <div class="container">
    <h2 class="p-service-detail__section-title">SaaS開発の特徴</h2>
    <div class="p-service-detail__content-plans--intro">
      かつコードのSaaS開発は、ビジネス視点を持って開発します。<br>
      単なる技術提供ではなく、SaaSビジネスの成功をゴールとして伴走します。
    </div>

    <ul class="c-list__price">
      <li class="c-list__price--item">
        <div class="c-list__price--header">
          <p class="c-list__price--title">ビジネス設計から支援</p>
        </div>
        <div class="c-list__price--body">
          <p class="c-list__price--lead">
            アイデア検証、市場調査、ビジネスモデル設計から携わり、成功確率を高めます。
          </p>
        </div>
      </li>
      <li class="c-list__price--item">
        <div class="c-list__price--header">
          <p class="c-list__price--title">スケーラブルな設計</p>
        </div>
        <div class="c-list__price--body">
          <p class="c-list__price--lead">
            ユーザー増加に耐えるインフラ設計、パフォーマンス最適化、セキュリティ対策を実施します。
          </p>
        </div>
      </li>
      <li class="c-list__price--item">
        <div class="c-list__price--header">
          <p class="c-list__price--title">グロースハック支援</p>
        </div>
        <div class="c-list__price--body">
          <p class="c-list__price--lead">
            開発後も継続的に改善提案。ユーザー獲得、LTV向上のための施策を一緒に考えます。
          </p>
        </div>
      </li>
    </ul>
  </div>
</section>

<!-- CTA Section -->
<section class="p-service-detail__cta">
  <div class="container">
    <div class="p-service-detail__cta--content">
      <h2>SaaS開発のご相談・お見積り</h2>
      <p>
        まずはお気軽にお問い合わせください。<br>
        SaaSのアイデアをお聞かせいただき、実現可能性を一緒に検討します。
      </p>
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="c-btn c-btn__primary">
        <span class="c-btn__primary--text">お問い合わせ</span>
        <div class="c-btn__primary--arrow">
          <i class="fa-solid fa-arrow-right"></i>
        </div>
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>