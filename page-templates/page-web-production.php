<?php

/**
 * Template Name: Web Production Detail
 * Description: Web制作サービス詳細ページ
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
      <p class="section__header--lead">
        かつコードのWeb制作サービスは、お客様のビジネス目標達成を最優先に考えた戦略的なWebサイト制作を提供します。<br />
        単なる「きれいなサイト」ではなく、「成果につながるサイト」を目指し、企画・設計から制作、運用・保守まで一貫してサポートいたします。<br />
        WordPressをベースにした更新しやすいサイト構築、レスポンシブデザインによる多デバイス対応、<br />
        SEOを意識した設計など、現代のWebサイトに求められる要素をすべて網羅しています。
      </p>
    </div>
    <div class="section__body">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/step1.jpg" alt="Web制作イメージ">
    </div>
  </div>
</section>

<!-- Strengths -->
<section class="l-section p-service-detail__content-plans">
  <div class="container">
    <div class="section__header">
      <h2 class="p-service-detail__section-title">かつコードの強み</h2>
      <div class="p-service-detail__content-plans--intro">
        「かつコード」を選ぶことで、どうなるのか。<br>
        他社との違いは何か。私たちの強みをご紹介します。
      </div>
    </div>
    <div class="section__body">
      <ul class="c-list__price">
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">戦略的な提案力</p>
          </div>
          <div class="c-list__price--body">
            <p class="c-list__price--lead">
              ヒアリングで課題を深掘りし、ビジネスゴールから逆算した戦略を提案。<br>
              デザイン案も「A案：ブランディング重視」「B案：集客・CV重視」など、戦略違いの複数案をご提示します。
            </p>
          </div>
        </li>
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">更新しやすいWordPress</p>
          </div>
          <div class="c-list__price--body">
            <p class="c-list__price--lead">
              専門知識不要で更新できるWordPressを採用。お知らせ、ブログ、お客様の声など、ご要望に合わせた更新機能を実装。<br>
              操作マニュアル付きで、納品後も安心して運用いただけます。
            </p>
          </div>
        </li>
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">制作後も伴走サポート</p>
          </div>
          <div class="c-list__price--body">
            <p class="c-list__price--lead">
              公開して終わりではありません。アクセス解析レポート、改善提案、記事作成代行など、継続的にサポート。<br>
              Webサイトを「育てる」ことで、じわじわと成果を生み出します。
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
        あなたの「目的」に合わせて選べる3つのプラン。<br>
        早く始めたい、集客したい、成果を最大化したい——お客様の状況に最適なプランをお選びください。
      </p>
    </div>
    <div class="section__body">
      <ul class="c-list__price">
        <!-- シンプルプラン -->
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">シンプルプラン</p>
            <p class="c-list__price--subtitle">まずは形にしたい方向け</p>
            <p class="c-list__price--price">
              初期費用<span>30</span>万円〜
            </p>
          </div>
          <div class="c-list__price--body">
            <div class="c-list__price--target">
              <p class="c-list__price--target-title">こんな方におすすめ</p>
              <ul class="c-list__price--target-list">
                <li>とにかく早く、低コストで始めたい</li>
                <li>まずは会社情報を発信したい</li>
                <li>名刺代わりのサイトが欲しい</li>
              </ul>
            </div>
            <p class="c-list__price--lead">
              会社の名刺代わりとなるシンプルなプランです。必要最小限の機能で低コストを実現。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">期待できる成果</dt>
              <dd class="c-list__price--features-text">
                会社情報の発信、信頼性の向上<br>
                <small>※まずはWeb上の存在を確立</small>
              </dd>

              <dt class="c-list__price--features-header">スマホ・タブレット対応</dt>
              <dd class="c-list__price--features-text">◯</dd>

              <dt class="c-list__price--features-header">お問い合わせ機能</dt>
              <dd class="c-list__price--features-text">◯</dd>

              <dt class="c-list__price--features-header">SEO対策</dt>
              <dd class="c-list__price--features-text">△（基本のみ）</dd>

              <dt class="c-list__price--features-header">制作期間</dt>
              <dd class="c-list__price--features-text">1〜2ヶ月ほど</dd>

              <dt class="c-list__price--features-header">ページ数</dt>
              <dd class="c-list__price--features-text">6ページほど</dd>

              <dt class="c-list__price--features-header">更新機能</dt>
              <dd class="c-list__price--features-text">
                1件<br>
                <small>例：お知らせ（News）</small>
              </dd>

              <dt class="c-list__price--features-header">原稿・写真</dt>
              <dd class="c-list__price--features-text">お客様にてご用意</dd>

              <dt class="c-list__price--features-header">デザイン案</dt>
              <dd class="c-list__price--features-text">1案</dd>

              <dt class="c-list__price--features-header">保守・運用</dt>
              <dd class="c-list__price--features-text">-</dd>
            </dl>
          </div>
        </li>

        <!-- スタンダードプラン（人気） -->
        <li class="c-list__price--item c-list__price--item-popular">
          <span class="c-list__price--badge">人気No.1</span>
          <div class="c-list__price--header">
            <p class="c-list__price--title">スタンダードプラン</p>
            <p class="c-list__price--subtitle">集客・問い合わせを増やしたい方向け</p>
            <p class="c-list__price--price">
              初期費用<span>60</span>万円〜
            </p>
          </div>
          <div class="c-list__price--body">
            <div class="c-list__price--target">
              <p class="c-list__price--target-title">こんな方におすすめ</p>
              <ul class="c-list__price--target-list">
                <li>Webから新規顧客を獲得したい</li>
                <li>お問い合わせ数を増やしたい</li>
                <li>SEOで上位表示を目指したい</li>
              </ul>
            </div>
            <p class="c-list__price--lead">
              ビジネスを成長させたい方向け。SEO対策を施し、常に改善策を打ち出し、企業様の成長を支援します。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">期待できる成果</dt>
              <dd class="c-list__price--features-text">
                検索上位表示、問い合わせ増加<br>
                <small>※平均3ヶ月で効果実感</small>
              </dd>

              <dt class="c-list__price--features-header">SEO対策</dt>
              <dd class="c-list__price--features-text">◎</dd>

              <dt class="c-list__price--features-header">アクセス解析</dt>
              <dd class="c-list__price--features-text">◎</dd>

              <dt class="c-list__price--features-header">スマホ・タブレット対応</dt>
              <dd class="c-list__price--features-text">◎</dd>

              <dt class="c-list__price--features-header">お問い合わせ機能</dt>
              <dd class="c-list__price--features-text">◎</dd>

              <dt class="c-list__price--features-header">制作期間</dt>
              <dd class="c-list__price--features-text">2〜3ヶ月ほど</dd>

              <dt class="c-list__price--features-header">ページ数</dt>
              <dd class="c-list__price--features-text">12ページほど</dd>

              <dt class="c-list__price--features-header">更新機能</dt>
              <dd class="c-list__price--features-text">
                2件<br>
                <small>例：お知らせ（News）+ お客様の声（Voice）<br>または FAQ、ブログなど</small>
              </dd>

              <dt class="c-list__price--features-header">原稿・写真</dt>
              <dd class="c-list__price--features-text">取材・作成</dd>

              <dt class="c-list__price--features-header">デザイン案</dt>
              <dd class="c-list__price--features-text">
                戦略違いの2案<br>
                <small>例：A案（ブランディング重視）<br>B案（集客・CV重視）</small>
              </dd>

              <dt class="c-list__price--features-header">保守・運用</dt>
              <dd class="c-list__price--features-text">1ヶ月無料</dd>

              <dt class="c-list__price--features-header">特典</dt>
              <dd class="c-list__price--features-text">
                ✓ 追加ページ割引<br>
                ✓ 優先対応<br>
                ✓ 軽微修正無料（月1回）
              </dd>
            </dl>
          </div>
        </li>

        <!-- プレミアムプラン -->
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">プレミアムプラン</p>
            <p class="c-list__price--subtitle">本気で成果を出したい方向け</p>
            <p class="c-list__price--price">
              初期費用<span>120</span>万円〜
            </p>
          </div>
          <div class="c-list__price--body">
            <div class="c-list__price--target">
              <p class="c-list__price--target-title">こんな方におすすめ</p>
              <ul class="c-list__price--target-list">
                <li>しっかり集客・売上につなげたい</li>
                <li>競合他社を圧倒したい</li>
                <li>継続的な成果向上を目指したい</li>
              </ul>
            </div>
            <p class="c-list__price--lead">
              大規模サイト向け。あらゆる手段を使って企業様を確実に成長させます。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">期待できる成果</dt>
              <dd class="c-list__price--features-text">
                継続的な売上向上、ブランド確立<br>
                <small>※半年〜1年で大きな成果</small>
              </dd>

              <dt class="c-list__price--features-header">SEO対策</dt>
              <dd class="c-list__price--features-text">◎（高度な施策）</dd>

              <dt class="c-list__price--features-header">アクセス解析</dt>
              <dd class="c-list__price--features-text">◎（月次レポート付）</dd>

              <dt class="c-list__price--features-header">スマホ・タブレット対応</dt>
              <dd class="c-list__price--features-text">◎</dd>

              <dt class="c-list__price--features-header">お問い合わせ機能</dt>
              <dd class="c-list__price--features-text">◎</dd>

              <dt class="c-list__price--features-header">制作期間</dt>
              <dd class="c-list__price--features-text">3〜4ヶ月ほど</dd>

              <dt class="c-list__price--features-header">ページ数</dt>
              <dd class="c-list__price--features-text">20ページ以上</dd>

              <dt class="c-list__price--features-header">更新機能</dt>
              <dd class="c-list__price--features-text">
                3件以上<br>
                <small>例：News + Voice + FAQ + Blog<br>カスタム投稿も対応</small>
              </dd>

              <dt class="c-list__price--features-header">原稿・写真</dt>
              <dd class="c-list__price--features-text">取材・作成・撮影</dd>

              <dt class="c-list__price--features-header">デザイン案</dt>
              <dd class="c-list__price--features-text">
                戦略違いの3案<br>
                <small>徹底的なユーザー分析に基づく提案</small>
              </dd>

              <dt class="c-list__price--features-header">保守・運用</dt>
              <dd class="c-list__price--features-text">3ヶ月無料</dd>

              <dt class="c-list__price--features-header">特典</dt>
              <dd class="c-list__price--features-text">
                ✓ 追加ページ大幅割引<br>
                ✓ 最優先対応<br>
                ✓ 軽微修正無料（月3回）<br>
                ✓ 月次レポート提供
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
    </div>
    <div class="section__body">
      <ul class="c-list__price">
        <!-- シンプルプラン -->
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">シンプルプラン</p>
            <p class="c-list__price--price"><span>8,000</span>円/月</p>
          </div>
          <div class="c-list__price--body">
            <p class="c-list__price--lead">
              サーバー管理、セキュリティ対策、WordPressアップデートなど、基本的なメンテナンスを行うプランです。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">
                サーバー管理
              </dt>
              <dd class="c-list__price--features-text">基本的なサーバー管理を行います。</dd>
              <dt class="c-list__price--features-header">
                セキュリティスキャン
              </dt>
              <dd class="c-list__price--features-text">サイトのセキュリティスキャンを定期的に行います。</dd>
              <dt class="c-list__price--features-header">
                WordPressアップデート
              </dt>
              <dd class="c-list__price--features-text">WordPress本体やプラグインのアップデートを行います。</dd>
            </dl>
          </div>
        </li>

        <!-- スタンダードプラン -->
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">スタンダードプラン</p>
            <p class="c-list__price--price"><span>10,000</span>円/月</p>
          </div>
          <div class="c-list__price--body">
            <p class="c-list__price--lead">
              サーバー管理に加え、定期的なサイトのバックアップ、セキュリティスキャン、WordPressやプラグインのアップデートを含む、より充実したメンテナンスプランです。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">
                サーバー管理
              </dt>
              <dd class="c-list__price--features-text">基本的なサーバー管理を行います。</dd>

              <dt class="c-list__price--features-header">
                定期バックアップ
              </dt>
              <dd class="c-list__price--features-text">サイトの定期的なバックアップを実施します。</dd>

              <dt class="c-list__price--features-header">
                セキュリティスキャン
              </dt>
              <dd class="c-list__price--features-text">サイトのセキュリティスキャンを定期的に行います。</dd>

              <dt class="c-list__price--features-header">
                WordPressアップデート
              </dt>
              <dd class="c-list__price--features-text">WordPress本体やプラグインのアップデートを行います。</dd>

              <dt class="c-list__price--features-header">
                月1回レポート作成
              </dt>
              <dd class="c-list__price--features-text">メンテナンス内容をまとめたレポートを作成します。</dd>
            </dl>
          </div>
        </li>

        <!-- プレミアムプラン -->
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">プレミアムプラン</p>
            <p class="c-list__price--price"><span>12,000</span>円/月</p>
          </div>
          <div class="c-list__price--body">
            <p class="c-list__price--lead">
              スタンダードプランの内容に加え、月3回までの軽微な修正対応も含む、最も充実したメンテナンスプランです。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">
                サーバー管理
              </dt>
              <dd class="c-list__price--features-text">基本的なサーバー管理を行います。</dd>

              <dt class="c-list__price--features-header">
                定期バックアップ
              </dt>
              <dd class="c-list__price--features-text">サイトの定期的なバックアップを実施します。</dd>

              <dt class="c-list__price--features-header">
                セキュリティスキャン
              </dt>
              <dd class="c-list__price--features-text">サイトのセキュリティスキャンを定期的に行います。</dd>

              <dt class="c-list__price--features-header">
                WordPressアップデート
              </dt>
              <dd class="c-list__price--features-text">WordPress本体やプラグインのアップデートを行います。</dd>

              <dt class="c-list__price--features-header">
                月1回レポート作成
              </dt>
              <dd class="c-list__price--features-text">メンテナンス内容をまとめたレポートを作成します。</dd>
              
              <dt class="c-list__price--features-header">
                軽微修正対応
              </dt>
              <dd class="c-list__price--features-text">月3回まで、軽微な修正対応を行います。</dd>
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
      <p class="p-service-detail__case-studies--intro">Web制作の実績をご紹介します</p>
    </div>
    <div class="section__body">
      <div class="p-service-detail__case-studies--grid">
        <div class="p-service-detail__case-study--item">
          <div class="p-service-detail__case-study--image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/default.jpg" alt="製造業A社">
            <span class="p-service-detail__case-study--category">コーポレートサイト</span>
          </div>
          <div class="p-service-detail__case-study--content">
            <h3 class="p-service-detail__case-study--title">製造業A社</h3>
            <p class="p-service-detail__case-study--description">
              老舗製造業のブランドイメージ刷新。採用強化を目的に企業理念を前面に配置。公開後3ヶ月で応募数2倍に増加。
            </p>
            <ul class="p-service-detail__case-study--tags">
              <li>WordPress</li>
              <li>レスポンシブ</li>
              <li>採用強化</li>
            </ul>
          </div>
        </div>
        <div class="p-service-detail__case-study--item">
          <div class="p-service-detail__case-study--image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/default.jpg" alt="飲食店B社">
            <span class="p-service-detail__case-study--category">店舗サイト</span>
          </div>
          <div class="p-service-detail__case-study--content">
            <h3 class="p-service-detail__case-study--title">飲食店B社</h3>
            <p class="p-service-detail__case-study--description">
              地域密着型レストランのWebサイト。メニュー更新機能、予約フォーム最適化によりネット予約率が50%向上。
            </p>
            <ul class="p-service-detail__case-study--tags">
              <li>WordPress</li>
              <li>予約システム</li>
              <li>飲食店</li>
            </ul>
          </div>
        </div>
        <div class="p-service-detail__case-study--item">
          <div class="p-service-detail__case-study--image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/default.jpg" alt="士業C事務所">
            <span class="p-service-detail__case-study--category">コーポレートサイト</span>
          </div>
          <div class="p-service-detail__case-study--content">
            <h3 class="p-service-detail__case-study--title">士業C事務所</h3>
            <p class="p-service-detail__case-study--description">
              税理士事務所のWebサイト。SEO記事を週1本投稿し、半年で自然検索流入が3倍に。問い合わせ数も月5件→15件へ増加。
            </p>
            <ul class="p-service-detail__case-study--tags">
              <li>WordPress</li>
              <li>SEO</li>
              <li>士業</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Content Creation Plans -->
<section class="l-section p-service-detail__content-plans">
  <div class="container">
    <div class="section__header">
      <h2 class="p-service-detail__section-title">記事作成プラン（運用・改善）</h2>
      <p class="p-service-detail__content-plans--intro">
        制作後も継続的にコンテンツを充実させ、SEOとコンバージョンを最適化します。<br>
        「かつコード」を選ぶことで、作って終わりではなく、育てるWebサイトを実現します。
      </p>
    </div>
    <div class="section__body">
      <ul class="c-list__price">
        <!-- ライトプラン -->
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">ライトプラン</p>
            <p class="c-list__price--price">
              <span>30,000</span>円/月
            </p>
          </div>
          <div class="c-list__price--body">
            <p class="c-list__price--lead">
              SEO記事で検索流入を増やしたい方向け。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">記事作成</dt>
              <dd class="c-list__price--features-text">週1回（月4記事）</dd>

              <dt class="c-list__price--features-header">記事内容</dt>
              <dd class="c-list__price--features-text">
                SEO記事<br>
                <small>キーワード選定 + 構成案作成</small>
              </dd>

              <dt class="c-list__price--features-header">文字数</dt>
              <dd class="c-list__price--features-text">2,000〜3,000文字/記事</dd>

              <dt class="c-list__price--features-header">画像選定</dt>
              <dd class="c-list__price--features-text">◯</dd>

              <dt class="c-list__price--features-header">レポート</dt>
              <dd class="c-list__price--features-text">月次レポート</dd>
            </dl>
          </div>
        </li>

        <!-- スタンダードプラン -->
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">スタンダードプラン</p>
            <p class="c-list__price--price">
              <span>50,000</span>円/月
            </p>
          </div>
          <div class="c-list__price--body">
            <p class="c-list__price--lead">
              SEOとコンバージョン両方を強化したい方向け。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">記事作成</dt>
              <dd class="c-list__price--features-text">週2回（月8記事）</dd>

              <dt class="c-list__price--features-header">記事内容</dt>
              <dd class="c-list__price--features-text">
                SEO記事 + CV記事<br>
                <small>商品紹介・事例記事でCV獲得</small>
              </dd>

              <dt class="c-list__price--features-header">文字数</dt>
              <dd class="c-list__price--features-text">2,000〜4,000文字/記事</dd>

              <dt class="c-list__price--features-header">画像選定</dt>
              <dd class="c-list__price--features-text">◎</dd>

              <dt class="c-list__price--features-header">レポート</dt>
              <dd class="c-list__price--features-text">
                月次レポート + 改善提案
              </dd>
            </dl>
          </div>
        </li>

        <!-- グロースプラン -->
        <li class="c-list__price--item">
          <div class="c-list__price--header">
            <p class="c-list__price--title">グロースプラン</p>
            <p class="c-list__price--price">
              <span>80,000</span>円/月
            </p>
          </div>
          <div class="c-list__price--body">
            <p class="c-list__price--lead">
              本気でWebマーケティングに取り組む方向け。
            </p>
            <dl class="c-list__price--features">
              <dt class="c-list__price--features-header">記事作成</dt>
              <dd class="c-list__price--features-text">週3回（月12記事）</dd>

              <dt class="c-list__price--features-header">記事内容</dt>
              <dd class="c-list__price--features-text">
                SEO + CV + リライト<br>
                <small>過去記事の改善で成果最大化</small>
              </dd>

              <dt class="c-list__price--features-header">文字数</dt>
              <dd class="c-list__price--features-text">2,000〜5,000文字/記事</dd>

              <dt class="c-list__price--features-header">画像選定</dt>
              <dd class="c-list__price--features-text">◎ + オリジナル画像作成</dd>

              <dt class="c-list__price--features-header">レポート</dt>
              <dd class="c-list__price--features-text">
                週次レポート + 戦略ミーティング
              </dd>
            </dl>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- Production Flow -->
<section class="l-section p-flow">
  <div class="container">
    <div class="section__header">
      <h2 class="p-flow__title">制作の流れ</h2>
      <p class="p-flow__lead">
        お問い合わせから公開まで、スムーズに進行します。<br>
        お客様のご要望を丁寧にヒアリングしながら、最適なWebサイトを制作いたします。
      </p>
    </div>
    <div class="section__body">
      <div class="p-flow__main">
        <ul class="p-flow__main--list">
          <!-- Step 1 -->
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(1)); ?>" alt="お問い合わせ・ヒアリング" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">01</span>
              <h3>お問い合わせ・ヒアリング</h3>
              <p>
                まずはお気軽にお問い合わせください。お客様のビジネス内容、課題、目標、ご予算などを詳しくヒアリングさせていただきます。
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
              <img src="<?php echo esc_url(katsucode_flow_image(2)); ?>" alt="お見積もり・ご提案" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">02</span>
              <h3>お見積もり・ご提案</h3>
              <p>
                ヒアリング内容をもとに、最適なプラン・サイト構成をご提案。お見積書を提出し、内容にご納得いただけましたらご契約となります。
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
              <img src="<?php echo esc_url(katsucode_flow_image(3)); ?>" alt="企画・設計" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">03</span>
              <h3>企画・設計</h3>
              <p>
                サイトマップ作成、ワイヤーフレーム設計など、サイト全体の構成を固めます。お客様と認識を合わせながら進めます。
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
              <img src="<?php echo esc_url(katsucode_flow_image(4)); ?>" alt="デザイン制作" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">04</span>
              <h3>デザイン制作</h3>
              <p>
                ブランドイメージに合わせたデザインカンプを制作。トップページのデザインをご確認いただき、修正を加えて完成させます。
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
              <img src="<?php echo esc_url(katsucode_flow_image(5)); ?>" alt="コーディング・実装" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">05</span>
              <h3>コーディング・実装</h3>
              <p>
                デザインをもとにHTML/CSS/JavaScriptでコーディング。WordPressへの実装、お問い合わせフォーム設置なども行います。
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
              <img src="<?php echo esc_url(katsucode_flow_image(6)); ?>" alt="テスト・調整" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">06</span>
              <h3>テスト・調整</h3>
              <p>
                テストサーバーにアップし、各種ブラウザ、デバイスでの動作確認を実施。表示崩れやリンク切れがないかを徹底的にチェックします。
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
              <img src="<?php echo esc_url(katsucode_flow_image(7)); ?>" alt="確認・修正" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">07</span>
              <h3>確認・修正</h3>
              <p>
                お客様に最終確認をしていただき、修正点があれば対応。納得いただけるまで調整を行います。
              </p>
            </div>
          </li>

          <div class="p-flow--arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <!-- Step 8 -->
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(8)); ?>" alt="本番公開・納品" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">08</span>
              <h3>本番公開・納品</h3>
              <p>
                本番環境へアップロードし、サイトを公開。Google Analytics設定、操作マニュアル提供など、運用開始までサポートいたします。
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
      <?php
      $faq_args = array(
        'post_type' => 'faq',
        'posts_per_page' => -1,
        'tax_query' => array(
          array(
            'taxonomy' => 'faq-cat',
            'field' => 'slug',
            'terms' => 'web-production'
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

<!-- Additional Services -->
<section class="l-section p-service-detail__additional">
  <div class="container">
    <div class="section__header">
      <h2 class="p-service-detail__section-title">その他のサービス</h2>
    </div>
    <div class="section__body">
      <div class="p-service-detail__additional--grid">
        <div class="p-service-detail__additional--item">
          <h3>サイト引っ越し</h3>
          <p class="p-service-detail__additional--price">50,000円〜</p>
          <p class="p-service-detail__additional--description">
            他社で制作されたサイトの移転作業を代行。ドメイン・サーバー移管もお任せください。
          </p>
        </div>
        <div class="p-service-detail__additional--item">
          <h3>軽微な修正</h3>
          <p class="p-service-detail__additional--price">5,000円/回〜</p>
          <p class="p-service-detail__additional--description">
            テキスト変更、画像差し替えなどの軽微な修正に対応。スポットでのご依頼も可能です。
          </p>
        </div>
        <div class="p-service-detail__additional--item">
          <h3>リニューアル</h3>
          <p class="p-service-detail__additional--price">ご相談ください</p>
          <p class="p-service-detail__additional--description">
            既存サイトのデザイン刷新、機能追加、WordPress化などのリニューアルに対応します。
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>