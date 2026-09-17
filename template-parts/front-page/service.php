<section class="l-section p-index__service">
  <div class="container">

    <?php
    $service_obj = get_page_by_path('service');
    $post = $service_obj;
    setup_postdata($post);
    $service_title = get_the_title();
    ?>
    <div class="section__header">
      <h2 class="section__header--title p-index__title p-index__service--title" data-en="Service">
        <span><?php the_title(); ?></span>
      </h2>
      <div class="p-index__service--catchphrase">
        <p>目的に合わせた最適なWeb戦略をご提案します</p>
      </div>
    </div>
    <div class="section__body">
      <div class="section__lead">
        <p>かつコードではWebサイト制作を中心に活動しています。</p>
        <p>緻密な連絡をとり、スピードより質を優先した丁寧な開発。</p>
        <p>お客様と一緒になって考え、デジタルの可能性を追求していきます。</p>
        <p>また、Webサイト制作以外にも受託開発を行なっており、幅広く対応しています。</p>
      </div>
      <div class="p-index__service--group">
        <div class="p-index__service--nav">
          <!-- 集客したい => Web制作 -->
          <button class="p-index__service--tab is-active" data-tab="1">
            <h3>集客したい</h3>
          </button>
          <!-- 成約率をあげたい => LP制作 -->
          <button class="p-index__service--tab" data-tab="2">
            <h3>成約率をあげたい</h3>
          </button>
          <!-- 商品を売りたい => ECサイト制作 -->
          <button class="p-index__service--tab" data-tab="3">
            <h3>商品を売りたい</h3>
          </button>
          <!-- 業務を効率化したい => システム開発 -->
          <button class="p-index__service--tab" data-tab="4">
            <h3>業務を効率化したい</h3>
          </button>
          <!-- アプリを作りたい => アプリ開発 -->
          <button class="p-index__service--tab" data-tab="5">
            <h3>アプリを作りたい</h3>
          </button>
          <!-- まずは低コストで始めたい => SaaS利用 -->
          <button class="p-index__service--tab" data-tab="6">
            <h3>まずは低コストで始めたい</h3>
          </button>
        </div>
        <div class="p-index__service--slider">
          <!-- Web制作 -->
          <div class="p-index__service--item is-active" data-content="1">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/webdesign.png" alt="" />
            </figure>
            <div class="p-index__service--item-contents">
              <h4 class="p-index__service--item-title">
                <span class="p-index__service--item-title-en">Web Design</span>
                <span class="p-index__service--item-title-ja">Webサイト制作</span>
              </h4>
              <p class="p-index__service--item-description">
                Webサイトの新規作成、Webサイトのリニューアル、Webサイトの修正、LP作成、Webサイトの保守・運用まで幅広く対応いたします。
              </p>
            </div>
          </div>
          <!-- LP制作 -->
          <div class="p-index__service--item" data-content="2">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/lp.png" alt="" />
            </figure>
            <div class="p-index__service--item-contents">
              <h4 class="p-index__service--item-title">
                <span class="p-index__service--item-title-en">LP</span>
                <span class="p-index__service--item-title-ja">LP制作</span>
              </h4>
              <p class="p-index__service--item-description">
                Webサイトの新規作成、Webサイトのリニューアル、Webサイトの修正、LP作成、Webサイトの保守・運用まで幅広く対応いたします。
              </p>
            </div>
          </div>
          <!-- ECサイト制作 -->
          <div class="p-index__service--item" data-content="3">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/ec.png" alt="" />
            </figure>
            <div class="p-index__service--item-contents">
              <h4 class="p-index__service--item-title">
                <span class="p-index__service--item-title-en">EC Site</span>
                <span class="p-index__service--item-title-ja">ECサイト制作</span>
              </h4>
              <p class="p-index__service--item-description">
                ECサイトの新規作成、ECサイトのリニューアル、ECサイトの修正、ECサイトの保守・運用まで幅広く対応いたします。
              </p>
              <div class="p-index__service--item-tags">
                <span class="p-index__service--item-tag">Shopify</span>
                <span class="p-index__service--item-tag">オリジナル</span>
              </div>
            </div>
          </div>
          <!-- システム開発 -->
          <div class="p-index__service--item" data-content="4">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/system.jpg" alt="" />
            </figure>
            <div class="p-index__service--item-contents">
              <h4 class="p-index__service--item-title">
                <span class="p-index__service--item-title-en">System Development</span>
                <span class="p-index__service--item-title-ja">システム開発</span>
              </h4>
              <p class="p-index__service--item-description">
                Webサービス、Webシステム、アプリケーション開発、業務効率化など、幅広い分野で受託開発を行なっています。
              </p>
              <div class="p-index__service--item-tags">
                <span class="p-index__service--item-tag">顧客管理システム</span>
                <span class="p-index__service--item-tag">予約システム</span>
                <span class="p-index__service--item-tag">社内ツール</span>
              </div>
            </div>
          </div>
          <!-- アプリ開発 -->
          <div class="p-index__service--item" data-content="5">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/app.png" alt="" />
            </figure>
            <div class="p-index__service--item-contents">
              <h4 class="p-index__service--item-title">
                <span class="p-index__service--item-title-en">App Development</span>
                <span class="p-index__service--item-title-ja">アプリ開発</span>
              </h4>
              <p class="p-index__service--item-description">
                Webアプリ、モバイルアプリなど、幅広い分野でアプリ開発を行なっています。
              </p>
              <div class="p-index__service--item-tags">
                <span class="p-index__service--item-tag">Web App</span>
                <span class="p-index__service--item-tag">モバイル</span>
                <span class="p-index__service--item-tag">iOS</span>
                <span class="p-index__service--item-tag">Android</span>
              </div>
            </div>
          </div>
          <!-- SaaS開発 -->
          <div class="p-index__service--item" data-content="6">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/saas.png" alt="" />
            </figure>
            <div class="p-index__service--item-contents">
              <h4 class="p-index__service--item-title">
                <span class="p-index__service--item-title-en">SaaS Development</span>
                <span class="p-index__service--item-title-ja">SaaS開発</span>
              </h4>
              <p class="p-index__service--item-description">
                低コストで始めたいお客様には、当社が開発したSaaSソリューションをご提供いたします。
              </p>
              <div class="p-index__service--item-tags">
                <span class="p-index__service--item-tag">SaaS</span>
                <span class="p-index__service--item-tag">業務効率化</span>
                <span class="p-index__service--item-tag">社内ツール</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="c-btn__group">
      <a href="<?php echo esc_url(home_url('service')); ?>" class="c-btn c-btn__primary">
        <span class="c-btn__primary--text">事業内容について</span>
        <div class="c-btn__primary--arrow">
          <i class="fa-solid fa-arrow-right"></i>
        </div>
      </a>
    </div>

    <?php wp_reset_postdata(); ?>

  </div>
</section>