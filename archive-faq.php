<?php get_header(); ?>

<!-- FAQ Section Start -->
<section class="l-section p-faq">
  <div class="container">
    <div class="section__header">
      <p class="section__header--lead">よくいただくご質問をまとめました。<br />
        料金やサービス内容、制作の流れなど、お客様からのご質問にお答えしています。<br />
        こちらに記載のない内容については、お気軽にお問い合わせください。
      </p>
    </div>
    <div class="section__body">
      <div class="tab_panel">
        <ul class="tab_list">
          <li class="tab__item active" data-category="all"><span>すべて</span></li>
          <?php
          $categories = get_terms(array(
            'taxonomy' => 'faq-cat',
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
          <div class="p-faq__accordion">
            <?php
            if (have_posts()) :
              while (have_posts()) : the_post();
                get_template_part('template-parts/loop/faq');
              endwhile;
            else :
            ?>
              <p class="p-faq__no-items">FAQはまだ登録されていません。</p>
            <?php
            endif;
            ?>
          </div>
        </div>
      </div>
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
    </div>
  </div>
</section>
<!-- FAQ Section End -->
<?php get_footer(); ?>