        <nav class="l-drawer-nav">
          <button class="l-drawer-nav__close" aria-label="メニューを閉じる">
            <span class="l-drawer-nav__close-icon"></span>
          </button>
          <div class="l-drawer-nav__container">
            <div class="container">
              <div class="l-drawer-nav__wrapper">
                <div class="l-drawer-nav__row row">
                  <div class="l-drawer-nav__col col-md-6">
                    <ul class="l-drawer-nav__list">
                      <li class="l-drawer-nav__item">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="l-drawer-nav__link">
                          <div class="l-drawer-nav__link-en">Home</div>
                          <div class="l-drawer-nav__link-ja">ホーム</div>
                        </a>
                      </li>
                      <li class="l-drawer-nav__item">
                        <a href="<?php echo esc_url(home_url('about')); ?>" class="l-drawer-nav__link">
                          <div class="l-drawer-nav__link-en">About</div>
                          <div class="l-drawer-nav__link-ja">
                            かつコードについて
                          </div>
                        </a>
                      </li>
                      <li class="l-drawer-nav__item has-children">
                        <a href="<?php echo esc_url(home_url('service')); ?>" class="l-drawer-nav__link">
                          <div class="l-drawer-nav__link-en">Service</div>
                          <div class="l-drawer-nav__link-ja">事業内容</div>
                        </a>
                        <ul class="l-drawer-nav__submenu">
                          <li class="l-drawer-nav__submenu-item">
                            <a href="<?php echo esc_url(home_url('service#webdesign')); ?>" class="l-drawer-nav__submenu-link">Webデザイン</a>
                          </li>
                          <li class="l-drawer-nav__submenu-item">
                            <a href="<?php echo esc_url(home_url('service#design')); ?>" class="l-drawer-nav__submenu-link">デザイン</a>
                          </li>
                          <li class="l-drawer-nav__submenu-item">
                            <a href="<?php echo esc_url(home_url('service#system')); ?>" class="l-drawer-nav__submenu-link">システム開発</a>
                          </li>
                          <li class="l-drawer-nav__submenu-item">
                            <a href="<?php echo esc_url(home_url('service#ec')); ?>" class="l-drawer-nav__submenu-link">ECサイト</a>
                          </li>
                          <li class="l-drawer-nav__submenu-item">
                            <a href="<?php echo esc_url(home_url('service#contract')); ?>" class="l-drawer-nav__submenu-link">契約形態</a>
                          </li>
                        </ul>
                      </li>
                      <li class="l-drawer-nav__item">
                        <a href="<?php echo esc_url(home_url('project')); ?>" class="l-drawer-nav__link">
                          <div class="l-drawer-nav__link-en">Project</div>
                          <div class="l-drawer-nav__link-ja">制作実績</div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="l-drawer-nav__col col-md-6">
                    <ul class="l-drawer-nav__list">
                      <li class="l-drawer-nav__item">
                        <a href="<?php echo esc_url(home_url('flow')); ?>" class="l-drawer-nav__link">
                          <div class="l-drawer-nav__link-en">Flow</div>
                          <div class="l-drawer-nav__link-ja">制作の流れ</div>
                        </a>
                      </li>
                      <li class="l-drawer-nav__item">
                        <a href="<?php echo esc_url(home_url('news')); ?>" class="l-drawer-nav__link">
                          <div class="l-drawer-nav__link-en">News</div>
                          <div class="l-drawer-nav__link-ja">お知らせ</div>
                        </a>
                      </li>
                      <li class="l-drawer-nav__item">
                        <a href="<?php echo esc_url(home_url('blog')); ?>" class="l-drawer-nav__link">
                          <div class="l-drawer-nav__link-en">Blog</div>
                          <div class="l-drawer-nav__link-ja">ブログ</div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="l-drawer-nav__col col-md-6">
                    <ul class="l-drawer-nav__list">
                      <li class="l-drawer-nav__item swim">
                        <a href="<?php echo esc_url(home_url('swim')); ?>" class="l-drawer-nav__link">
                          <div class="l-drawer-nav__link-en">Swim</div>
                          <div class="l-drawer-nav__link-ja">
                            水泳関係者の方
                          </div>
                        </a>
                      </li>
                      <li class="l-drawer-nav__item nara">
                        <a href="<?php echo esc_url(home_url('nara')); ?>" class="l-drawer-nav__link">
                          <div class="l-drawer-nav__link-en">Nara Project</div>
                          <div class="l-drawer-nav__link-ja">
                            奈良県民の方
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="l-drawer-nav__col col-md-6">
                    <ul class="l-drawer-nav__list">
                      <li class="l-drawer-nav__item">
                        <a href="<?php echo esc_url(home_url('contact')); ?>" class="l-drawer-nav__link">
                          <div class="l-drawer-nav__link-en">Contact</div>
                          <div class="l-drawer-nav__link-ja">
                            お問い合わせ
                          </div>
                        </a>
                      </li>
                      <li class="l-drawer-nav__item">
                        <a href="<?php echo esc_url(home_url('recruit')); ?>" class="l-drawer-nav__link">
                          <div class="l-drawer-nav__link-en">Recruit</div>
                          <div class="l-drawer-nav__link-ja">
                            メンバー募集
                          </div>
                        </a>
                      </li>
                      <li class="l-drawer-nav__item">
                        <a href="<?php echo esc_url(home_url('privacy-policy')); ?>" class="l-drawer-nav__link">
                          <div class="l-drawer-nav__link-en">
                            Privacy Policy
                          </div>
                          <div class="l-drawer-nav__link-ja">
                            プライバシーポリシー
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>