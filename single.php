<?php get_header(); ?>

<section class="p-news__main">
  <div class="p-news__main--wrapper">
    <div class="container">
      <div class="p-blog__main--body">
        <div class="p-blog__main--row">
          <div class="p-blog__primary">
            <?php
            if (have_posts()) :
              while (have_posts()) : the_post();
            ?>
                <!-- Article Start -->
                <article class="article">
                  <header class="article--header entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="article-meta">
                      <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                    </div>
                    <div class="eye-catch-wrapper">
                      <figure class="eye-catch">

                        <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail(); ?>
                        <?php else : ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.jpg" alt="">
                        <?php endif; ?>

                        <?php
                        $categories = get_the_category();
                        if ($categories) {
                          echo '<span class="category-label">' . esc_html($categories[0]->name) . '</span>';
                        }
                        ?>
                      </figure>
                    </div>
                  </header>
                  <div class="entry-content"><?php the_content(); ?></div>

                  <footer class="article--footer">
                    <?php if (has_tag()) : ?>
                      <div class="article-tags">
                        <span class="tags-label">タグ:</span>
                        <?php the_tags('', ' ', ''); ?>
                      </div>
                    <?php endif; ?>

                    <?php
                    // 関連記事の取得
                    $tags = wp_get_post_tags($post->ID);
                    if ($tags) {
                      $tag_ids = array();
                      foreach ($tags as $individual_tag) {
                        $tag_ids[] = $individual_tag->term_id;
                      }
                      $args = array(
                        'tag__in' => $tag_ids,
                        'post__not_in' => array($post->ID),
                        'posts_per_page' => 3,
                        'orderby' => 'rand'
                      );
                      $related_query = new WP_Query($args);

                      if ($related_query->have_posts()) :
                    ?>
                        <div class="related-posts">
                          <h3 class="related-posts-title">関連記事</h3>
                          <div class="related-posts-grid">
                            <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                              <article class="related-post-item">
                                <a href="<?php the_permalink(); ?>">
                                  <div class="related-post-thumbnail">
                                    <?php if (has_post_thumbnail()) : ?>
                                      <?php the_post_thumbnail('medium'); ?>
                                    <?php else : ?>
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.jpg" alt="">
                                    <?php endif; ?>
                                  </div>
                                  <div class="related-post-content">
                                    <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                                    <h4 class="related-post-title"><?php the_title(); ?></h4>
                                  </div>
                                </a>
                              </article>
                            <?php endwhile; ?>
                          </div>
                        </div>
                    <?php
                        wp_reset_postdata();
                      endif;
                    }
                    ?>
                  </footer>
                </article>
            <?php
              endwhile;
            endif;
            ?>
            <!-- Article End -->
            <!-- Paginate Start -->
            <div class="single-pagenavi">
              <span class="arrow-left">
                <?php
                $prev_post = get_previous_post();
                if (!empty($prev_post)) :
                ?>
                  <a href="<?php echo get_permalink($prev_post->ID); ?>"><?php echo esc_html($prev_post->post_title); ?></a>
                <?php else : ?>
                  <span style="color: #ccc;">前の記事はありません</span>
                <?php endif; ?>
              </span>
              <span class="return">
                <a href="<?php echo esc_url(home_url('/archive')); ?>">一覧へ戻る</a>
              </span>
              <span class="arrow-right">
                <?php
                $next_post = get_next_post();
                if (!empty($next_post)) :
                ?>
                  <a href="<?php echo get_permalink($next_post->ID); ?>"><?php echo esc_html($next_post->post_title); ?></a>
                <?php else : ?>
                  <span style="color: #ccc;">次の記事はありません</span>
                <?php endif; ?>
              </span>
            </div>
            <!-- Paginate End -->
          </div>

          <?php get_sidebar(); ?>

        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>