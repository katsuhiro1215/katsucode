<?php

/**
 * Template Name: EC Production Detail
 * Description: ECサイト制作サービス詳細ページ
 * Katsucode WordPress Theme Setup
 * @author Katsuhiro Kakoi <katsuhiro.k1215@katsucode.jp>
 * @link  https://katsucode.jp/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later * 
 */
if (!defined('ABSPATH')) exit;
get_header();
?>

<!-- Service Detail Intro Section -->
<section class="l-section p-page__intro p-service-detail__intro">
  <div class="container">
    <div class="section__header">
      <p class="section__header--lead">
        売れるECサイトの構築から、商品登録、決済システムの導入、運用サポートまで一貫して対応します。<br>
        お客様の商品をより多くの方に届けられるよう、販売戦略から技術面まで総合的にサポートいたします。
      </p>
    </div>
    <div class="section__body">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/step1.jpg" alt="アプリ開発イメージ">
    </div>
  </div>
</section>

<!-- Content Plans Section -->
<section class="l-section p-service-detail__content-plans">
  <div class="container">
    <div class="section__header">
      <h2 class="p-service-detail__section-title">ECサイト制作の強み</h2>
    </div>
    <div class="section__body">
      <div class="c-list__price">
        <div class="c-list__price--item">
          <div class="c-list__price--header">
            <h3>商品登録・初期設定まで<br>丸ごとサポート</h3>
          </div>
          <div class="c-list__price--body">
            <p>
              ECサイトの構築だけでなく、商品の登録作業や在庫管理の設定など、販売開始に必要な初期設定をすべてサポートします。<br>
              膨大な商品データの登録もお任せください。CSVでの一括登録にも対応しています。
            </p>
          </div>
        </div>
        <div class="c-list__price--item">
          <div class="c-list__price--header">
            <h3>安全な決済システム</h3>
          </div>
          <div class="c-list__price--body">
            <p>
              クレジットカード、銀行振込、代引き、コンビニ決済など、お客様のニーズに合った決済手段を導入します。<br>
              セキュリティ対策も万全で、SSL証明書の導入やPCI DSS準拠の決済システムを採用。安心して販売できる環境を構築します。
            </p>
          </div>
        </div>
        <div class="c-list__price--item">
          <div class="c-list__price--header">
            <h3>売上向上のための<br>分析・改善</h3>
          </div>
          <div class="c-list__price--body">
            <p>
              Googleアナリティクスとの連携で、アクセス数や購入率、離脱ポイントなどを可視化。<br>
              データをもとにした改善提案を行い、継続的な売上向上をサポートします。ABテストで効果的な施策を見つけ出します。
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Plans -->
<section class="l-section p-service-detail__plans">
  <div class="container">
    <div class="section__header">
      <h2 class="p-service-detail__section-title">料金プラン</h2>
      <p class="p-service-detail__plans--intro">
        あなたの「販売規模」に合わせて選べる3つのプラン。<br>
        小さく始めたい、本格的に売りたい、大規模展開したい——目的に最適なプランをお選びください。
      </p>
    </div>
    <div class="section__body">
      <ul class="c-list__price">
        <!-- スタータープラン -->
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">スタータープラン</p>
            <p class="c-list__price--subtitle">小さく始めてテストしたい方向け</p>
            <p class="c-list__price--price">
              初期費用<span>50</span>万円〜
            </p>
          </div>
          <div class="c-list__price--body">
            <div class="c-list__price--target">
              <p class="c-list__price--target-title">こんな方におすすめ</p>
              <ul class="c-list__price--target-list">
                <li>まずは小規模でEC販売を始めたい</li>
                <li>初期コストを抑えて試したい</li>
                <li>シンプルな販売機能で十分</li>
              </ul>
            </div>
            <p class="c-list__price--lead">
              これからECを始める方向けのプラン。必要最低限の機能で販売を開始できます。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">期待できる成果</dt>
              <dd class="c-list__price--features-text">
                オンライン販売の開始、新規顧客獲得<br>
                <small>※まずは月商10〜30万円を目指す</small>
              </dd>

              <dt class="c-list__price--features-header">商品登録</dt>
              <dd class="c-list__price--features-text">50点まで</dd>

              <dt class="c-list__price--features-header">決済機能</dt>
              <dd class="c-list__price--features-text">
                基本的な決済<br>
                <small>クレジットカード、銀行振込</small>
              </dd>

              <dt class="c-list__price--features-header">在庫管理</dt>
              <dd class="c-list__price--features-text">基本機能</dd>

              <dt class="c-list__price--features-header">スマホ対応</dt>
              <dd class="c-list__price--features-text">◯</dd>

              <dt class="c-list__price--features-header">SSL証明書</dt>
              <dd class="c-list__price--features-text">◎</dd>

              <dt class="c-list__price--features-header">制作期間</dt>
              <dd class="c-list__price--features-text">1.5〜2ヶ月ほど</dd>

              <dt class="c-list__price--features-header">会員機能</dt>
              <dd class="c-list__price--features-text">-</dd>

              <dt class="c-list__price--features-header">運用サポート</dt>
              <dd class="c-list__price--features-text">3ヶ月無料</dd>
            </dl>
          </div>
        </li>

        <!-- ビジネスプラン（人気） -->
        <li class="c-list__price--item c-list__price--item-popular">
          <span class="c-list__price--badge">人気No.1</span>
          <div class="c-list__price--header">
            <p class="c-list__price--title">ビジネスプラン</p>
            <p class="c-list__price--subtitle">本格的にEC事業を展開したい方向け</p>
            <p class="c-list__price--price">
              初期費用<span>100</span>万円〜
            </p>
          </div>
          <div class="c-list__price--body">
            <div class="c-list__price--target">
              <p class="c-list__price--target-title">こんな方におすすめ</p>
              <ul class="c-list__price--target-list">
                <li>ECを本業として売上を伸ばしたい</li>
                <li>リピーター獲得の仕組みが欲しい</li>
                <li>競合に負けない機能が必要</li>
              </ul>
            </div>
            <p class="c-list__price--lead">
              本格的にEC事業を展開したい方向けのプラン。売上向上のための機能が充実しています。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">期待できる成果</dt>
              <dd class="c-list__price--features-text">
                売上向上、リピート率UP、顧客単価UP<br>
                <small>※半年で月商100万円超を目指す</small>
              </dd>

              <dt class="c-list__price--features-header">商品登録</dt>
              <dd class="c-list__price--features-text">200点まで</dd>

              <dt class="c-list__price--features-header">決済機能</dt>
              <dd class="c-list__price--features-text">
                複数の決済手段<br>
                <small>クレカ、コンビニ、代引き、後払い</small>
              </dd>

              <dt class="c-list__price--features-header">会員機能</dt>
              <dd class="c-list__price--features-text">
                ◎（ポイントシステム付き）
              </dd>

              <dt class="c-list__price--features-header">在庫管理</dt>
              <dd class="c-list__price--features-text">
                高度な管理機能<br>
                <small>サイズ・カラー展開対応</small>
              </dd>

              <dt class="c-list__price--features-header">クーポン・セール</dt>
              <dd class="c-list__price--features-text">◎</dd>

              <dt class="c-list__price--features-header">レビュー・評価</dt>
              <dd class="c-list__price--features-text">◎</dd>

              <dt class="c-list__price--features-header">アクセス解析</dt>
              <dd class="c-list__price--features-text">
                ◎（Googleアナリティクス連携）
              </dd>

              <dt class="c-list__price--features-header">制作期間</dt>
              <dd class="c-list__price--features-text">2〜3ヶ月ほど</dd>

              <dt class="c-list__price--features-header">運用サポート</dt>
              <dd class="c-list__price--features-text">6ヶ月無料</dd>

              <dt class="c-list__price--features-header">特典</dt>
              <dd class="c-list__price--features-text">
                ✓ 商品登録代行（月5点）<br>
                ✓ 優先対応
              </dd>
            </dl>
          </div>
        </li>

        <!-- プレミアムプラン -->
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">プレミアムプラン</p>
            <p class="c-list__price--subtitle">大規模展開で売上を最大化したい方向け</p>
            <p class="c-list__price--price">
              初期費用<span>200</span>万円〜
            </p>
          </div>
          <div class="c-list__price--body">
            <div class="c-list__price--target">
              <p class="c-list__price--target-title">こんな方におすすめ</p>
              <ul class="c-list__price--target-list">
                <li>大規模ECで売上を最大化したい</li>
                <li>独自機能で差別化したい</li>
                <li>複数チャネルで在庫連携したい</li>
              </ul>
            </div>
            <p class="c-list__price--lead">
              大規模ECサイトや独自機能が必要な方向けのプラン。売上最大化のための施策を総合サポートします。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">期待できる成果</dt>
              <dd class="c-list__price--features-text">
                大幅な売上向上、ブランド確立<br>
                <small>※1年で月商500万円超を目指す</small>
              </dd>

              <dt class="c-list__price--features-header">商品登録</dt>
              <dd class="c-list__price--features-text">無制限</dd>

              <dt class="c-list__price--features-header">決済機能</dt>
              <dd class="c-list__price--features-text">
                全決済手段対応<br>
                <small>クレカ、各種電子マネー、後払いなど</small>
              </dd>

              <dt class="c-list__price--features-header">会員機能</dt>
              <dd class="c-list__price--features-text">
                ◎（ポイント・ランク制度）
              </dd>

              <dt class="c-list__price--features-header">在庫管理</dt>
              <dd class="c-list__price--features-text">
                外部システム連携<br>
                <small>在庫・会計システム連携</small>
              </dd>

              <dt class="c-list__price--features-header">定期購入</dt>
              <dd class="c-list__price--features-text">◎</dd>

              <dt class="c-list__price--features-header">レコメンド機能</dt>
              <dd class="c-list__price--features-text">◎</dd>

              <dt class="c-list__price--features-header">多言語・多通貨</dt>
              <dd class="c-list__price--features-text">◎</dd>

              <dt class="c-list__price--features-header">SEO対策</dt>
              <dd class="c-list__price--features-text">
                高度な対策（構造化データ等）
              </dd>

              <dt class="c-list__price--features-header">ABテスト</dt>
              <dd class="c-list__price--features-text">◎</dd>

              <dt class="c-list__price--features-header">制作期間</dt>
              <dd class="c-list__price--features-text">3〜5ヶ月ほど</dd>

              <dt class="c-list__price--features-header">運用サポート</dt>
              <dd class="c-list__price--features-text">12ヶ月無料</dd>

              <dt class="c-list__price--features-header">特典</dt>
              <dd class="c-list__price--features-text">
                ✓ 商品登録代行（月10点）<br>
                ✓ 月次売上分析レポート<br>
                ✓ 改善提案<br>
                ✓ 優先対応
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
        ECサイト公開後も、定期的なメンテナンスで安定運用をサポートします。
      </p>
    </div>
    <div class="section__body">
      <ul class="c-list__price">
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">シンプルプラン</p>
            <p class="c-list__price--price"><span>8,000</span>円/月</p>
          </div>
          <div class="c-list__price--body">
            <p class="c-list__price--lead">
              基本的なメンテナンスを行うプランです。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">サーバー管理</dt>
              <dd class="c-list__price--features-text">基本的なサーバー管理を行います。</dd>
              <dt class="c-list__price--features-header">セキュリティ対策</dt>
              <dd class="c-list__price--features-text">SSL証明書の更新、セキュリティ監視。</dd>
            </dl>
          </div>
        </li>
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">スタンダードプラン</p>
            <p class="c-list__price--price"><span>10,000</span>円/月</p>
          </div>
          <div class="c-list__price--body">
            <p class="c-list__price--lead">
              定期バックアップ、商品登録サポートも含む充実プラン。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">サーバー管理</dt>
              <dd class="c-list__price--features-text">基本的なサーバー管理を行います。</dd>
              <dt class="c-list__price--features-header">定期バックアップ</dt>
              <dd class="c-list__price--features-text">ECサイトの定期的なバックアップを実施。</dd>
              <dt class="c-list__price--features-header">商品登録サポート</dt>
              <dd class="c-list__price--features-text">月5商品までの商品登録代行。</dd>
            </dl>
          </div>
        </li>
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">プレミアムプラン</p>
            <p class="c-list__price--price"><span>12,000</span>円/月</p>
          </div>
          <div class="c-list__price--body">
            <p class="c-list__price--lead">
              売上分析、改善提案まで含む最充実プラン。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">サーバー管理</dt>
              <dd class="c-list__price--features-text">基本的なサーバー管理を行います。</dd>
              <dt class="c-list__price--features-header">定期バックアップ</dt>
              <dd class="c-list__price--features-text">ECサイトの定期的なバックアップを実施。</dd>
              <dt class="c-list__price--features-header">商品登録サポート</dt>
              <dd class="c-list__price--features-text">月10商品までの商品登録代行。</dd>
              <dt class="c-list__price--features-header">売上分析レポート</dt>
              <dd class="c-list__price--features-text">月次の売上分析と改善提案。</dd>
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
      <p class="p-service-detail__case-studies--intro">ECサイト制作の実績をご紹介します</p>
    </div>
    <div class="section__body">
      <div class="p-service-detail__case-studies--grid">
        <div class="p-service-detail__case-study--item">
          <div class="p-service-detail__case-study--image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/default.jpg" alt="アパレルJ社">
            <span class="p-service-detail__case-study--category">ファッションEC</span>
          </div>
          <div class="p-service-detail__case-study--content">
            <h3 class="p-service-detail__case-study--title">アパレルJ社</h3>
            <p class="p-service-detail__case-study--description">
              オリジナルブランドの服飾EC。商品数150点以上、サイズ・カラー展開の在庫管理システム実装。開設3ヶ月で月間売上300万円突破。
            </p>
            <ul class="p-service-detail__case-study--tags">
              <li>EC-CUBE</li>
              <li>アパレル</li>
              <li>売上300万</li>
            </ul>
          </div>
        </div>
        <div class="p-service-detail__case-study--item">
          <div class="p-service-detail__case-study--image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/default.jpg" alt="食品K社">
            <span class="p-service-detail__case-study--category">特産品EC</span>
          </div>
          <div class="p-service-detail__case-study--content">
            <h3 class="p-service-detail__case-study--title">食品K社</h3>
            <p class="p-service-detail__case-study--description">
              地域特産品のオンライン販売。賞味期限管理、冷蔵・冷凍配送設定など食品EC特化機能を実装。定期購入でリピート率40%達成。
            </p>
            <ul class="p-service-detail__case-study--tags">
              <li>定期購入</li>
              <li>食品EC</li>
              <li>リピート40%</li>
            </ul>
          </div>
        </div>
        <div class="p-service-detail__case-study--item">
          <div class="p-service-detail__case-study--image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/default.jpg" alt="雑貨L社">
            <span class="p-service-detail__case-study--category">輸入雑貨EC</span>
          </div>
          <div class="p-service-detail__case-study--content">
            <h3 class="p-service-detail__case-study--title">雑貨L社</h3>
            <p class="p-service-detail__case-study--description">
              輸入雑貨ECのリニューアル。検索・レコメンド機能強化で平均購入単価1.5倍。実店舗・楽天・Yahoo!との在庫同期を実現。
            </p>
            <ul class="p-service-detail__case-study--tags">
              <li>在庫連携</li>
              <li>雑貨</li>
              <li>単価1.5倍</li>
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
      <h2 class="p-service-detail__section-title">ECサイト制作の流れ</h2>
    </div>
    <div class="section__body">
      <div class="p-flow__main">
        <div class="p-flow__main--item">
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow/step1.jpg" alt="ヒアリング・要件定義">
          </figure>
          <div class="p-flow__main--info">
            <p class="number">01</p>
            <h3>ヒアリング・要件定義</h3>
            <p>
              販売する商品の特性、ターゲット層、競合分析など、ECサイトの基盤となる情報をヒアリングします。<br>
              必要な決済手段や配送方法、在庫管理の方法など、運用面も含めて詳しく確認します。
            </p>
          </div>
        </div>

        <div class="p-flow--arrow">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <div class="p-flow__main--item">
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow/step2.jpg" alt="サイト設計・デザイン">
          </figure>
          <div class="p-flow__main--info">
            <p class="number">02</p>
            <h3>サイト設計・デザイン</h3>
            <p>
              商品カテゴリの構成や、ユーザーの購入導線を設計します。<br>
              ブランドイメージに合ったデザインを制作し、購入しやすいUI/UXを実現します。スマホでの購入体験も重視します。
            </p>
          </div>
        </div>

        <div class="p-flow--arrow">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <div class="p-flow__main--item">
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow/step3.jpg" alt="EC構築・機能実装">
          </figure>
          <div class="p-flow__main--info">
            <p class="number">03</p>
            <h3>EC構築・機能実装</h3>
            <p>
              WooCommerceやShopifyなど、最適なECプラットフォームを選定し、サイトを構築します。<br>
              カート機能、会員機能、在庫管理システムなど、必要な機能を実装していきます。
            </p>
          </div>
        </div>

        <div class="p-flow--arrow">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <div class="p-flow__main--item">
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow/step4.jpg" alt="商品登録・設定">
          </figure>
          <div class="p-flow__main--info">
            <p class="number">04</p>
            <h3>商品登録・設定</h3>
            <p>
              商品情報（名前・価格・説明文・画像）の登録を行います。大量の商品もCSV一括登録で効率的に対応します。<br>
              サイズ・カラー展開、在庫数、配送設定など、細かな設定もサポートします。
            </p>
          </div>
        </div>

        <div class="p-flow--arrow">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <div class="p-flow__main--item">
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow/step5.jpg" alt="決済・配送設定">
          </figure>
          <div class="p-flow__main--info">
            <p class="number">05</p>
            <h3>決済・配送設定</h3>
            <p>
              クレジットカード決済の契約代行から、各種決済手段の設定まで行います。<br>
              配送業者との連携設定、送料の設定、配送エリアの設定など、スムーズな配送体制を構築します。
            </p>
          </div>
        </div>

        <div class="p-flow--arrow">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <div class="p-flow__main--item">
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow/step6.jpg" alt="テスト注文・動作確認">
          </figure>
          <div class="p-flow__main--info">
            <p class="number">06</p>
            <h3>テスト注文・動作確認</h3>
            <p>
              実際に商品を購入する流れを確認します。カート投入から決済、注文完了メールの送信まで、すべての機能をテストします。<br>
              管理画面での注文管理や在庫更新も確認し、運用開始に備えます。
            </p>
          </div>
        </div>

        <div class="p-flow--arrow">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <div class="p-flow__main--item">
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow/step7.jpg" alt="本番公開・販売開始">
          </figure>
          <div class="p-flow__main--info">
            <p class="number">07</p>
            <h3>本番公開・販売開始</h3>
            <p>
              すべての確認が完了したら、いよいよ本番公開です。<br>
              公開後も初期のアクセス状況や注文状況を監視し、トラブルがあれば迅速に対応します。
            </p>
          </div>
        </div>

        <div class="p-flow--arrow">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <div class="p-flow__main--item">
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow/step8.jpg" alt="運用サポート・売上分析">
          </figure>
          <div class="p-flow__main--info">
            <p class="number">08</p>
            <h3>運用サポート・売上分析</h3>
            <p>
              販売開始後も、商品の追加登録や在庫管理のサポートを継続します。<br>
              Googleアナリティクスのデータを分析し、購入率向上のための改善提案を行います。季節商品の入れ替えやセール設定もお任せください。
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="l-section p-faq">
  <div class="container">
    <div class="section__header">
      <h2 class="p-service-detail__section-title">よくある質問</h2>
    </div>
    <div class="section__body">
      <?php
      $faq_args = array(
        'post_type' => 'faq',
        'posts_per_page' => -1,
        'tax_query' => array(
          array(
            'taxonomy' => 'faq-cat',
            'field' => 'slug',
            'terms' => 'ec-site'
          )
        ),
        'orderby' => 'date',
        'order' => 'ASC'
      );
      $faq_query = new WP_Query($faq_args);

      if ($faq_query->have_posts()) : ?>
        <div class="p-faq__list">
          <?php while ($faq_query->have_posts()) : $faq_query->the_post(); ?>
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
          <?php endwhile; ?>
        </div>
      <?php else : ?>
        <p class="p-faq__empty">現在、FAQはありません。</p>
      <?php endif;
      wp_reset_postdata();
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
</div>
<div class="p-faq__answer">
  <span class="p-faq__answer--label">A</span>
  <div class="p-faq__answer--text">
    <p>
      WooCommerceはWordPressのプラグインで、自社サーバーで運用するため自由度が高く、カスタマイズ性に優れています。初期費用は比較的安価ですが、サーバー管理が必要です。<br>
      Shopifyはクラウド型のECプラットフォームで、月額料金制です。サーバー管理不要で運用が簡単ですが、カスタマイズには制限があります。販売規模や運用体制に応じて最適な方を提案します。
    </p>
  </div>
