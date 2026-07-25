<?php

/**
 * Template Name: System Development Detail
 * Description: システム開発サービス詳細ページ
 * Katsucode WordPress Theme Setup
 * @author Katsuhiro Kakoi <katsuhiro.k1215@katsucode.jp>
 * @link  https://katsucode.jp/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later * 
 */
if (!defined('ABSPATH')) exit;
get_header();
?>

<!-- Service Detail Intro -->
<section class="l-section  p-page__intro p-service-detail__intro">
  <div class="container">
    <div class="section__header">
      <p class="section__header--lead">
        業務効率化、コスト削減、売上向上を実現するシステム開発サービスです。<br />
        お客様の業務フローや課題を深く理解し、最適なシステムを設計・開発します。<br />
        業務管理システム、予約システム、在庫管理システム、マッチングプラットフォームなど、<br />
        様々な業種・業態に対応したカスタムシステムの開発実績があります。
      </p>
    </div>
    <div class="section__body">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/step1.jpg" alt="Web制作イメージ">
    </div>
  </div>
</section>

<!-- Agile Philosophy -->
<section class="l-section p-service-detail__content-plans">
  <div class="container">
    <div class="section__header">
      <h2 class="p-service-detail__section-title">システム開発の強み</h2>
      <div class="p-service-detail__content-plans--intro">
        かつコードのシステム開発は、アジャイル開発の考え方を採用しています。<br>
        <strong>最初から完璧なシステムは作りません。</strong><br>
        まずは最低限の機能でスタートし、実際の運用をもとに改善していきます。
      </div>
    </div>
    <div class="section__body">
      <ul class="c-list__price">
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">MVP（最小機能製品）から始める</p>
          </div>
          <div class="c-list__price--body">
            <p class="c-list__price--lead">
              最初から完璧を目指すのではなく、最低限必要な機能だけを実装したMVP（Minimum Viable Product）から始めます。<br>
              これにより、早期リリース・早期フィードバック・早期改善が可能になります。
            </p>
          </div>
        </li>
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">小規模リリース→フィードバック→改善</p>
          </div>
          <div class="c-list__price--body">
            <p class="c-list__price--lead">
              実際に使ってみないと分からないことは多いです。<br>
              まずはリリースして運用を始め、ユーザーの声、データを集め、それをもとに改善を重ねていきます。<br>
              「作って終わり」ではなく、「育てていく」システム開発です。
            </p>
          </div>
        </li>
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">柔軟な仕様変更・機能追加</p>
          </div>
          <div class="c-list__price--body">
            <p class="c-list__price--lead">
              開発中に仕様変更が必要になることもあります。<br>
              アジャイル開発では、状況に応じて柔軟に仕様を調整し、常に最適な形を目指します。<br>
              お客様と密にコミュニケーションを取りながら、段階的に機能を追加していきます。
            </p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- Pricing -->
