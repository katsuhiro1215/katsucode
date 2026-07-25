<?php

/**
 * Template Name: Company Page
 * Description: 会社情報などを伝えるためのページテンプレート
 * Katsucode WordPress Theme Setup
 * @author Katsuhiro Kakoi <katsuhiro.k1215@katsucode.jp>
 * @link  https://katsucode.jp/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later * 
 */
if (!defined('ABSPATH')) exit;
get_header();
?>

<!-- コンセプト -->
<section class="l-section p-company concept">
  <div class="container">
    <div class="p-company__header">
      <span class="p-company__header-kicker" aria-hidden="true">Concept</span>
      <h3 class="p-company__header-title">想いを形にし、<br class="sp-only">人と人をつなぐ</h3>
      <p class="p-company__concept--message">
        人と人との繋がりに最高のデジタルで<br />より良い未来を創る
      </p>
    </div>
    <div class="section__body">
      <div class="p-about__concept--list">
        <div class="p-about__concept--item">
          <span class="p-about__concept--number" aria-hidden="true">01</span>
          <figure>
            <img src="<?php echo esc_url(katsucode_page_image('company_concept_image_1', get_template_directory_uri() . '/assets/img/about/step1.jpg')); ?>" alt="" />
          </figure>
          <div class="p-about__concept--info">
            <h3>どんなお役に立てるのか</h3>
            <p>
              まず、私たちにできることは何か、お客様が求めているものは何かを探ります。
              どちらかの一方的な考えではなく、お互いの意見を通して、より良い方向へと導き出します。
            </p>
            <p>
              どちらかの一方的な考えではなく、お互いの意見を通して、より良い方向へと導き出します。
            </p>
          </div>
        </div>
        <div class="p-about__concept--item">
          <span class="p-about__concept--number" aria-hidden="true">02</span>
          <figure>
            <img src="<?php echo esc_url(katsucode_page_image('company_concept_image_2', get_template_directory_uri() . '/assets/img/about/step2.jpg')); ?>" alt="" />
          </figure>
          <div class="p-about__concept--info">
            <h3>質を優先しています</h3>
            <p>
              スピード優先で作成することも可能ですが、それが最良策とは言えません。
            </p>
            <p>
              長く利用してもらうために、質を重視して満足度を追求しています。
            </p>
          </div>
        </div>
        <div class="p-about__concept--item">
          <span class="p-about__concept--number" aria-hidden="true">03</span>
          <figure>
            <img src="<?php echo esc_url(katsucode_page_image('company_concept_image_3', get_template_directory_uri() . '/assets/img/about/step3.jpg')); ?>" alt="" />
          </figure>
          <div class="p-about__concept--info">
            <h3>成長させること</h3>
            <p>
              Webサイトは作って終わりではなく、そこから育てる必要があります。
            </p>
            <p>
              常に最新情報に耳を傾け、お客様と一緒になってアップデートしていきます。
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 制作者について -->
<section class="l-section p-company introduction">
  <div class="container">
    <div class="p-company__header">
      <span class="p-company__header-kicker" aria-hidden="true">Introduction</span>
      <h3 class="p-company__header-title">制作者について</h3>
    </div>
    <div class="section__body">
      <div class="p-company__introduction--wrapper">
        <div class="p-company__introduction--profile">
          <div class="profile-image">
            <img src="<?php echo esc_url(katsucode_page_image('company_profile_image', get_template_directory_uri() . '/assets/img/profile/sample01.jpg')); ?>" alt="制作者プロフィール写真" class="profile-main">
            <img src="<?php echo esc_url(katsucode_page_image('company_profile_image_hover', get_template_directory_uri() . '/assets/img/profile/sample02.jpg')); ?>" alt="制作者プロフィール写真（ホバー）" class="profile-hover">
          </div>
        </div>
        <div class="p-company__introduction--content">
          <p>
            これまで、ホームページ制作や業務システムの開発を通して、<br />
            さまざまな業種の方と関わらせていただきました。
          </p>
          <p>
            その中で感じているのは、<br />
            「良いサービスや想いがあっても、それがうまく伝わっていない」<br />
            というケースがとても多いということです。
          </p>
          <p>
            だからこそ私は、ただ作るのではなく、<br />
            “伝わる設計”を大切にした制作を心がけています。
          </p>
          <p>
            専門的なことがわからない方でも安心してご相談いただけるよう、<br />
            できるだけわかりやすく、丁寧にサポートいたします。
          </p>
          <p class="p-company__introduction--closing">
            小さなことでもお気軽にご相談ください。
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Company Reason -->
<section class="l-section p-company reason">
  <div class="container">
    <div class="p-company__header">
      <span class="p-company__header-kicker" aria-hidden="true">Reason</span>
      <h3 class="p-company__header-title">選ばれる理由</h3>
    </div>
    <div class="section__body">
      <div class="p-company__reason-grid">
        <div class="p-company__reason-card">
          <span class="p-company__reason-number" aria-hidden="true">01</span>
          <h4>一貫したサポート</h4>
          <p>ヒアリングから制作、公開後の運用まで一貫して対応します。途中で担当が変わることなく、安心してご相談いただけます。</p>
        </div>
        <div class="p-company__reason-card">
          <span class="p-company__reason-number" aria-hidden="true">02</span>
          <h4>技術とビジネスの両立</h4>
          <p>見た目だけでなく、成果につながる設計を重視しています。「作ること」ではなく「役に立つこと」を目的としています。</p>
        </div>
        <div class="p-company__reason-card">
          <span class="p-company__reason-number" aria-hidden="true">03</span>
          <h4>小回りのきく柔軟な対応</h4>
          <p>小さな修正やご相談にも柔軟に対応いたします。長くお付き合いできる関係を大切にしています。</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Company Info -->