</div>
</div>

<div class="p-faq__item">
  <div class="p-faq__question">
    <span class="p-faq__question--label">Q</span>
    <h3 class="p-faq__question--text">どの決済手段に対応していますか？</h3>
  </div>
  <div class="p-faq__answer">
    <span class="p-faq__answer--label">A</span>
    <div class="p-faq__answer--text">
      <p>
        クレジットカード、銀行振込、代金引換、コンビニ決済、後払い、PayPay、楽天ペイ、Amazon Payなど、主要な決済手段に対応可能です。<br>
        お客様のターゲット層や商品特性に合わせて、最適な決済手段を選定します。決済代行会社との契約サポートも行います。
      </p>
    </div>
  </div>
</div>

<div class="p-faq__item">
  <div class="p-faq__question">
    <span class="p-faq__question--label">Q</span>
    <h3 class="p-faq__question--text">セキュリティ対策はどうなっていますか？</h3>
  </div>
  <div class="p-faq__answer">
    <span class="p-faq__answer--label">A</span>
    <div class="p-faq__answer--text">
      <p>
        SSL証明書の導入により、通信は暗号化されます。クレジットカード情報は決済代行会社のサーバーで処理されるため、お客様のサーバーには保存されません（PCI DSS準拠）。<br>
        また、不正アクセス対策、定期的なセキュリティアップデート、バックアップ体制の構築など、総合的なセキュリティ対策を実施します。
      </p>
    </div>
  </div>
