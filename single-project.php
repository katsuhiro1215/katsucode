<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <!-- Intro Section -->
    <section class="l-section p-project-single__intro">
      <div class="container">
        <div class="p-project-single__intro--header">
          <?php
          $categories = get_the_terms(get_the_ID(), 'project-cat');
          if ($categories && !is_wp_error($categories)) :
          ?>
            <div class="p-project-single__categories">
              <?php foreach ($categories as $category) : ?>
                <span class="category-badge"><?php echo esc_html($category->name); ?></span>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <h1 class="p-project-single__title"><?php the_title(); ?></h1>

          <?php if (has_excerpt()) : ?>
            <p class="p-project-single__excerpt"><?php the_excerpt(); ?></p>
          <?php endif; ?>
        </div>

        <?php if (has_post_thumbnail()) : ?>
          <div class="p-project-single__hero-image">
            <?php the_post_thumbnail('full'); ?>
          </div>
        <?php endif; ?>

        <!-- 目次 -->
        <nav class="p-project-single__toc">
          <h2 class="toc-title">目次</h2>
          <ul class="toc-list">
            <li><a href="#project-overview">プロジェクト概要</a></li>
            <li><a href="#project-details">制作内容</a></li>
            <?php if (get_field('client_voice_name')) : ?>
              <li><a href="#client-voice">クライアントの声</a></li>
            <?php endif; ?>
          </ul>
        </nav>
      </div>
    </section>

    <!-- Project Overview -->
    <section id="project-overview" class="l-section p-project-single__overview">
      <div class="container">
        <h2 class="section-title">プロジェクト概要</h2>
        <div class="p-project-single__overview--grid">
          <dl class="overview-item">
            <dt>クライアント</dt>
            <dd><?php echo get_field('client_name') ? esc_html(get_field('client_name')) : '非公開'; ?></dd>
          </dl>
          <dl class="overview-item">
            <dt>業種</dt>
            <dd><?php echo get_field('industry') ? esc_html(get_field('industry')) : '非公開'; ?></dd>
          </dl>
          <dl class="overview-item">
            <dt>制作期間</dt>
            <dd><?php echo get_field('production_period') ? esc_html(get_field('production_period')) : '非公開'; ?></dd>
          </dl>
          <dl class="overview-item">
            <dt>担当範囲</dt>
            <dd>
              <?php
              $scope = get_field('project_scope');
              echo $scope ? nl2br(esc_html($scope)) : '非公開';
              ?>
            </dd>
          </dl>
          <?php if (get_field('project_url')) : ?>
            <dl class="overview-item">
              <dt>URL</dt>
              <dd><a href="<?php echo esc_url(get_field('project_url')); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_url(get_field('project_url')); ?></a></dd>
            </dl>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <!-- Project Details -->
    <section id="project-details" class="l-section p-project-single__details">
      <div class="container">
        <h2 class="section-title">制作内容</h2>

        <!-- 課題 -->
        <?php if (get_field('challenge')) : ?>
          <div class="detail-block">
            <h3 class="detail-block__title">課題</h3>
            <div class="detail-block__content">
              <?php echo wpautop(get_field('challenge')); ?>
            </div>
          </div>
        <?php endif; ?>

        <!-- 施策 -->
        <?php if (get_field('solution')) : ?>
          <div class="detail-block">
            <h3 class="detail-block__title">施策・アプローチ</h3>
            <div class="detail-block__content">
              <?php echo wpautop(get_field('solution')); ?>
            </div>
          </div>
        <?php endif; ?>

        <!-- 制作画像セクション -->
        <div class="p-project-single__screens">
          <h3 class="detail-block__title">制作画面</h3>
          <div class="screens-grid">
            <?php
            // PC版画像
            if (get_field('screen_pc')) :
            ?>
              <div class="screen-item">
                <div class="screen-label">PC版</div>
                <img src="<?php echo esc_url(get_field('screen_pc')); ?>" alt="PC版画面">
              </div>
            <?php endif; ?>

            <?php
            // タブレット版画像
            if (get_field('screen_tablet')) :
            ?>
              <div class="screen-item">
                <div class="screen-label">タブレット版</div>
                <img src="<?php echo esc_url(get_field('screen_tablet')); ?>" alt="タブレット版画面">
              </div>
            <?php endif; ?>

            <?php
            // スマホ版画像
            if (get_field('screen_mobile')) :
            ?>
              <div class="screen-item">
                <div class="screen-label">スマホ版</div>
                <img src="<?php echo esc_url(get_field('screen_mobile')); ?>" alt="スマホ版画面">
              </div>
            <?php endif; ?>

            <?php
            // その他の画像（繰り返しフィールド）
            if (have_rows('additional_screens')) :
              while (have_rows('additional_screens')) : the_row();
                $image = get_sub_field('image');
                $label = get_sub_field('label');
                if ($image) :
            ?>
                  <div class="screen-item">
                    <?php if ($label) : ?>
                      <div class="screen-label"><?php echo esc_html($label); ?></div>
                    <?php endif; ?>
                    <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($label); ?>">
                  </div>
            <?php
                endif;
              endwhile;
            endif;
            ?>
          </div>
        </div>

        <!-- 本文コンテンツ -->
        <?php if (get_the_content()) : ?>
          <div class="detail-block">
            <h3 class="detail-block__title">詳細</h3>
            <div class="detail-block__content content-area">
              <?php the_content(); ?>
            </div>
          </div>
        <?php endif; ?>

        <!-- 成果 -->
        <?php if (get_field('result')) : ?>
          <div class="detail-block result-block">
            <h3 class="detail-block__title">成果</h3>
            <div class="detail-block__content">
              <?php echo wpautop(get_field('result')); ?>
            </div>
          </div>
        <?php endif; ?>

        <!-- 使用技術 -->
        <?php
        $tags = get_the_terms(get_the_ID(), 'project_tag');
        if ($tags && !is_wp_error($tags)) :
        ?>
          <div class="detail-block">
            <h3 class="detail-block__title">使用技術・ツール</h3>
            <ul class="tech-tags">
              <?php foreach ($tags as $tag) : ?>
                <li class="tech-tag"><?php echo esc_html($tag->name); ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endif; ?>
      </div>
    </section>

    <!-- Client Voice -->
    <?php if (get_field('client_voice_name')) : ?>
      <section id="client-voice" class="l-section p-project-single__client-voice">
        <div class="container">
          <h2 class="section-title">クライアントの声</h2>
          <div class="client-voice-card">
            <?php if (get_field('client_voice_photo')) : ?>
              <div class="client-voice__photo">
                <img src="<?php echo esc_url(get_field('client_voice_photo')); ?>" alt="<?php echo esc_attr(get_field('client_voice_name')); ?>">
              </div>
            <?php endif; ?>
            <div class="client-voice__content">
              <div class="client-voice__info">
                <p class="client-voice__name"><?php echo esc_html(get_field('client_voice_name')); ?></p>
                <?php if (get_field('client_voice_position')) : ?>
                  <p class="client-voice__position"><?php echo esc_html(get_field('client_voice_position')); ?></p>
                <?php endif; ?>
              </div>
              <div class="client-voice__text">
                <?php echo wpautop(get_field('client_voice_text')); ?>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>

    <!-- Navigation -->
    <section class="l-section p-project-single__navigation">
      <div class="container">
        <div class="navigation-links">
          <?php
          $prev_post = get_previous_post();
          $next_post = get_next_post();
          ?>

          <?php if ($prev_post) : ?>
            <a href="<?php echo get_permalink($prev_post->ID); ?>" class="nav-link nav-prev">
              <span class="nav-arrow">←</span>
              <div class="nav-content">
                <span class="nav-label">前の実績</span>
                <span class="nav-title"><?php echo esc_html($prev_post->post_title); ?></span>
              </div>
            </a>
          <?php else : ?>
            <div class="nav-link nav-disabled"></div>
          <?php endif; ?>

          <a href="<?php echo get_post_type_archive_link('project'); ?>" class="nav-link nav-archive">
            実績一覧へ戻る
          </a>

          <?php if ($next_post) : ?>
            <a href="<?php echo get_permalink($next_post->ID); ?>" class="nav-link nav-next">
              <div class="nav-content">
                <span class="nav-label">次の実績</span>
                <span class="nav-title"><?php echo esc_html($next_post->post_title); ?></span>
              </div>
              <span class="nav-arrow">→</span>
            </a>
          <?php else : ?>
            <div class="nav-link nav-disabled"></div>
          <?php endif; ?>
        </div>
      </div>
    </section>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>