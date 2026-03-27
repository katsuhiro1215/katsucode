<?php get_header(); ?>

<section class="p-news__main">
  <div class="p-news__main--wrapper">
    <div class="container">
      <div class="p-news__main--header">
        <h3 class="c-title__page-secondary p-news__main--title">
          <div class="c-title__page-secondary--logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" />
          </div>
          <div class="c-title__page-secondary-en">Recent Post</div>
          <div class="c-title__page-secondary-ja">最新の記事</div>
        </h3>
      </div>
      <div class="p-blog__main--body">
        <div class="p-blog__main--row">
          <div class="p-blog__primary">
            <ul class="p-blog__list row">

              <?php
              if (have_posts()) :
                while (have_posts()) : the_post();
              ?>

                  <li class="p-blog__item col-lg-6">
                    <article class="c-card__blog">
                      <a href="<?php the_permalink(); ?>" class="c-card__blog--wrapper"> </a>
                      <figure class="c-card__blog--thumbnail">
                        <div class="c-card__blog--thumbnail-wrapper">

                          <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                          <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.jpg" alt="">
                          <?php endif; ?>

                        </div>
                      </figure>
                      <div class="c-card__blog--contents">
                        <div class="c-card__blog--category"><?php the_category(); ?></div>
                        <h4 class="c-card__blog--heading"><?php the_title(); ?></h4>
                      </div>
                      <div class="c-card__blog--meta">
                        <time class="c-card__blog--time"><?php echo get_the_date(); ?></time>
                      </div>
                    </article>
                  </li>

              <?php
                endwhile;
              endif;
              ?>

            </ul>
            <div class="pagination">
              <?php
              the_posts_pagination(
                array(
                  'mid_size' => 2,
                  'prev_text' => '≪',
                  'next_text' => '≫',
                  'screen_reader_text' => 'ナビゲーション'
                )
              );
              ?>
            </div>
          </div>

          <?php get_sidebar(); ?>

        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>