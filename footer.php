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
            <div class="col-6 col-md-3">
              <div class="l-footer__sub-card">
                <h4 class="l-footer__sub-title">Blog</h4>
                <p class="l-footer__sub-description">長年利用している技術ブログ。プログラミングやWeb制作に関する記事を発信しています。</p>
                <a href="#" class="l-footer__sub-button" target="_blank" rel="noopener noreferrer">
                  ブログを見る
                  <i class="fas fa-external-link-alt"></i>
                </a>
              </div>
            </div>

            <!-- Katsuool -->
            <div class="col-6 col-md-3">
              <div class="l-footer__sub-card">
                <h4 class="l-footer__sub-title">Katsuool</h4>
                <p class="l-footer__sub-description">便利なWebツールを集めたサイト。日々の業務を効率化するツールを提供しています。</p>
                <a href="#" class="l-footer__sub-button" target="_blank" rel="noopener noreferrer">
                  ツールを使う
                  <i class="fas fa-external-link-alt"></i>
                </a>
              </div>
            </div>

            <!-- Smart Sprouts -->
            <div class="col-6 col-md-3">
              <div class="l-footer__sub-card">
                <h4 class="l-footer__sub-title">Smart Sprouts</h4>
                <p class="l-footer__sub-description">教育サービスのブランドサイト。子どもたちの成長をサポートする教育コンテンツを提供。</p>
                <a href="#" class="l-footer__sub-button" target="_blank" rel="noopener noreferrer">
                  サイトを見る
                  <i class="fas fa-external-link-alt"></i>
                </a>
              </div>
            </div>

            <!-- Spra -->
            <div class="col-6 col-md-3">
              <div class="l-footer__sub-card">
                <h4 class="l-footer__sub-title">Spra</h4>
                <p class="l-footer__sub-description">中央管理システム「Spra」の専用サイト。業務効率化を実現するSaaSプラットフォーム。</p>
                <a href="#" class="l-footer__sub-button" target="_blank" rel="noopener noreferrer">
                  詳細を見る
                  <i class="fas fa-external-link-alt"></i>
                </a>
              </div>
            </div>
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
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                      <path d="M22.675 0h-21.35C.597 0 0 .597 0 1.326v21.348C0 23.403.597 24 1.326 24H12.82v-9.294H9.692V11.41h3.128V8.797c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.464.099 2.795.143v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.763v2.31h3.587l-.467 3.296h-3.12V24h6.116C23.403 24 24 23.403 24 22.674V1.326C24 .597 23.403 0 22.675 0z"/>
                    </svg>
                </a>
              </li>
              <li class="l-footer__sns-item">
                <a href="https://x.com/KatsuhiroKakoi" class="l-footer__sns-link" aria-label="Twitter">
                  <!-- svg -->
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path d="M23.954 4.569c-.885.392-1.83.656-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.897-.959-2.178-1.555-3.594-1.555-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.229-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086a4.936 4.936 0 0 0 .92 6c-.793-.026-1.54-.242-2.192-.616v0c0 .061 0 .122 0 .183C2.28 19.29 4,21,6,21c5,0,7-4,7-7v-1c1,.5,2,.5,3,.5s2,0,3,.5v-1c0-3-2-5-5-5z"/>
                  </svg>
                </a>
              </li>
              <li class="l-footer__sns-item">
                <a href="https://www.instagram.com/katsuhiro.k1215/" class="l-footer__sns-link" aria-label="Instagram">
                  
                </a>
              </li>
              <li class="l-footer__sns-item">
                <a href="#" class="l-footer__sns-link" aria-label="LINE">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path d="M12 0C5.373 0 0 4.477 0 10c0 2.21.895 4.21 2.344 5.844L1.5 24l6.344-2.344C9.79 22.105 11.895 22 14 22c6.627 0 12-4.477 12-10S18.627 0 12 0zm1.5 15h-3v-3h3v3zm0-4h-3V6h3v5z"/>
                  </svg>
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