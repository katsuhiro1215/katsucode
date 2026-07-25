<?php

/**
 * Template Name: App Development Detail
 * Description: アプリ開発サービス詳細ページ
 * Katsucode WordPress Theme Setup
 * @author Katsuhiro Kakoi <katsuhiro.k1215@katsucode.jp>
 * @link  https://katsucode.jp/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later * 
 */
if (!defined('ABSPATH')) exit;
get_header();
?>

<!-- Service Detail Intro -->
<section class="l-section p-page__intro p-service-detail__intro">
  <div class="container">
    <div class="section__header">
      <p class="section__header--lead"> iOS・Androidアプリ、業務用アプリ、ネイティブアプリ、ハイブリッドアプリなど、<br />
        お客様のニーズに合わせた最適なアプリを開発します。<br>React Native、Flutterなどのクロスプラットフォーム開発により、iOS・Android両対応のアプリを効率的に制作。<br />
        開発コストを抑えながら、高品質なアプリをリリースできます。</p>
    </div>
    <div class="section__body">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/step1.jpg" alt="アプリ開発イメージ">
    </div>
  </div>
</section>

<!-- Strengths -->
<section class="l-section p-service-detail__content-plans">
  <div class="container">
    <div class="section__header">
      <h2 class="p-service-detail__section-title">アプリ開発の強み</h2>
      <div class="p-service-detail__content-plans--intro">
        かつコードのアプリ開発は、ユーザー目線を大切にします。<br>
        使いやすさ、デザイン性、パフォーマンスにこだわり、長く愛されるアプリを作ります。
      </div>
    </div>
    <div class="section__body">
      <ul class="c-list__price">
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">クロスプラットフォーム対応</p>
          </div>
          <div class="c-list__price--body">
            <p class="c-list__price--lead">
              React Native、Flutterを使い、iOS・Android両対応のアプリを効率的に開発します。
            </p>
          </div>
        </li>
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">UI/UX重視の設計</p>
          </div>
          <div class="c-list__price--body">
            <p class="c-list__price--lead">
              ユーザーが直感的に操作できるUI、心地よいアニメーションなど、使いやすさを追求します。
            </p>
          </div>
        </li>
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">ストア申請サポート</p>
          </div>
          <div class="c-list__price--body">
            <p class="c-list__price--lead">
              App Store、Google Playの審査対応、スクリーンショット作成など、リリースまで全面サポートします。
            </p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- Pricing Plans -->
