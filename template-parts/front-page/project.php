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
        <?php
        $front_projects = new WP_Query(array(
          'post_type' => 'project',
          'posts_per_page' => 3,
          'orderby' => 'date',
          'order' => 'DESC',
        ));

        if ($front_projects->have_posts()) :
          while ($front_projects->have_posts()) : $front_projects->the_post();
            $project_categories = get_the_terms(get_the_ID(), 'project-cat');
            $project_tags = get_the_terms(get_the_ID(), 'project_tag');
        ?>
          <article class="p-index__project--item">
            <?php if ($project_categories && !is_wp_error($project_categories)) : ?>
              <a href="<?php echo esc_url(get_term_link($project_categories[0])); ?>" class="p-index__project--item-category">
                <span><?php echo esc_html($project_categories[0]->name); ?></span>
              </a>
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>" class="p-index__project--item-link">
              <div class="p-index__project--item-image">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/default.jpg" alt="<?php the_title_attribute(); ?>">
                <?php endif; ?>
                <div class="p-index__project--item-overlay"></div>
              </div>
              <h3 class="p-index__project--item-title"><?php the_title(); ?></h3>
              <div class="p-index__project--item-content">
                <div class="p-index__project--item-meta">
                  <span class="p-index__project--item-date"><?php echo esc_html(get_the_date('Y.m')); ?></span>
                </div>
                <?php if ($project_tags && !is_wp_error($project_tags)) : ?>
                  <div class="p-index__project--item-tags">
                    <?php foreach (array_slice($project_tags, 0, 3) as $tag) : ?>
                      <span class="p-index__project--item-tag"><?php echo esc_html($tag->name); ?></span>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              </div>
            </a>
          </article>
        <?php
          endwhile;
          wp_reset_postdata();
        else :
        ?>
          <p class="p-index__project--empty">制作実績はまだ登録されていません。</p>
        <?php endif; ?>
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