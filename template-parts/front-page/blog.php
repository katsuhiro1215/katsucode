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