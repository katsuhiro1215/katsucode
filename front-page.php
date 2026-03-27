<?php get_header(); ?>

<!-- About Section Start -->
<section class="p-index__about">
  <div class="p-index__about--wrapper">
    <div class="container">
      <h2 class="c-title__primary p-index__about--title">
        <div class="c-title__primary-en">About</div>
      </h2>
      <div class="p-index__about--catch">
        <p>人と人をつなげたい。。。</p>
      </div>
      <div class="p-index__about--lead">
        <p>
          かつコードは、奈良県を拠点にWeb制作を行っている小さな会社です。
        </p>
        <p>
          人と人とをつなぐ方法がたくさんある今、<br />
          その中で私たちにできることは何かを考えたとき、<br />
          「デジタルを通して想いを伝えること」だと考えました。
        </p>
        <p>
          ひとりでできることは決して大きくないかもしれません。
        </p>
        <p>
          それでも、デジタルの可能性を大切にしながら、<br />
          ひとつひとつ丁寧に形にしていくことで、<br />
          その先にある「人と人とのつながり」を<br />
          少しでも広げるきっかけになればと思っています。
        </p>
      </div>
      <div class="c-btn__primary p-index__about--btn">
        <a href="<?php echo esc_url(home_url('about')); ?>" class="c-btn__primary--wrapper">
          <span class="c-btn__primary--text">かつコードについて</span>
          <div class="c-btn__primary--arrow">
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- About Section End -->
<!-- Banner Start -->
<div class="p-index__banner">
  <div class="p-index__banner--elem p-index__banner--elem-1"></div>
</div>
<!-- Banner End -->
<!-- Service Section Start -->
<section class="p-index__service">
  <div class="p-index__service--wrapper">
    <div class="container">

      <?php
      $service_obj = get_page_by_path('service');
      $post = $service_obj;
      setup_postdata($post);
      $service_title = get_the_title();
      ?>

      <h2 class="c-title__primary p-index__service--title">
        <div class="c-title__primary-en">Service</div>
        <div class="c-title__primary-ja"><?php the_title(); ?></div>
      </h2>

      <?php wp_reset_postdata(); ?>

      <div class="p-index__service--lead">
        <p>かつコードではWebサイト制作を中心に活動しています。</p>
        <p>緻密な連絡をとり、スピードより質を優先した丁寧な開発。</p>
        <p>お客様と一緒になって考え、デジタルの可能性を追求していきます。</p>
        <p>また、Webサイト制作以外にも受託開発を行なっており、幅広く対応しています。</p>
      </div>
      <div class="p-index__service--group">
        <a href="<?php echo esc_url(home_url('service')); ?>#webdesign" class="p-index__service--item">
          <figure class="p-index__service--item-thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/webdesign.jpg" alt="" />
          </figure>
          <div class="p-index__service--item-contents">
            <h3 class="p-index__service--item-title">
              <span class="p-index__service--item-title-en">Web Design</span>
              <span class="p-index__service--item-title-ja">Webサイト制作</span>
            </h3>
            <p class="p-index__service--item-description">
              Webサイトの新規作成、Webサイトのリニューアル、Webサイトの修正、LP作成、Webサイトの保守・運用まで幅広く対応いたします。
            </p>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('service')); ?>#contract" class="p-index__service--item">
          <figure class="p-index__service--item-thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/contract.jpg" alt="" />
          </figure>
          <div class="p-index__service--item-contents">
            <h3 class="p-index__service--item-title">
              <span class="p-index__service--item-title-en">Contract Development</span>
              <span class="p-index__service--item-title-ja">受託開発</span>
            </h3>
            <p class="p-index__service--item-description">
              Webサービス、Webシステム、アプリケーション開発、業務効率化など、幅広い分野で受託開発を行なっています。
            </p>
          </div>
        </a>
      </div>
      <div class="c-btn__primary p-index__service--btn">
        <a href="<?php echo esc_url(home_url('service')); ?>" class="c-btn__primary--wrapper">
          <span class="c-btn__primary--text">事業内容について</span>
          <div class="c-btn__primary--arrow">
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- Service Section End -->
<!-- Project Section Start -->
<!-- <section class="p-index__project">
            <div class="p-index__project--wrapper">
              <div class="container">
                <h2 class="c-title__primary p-index__project--title">
                  <span class="c-title__primary-en">Project</span>
                  <span class="c-title__primary-ja">実績</span>
                </h2>
                <div class="p-index__project--lead">
                  <p>これまでの実績を紹介しています。</p>
                  <p>実績は現在非公開です。</p>
                  <p>(ご覧になりたい方は、お問い合わせください)</p>
                </div>
                <div class="p-index__project--group">

                </div>
                <div class="c-btn__primary p-index__project--btn">
                  <a href="about.html" class="c-btn__primary--wrapper">
                    <span class="c-btn__primary--text"
                      >実績一覧へ</span
                    >
                    <div class="c-btn__primary--arrow">
                      <i class="fa-solid fa-arrow-right"></i>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </section> -->
