<?php get_header(); ?>

<section class="p-single__main">
  <div class="p-single__main--wrapper">
    <div class="container">
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
  </div>
</section>

<?php get_footer(); ?>