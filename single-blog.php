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
            <!-- Article Start -->
            <article class="article">
              <header class="article--header entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <div class="eye-catch-wrapper">
                  <figure class="eye-catch">

                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.jpg" alt="">
                    <?php endif; ?>

                    <span class="category-label">お知らせ</span>
                  </figure>
                </div>
              </header>
              <div class="entry-content"><?php the_content(); ?></div>
            </article>
            <!-- Article End -->
            <!-- Paginate Start -->
            <div class="single-pagenavi">
              <span class="arrow-left">
                <a href="#">タイトル</a>
              </span>
              <span class="return">
                <a href="#">一覧へ戻る</a>
              </span>
              <span class="arrow-right">
                <a href="#">タイトル</a>
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