<section class="l-section p-service-detail__plans">
  <div class="container">
    <div class="section__header">
      <h2 class="p-service-detail__section-title">料金プラン</h2>
      <p class="p-service-detail__plans--intro">
        あなたの「アプリ規模」に合わせて選べる3つのプラン。<br>
        基本機能で始めたい、本格的に展開したい、大規模構築したい——ビジネスの状況に最適なプランをお選びください。
      </p>
    </div>
    <div class="section__body">
      <ul class="c-list__price">
        <!-- シンプルプラン -->
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">シンプルプラン</p>
            <p class="c-list__price--subtitle">基本機能で始めたい方向け</p>
            <p class="c-list__price--price">
              初期費用<span>80</span>万円〜
            </p>
          </div>
          <div class="c-list__price--body">
            <div class="c-list__price--target">
              <p class="c-list__price--target-title">こんな方におすすめ</p>
              <ul class="c-list__price--target-list">
                <li>まずは低コストでアプリを作りたい</li>
                <li>基本的な機能だけ実装したい</li>
                <li>早くリリースして市場の反応を見たい</li>
              </ul>
            </div>
            <p class="c-list__price--lead">
              基本的な機能を備えたアプリを開発します。iOS・Android両対応で必要最小限の機能を実装します。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">期待できる成果</dt>
              <dd class="c-list__price--features-text">
                アプリ公開、ブランド認知向上<br>
                <small>※2〜3ヶ月で基本アプリをリリース</small>
              </dd>

              <dt class="c-list__price--features-header">開発期間</dt>
              <dd class="c-list__price--features-text">2〜3ヶ月</dd>

              <dt class="c-list__price--features-header">画面数</dt>
              <dd class="c-list__price--features-text">5〜10画面</dd>

              <dt class="c-list__price--features-header">対応OS</dt>
              <dd class="c-list__price--features-text">iOS・Android両対応</dd>

              <dt class="c-list__price--features-header">機能</dt>
              <dd class="c-list__price--features-text">
                ログイン、一覧表示、詳細表示、プッシュ通知など基本機能
              </dd>

              <dt class="c-list__price--features-header">デザイン</dt>
              <dd class="c-list__price--features-text">テンプレートベース</dd>

              <dt class="c-list__price--features-header">ストア申請サポート</dt>
              <dd class="c-list__price--features-text">◯</dd>
            </dl>
          </div>
        </li>

        <!-- スタンダードプラン（人気） -->
        <li class="c-list__price--item c-list__price--item-popular">
          <span class="c-list__price--badge">人気No.1</span>
          <div class="c-list__price--header">
            <p class="c-list__price--title">スタンダードプラン</p>
            <p class="c-list__price--subtitle">本格的にアプリ展開したい方向け</p>
            <p class="c-list__price--price">
              初期費用<span>150</span>万円〜
            </p>
          </div>
          <div class="c-list__price--body">
            <div class="c-list__price--target">
              <p class="c-list__price--target-title">こんな方におすすめ</p>
              <ul class="c-list__price--target-list">
                <li>充実した機能で差別化したい</li>
                <li>オリジナルデザインで作りたい</li>
                <li>決済機能・会員機能を実装したい</li>
              </ul>
            </div>
            <p class="c-list__price--lead">
              充実した機能、こだわりのデザインでアプリを開発します。決済機能や会員管理も実装可能です。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">期待できる成果</dt>
              <dd class="c-list__price--features-text">
                ユーザー獲得、売上向上<br>
                <small>※3〜5ヶ月で本格的なアプリをリリース</small>
              </dd>

              <dt class="c-list__price--features-header">開発期間</dt>
              <dd class="c-list__price--features-text">3〜5ヶ月</dd>

              <dt class="c-list__price--features-header">画面数</dt>
              <dd class="c-list__price--features-text">10〜20画面</dd>

              <dt class="c-list__price--features-header">対応OS</dt>
              <dd class="c-list__price--features-text">iOS・Android両対応</dd>

              <dt class="c-list__price--features-header">機能</dt>
              <dd class="c-list__price--features-text">
                決済機能、会員機能、管理画面、API連携、カスタムデザインなど
              </dd>

              <dt class="c-list__price--features-header">デザイン</dt>
              <dd class="c-list__price--features-text">
                オリジナルデザイン<br>
                <small>UIUXデザイナーが設計</small>
              </dd>

              <dt class="c-list__price--features-header">ストア申請サポート</dt>
              <dd class="c-list__price--features-text">◎（リリースまで徹底サポート）</dd>

              <dt class="c-list__price--features-header">特典</dt>
              <dd class="c-list__price--features-text">
                ✓ 機能追加割引<br>
                ✓ 優先対応<br>
                ✓ 月次レポート提供
              </dd>
            </dl>
          </div>
        </li>

        <!-- プレミアムプラン -->
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">プレミアムプラン</p>
            <p class="c-list__price--subtitle">大規模・高機能アプリを構築したい方向け</p>
            <p class="c-list__price--price">
              初期費用<span>300</span>万円〜
            </p>
          </div>
          <div class="c-list__price--body">
            <div class="c-list__price--target">
              <p class="c-list__price--target-title">こんな方におすすめ</p>
              <ul class="c-list__price--target-list">
                <li>大規模・複雑な機能を実装したい</li>
                <li>リアルタイム通信・GPS・IoT連携が必要</li>
                <li>セキュリティ・スケーラビリティを重視したい</li>
              </ul>
            </div>
            <p class="c-list__price--lead">
              大規模アプリ、複雑な機能を持つアプリを開発します。リアルタイム通信、GPS、IoT連携など高度な機能も実装可能です。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">期待できる成果</dt>
              <dd class="c-list__price--features-text">
                大規模展開、ビジネス拡大<br>
                <small>※6ヶ月〜で高機能アプリをリリース</small>
              </dd>

              <dt class="c-list__price--features-header">開発期間</dt>
              <dd class="c-list__price--features-text">6ヶ月〜</dd>

              <dt class="c-list__price--features-header">画面数</dt>
              <dd class="c-list__price--features-text">20画面以上</dd>

              <dt class="c-list__price--features-header">対応OS</dt>
              <dd class="c-list__price--features-text">iOS・Android両対応</dd>

              <dt class="c-list__price--features-header">機能</dt>
              <dd class="c-list__price--features-text">
                リアルタイム通信、GPS連携、SNS連携、動画配信、IoT連携など高度な機能
              </dd>

              <dt class="c-list__price--features-header">デザイン</dt>
              <dd class="c-list__price--features-text">
                フルカスタムデザイン<br>
                <small>徹底的なUX設計</small>
              </dd>

              <dt class="c-list__price--features-header">ストア申請サポート</dt>
              <dd class="c-list__price--features-text">◎（リリースまで徹底サポート）</dd>

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
        アプリリリース後も、継続的なメンテナンスで安定運用をサポートします。
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
              <dt class="c-list__price--features-header">バグ修正</dt>
              <dd class="c-list__price--features-text">軽微なバグ修正対応(月1回まで)。</dd>
              <dt class="c-list__price--features-header">OS対応</dt>
              <dd class="c-list__price--features-text">iOS・Androidのバージョンアップ対応。</dd>
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
              定期バグ修正、アップデート対応を含むプラン。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">バグ修正</dt>
              <dd class="c-list__price--features-text">バグ修正対応(月2回まで)。</dd>
              <dt class="c-list__price--features-header">OS対応</dt>
              <dd class="c-list__price--features-text">iOS・Androidのバージョンアップ対応。</dd>
              <dt class="c-list__price--features-header">ストア更新</dt>
              <dd class="c-list__price--features-text">アプリストア更新作業代行。</dd>

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
              改善提案、小規模機能追加まで含む最充実プラン。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">バグ修正</dt>
              <dd class="c-list__price--features-text">バグ修正対応(回数無制限)。</dd>
              <dt class="c-list__price--features-header">OS対応</dt>
              <dd class="c-list__price--features-text">iOS・Androidのバージョンアップ対応。</dd>
              <dt class="c-list__price--features-header">月次レポート作成</dt>
              <dd class="c-list__price--features-text">メンテナンス内容をまとめたレポートを作成します。</dd>
              <dt class="c-list__price--features-header">機能追加</dt>
              <dd class="c-list__price--features-text">小規模機能追加対応(月1回)。</dd>
              <dt class="c-list__price--features-header">改善提案</dt>
              <dd class="c-list__price--features-text">月次レポート、改善提案を実施。</dd>
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
      <p class="p-service-detail__case-studies--intro">アプリ開発の実績をご紹介します</p>
    </div>
    <div class="section__body">
      <div class="p-service-detail__case-studies--grid">
        <div class="p-service-detail__case-study--item">
          <div class="p-service-detail__case-study--image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/default.jpg" alt="飲食店G社">
            <span class="p-service-detail__case-study--category">店舗アプリ</span>
          </div>
          <div class="p-service-detail__case-study--content">
            <h3 class="p-service-detail__case-study--title">飲食店G社</h3>
            <p class="p-service-detail__case-study--description">
              来店ポイント、クーポン配信、予約機能を搭載。リピート率が35%向上しました。
            </p>
            <ul class="p-service-detail__case-study--tags">
              <li>React Native</li>
              <li>飲食店</li>
              <li>リピート率UP</li>
            </ul>
          </div>
        </div>
        <div class="p-service-detail__case-study--item">
          <div class="p-service-detail__case-study--image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/default.jpg" alt="フィットネスH社">
            <span class="p-service-detail__case-study--category">会員管理アプリ</span>
          </div>
          <div class="p-service-detail__case-study--content">
            <h3 class="p-service-detail__case-study--title">フィットネスH社</h3>
            <p class="p-service-detail__case-study--description">
              レッスン予約、出席履歴管理、トレーナーとのチャット機能を実装。会員満足度向上。
            </p>
            <ul class="p-service-detail__case-study--tags">
              <li>Flutter</li>
              <li>フィットネス</li>
              <li>会員管理</li>
            </ul>
          </div>
        </div>
        <div class="p-service-detail__case-study--item">
          <div class="p-service-detail__case-study--image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/default.jpg" alt="物流I社">
            <span class="p-service-detail__case-study--category">配送管理アプリ</span>
          </div>
          <div class="p-service-detail__case-study--content">
            <h3 class="p-service-detail__case-study--title">物流I社</h3>
            <p class="p-service-detail__case-study--description">
              リアルタイム位置情報、配送状況共有、署名機能を搭載。配送効率が20%改善。
            </p>
            <ul class="p-service-detail__case-study--tags">
              <li>ネイティブアプリ</li>
              <li>物流</li>
              <li>効率改善</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Service Types -->