<section class="l-section p-service-detail__plans">
  <div class="container">
    <div class="section__header">
      <h2 class="p-service-detail__section-title">料金プラン</h2>
      <p class="p-service-detail__plans--intro">
        あなたの「開発規模」に合わせて選べる3つのプラン。<br>
        素早くリリースしたい、しっかり設計したい、大規模構築したい——プロジェクトの状況に最適なプランをお選びください。
      </p>
    </div>
    <div class="section__body">
      <ul class="c-list__price">
        <!-- MVP開発プラン -->
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">MVP開発プラン</p>
            <p class="c-list__price--subtitle">素早くリリースして検証したい方向け</p>
            <p class="c-list__price--price">
              初期費用<span>80</span>万円〜
            </p>
          </div>
          <div class="c-list__price--body">
            <div class="c-list__price--target">
              <p class="c-list__price--target-title">こんな方におすすめ</p>
              <ul class="c-list__price--target-list">
                <li>最小限の機能で早くリリースしたい</li>
                <li>市場ニーズを検証してから改善したい</li>
                <li>初期コストを抑えてスタートしたい</li>
              </ul>
            </div>
            <p class="c-list__price--lead">
              最小限の機能で素早くリリースし、フィードバックをもとに改善していく開発スタイルです。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">期待できる成果</dt>
              <dd class="c-list__price--features-text">
                早期市場投入、ニーズ検証<br>
                <small>※1〜2ヶ月でリリース可能</small>
              </dd>

              <dt class="c-list__price--features-header">開発期間</dt>
              <dd class="c-list__price--features-text">1〜2ヶ月</dd>

              <dt class="c-list__price--features-header">機能数</dt>
              <dd class="c-list__price--features-text">最小限（3〜5機能）</dd>

              <dt class="c-list__price--features-header">アプローチ</dt>
              <dd class="c-list__price--features-text">
                アジャイル開発<br>
                <small>早期リリース・早期改善</small>
              </dd>

              <dt class="c-list__price--features-header">テスト</dt>
              <dd class="c-list__price--features-text">基本テストのみ</dd>

              <dt class="c-list__price--features-header">保守・運用サポート</dt>
              <dd class="c-list__price--features-text">1ヶ月無料</dd>
            </dl>
          </div>
        </li>

        <!-- スタンダード開発プラン（人気） -->
        <li class="c-list__price--item c-list__price--item-popular">
          <span class="c-list__price--badge">人気No.1</span>
          <div class="c-list__price--header">
            <p class="c-list__price--title">スタンダード開発プラン</p>
            <p class="c-list__price--subtitle">しっかり設計して安定稼働させたい方向け</p>
            <p class="c-list__price--price">
              初期費用<span>150</span>万円〜
            </p>
          </div>
          <div class="c-list__price--body">
            <div class="c-list__price--target">
              <p class="c-list__price--target-title">こんな方におすすめ</p>
              <ul class="c-list__price--target-list">
                <li>要件を固めて確実に開発したい</li>
                <li>機能を充実させて長く使いたい</li>
                <li>安定稼働を重視したい</li>
              </ul>
            </div>
            <p class="c-list__price--lead">
              しっかり設計した上で開発します。機能を充実させ、安定稼働を目指すスタンダードなプランです。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">期待できる成果</dt>
              <dd class="c-list__price--features-text">
                安定稼働、業務効率化<br>
                <small>※3〜4ヶ月で本格的なシステム構築</small>
              </dd>

              <dt class="c-list__price--features-header">開発期間</dt>
              <dd class="c-list__price--features-text">3〜4ヶ月</dd>

              <dt class="c-list__price--features-header">機能数</dt>
              <dd class="c-list__price--features-text">10機能前後</dd>

              <dt class="c-list__price--features-header">アプローチ</dt>
              <dd class="c-list__price--features-text">
                要件定義重視<br>
                <small>設計を固めてから開発</small>
              </dd>

              <dt class="c-list__price--features-header">テスト</dt>
              <dd class="c-list__price--features-text">単体・結合・総合テスト</dd>

              <dt class="c-list__price--features-header">保守・運用サポート</dt>
              <dd class="c-list__price--features-text">3ヶ月無料</dd>

              <dt class="c-list__price--features-header">特典</dt>
              <dd class="c-list__price--features-text">
                ✓ 機能追加割引<br>
                ✓ 優先対応<br>
                ✓ 月次レポート提供
              </dd>
            </dl>
          </div>
        </li>

        <!-- エンタープライズプラン -->
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">エンタープライズプラン</p>
            <p class="c-list__price--subtitle">大規模・高機能システムを構築したい方向け</p>
            <p class="c-list__price--price">
              初期費用<span>300</span>万円〜
            </p>
          </div>
          <div class="c-list__price--body">
            <div class="c-list__price--target">
              <p class="c-list__price--target-title">こんな方におすすめ</p>
              <ul class="c-list__price--target-list">
                <li>大規模・複雑なシステムを構築したい</li>
                <li>セキュリティ・スケーラビリティを重視したい</li>
                <li>専任担当者によるサポートが欲しい</li>
              </ul>
            </div>
            <p class="c-list__price--lead">
              大規模・高機能なシステムを構築します。セキュリティ・スケーラビリティを重視した開発を行います。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">期待できる成果</dt>
              <dd class="c-list__price--features-text">
                大幅な業務改善、競争優位性確立<br>
                <small>※6ヶ月〜で堅牢なシステム構築</small>
              </dd>

              <dt class="c-list__price--features-header">開発期間</dt>
              <dd class="c-list__price--features-text">6ヶ月〜</dd>

              <dt class="c-list__price--features-header">機能数</dt>
              <dd class="c-list__price--features-text">20機能以上</dd>

              <dt class="c-list__price--features-header">アプローチ</dt>
              <dd class="c-list__price--features-text">
                要件定義 + アジャイル<br>
                <small>段階的リリースで確実に</small>
              </dd>

              <dt class="c-list__price--features-header">テスト</dt>
              <dd class="c-list__price--features-text">
                徹底的なテスト<br>
                <small>セキュリティ診断含む</small>
              </dd>

              <dt class="c-list__price--features-header">保守・運用サポート</dt>
              <dd class="c-list__price--features-text">6ヶ月無料</dd>

              <dt class="c-list__price--features-header">特典</dt>
              <dd class="c-list__price--features-text">
                ✓ 機能追加大幅割引<br>
                ✓ 最優先対応<br>
                ✓ 専任担当者<br>
                ✓ 週次レポート・定例ミーティング
              </dd>
            </dl>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- Maintenance Plans -->
