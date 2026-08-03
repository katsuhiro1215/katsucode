<?php

/**
 * FAQループテンプレート（アコーディオンアイテム）
 */
$categories = get_the_terms(get_the_ID(), 'faq-cat');
$category_slugs = array();
if ($categories && !is_wp_error($categories)) {
  foreach ($categories as $category) {
    $category_slugs[] = $category->slug;
  }
}
$category_data = !empty($category_slugs) ? implode(' ', $category_slugs) : '';
?>

<div class="p-faq__accordion--item" data-categories="<?php echo esc_attr($category_data); ?>">
  <div class="p-faq__accordion--question">
    <span class="p-faq__question--label">Q</span>
    <h3 class="p-faq__question--text"><?php the_title(); ?></h3>
    <span class="p-faq__accordion--icon">
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </span>
  </div>
  <div class="p-faq__accordion--answer">
    <div class="p-faq__answer">
      <span class="p-faq__answer--label">A</span>
      <div class="p-faq__answer--content">
        <?php if (has_excerpt()) : ?>
          <?php the_excerpt(); ?>
        <?php endif; ?>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</div>