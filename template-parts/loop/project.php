<?php

/**
 * Projectループテンプレート（グリッドアイテム）
 */
$categories = get_the_terms(get_the_ID(), 'project-cat');
$category_slugs = array();
if ($categories && !is_wp_error($categories)) {
  foreach ($categories as $category) {
    $category_slugs[] = $category->slug;
  }
}
$category_data = !empty($category_slugs) ? implode(' ', $category_slugs) : '';
?>

<div class="p-project__grid--item" data-categories="<?php echo esc_attr($category_data); ?>">
  <a href="<?php the_permalink(); ?>" class="p-project__card">
    <div class="p-project__card--image">
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('large'); ?>
      <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/default.jpg" alt="<?php the_title(); ?>">
      <?php endif; ?>
      <?php if ($categories && !is_wp_error($categories)) : ?>
        <span class="p-project__card--category"><?php echo esc_html($categories[0]->name); ?></span>
      <?php endif; ?>
    </div>
    <div class="p-project__card--content">
      <h3 class="p-project__card--title"><?php the_title(); ?></h3>
      <p class="p-project__card--description">
        <?php
        if (has_excerpt()) {
          echo wp_trim_words(get_the_excerpt(), 50, '...');
        } else {
          echo wp_trim_words(get_the_content(), 50, '...');
        }
        ?>
      </p>
      <?php
      $tags = get_the_terms(get_the_ID(), 'project_tag');
      if ($tags && !is_wp_error($tags)) :
      ?>
        <ul class="p-project__card--tags">
          <?php foreach (array_slice($tags, 0, 4) as $tag) : ?>
            <li><?php echo esc_html($tag->name); ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  </a>
</div>