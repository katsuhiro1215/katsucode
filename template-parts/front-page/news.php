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