<section class="l-section p-service-detail__plans">
  <div class="container">
    <div class="section__header">
      <h2 class="p-service-detail__section-title">メンテナンスプラン</h2>
      <p class="p-service-detail__plans--intro">
        システム公開後も、安定稼働と継続改善をサポートします。
      </p>
    </div>
    <div class="section__body">
      <ul class="c-list__price">
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">シンプルプラン</p>
            <p class="c-list__price--price"><span>20,000</span>円/月</p>
          </div>
          <div class="c-list__price--body">
            <p class="c-list__price--lead">
              基本的なメンテナンスを行うプランです。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">サーバー管理</dt>
              <dd class="c-list__price--features-text">基本的なサーバー管理を行います。</dd>
              <dt class="c-list__price--features-header">セキュリティ対策</dt>
              <dd class="c-list__price--features-text">セキュリティ監視、アップデート対応。</dd>
            </dl>
          </div>
        </li>
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">スタンダードプラン</p>
            <p class="c-list__price--price"><span>30,000</span>円/月</p>
          </div>
          <div class="c-list__price--body">
            <p class="c-list__price--lead">
              定期バックアップ、バグ修正サポートも含む充実プラン。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">サーバー管理</dt>
              <dd class="c-list__price--features-text">基本的なサーバー管理を行います。</dd>
              <dt class="c-list__price--features-header">定期バックアップ</dt>
              <dd class="c-list__price--features-text">システムの定期的なバックアップを実施。</dd>
              <dt class="c-list__price--features-header">バグ修正対応</dt>
              <dd class="c-list__price--features-text">軽微なバグ修正に対応。</dd>

              <dt class="c-list__price--features-header">月次レポート作成</dt>
              <dd class="c-list__price--features-text">メンテナンス内容をまとめたレポートを作成します。</dd>

            </dl>
          </div>
        </li>
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">プレミアムプラン</p>
            <p class="c-list__price--price"><span>50,000</span>円/月</p>
          </div>
          <div class="c-list__price--body">
            <p class="c-list__price--lead">
              改善提案、機能追加サポートまで含む最充実プラン。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">サーバー管理</dt>
              <dd class="c-list__price--features-text">基本的なサーバー管理を行います。</dd>
              <dt class="c-list__price--features-header">定期バックアップ</dt>
              <dd class="c-list__price--features-text">システムの定期的なバックアップを実施。</dd>
              <dt class="c-list__price--features-header">月次レポート作成</dt>
              <dd class="c-list__price--features-text">メンテナンス内容をまとめたレポートを作成します。</dd>
              <dt class="c-list__price--features-header">バグ修正・改善提案</dt>
              <dd class="c-list__price--features-text">バグ修正と月次改善提案を実施。</dd>
              <dt class="c-list__price--features-header">小規模機能追加</dt>
              <dd class="c-list__price--features-text">小規模な機能追加に対応(月1回)。</dd>
            </dl>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- Case Studies -->