</div>

<div class="p-faq__item">
  <div class="p-faq__question">
    <span class="p-faq__question--label">Q</span>
    <h3 class="p-faq__question--text">商品は何点まで登録できますか？</h3>
  </div>
  <div class="p-faq__answer">
    <span class="p-faq__answer--label">A</span>
    <div class="p-faq__answer--text">
      <p>
        プランによって異なりますが、プレミアムプランでは無制限に登録可能です。<br>
        大量の商品データがある場合は、CSV一括登録機能を使って効率的に登録できます。商品画像の加工やサイズ調整もサポートします。
      </p>
    </div>
  </div>
</div>

<div class="p-faq__item">
  <div class="p-faq__question">
    <span class="p-faq__question--label">Q</span>
    <h3 class="p-faq__question--text">在庫管理はどのように行いますか？</h3>
  </div>
  <div class="p-faq__answer">
    <span class="p-faq__answer--label">A</span>
    <div class="p-faq__answer--text">
      <p>
        ECサイト上で在庫数を管理でき、注文が入ると自動的に在庫が減っていきます。在庫切れ時には自動的に「売り切れ」表示になります。<br>
        複数の販売チャネル（実店舗・楽天・Yahooなど）がある場合は、在庫連携システムを構築し、リアルタイムで在庫を同期することも可能です。
      </p>
    </div>
  </div>
