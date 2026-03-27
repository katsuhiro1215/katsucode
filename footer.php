  </div>
  </main>
  <!-- Main End -->

  <!-- CTA Start -->
  <aside class="l-aside__contact">
    <div class="l-aside__contact--wrapper">
      <div class="container">
        <h2 class="c-title__contact-primary l-aside__contact--title">
          お気軽にお問い合わせください
        </h2>
        <div class="l-aside__contact--contents">
          <div class="l-aside__contact--item">
            <h3 class="c-title__contact-secondary l-aside__contact--title">
              <span>お電話でのお問い合わせ</span>
            </h3>
            <div class="l-aside__contact--detail">
              <div class="l-aside__contact--tel">
                TEL. <span>090-9580-9257</span>
              </div>
              <div class="l-aside__contact--time">
                営業時間 : 9:00 - 17: 00 <br />
                定休日 : 土日・祝日
              </div>
              <p class="l-aside__contact--text">
                上記以外の時間帯はメールにてお願いいたします。
              </p>
            </div>
          </div>
          <div class="l-aside__contact--item">
            <h3 class="c-title__contact-secondary l-aside__contact--title">
              <span>メールフォームでのお問い合わせ</span>
            </h3>
            <div class="l-aside__contact--detail">
              <div class="c-btn__primary l-aside__contact--btn">
                <a href="about.html" class="c-btn__primary--wrapper">
                  <span class="c-btn__primary--text">お問い合わせへ</span>
                  <div class="c-btn__primary--arrow">
                    <i class="fa-solid fa-arrow-right"></i>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <!-- CTA End -->
  <!-- Footer Start -->
  <footer class="l-footer">
    <div class="l-footer__wrapper">
      <div class="l-footer__main">
        <div class="container">
          <div class="l-footer__logo">
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="ロゴ" />
              <span>Katsu code</span>
            </a>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="l-footer__address">
                <dl>
                  <dt>所在地</dt>
                  <dd>
                    奈良県奈良市
                    <br />
                    (自宅兼事務所のため、ご契約の際にお伝えします)
                  </dd>
                  <dt>連絡先</dt>
                  <dd>
                    Tel. <span>090-9580-9257</span><br />
                    Email <span>info@katsucode.jp</span>
                  </dd>
                  <dt>営業時間</dt>
                  <dd>9:00 - 17: 00</dd>
                  <dt>定休日</dt>
                  <dd>土日・祝日</dd>
                </dl>
              </div>
              <ul class="l-footer__sns-list">
                <li class="l-footer__sns-item">
                  <a href="#" class="l-footer__sns-link">
                    <i class="fab fa-facebook icon facebook"></i>
                  </a>
                </li>
                <li class="l-footer__sns-item">
                  <a href="#" class="l-footer__sns-link">
                    <i class="fab fa-twitter icon twitter"></i>
                  </a>
                </li>
                <li class="l-footer__sns-item">
                  <a href="#" class="l-footer__sns-link">
                    <i class="fab fa-instagram icon instagram"></i>
                  </a>
                </li>
                <li class="l-footer__sns-item">
                  <a href="#" class="l-footer__sns-link">
                    <i class="fab fa-line icon line"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-lg-6">
              <nav class="l-footer-nav">
                <?php
                wp_nav_menu(
                  array(
                    'theme_location' => 'footer-nav',
                    'container' => false,
                  )
                );
                ?>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="l-footer__copyright">
        <p class="copyright">&copy; 2022 Katsucode</p>
      </div>
    </div>
  </footer>
  <!-- Footer End -->
  </div>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

  <?php wp_footer(); ?>
  </body>

  </html>