<!-- Case Studies -->
<section class="l-section p-service-detail__case-studies">
  <div class="container">
    <div class="section__header">
      <h2 class="p-service-detail__section-title">制作事例</h2>
      <p class="p-service-detail__case-studies--intro">システム開発の実績をご紹介します</p>
    </div>
    <div class="section__body">
      <div class="p-service-detail__case-studies--grid">
        <div class="p-service-detail__case-study--item">
          <div class="p-service-detail__case-study--image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/default.jpg" alt="不動産仲介D社">
            <span class="p-service-detail__case-study--category">顧客管理システム</span>
          </div>
          <div class="p-service-detail__case-study--content">
            <h3 class="p-service-detail__case-study--title">不動産仲介D社</h3>
            <p class="p-service-detail__case-study--description">
              顧客情報と物件情報を一元管理し、条件マッチで自動通知。営業効率が2倍に向上。
            </p>
            <ul class="p-service-detail__case-study--tags">
              <li>PHP</li>
              <li>不動産</li>
              <li>効率2倍</li>
            </ul>
          </div>
        </div>
        <div class="p-service-detail__case-study--item">
          <div class="p-service-detail__case-study--image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/default.jpg" alt="美容サロンE社">
            <span class="p-service-detail__case-study--category">予約管理システム</span>
          </div>
          <div class="p-service-detail__case-study--content">
            <h3 class="p-service-detail__case-study--title">美容サロンE社</h3>
            <p class="p-service-detail__case-study--description">
              ネット予約、顧客カルテ管理、リピート率分析を統合。リマインド機能でキャンセル率30%減。
            </p>
            <ul class="p-service-detail__case-study--tags">
              <li>予約システム</li>
              <li>美容</li>
              <li>キャンセル減</li>
            </ul>
          </div>
        </div>
        <div class="p-service-detail__case-study--item">
          <div class="p-service-detail__case-study--image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/default.jpg" alt="製造業F社">
            <span class="p-service-detail__case-study--category">在庫管理システム</span>
          </div>
          <div class="p-service-detail__case-study--content">
            <h3 class="p-service-detail__case-study--title">製造業F社</h3>
            <p class="p-service-detail__case-study--description">
              在庫状況をリアルタイム可視化、発注業務を自動化。過剰在庫を20%削減。
            </p>
            <ul class="p-service-detail__case-study--tags">
              <li>在庫管理</li>
              <li>製造業</li>
              <li>在庫削減</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Production Flow -->
