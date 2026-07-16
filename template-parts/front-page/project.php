<section class="l-section p-index__project">
  <div class="container">

    <?php
    $project_obj = get_page_by_path('project');
    $post = $project_obj;
    setup_postdata($post);
    $project_title = get_the_title();
    ?>
    <div class="section__header">
      <h2 class="section__header--title p-index__title p-index__project--title" data-en="Project">
        <span><?php the_title(); ?></span>
      </h2>
    </div>
    <div class="section__body">
      <div class="section__lead">
        <p>これまでの実績を紹介しています。</p>
        <p>Webサイト制作を中心に、LP制作、ECサイト制作、システム開発、アプリ開発など幅広く対応しています。</p>
        <p>お客様のご要望や課題に合わせて、最適な提案をさせていただきます。</p>
        <p>ぜひご覧ください。</p>
      </div>
      <div class="p-index__project--group">
        <article class="p-index__project--item">
          <a href="" class="p-index__project--item-category">
            <span>Webサイト制作</span>
          </a>
          <a href="#" class="p-index__project--item-link">
            <div class="p-index__project--item-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/default.jpg" alt="">
              <div class="p-index__project--item-overlay"></div>
            </div>
            <h3 class="p-index__project--item-title">プロジェクト名</h3>
            <div class="p-index__project--item-content">
              <div class="p-index__project--item-meta">
                <span class="p-index__project--item-date">2026.04</span>
              </div>
              <div class="p-index__project--item-tags">
                <span class="p-index__project--item-tag">WordPress</span>
                <span class="p-index__project--item-tag">レスポンシブ</span>
              </div>
            </div>
          </a>
        </article>
        <article class="p-index__project--item">
          <a href="" class="p-index__project--item-category">
            <span>Webサイト制作</span>
          </a>
          <a href="#" class="p-index__project--item-link">
            <div class="p-index__project--item-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/default.jpg" alt="">
              <div class="p-index__project--item-overlay"></div>
            </div>
            <h3 class="p-index__project--item-title">プロジェクト名</h3>
            <div class="p-index__project--item-content">
              <div class="p-index__project--item-meta">
                <span class="p-index__project--item-date">2026.04</span>
              </div>
              <div class="p-index__project--item-tags">
                <span class="p-index__project--item-tag">WordPress</span>
                <span class="p-index__project--item-tag">レスポンシブ</span>
              </div>
            </div>
          </a>
        </article>
        <article class="p-index__project--item">
          <a href="" class="p-index__project--item-category">
            <span>Webサイト制作</span>
          </a>
          <a href="#" class="p-index__project--item-link">
            <div class="p-index__project--item-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/default.jpg" alt="">
              <div class="p-index__project--item-overlay"></div>
            </div>
            <h3 class="p-index__project--item-title">プロジェクト名</h3>
            <div class="p-index__project--item-content">
              <div class="p-index__project--item-meta">
                <span class="p-index__project--item-date">2026.04</span>
              </div>
              <div class="p-index__project--item-tags">
                <span class="p-index__project--item-tag">WordPress</span>
                <span class="p-index__project--item-tag">レスポンシブ</span>
              </div>
            </div>
          </a>
        </article>
      </div>
    </div>
    <div class="c-btn__group">
      <a href="<?php echo esc_url(home_url('project')); ?>" class="c-btn c-btn__primary">
        <span class="c-btn__primary--text">実績一覧へ</span>
        <div class="c-btn__primary--arrow">
          <i class="fa-solid fa-arrow-right"></i>
        </div>
      </a>
    </div>
  </div>

  <?php wp_reset_postdata(); ?>

</section>