</div>

<div class="p-faq__item">
  <div class="p-faq__question">
    <span class="p-faq__question--label">Q</span>
    <h3 class="p-faq__question--text">楽天市場やYahoo!ショッピングとの連携はできますか？</h3>
  </div>
  <div class="p-faq__answer">
    <span class="p-faq__answer--label">A</span>
    <div class="p-faq__answer--text">
      <p>
        はい、可能です。自社ECサイトと楽天・Yahooなどのモール店舗で在庫や商品情報を一元管理するシステムを構築できます。<br>
        複数店舗を運営していても、効率的に管理できる体制を整えます。
      </p>
    </div>
  </div>
</div>

<div class="p-faq__item">
  <div class="p-faq__question">
    <span class="p-faq__question--label">Q</span>
    <h3 class="p-faq__question--text">定期購入（サブスクリプション）機能は実装できますか？</h3>
  </div>
  <div class="p-faq__answer">
    <span class="p-faq__answer--label">A</span>
    <div class="p-faq__answer--text">
      <p>
        はい、定期購入機能を実装できます。毎月・隔月など、お客様が選択した周期で自動的に商品を配送し、決済も自動処理されます。<br>
        食品や化粧品など、リピート購入が多い商品に最適です。定期購入者向けの割引設定やマイページ機能も実装可能です。
      </p>
    </div>
  </div>
</div>

<div class="p-faq__item">
  <div class="p-faq__question">
    <span class="p-faq__question--label">Q</span>
    <h3 class="p-faq__question--text">公開後の商品追加や更新は自分でできますか？</h3>
  </div>
  <div class="p-faq__answer">
    <span class="p-faq__answer--label">A</span>
    <div class="p-faq__answer--text">
      <p>
        はい、管理画面から簡単に商品の追加や更新ができます。納品時に操作マニュアルをお渡しし、使い方のレクチャーも行います。<br>
        不安な場合は、運用サポートプランで商品登録代行も承りますので、お気軽にご相談ください。
      </p>
    </div>
  </div>
</div>
</div>
</div>
</div>
</section>

<?php get_footer(); ?>