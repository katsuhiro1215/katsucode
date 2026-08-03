<?php get_header(); ?>

<section class="l-section p-news">
  <div class="container">
    <div class="section__body">
      <ul class="category-news__list">

        <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
            $categories = get_the_category();
        ?>

            <li class="category-news__item">
              <article class="category-news__item-wrapper">
                <a href="<?php the_permalink(); ?>" class="category-news__item-link">
                  <div class="category-news__item-container">
                    <div class="category-news__item-meta">
                      <time class="category-news__item-date"><?php echo get_the_date(); ?></time>
                      <?php if ($categories) : ?>
                        <span class="category-news__item-category"><?php echo esc_html($categories[0]->name); ?></span>
                      <?php endif; ?>
                    </div>
                    <h3 class="category-news__item-heading"><?php the_title(); ?></h3>
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
</section>

<?php get_footer(); ?>