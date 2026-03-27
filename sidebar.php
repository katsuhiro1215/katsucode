<?php
/**
 * The sidebar for blogs.
 *
 * @package Katsucode
 */
if (   ! is_active_sidebar( 'sidebar-1' )
	&& ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<aside class="widget p-blog__secondary">
  <div class="l-sidebar__item">
    <h4 class="c-title__secondary">
      <div class="c-title__secondary-ja">カテゴリー</div>
    </h4>
    <div class="l-sidebar__list--category">
      <ul>
        <li>
          <a href="#">Web制作</a>
        </li>
        <li>
          <a href="#">Web制作</a>
        </li>
        <li>
          <a href="#">Web制作</a>
        </li>
        <li>
          <a href="#">Web制作</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="l-sidebar__item">
    <h4 class="c-title__secondary">
      <div class="c-title__secondary-ja">アーカイブ</div>
    </h4>
    <div class="l-sidebar__list--category">
      <ul>
        <li>
          <a href="#">Web制作</a>
        </li>
        <li>
          <a href="#">Web制作</a>
        </li>
        <li>
          <a href="#">Web制作</a>
        </li>
        <li>
          <a href="#">Web制作</a>
        </li>
      </ul>
    </div>
  </div>
</aside>