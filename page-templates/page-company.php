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
      <h3 class="p-company__header-title">気軽に相談でき、<br class="sp-only">無理なく続けられる関係を</h3>
      <p class="p-company__concept--message">
        お客様の状況に合わせて、必要な分だけご提案します
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
            <h3>まずは気軽にご相談を</h3>
            <p>
              「何から始めればいいかわからない」という段階でも構いません。ご要望をお伺いした上で、ご予算や状況に合わせた進め方をご提案します。
            </p>
            <p>
              専門用語を使わず、わかりやすい言葉でのご説明を心がけています。
            </p>
          </div>
        </div>
        <div class="p-about__concept--item">
          <span class="p-about__concept--number" aria-hidden="true">02</span>
          <figure>
            <img src="<?php echo esc_url(katsucode_page_image('company_concept_image_2', get_template_directory_uri() . '/assets/img/about/step2.jpg')); ?>" alt="" />
          </figure>
          <div class="p-about__concept--info">
            <h3>必要な分だけ、柔軟に</h3>
            <p>
              納品後の保守契約は必須ではありません。単発のご相談・修正依頼にも対応しています。
            </p>
            <p>
              継続的なサポートが必要な場合は、月額プランもご用意しています。
            </p>
          </div>
        </div>
        <div class="p-about__concept--item">
          <span class="p-about__concept--number" aria-hidden="true">03</span>
          <figure>
            <img src="<?php echo esc_url(katsucode_page_image('company_concept_image_3', get_template_directory_uri() . '/assets/img/about/step3.jpg')); ?>" alt="" />
          </figure>
          <div class="p-about__concept--info">
            <h3>幅広い技術で、ワンストップに</h3>
            <p>
              Webサイト制作・LP制作・ECサイト構築からシステム開発まで、一つの窓口でご相談いただけます。
            </p>
            <p>
              案件ごとに依頼先を分ける必要がなく、まとめてお任せいただけます。
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
            <img src="<?php echo esc_url(katsucode_page_image('company_profile_image', get_template_directory_uri() . '/assets/img/profile/profile3.png')); ?>" alt="制作者プロフィール写真" class="profile-main">
            <img src="<?php echo esc_url(katsucode_page_image('company_profile_image_hover', get_template_directory_uri() . '/assets/img/profile/profile4.png')); ?>" alt="制作者プロフィール写真（ホバー）" class="profile-hover">
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
          <a href="<?php echo esc_url(home_url('greeting')); ?>" class="p-company__introduction--more">
            <span>詳しくはこちら</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
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
          <h4>独自の進捗管理システム</h4>
          <p>契約内容や制作・開発の進捗状況を、専用システムでいつでもご確認いただけます。「今どうなっているんだろう」という不安を減らします。</p>
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