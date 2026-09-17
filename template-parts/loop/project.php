<?php

/**
 * Projectループテンプレート（archive-project.phpのタブ絞り込み用ラッパー）
 *
 * カード自体のマークアップは template-parts/loop/project-card.php を共用する。
 */
if (!defined('ABSPATH')) exit;

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
  <?php get_template_part('template-parts/loop/project-card'); ?>
</div>