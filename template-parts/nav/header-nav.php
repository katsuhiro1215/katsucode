        <nav class="sub-header-nav">
          <ul class="sub-header-nav__list">
            <li class="sub-header-nav__item">
              <form role="search" method="get" class="sub-header-nav__search-form" action="<?php echo esc_url(home_url('/')); ?>">
                <input type="search" class="sub-header-nav__search-input" placeholder="検索..." value="<?php echo get_search_query(); ?>" name="s" />
                <button type="submit" class="sub-header-nav__search-submit">
                  <i class="fas fa-search"></i>
                </button>
              </form>
            </li>
            <li class="sub-header-nav__item">
              <a href="<?php echo esc_url(home_url('contact')); ?>?type=consultation" class="sub-header-nav__link sub-header-nav__link--btn">
                <i class="fas fa-comments"></i>
                <span>無料相談</span>
              </a>
            </li>
          </ul>
        </nav>