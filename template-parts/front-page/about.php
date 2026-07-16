<section class="l-section p-index__about">
  <div class="container">

    <?php
    $about_obj = get_page_by_path('about');
    $post = $about_obj;
    setup_postdata($post);
    $about_title = get_the_title();
    ?>
    <div class="section__header">
      <h2 class="section__header--title p-index__title p-index__about--title" data-en="About">
        <span></span>
      </h2>
    </div>
    <div class="section__body">
      <div class="section__lead">
        <h3>人と人をつなげたい。</h3>
        <p>
          かつコードは、デジタルを通して想いを伝えることを大切にしています。
        </p>
        <p>
          ひとつひとつ丁寧に形にしていくことで、<br />
          その先にある「人と人とのつながり」を<br />
          少しでも広げるきっかけになればと思っています。
        </p>
      </div>
    </div>
    <div class="c-btn__group">
      <a href="<?php echo esc_url(home_url('about')); ?>" class="c-btn c-btn__primary">
        <span class="c-btn__primary--text">かつコードについて</span>
        <div class="c-btn__primary--arrow">
          <i class="fa-solid fa-arrow-right"></i>
        </div>
      </a>
    </div>

    <?php wp_reset_postdata(); ?>

  </div>
</section>