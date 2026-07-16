<?php

/**
 * The sidebar for blogs.
 *
 * @package Katsucode
 */
if (!is_active_sidebar('sidebar-1')) {
  return;
}
?>

<aside class="p-blog__secondary">
  <?php dynamic_sidebar('sidebar-1'); ?>
</aside>