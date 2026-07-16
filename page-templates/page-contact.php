<?php

/**
 * Template Name: Contact Page
 * Description: お問い合わせページテンプレート
 * Katsucode WordPress Theme Setup
 * @author Katsuhiro Kakoi <katsuhiro.k1215@katsucode.jp>
 * @link  https://katsucode.jp/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later * 
 */
if (!defined('ABSPATH')) exit;
get_header();
?>

<!-- Contact Section Start -->
<section class="p-contact">
  <div class="container">
    <div class="section__header">
      <h2>ご相談・ご依頼はこちら</h2>
      <p>ホームページ制作やシステム開発などちょっとした更新まで、お気軽にご相談ください。</p>
      <p>ご送信いただいてから1～2営業日以内に返信させていただきます。</p>
      <p>万が一、3営業日以上返信がない場合はメールが届いていない可能性がありますので、大変お手数おかけいたしますが、<a href="mailto:info@katsucode.jp">info@katsucode.jp</a>までご連絡くださいませ。</p>
    </div>
    <div class="section__body">
      <?php the_content(); ?>
      <form method="post" action enctype="multipart/form-data">
        <table class="contact-form__table">
          <tbody>
            <tr>
              <th>当サイトを知ったきっかけは？</th>
              <td>
                <select name="referral" id="referral">
                  <option value="" selected disabled>選択してください</option>
                  <option value="Google">検索エンジン（Google, Yahoo!など）</option>
                  <option value="Facebook">Facebook</option>
                  <option value="Twitter">Twitter / X</option>
                  <option value="Instagram">Instagram</option>
                  <option value="Referral">知人の紹介</option>
                  <option value="Other">その他</option>
                </select>
              </td>
            </tr>
            <tr>
              <th>ご検討中の内容</th>
              <td>
                <div class="flex">
                  <label>
                    <input type="checkbox" name="service" value="ホームページ新規作成" />
                    <span>ホームページ新規作成</span>
                  </label>
                  <label>
                    <input type="checkbox" name="service" value="既存のホームページをリニューアル" />
                    <span>既存のホームページをリニューアル</span>
                  </label>
                  <label>
                    <input type="checkbox" name="service" value="LP新規作成" />
                    <span>LP新規作成</span>
                  </label>
                  <label>
                    <input type="checkbox" name="service" value="LPリニューアル" />
                    <span>LPリニューアル</span>
                  </label>
                  <label>
                    <input type="checkbox" name="service" value="ECサイト新規作成" />
                    <span>ECサイト新規作成</span>
                  </label>
                  <label>
                    <input type="checkbox" name="service" value="ECサイトリニューアル" />
                    <span>ECサイトリニューアル</span>
                  </label>
                  <label>
                    <input type="checkbox" name="service" value="システム開発" />
                    <span>システム開発</span>
                  </label>
                  <label>
                    <input type="checkbox" name="service" value="ちょっとした更新" />
                    <span>ちょっとした更新</span>
                  </label>
                  <label>
                    <input type="checkbox" name="service" value="その他" />
                    <span>その他</span>
                  </label>
                </div>
              </td>
            </tr>
            <tr>
              <th>
                お名前・担当者<span>必須</span>
              </th>
              <td>
                <label>
                  <input type="text" name="name" placeholder="山田 太郎" />
                </label>
              </td>
            </tr>
            <tr>
              <th>
                ふりがな<span>必須</span>
              </th>
              <td>
                <label>
                  <input type="text" name="name_kana" placeholder="やまだ たろう" />
                </label>
              </td>
            </tr>
            <tr>
              <th>
                会社名・屋号
              </th>
              <td>
                <label>
                  <input type="text" name="company" placeholder="株式会社かつコード" />
                </label>
              </td>
            </tr>
            <tr>
              <th>
                電話番号<span>必須</span>
              </th>
              <td>
                <label>
                  <input type="tel" name="tel" placeholder="090-1234-5678" />
                </label>
              </td>
            </tr>
            <tr>
              <th>
                メールアドレス<span>必須</span>
              </th>
              <td>
                <label>
                  <input type="email" name="email" placeholder="example@katsucode.jp" />
                </label>
              </td>
            </tr>
            <tr>
              <th>
                ご依頼・ご相談内容<span>必須</span>
              </th>
              <td>
                <label>
                  <textarea name="message" placeholder="お気軽にご相談内容をご記入ください。&#10;例：ホームページの制作を検討しています。予算や納期についてご相談させてください。"></textarea>
                </label>
              </td>
            </tr>
          </tbody>
        </table>
        <p class="contact-form__text">
          <a href="<?php echo esc_url(home_url('privacy-policy')); ?>" target="_blank" rel="noopener">プライバシーポリシーを確認する</a>
        </p>
        <p class="contact-form__privacy">
          <span>
            <label>
              <input type="checkbox" value="プライバシーポリシーに同意する" />
              <span>プライバシーポリシーに同意する</span>
            </label>
          </span>
        </p>
        <p class="contact-form__privacy">
          <span>
            <label>
              <input type="checkbox" value="営業・勧誘を目的としたお問い合わせではありません。" />
              <span>営業・勧誘を目的としたお問い合わせではありません。</span>
            </label>
          </span>
        </p>
        <div class="p-contact__btn">
          <input type="submit" value="確認画面へ" />
        </div>
      </form>
    </div>
  </div>
</section>
<!-- Contact Section End -->

<?php get_footer(); ?>