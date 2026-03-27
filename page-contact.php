<?php get_header(); ?>

<!-- Contact Section Start -->
<section class="p-contact__main">
  <div class="p-contact__main--wrapper">
    <div class="container">
      <div class="p-contact__main--header">
        <p>
          ホームページ制作に関するご相談や簡単なお見積りなどお気軽にご相談ください。
        </p>
        <p>
          ご送信いただいてから1～2営業日以内に返信させていただきます。（営業時間
          : 平日8時～17時）
        </p>
        <p>
          万が一、3営業日以上返信がない場合はメールが届いていない可能性がありますので、大変お手数おかけいたしますが、
          info@katsucode.jp までご連絡くださいませ。
        </p>
      </div>
      <div class="p-contact__main--body">
        <?php the_content(); ?>
        <form method="post" action enctype="multipart/form-data">
          <table class="contact-form">
            <tbody>
              <tr>
                <th class="contact-form__name">会社名・屋号</th>
                <td class="contact-form__form">
                  <label>
                    <input type="text" name="company" />
                  </label>
                </td>
              </tr>
              <tr>
                <th class="contact-form__name">
                  お名前・担当者<span>必須</span>
                </th>
                <td class="contact-form__form">
                  <label>
                    <input type="text" name="company" />
                  </label>
                </td>
              </tr>
              <tr>
                <th class="contact-form__name">
                  フリガナ<span>必須</span>
                </th>
                <td class="contact-form__form">
                  <label>
                    <input type="text" name="company" />
                  </label>
                </td>
              </tr>
              <tr>
                <th class="contact-form__name">
                  電話番号<span>必須</span>
                </th>
                <td class="contact-form__form">
                  <label>
                    <input type="text" name="company" />
                  </label>
                </td>
              </tr>
              <tr>
                <th class="contact-form__name">
                  メールアドレス<span>必須</span>
                </th>
                <td class="contact-form__form">
                  <label>
                    <input type="text" name="company" />
                  </label>
                </td>
              </tr>
              <tr>
                <th class="contact-form__name">
                  ご依頼・ご相談内容<span>必須</span>
                </th>
                <td class="contact-form__form">
                  <label>
                    <textarea name="message" cols="50" rows="5"></textarea>
                  </label>
                </td>
              </tr>
            </tbody>
          </table>
          <p class="contact-form__text">
            <a href="privacy-policy.html">プライバシーポリシーを確認する</a>
          </p>
          <p class="contact-form__privacy">
            <span>
              <label>
                <input type="checkbox" value="プライバシーポリシーに同意する" />
                <span>プライバシーポリシーに同意する</span>
              </label>
            </span>
          </p>
          <div class="c-btn__primary p-contact__btn">
            <div class="c-btn__primary--wrapper">
              <div class="c-btn__primary--text">
                <input type="submit" value="確認画面へ" />
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- About Section End -->

<?php get_footer(); ?>