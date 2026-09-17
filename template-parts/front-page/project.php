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
      <?php
      $front_projects = new WP_Query(array(
        'post_type' => 'project',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
      ));
      ?>

      <?php if ($front_projects->have_posts()) : ?>

        <div class="p-index__project--group">
          <?php while ($front_projects->have_posts()) : $front_projects->the_post(); ?>
            <div class="p-index__project--group-item">
              <?php get_template_part('template-parts/loop/project-card'); ?>
            </div>
          <?php endwhile; ?>
        </div>

        <?php wp_reset_postdata(); ?>

      <?php else : ?>
        <p class="p-index__project--empty">制作実績はまだ登録されていません。</p>
      <?php endif; ?>
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