<section class="l-section p-flow">
  <div class="container">
    <div class="section__header">
      <h2 class="p-flow__title">アジャイル開発の流れ</h2>
    </div>
    <div class="section__body">
      <div class="p-service-detail__additional--grid">
        <div class="p-service-detail__additional--item">
          <h3>業務管理システム</h3>
          <p class="p-service-detail__additional--price">100万円〜</p>
          <p class="p-service-detail__additional--description">
            顧客管理、案件管理、請求書発行など、業務を一元管理。ペーパーレス化・効率化を実現します。
          </p>
        </div>
        <div class="p-service-detail__additional--item">
          <h3>予約システム</h3>
          <p class="p-service-detail__additional--price">80万円〜</p>
          <p class="p-service-detail__additional--description">
            ホテル、サロン、医療機関などの予約受付を自動化。顧客管理、リマインド機能も実装可能です。
          </p>
        </div>
        <div class="p-service-detail__additional--item">
          <h3>在庫管理システム</h3>
          <p class="p-service-detail__additional--price">120万円〜</p>
          <p class="p-service-detail__additional--description">
            在庫情報のリアルタイム管理、発注自動化、棚卸し機能など、物流業務を効率化します。
          </p>
        </div>
        <div class="p-service-detail__additional--item">
          <h3>マッチングプラットフォーム</h3>
          <p class="p-service-detail__additional--price">200万円〜</p>
          <p class="p-service-detail__additional--description">
            人材マッチング、物件マッチングなど、ユーザー同士をつなぐプラットフォームを開発します。
          </p>
        </div>
        <div class="p-service-detail__additional--item">
          <h3>API連携・システム統合</h3>
          <p class="p-service-detail__additional--price">50万円〜</p>
          <p class="p-service-detail__additional--description">
            既存システムとの連携、外部APIとの接続、データ移行などを行います。
          </p>
        </div>
        <div class="p-service-detail__additional--item">
          <h3>カスタム開発</h3>
          <p class="p-service-detail__additional--price">ご相談ください</p>
          <p class="p-service-detail__additional--description">
            上記以外のシステムも開発可能です。お客様の課題に合わせたオーダーメイド開発を承ります。
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Agile Development Flow -->
<section class="l-section p-flow">
  <div class="container">
    <div class="section__header">
      <h2 class="p-flow__title">アジャイル開発の流れ</h2>
      <p class="p-flow__lead">
        最初から完璧を目指さず、MVP（最小機能製品）から始め、実際の運用をもとに改善していきます。<br>
        「作って終わり」ではなく、「育てていく」システム開発です。
      </p>
    </div>
    <div class="section__body">
      <div class="p-flow__main">
        <ul class="p-flow__main--list">
          <!-- Step 1 -->
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(1)); ?>" alt="ヒアリング・課題分析" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">01</span>
              <h3>ヒアリング・課題分析</h3>
              <p>
                現在の業務フロー、課題、目標を詳しくヒアリング。何を解決したいのか、どんな効果を期待するのかを明確にします。
              </p>
            </div>
          </li>

          <div class="p-flow--arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <!-- Step 2 -->
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(2)); ?>" alt="MVP設計" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">02</span>
              <h3>MVP設計（最小機能設計）</h3>
              <p>
                最初から全機能を作るのではなく、まずは最低限必要な機能だけを設計。早期リリースを目指します。
              </p>
            </div>
          </li>

          <div class="p-flow--arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <!-- Step 3 -->
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(3)); ?>" alt="小規模開発" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">03</span>
              <h3>小規模開発</h3>
              <p>
                MVPをベースに開発を実施。無駄な機能を作らず、必要最小限の機能で素早くリリースできる状態を目指します。
              </p>
            </div>
          </li>

          <div class="p-flow--arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <!-- Step 4 -->
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(4)); ?>" alt="テスト・リリース" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">04</span>
              <h3>テスト・リリース</h3>
              <p>
                動作確認を行い、問題がなければリリース。完璧ではなくても、使える状態にして実際に運用を開始します。
              </p>
            </div>
          </li>

          <div class="p-flow--arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <!-- Step 5 -->
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(5)); ?>" alt="運用・フィードバック収集" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">05</span>
              <h3>運用・フィードバック収集</h3>
              <p>
                実際に使ってみて、ユーザーの声、データ、困りごとを収集。実運用から得られる情報が最も重要です。
              </p>
            </div>
          </li>

          <div class="p-flow--arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <!-- Step 6 -->
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(6)); ?>" alt="改善・機能追加" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">06</span>
              <h3>改善・機能追加</h3>
              <p>
                フィードバックをもとに改善を実施。必要な機能を追加し、不要な機能は削除。柔軟に仕様を調整します。
              </p>
            </div>
          </li>

          <div class="p-flow--arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <!-- Step 7 -->
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(7)); ?>" alt="継続的成長サイクル" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">07</span>
              <h3>継続的成長サイクル</h3>
              <p>
                このサイクルを繰り返すことで、システムは成長し続けます。ビジネスの変化に対応しながら、常に最適な形を保ちます。
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="l-section p-faq">
  <div class="container">
    <div class="section__header">
      <h2 class="p-faq__title">よくあるご質問</h2>
    </div>
    <div class="section__body">
      <div class="p-faq__list">
        <?php
        $faq_args = array(
          'post_type' => 'faq',
          'posts_per_page' => -1,
          'tax_query' => array(
            array(
              'taxonomy' => 'faq-cat',
              'field' => 'slug',
              'terms' => 'system-development'
            )
          ),
          'orderby' => 'date',
          'order' => 'ASC'
        );
        $faq_query = new WP_Query($faq_args);

        if ($faq_query->have_posts()) :
          while ($faq_query->have_posts()) : $faq_query->the_post();
        ?>
            <div class="p-faq__item">
              <div class="p-faq__question">
                <span class="p-faq__question--label">Q</span>
                <h3 class="p-faq__question--text"><?php the_title(); ?></h3>
              </div>
              <div class="p-faq__answer">
                <span class="p-faq__answer--label">A</span>
                <div class="p-faq__answer--text">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          <?php
          endwhile;
          wp_reset_postdata();
        else :
          ?>
          <p>現在FAQはありません。</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>