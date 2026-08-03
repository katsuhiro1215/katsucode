<?php get_header(); ?>

<section class="p-search">
  <div class="container">
    <div class="p-search__header">
      <h2 class="p-search__title">
        <?php if (have_posts()) : ?>
          <span class="p-search__keyword"><?php echo esc_html(get_search_query()); ?></span>
          <span class="p-search__title-text">の検索結果</span>
        <?php else : ?>
          <span class="p-search__title-text">検索結果</span>
        <?php endif; ?>
      </h2>

      <?php if (have_posts()) : ?>
        <p class="p-search__count">
          <?php
          global $wp_query;
          echo $wp_query->found_posts;
          ?>件の結果が見つかりました
        </p>
      <?php endif; ?>
    </div>

    <div class="p-blog__main--body">
      <div class="p-blog__main--row">
        <div class="p-blog__primary">

          <?php if (have_posts()) : ?>
            <ul class="p-blog__list row">
              <?php while (have_posts()) : the_post(); ?>
                <li class="p-blog__item col-lg-6">
                  <article class="c-card__blog">
                    <a href="<?php the_permalink(); ?>" class="c-card__blog--wrapper"></a>
                    <figure class="c-card__blog--thumbnail">
                      <div class="c-card__blog--thumbnail-wrapper">
                        <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail('medium'); ?>
                        <?php else : ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.jpg" alt="<?php the_title_attribute(); ?>">
                        <?php endif; ?>
                      </div>
                    </figure>
                    <div class="c-card__blog--contents">
                      <div class="c-card__blog--category"><?php the_category(' '); ?></div>
                      <h3 class="c-card__blog--heading"><?php the_title(); ?></h3>
                      <div class="c-card__blog--excerpt">
                        <?php echo wp_trim_words(get_the_excerpt(), 60, '...'); ?>
                      </div>
                    </div>
                    <div class="c-card__blog--meta">
                      <time class="c-card__blog--time" datetime="<?php echo get_the_date('c'); ?>">
                        <?php echo get_the_date(); ?>
                      </time>
                      <?php if (get_post_type() !== 'post') : ?>
                        <span class="c-card__blog--post-type">
                          <?php echo get_post_type_object(get_post_type())->labels->singular_name; ?>
                        </span>
                      <?php endif; ?>
                    </div>
                  </article>
                </li>
              <?php endwhile; ?>
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

          <?php else : ?>
            <div class="p-search__no-results">
              <div class="p-search__no-results-icon">
                <i class="fas fa-search"></i>
              </div>
              <h3 class="p-search__no-results-title">検索結果が見つかりませんでした</h3>
              <p class="p-search__no-results-text">
                「<?php echo esc_html(get_search_query()); ?>」に一致する情報は見つかりませんでした。<br>
                別のキーワードで再度検索してください。
              </p>

              <div class="p-search__retry-form">
                <form role="search" method="get" class="p-search__form" action="<?php echo esc_url(home_url('/')); ?>">
                  <input type="search" class="p-search__input" placeholder="キーワードを入力..." value="" name="s" required />
                  <button type="submit" class="p-search__submit">
                    <i class="fas fa-search"></i>
                    <span>再検索</span>
                  </button>
                </form>
              </div>

              <div class="p-search__suggestions">
                <h4 class="p-search__suggestions-title">検索のヒント</h4>
                <ul class="p-search__suggestions-list">
                  <li>キーワードに誤字・脱字がないか確認してください</li>
                  <li>別のキーワードを試してみてください</li>
                  <li>より一般的なキーワードで検索してみてください</li>
                  <li>キーワードの数を減らしてみてください</li>
                </ul>
              </div>

              <div class="p-search__back-link">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn__primary">
                  <span class="btn__primary--text">トップページへ戻る</span>
                  <span class="btn__primary--arrow">→</span>
                </a>
              </div>
            </div>
          <?php endif; ?>
        </div>

        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>