<section class="l-section p-service-detail__plans">
  <div class="container">
    <div class="section__header">
      <h2 class="p-service-detail__section-title">開発対応アプリ</h2>
    </div>
    <div class="section__body">
      <div class="p-service-detail__additional--grid">
        <div class="p-service-detail__additional--item">
          <h3>業務用アプリ</h3>
          <p class="p-service-detail__additional--price">150万円〜</p>
          <p class="p-service-detail__additional--description">
            営業支援、在庫管理、勤怠管理など、社内業務を効率化するアプリを開発します。
          </p>
        </div>
        <div class="p-service-detail__additional--item">
          <h3>店舗アプリ</h3>
          <p class="p-service-detail__additional--price">100万円〜</p>
          <p class="p-service-detail__additional--description">
            ポイントカード、クーポン配信、予約機能などを搭載した店舗アプリを制作します。
          </p>
        </div>
        <div class="p-service-detail__additional--item">
          <h3>SNS・コミュニティアプリ</h3>
          <p class="p-service-detail__additional--price">200万円〜</p>
          <p class="p-service-detail__additional--description">
            ユーザー同士が交流できるSNS、コミュニティプラットフォームを開発します。
          </p>
        </div>
        <div class="p-service-detail__additional--item">
          <h3>ゲームアプリ</h3>
          <p class="p-service-detail__additional--price">300万円〜</p>
          <p class="p-service-detail__additional--description">
            カジュアルゲーム、パズルゲームなど、エンタメ性の高いアプリを開発します。
          </p>
        </div>
        <div class="p-service-detail__additional--item">
          <h3>IoT連携アプリ</h3>
          <p class="p-service-detail__additional--price">200万円〜</p>
          <p class="p-service-detail__additional--description">
            デバイスと連携し、データ収集・制御を行うIoTアプリを開発します。
          </p>
        </div>
        <div class="p-service-detail__additional--item">
          <h3>その他カスタムアプリ</h3>
          <p class="p-service-detail__additional--price">ご相談ください</p>
          <p class="p-service-detail__additional--description">
            上記以外のアプリも開発可能です。アイデアをお聞かせください。
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Production Flow -->
<section class="l-section p-service-detail__flow">
  <div class="container">
    <div class="section__header">
      <h2 class="p-service-detail__section-title">開発の流れ</h2>
    </div>
    <div class="section__body">
      <ul class="p-flow__main--list">
        <li class="p-flow__main--item">
          <figure>
            <img src="<?php echo esc_url(katsucode_flow_image(1)); ?>" alt="" />
          </figure>
          <div class="p-flow__main--info">
            <span class="number">01</span>
            <h3 class="p-service-detail__flow--title">企画・ヒアリング</h3>
            <p>
              アプリの目的、ターゲットユーザー、搭載機能、予算などを詳しくヒアリング。企画を固めます。
            </p>
          </div>
        </li>

        <div class="p-flow--arrow">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <li class="p-flow__main--item">
          <figure>
            <img src="<?php echo esc_url(katsucode_flow_image(2)); ?>" alt="" />
          </figure>
          <div class="p-flow__main--info">
            <span class="number">02</span>
            <h3 class="p-service-detail__flow--title">要件定義・技術選定</h3>
            <p>
              必要な機能を洗い出し、要件定義書を作成。ネイティブ/ハイブリッドなど、最適な開発手法を選定します。
            </p>
          </div>
        </li>

        <div class="p-flow--arrow">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <li class="p-flow__main--item">
          <figure>
            <img src="<?php echo esc_url(katsucode_flow_image(3)); ?>" alt="" />
          </figure>
          <div class="p-flow__main--info">
            <span class="number">03</span>
            <h3 class="p-service-detail__flow--title">UI/UX設計</h3>
            <p>
              画面遷移図、ワイヤーフレームを作成。ユーザーが直感的に操作できるUI/UXを設計します。
            </p>
          </div>
        </li>

        <div class="p-flow--arrow">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <li class="p-flow__main--item">
          <figure>
            <img src="<?php echo esc_url(katsucode_flow_image(4)); ?>" alt="" />
          </figure>
          <div class="p-flow__main--info">
            <span class="number">04</span>
            <h3 class="p-service-detail__flow--title">デザイン制作</h3>
            <p>
              アプリのデザインを制作。ブランドイメージに合った配色、アイコン、ボタンデザインを作成します。
            </p>
          </div>
        </li>

        <div class="p-flow--arrow">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <li class="p-flow__main--item">
          <figure>
            <img src="<?php echo esc_url(katsucode_flow_image(5)); ?>" alt="" />
          </figure>
          <div class="p-flow__main--info">
            <span class="number">05</span>
            <h3 class="p-service-detail__flow--title">開発・実装</h3>
            <p>
              設計に基づいて開発を実施。定期的に動作確認を行い、仕様調整も可能です。
            </p>
          </div>
        </li>

        <div class="p-flow--arrow">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <li class="p-flow__main--item">
          <figure>
            <img src="<?php echo esc_url(katsucode_flow_image(6)); ?>" alt="" />
          </figure>
          <div class="p-flow__main--info">
            <span class="number">06</span>
            <h3 class="p-service-detail__flow--title">テスト</h3>
            <p>
              各種デバイスでの動作確認、バグ修正、パフォーマンスチューニングを行います。
            </p>
          </div>
        </li>

        <div class="p-flow--arrow">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <li class="p-flow__main--item">
          <figure>
            <img src="<?php echo esc_url(katsucode_flow_image(7)); ?>" alt="" />
          </figure>
          <div class="p-flow__main--info">
            <span class="number">07</span>
            <h3 class="p-service-detail__flow--title">ストア申請・リリース</h3>
            <p>
              App Store、Google Playへ申請。審査対応を行い、リリースまでサポートします。
            </p>
          </div>
        </li>

        <div class="p-flow--arrow">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <li class="p-flow__main--item">
          <figure>
            <img src="<?php echo esc_url(katsucode_flow_image(8)); ?>" alt="" />
          </figure>
          <div class="p-flow__main--info">
            <span class="number">08</span>
            <h3 class="p-service-detail__flow--title">運用・アップデート</h3>
            <p>
              バグ修正、機能追加、OSバージョン対応など、継続的にアプリを改善・維持します。
            </p>
          </div>
        </li>
      </ul>
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
              'terms' => 'app-development'
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