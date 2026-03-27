<?php get_header(); ?>

<section class="p-news__main">
  <div class="p-news__main--wrapper">
    <div class="container">
      <div class="p-news__main--header">
        <h3 class="c-title__page-secondary p-news__main--title">
          <div class="c-title__page-secondary--logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
          </div>
          <div class="c-title__page-secondary-en">News</div>
          <div class="c-title__page-secondary-ja">お知らせ</div>
        </h3>
      </div>
      <div class="p-news__main--body">
        <ul class="c-list__news">

          <?php
          if (have_posts()) :
            while (have_posts()) : the_post();
          ?>

              <li class="c-list__news--col">
                <article class="c-list__news--item">
                  <a href="<?php the_permalink(); ?>" class="c-list__news--item-wrapper">
                    <div class="c-list__news--item-container">
                      <time class="c-list__news--item-date"><?php echo get_the_date(); ?></time>
                      <h3 class="c-list__news--item-heading"><?php the_title(); ?></h3>
                    </div>
                  </a>
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
    </div>
  </div>
</section>

<?php get_footer(); ?>