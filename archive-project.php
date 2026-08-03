<?php get_header(); ?>

<!-- Project Section Start -->
<section class="l-section p-project">
  <div class="container">
    <div class="section__header">
      <p class="section__header--lead">かつコードの制作実績をご紹介します。<br />
        Webサイト制作を中心に、システム開発やデザイン、マーケティングなど、<br />
        デジタルに関する様々なプロジェクトを手がけています。<br />
        お客様のご要望により、掲載できない実績もございますが、<br />
        可能な限りご紹介していきます。
      </p>
    </div>
    <div class="section__body">
      <div class="tab_panel">
        <ul class="tab_list">
          <li class="tab__item active" data-category="all"><span>すべて</span></li>
          <?php
          $categories = get_terms(array(
            'taxonomy' => 'project-cat',
            'hide_empty' => false,
          ));
          if (!empty($categories) && !is_wp_error($categories)) :
            foreach ($categories as $category) :
          ?>
              <li class="tab__item" data-category="<?php echo esc_attr($category->slug); ?>">
                <span><?php echo esc_html($category->name); ?></span>
              </li>
          <?php
            endforeach;
          endif;
          ?>
        </ul>
        <div class="tab__content">
          <div class="p-project__grid">
            <?php
            if (have_posts()) :
              while (have_posts()) : the_post();
                get_template_part('template-parts/loop/project');
              endwhile;
            else :
            ?>
              <p class="p-project__no-items">制作実績はまだ登録されていません。</p>
            <?php
            endif;
            ?>
          </div>
        </div>
      </div>
      <?php get_template_part('template-parts/parts', 'pagination'); ?>
    </div>
  </div>
</section>
<!-- Project Section End -->
<?php get_footer(); ?>