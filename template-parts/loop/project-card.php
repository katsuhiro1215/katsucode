<?php

/**
 * 実績カード（共通パーツ）
 *
 * archive-project.php の一覧・フロントページの実績セクション、
 * どちらからも呼び出す共通の実績カードマークアップ。
 */
if (!defined('ABSPATH')) exit;

$project_categories = get_the_terms(get_the_ID(), 'project-cat');
$project_tags = get_the_terms(get_the_ID(), 'project_tag');
$is_featured = !empty($args['featured']);
?>
<a href="<?php the_permalink(); ?>" class="c-card__project<?php echo $is_featured ? ' c-card__project--featured' : ''; ?>">
  <div class="c-card__project--image">
    <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('large'); ?>
    <?php else : ?>
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/project/default.jpg'); ?>" alt="<?php the_title_attribute(); ?>">
    <?php endif; ?>
    <?php if ($project_categories && !is_wp_error($project_categories)) : ?>
      <span class="c-card__project--category"><?php echo esc_html($project_categories[0]->name); ?></span>
    <?php endif; ?>
  </div>
  <div class="c-card__project--body">
    <span class="c-card__project--date"><?php echo esc_html(get_the_date('Y.m')); ?></span>
    <h3 class="c-card__project--title"><?php the_title(); ?></h3>
    <p class="c-card__project--description">
      <?php echo esc_html(wp_trim_words(has_excerpt() ? get_the_excerpt() : get_the_content(), 40, '...')); ?>
    </p>
    <?php if ($project_tags && !is_wp_error($project_tags)) : ?>
      <ul class="c-card__project--tags">
        <?php foreach (array_slice($project_tags, 0, 3) as $tag) : ?>
          <li><?php echo esc_html($tag->name); ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
</a>