<section class="l-section p-company__info">
  <div class="container">
    <div class="section__header">
      <h3 class="section__title  p-index__title" data-en="Company">
        <span>かつコード概要</span>
      </h3>
    </div>
    <div class="section__body">
      <table class="p-company__info--table">
        <tbody>
          <tr>
            <th>屋号名</th>
            <td>かつコード</td>
          </tr>
          <tr>
            <th>代表者名</th>
            <td>栫 勝宏</td>
          </tr>
          <tr>
            <th>開業日</th>
            <td>2022年5月13日</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td>
              奈良県奈良市
              <br />
              (自宅兼事務所のため、ご契約の際にお伝えします)
            </td>
          </tr>
          <tr>
            <th>営業時間</th>
            <td>9:00 - 17:00</td>
          </tr>
          <tr>
            <th>定休日</th>
            <td>土日・祝日</td>
          </tr>
          <tr>
            <th>電話番号</th>
            <td>
              <a href="tel:090-9580-9257">090-9580-9257</a>
            </td>
          </tr>
          <tr>
            <th>メールアドレス</th>
            <td>
              <a href="mailto:info@katsucode.jp">info@katsucode.jp</a>
            </td>
          </tr>
          <tr>
            <th>URL</th>
            <td>
              <a href="https://katsucode.jp">https://katsucode.jp</a>
            </td>
          </tr>
          <tr>
            <th>アシスタント</th>
            <td>2名</td>
          </tr>
          <tr>
            <th>業務内容</th>
            <td>
              Webサイト作成、LP制作、保守・運用
              <br />
              Webサービス開発
              <br />
              Webシステム開発
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- お問い合わせボタン 無料相談はこちらの案内 -->
<div class="btn__group">
  <a href="<?php echo esc_url(home_url('contact')); ?>" class="btn btn__primary">
    <span class="btn__primary--text">無料相談はこちら</span>
    <div class="btn__primary--arrow">
      <i class="fa-solid fa-arrow-right"></i>
    </div>
  </a>
</div>

<?php get_footer(); ?>