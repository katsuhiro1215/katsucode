<?php get_header(); ?>

<section class="p-faq__single">
  <div class="l-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="p-faq__detail">
          <header class="p-faq__detail--header">
            <?php
            $categories = get_the_terms(get_the_ID(), 'faq-cat');
            if ($categories && !is_wp_error($categories)) :
            ?>
              <div class="p-faq__detail--category">
                <?php foreach ($categories as $category) : ?>
                  <span class="category-label"><?php echo esc_html($category->name); ?></span>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </header>

          <div class="p-faq__detail--content">
            <div class="p-faq__detail--question">
              <div class="p-faq__question">
                <span class="p-faq__question--label">Q</span>
                <div class="p-faq__question--content">
                  <h1 class="p-faq__question--title"><?php the_title(); ?></h1>
                  <?php if (has_excerpt()) : ?>
                    <div class="p-faq__question--excerpt">
                      <?php the_excerpt(); ?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>

            <div class="p-faq__detail--answer">
              <div class="p-faq__answer">
                <span class="p-faq__answer--label">A</span>
                <div class="p-faq__answer--content">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          </div>

          <div class="p-faq__detail--footer">
            <a href="<?php echo get_post_type_archive_link('faq'); ?>" class="c-button--back">
              FAQ一覧へ戻る
            </a>
          </div>
        </article>
    <?php endwhile;
    endif; ?>

    <!-- Related FAQs -->
    <?php
    $categories = get_the_terms(get_the_ID(), 'faq-cat');
    if ($categories && !is_wp_error($categories)) :
      $category_ids = array();
      foreach ($categories as $category) {
        $category_ids[] = $category->term_id;
      }

      $related_args = array(
        'post_type' => 'faq',
        'posts_per_page' => 3,
        'post__not_in' => array(get_the_ID()),
        'tax_query' => array(
          array(
            'taxonomy' => 'faq-cat',
            'field' => 'term_id',
            'terms' => $category_ids,
          ),
        ),
      );

      $related_query = new WP_Query($related_args);

      if ($related_query->have_posts()) :
    ?>
        <section class="p-faq__related">
          <h2 class="c-title--border">関連するFAQ</h2>
          <div class="p-faq__related--list">
            <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
              <div class="p-faq__related--item">
                <a href="<?php the_permalink(); ?>">
                  <span class="question-icon">Q</span>
                  <span class="question-text"><?php the_title(); ?></span>
                </a>
              </div>
            <?php endwhile; ?>
          </div>
        </section>
    <?php
        wp_reset_postdata();
      endif;
    endif;
    ?>
  </div>
</section>

<?php get_footer(); ?>