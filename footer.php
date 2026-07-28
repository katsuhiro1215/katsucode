  </div>
  </main>
  <!-- Main End -->

  <!-- CTA Start -->
  <?php get_template_part('template-parts/aside/contact'); ?>
  <!-- CTA End -->
  <!-- Footer Start -->
  <footer class="l-footer">
    <div class="l-footer__wrapper">
      <!-- メニューエリア -->
      <div class="l-footer__menu">
        <div class="container">
          <div class="row">
            <!-- 会社情報 -->
            <div class="col-6 col-md-3">
              <div class="l-footer__menu-column">
                <h3 class="l-footer__menu-title">会社情報</h3>
                <ul class="l-footer__menu-list">
                  <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
                  <li><a href="<?php echo esc_url(home_url('about')); ?>">かつコードについて</a></li>
                  <li><a href="<?php echo esc_url(home_url('company')); ?>">会社概要</a></li>
                  <li><a href="<?php echo esc_url(home_url('recruit')); ?>">採用情報</a></li>
                </ul>
              </div>
            </div>

            <!-- サービス -->
            <div class="col-6 col-md-3">
              <div class="l-footer__menu-column">
                <h3 class="l-footer__menu-title">サービス</h3>
                <ul class="l-footer__menu-list">
                  <li><a href="<?php echo esc_url(home_url('service')); ?>">事業内容</a></li>
                  <li><a href="<?php echo esc_url(home_url('web-production')); ?>">Web制作</a></li>
                  <li><a href="<?php echo esc_url(home_url('lp')); ?>">LP制作</a></li>
                  <li><a href="<?php echo esc_url(home_url('ec-site')); ?>">ECサイト</a></li>
                  <li><a href="<?php echo esc_url(home_url('app-development')); ?>">アプリ開発</a></li>
                  <li><a href="<?php echo esc_url(home_url('saas')); ?>">SaaS開発</a></li>
                  <li><a href="<?php echo esc_url(home_url('system-development')); ?>">システム開発</a></li>
                  <li><a href="<?php echo esc_url(home_url('spra')); ?>">中央管理システム</a></li>
                </ul>
              </div>
            </div>

            <!-- 制作実績・情報 -->
            <div class="col-6 col-md-3">
              <div class="l-footer__menu-column">
                <h3 class="l-footer__menu-title">制作実績・情報</h3>
                <ul class="l-footer__menu-list">
                  <li><a href="<?php echo esc_url(home_url('project')); ?>">制作実績</a></li>
                  <li><a href="<?php echo esc_url(home_url('flow')); ?>">制作の流れ</a></li>
                  <li><a href="<?php echo esc_url(home_url('blog')); ?>">ブログ</a></li>
                  <li><a href="<?php echo esc_url(home_url('category/news')); ?>">お知らせ</a></li>
                  <li><a href="<?php echo esc_url(home_url('faq')); ?>">よくある質問</a></li>
                </ul>
              </div>
            </div>

            <!-- お問い合わせ -->
            <div class="col-6 col-md-3">
              <div class="l-footer__menu-column">
                <h3 class="l-footer__menu-title">お問い合わせ</h3>
                <ul class="l-footer__menu-list">
                  <li><a href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a></li>
                  <li><a href="<?php echo esc_url(home_url('privacy-policy')); ?>">プライバシーポリシー</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="l-footer__sub-menu">
        <div class="container">
          <div class="row">
            <!-- Blog -->
            <div class="col-6 col-md-4">
              <div class="l-footer__sub-card">
                <h4 class="l-footer__sub-title">Blog</h4>
                <p class="l-footer__sub-description">長年利用している技術ブログ。プログラミングやWeb制作に関する記事を発信しています。</p>
                <a href="https://katsu-coach.com/" class="l-footer__sub-button" target="_blank" rel="noopener noreferrer">
                  ブログを見る
                  <i class="fas fa-external-link-alt"></i>
                </a>
              </div>
            </div>
            <!-- Smart Sprouts -->
            <!-- <div class="col-6 col-md-4">
              <div class="l-footer__sub-card">
                <h4 class="l-footer__sub-title">Smart Sprouts</h4>
                <p class="l-footer__sub-description">教育サービスのブランドサイト。子どもたちの成長をサポートする教育コンテンツを提供。</p>
                <a href="#" class="l-footer__sub-button" target="_blank" rel="noopener noreferrer">
                  サイトを見る
                  <i class="fas fa-external-link-alt"></i>
                </a>
              </div>
            </div> -->

            <!-- Spra -->
            <!-- <div class="col-6 col-md-4">
              <div class="l-footer__sub-card">
                <h4 class="l-footer__sub-title">Spra</h4>
                <p class="l-footer__sub-description">中央管理システム「Spra」の専用サイト。業務効率化を実現するSaaSプラットフォーム。</p>
                <a href="#" class="l-footer__sub-button" target="_blank" rel="noopener noreferrer">
                  詳細を見る
                  <i class="fas fa-external-link-alt"></i>
                </a>
              </div>
            </div> -->
          </div>
        </div>
      </div>

      <!-- 会社情報エリア -->
      <div class="l-footer__info">
        <div class="container">
          <div class="l-footer__info-wrapper">
            <!-- ロゴ -->
            <div class="l-footer__logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="ロゴ" />
                <span>Katsucode</span>
              </a>
            </div>

            <!-- 住所・連絡先 -->
            <div class="l-footer__address">
              <dl>
                <div class="l-footer__address-item">
                  <dt>所在地</dt>
                  <dd>奈良県奈良市（自宅兼事務所のため、ご契約の際にお伝えします）</dd>
                </div>
                <div class="l-footer__address-item">
                  <dt>連絡先</dt>
                  <dd>Tel. 090-9580-9257 / Email info@katsucode.jp</dd>
                </div>
                <div class="l-footer__address-item">
                  <dt>営業時間</dt>
                  <dd>9:00 - 17:00（定休日: 土日・祝日）</dd>
                </div>
              </dl>
            </div>

            <!-- SNS -->
            <ul class="l-footer__sns-list">
              <li class="l-footer__sns-item">
                <a href="https://www.facebook.com/katsucode20220513/" class="l-footer__sns-link" aria-label="Facebook">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/facebook.png" alt="Facebook">
                </a>
              </li>
              <li class="l-footer__sns-item">
                <a href="https://x.com/KatsuhiroKakoi" class="l-footer__sns-link" aria-label="Twitter">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/twitter2.png" alt="Twitter">
                </a>
              </li>
              <li class="l-footer__sns-item">
                <a href="https://www.instagram.com/katsuhiro.k1215/" class="l-footer__sns-link" aria-label="Instagram">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/instagram.png" alt="Instagram">
                </a>
              </li>
              <li class="l-footer__sns-item">
                <a href="#" class="l-footer__sns-link" aria-label="LINE">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/line.png" alt="LINE">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- コピーライト -->
      <div class="l-footer__copyright">
        <div class="container">
          <p class="copyright">&copy; 2022 - <?php echo date('Y'); ?> Katsucode. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer End -->
  </div>

  <div class="cursor"></div>
  <div class="follower"></div>

  <?php wp_footer(); ?>
  </body>

  </html>