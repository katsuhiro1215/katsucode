<?php get_header(); ?>

<!-- About Section Start -->
<section class="p-page__intro">
  <div class="p-page__intro--wrapper">
    <div class="container">
      <div class="p-page__intro--body">
        <p>
          かつコードはWeb制作を中心に活動する、奈良県にある小さなWeb制作会社です。
        </p>
        <p>
          デジタルの可能性を追求する手段として、Webサイトを起点とし、<br>
          様々な課題をデジタルを通して解決できないかと考え、<br>
          2022年5月に設立しました。
        </p>
      </div>
    </div>
  </div>
</section>
<!-- About Section End -->
<!-- Concept Section Start -->
<section class="p-about__concept">
  <div class="p-about__concept--wrapper">
    <div class="container">
      <div class="p-about__concept--header">
        <h3 class="c-title__page-secondary p-about__concept--title">
          <div class="c-title__page-secondary--logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" />
          </div>
          <div class="c-title__page-secondary-en">Concept</div>
          <div class="c-title__page-secondary-ja">コンセプト</div>
        </h3>
      </div>
      <div class="p-about__concept--body">
        <div class="p-about__concept--message">
          <strong>人と人との繋がりに最高のデジタルで<br />より良い未来を創る</strong>
        </div>
        <div class="p-about__concept--list">
          <div class="p-about__concept--item">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/step1.jpg" alt="" />
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
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/step2.jpg" alt="" />
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
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/step3.jpg" alt="" />
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
  </div>
</section>
<!-- Concept Section End -->

<div class="c-btn__primary p-about__btn">
  <a href="<?php echo esc_url(home_url('service')); ?>" class="c-btn__primary--wrapper">
    <span class="c-btn__primary--text">事業内容について</span>
    <div class="c-btn__primary--arrow">
      <i class="fa-solid fa-arrow-right"></i>
    </div>
  </a>
</div>

<!-- Company Section Start -->
<section class="p-about__company">
  <div class="p-about__company--wrapper">
    <div class="container">
      <div class="p-about__company--header">
        <h3 class="c-title__page-secondary p-about__company--title">
          <div class="c-title__page-secondary--logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" />
          </div>
          <div class="c-title__page-secondary-en">Company</div>
          <div class="c-title__page-secondary-ja">かつコード概要</div>
        </h3>
      </div>
      <div class="p-about__company--body">
        <table class="p-about__company--table">
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
  </div>
</section>

<?php get_footer(); ?>