<!-- Banner Start -->
<div class="p-index__banner">
  <div class="p-index__banner--elem p-index__banner--elem-2"></div>
</div>
<!-- Banner End -->
<!-- News Section Start -->
<section class="p-index__news">
  <div class="p-index__news--wrapper">
    <div class="container">

      <?php
      $news_obj = get_page_by_path('news');
      $post = $news_obj;
      setup_postdata($post);
      $news_title = get_the_title();
      ?>

      <h2 class="c-title__primary p-index__news--title">
        <div class="c-title__primary-en">News</div>
        <div class="c-title__primary-ja"><?php the_title(); ?></div>
      </h2>

      <?php wp_reset_postdata(); ?>


      <div class="p-index__news--lead">
        <p>
          現在の受付状況やキャンペーン企画など、お知らせ情報を発信しています。
        </p>
      </div>
      <div class="p-index__news--contents">
        <ul class="c-list__news">

          <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5,
            'paged' => $paged
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
          ?>

              <li class="c-list__news--col">
                <article class="c-list__news--item">
                  <a href="<?php the_permalink(); ?>" class="c-list__news--item-wrapper">
                    <div class="c-list__news--item-container">
                      <time class="c-list__news--item-date"><?php echo get_the_date(); ?></time>
                      <h3 class="c-list__news--item-heading"><?php the_title(); ?></h3>
                    </div>
                    <div class="c-list__news--item-arrow"></div>
                  </a>
                </article>
              </li>

          <?php
            endwhile;
          endif;
          ?>

        </ul>
      </div>
      <div class="c-btn__primary p-index__news--btn">
        <a href="<?php echo esc_url(home_url('news')); ?>" class="c-btn__primary--wrapper">
          <span class="c-btn__primary--text">お知らせ一覧へ</span>
          <div class="c-btn__primary--arrow">
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- News Section End -->
<!-- Blog Section Start -->
<section class="p-index__blog">
  <div class="p-index__blog--wrapper">
    <div class="container">
      <h2 class="c-title__primary p-index__blog--title">
        <div class="c-title__primary-en">Blog</div>
        <div class="c-title__primary-ja">ブログ</div>
      </h2>
      <div class="p-index__blog--lead">
        <p>
          かつコードでは日々学んだことを共有するため、記事にまとめてわかりやすく発信していきます。
        </p>
      </div>
    </div>

    <div class="p-index__blog--contents">
      <div class="swiper02">
        <div class="swiper-wrapper">

          <?php
          $args = array(
            'post_type' => 'blog', // 投稿タイプを指定
            'posts_per_page' => 10, // 表示する記事数
          );

          $blog_query = new WP_Query($args);

          if ($blog_query->have_posts()) :
            while ($blog_query->have_posts()) :
              $blog_query->the_post();
          ?>

              <a href="<?php the_permalink(); ?>" class="swiper-slide">
                <article class="slide">
                  <figure class="slide-media">

                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.jpg" alt="">
                    <?php endif; ?>

                  </figure>
                  <div class="slide-content">
                    <time class="slide-date"><?php echo get_the_date(); ?></time>
                    <h2 class="slide-title"><?php the_title(); ?></h2>
                  </div>
                </article>
              </a>

          <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>

        </div>
      </div>
    </div>
    <div class="c-btn__primary p-index__blog--btn">
      <a href="<?php echo esc_url(home_url('blog')); ?>" class="c-btn__primary--wrapper">
        <span class="c-btn__primary--text">お知らせ一覧へ</span>
        <div class="c-btn__primary--arrow">
          <i class="fa-solid fa-arrow-right"></i>
        </div>
      </a>
    </div>
  </div>
</section>
<!-- Blog Section End -->
</div>

<?php get_footer(); ?>