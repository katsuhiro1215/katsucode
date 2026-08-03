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

      <?php if (($_GET['contact'] ?? '') === 'success'): ?>
        <p class="contact-form__notice contact-form__notice--success">お問い合わせいただき、ありがとうございます。1〜2営業日以内にご返信いたします。</p>
      <?php elseif (($_GET['contact'] ?? '') === 'invalid'): ?>
        <p class="contact-form__notice contact-form__notice--error">未入力の必須項目があります。ご確認の上、再度送信してください。</p>
      <?php elseif (($_GET['contact'] ?? '') === 'error'): ?>
        <p class="contact-form__notice contact-form__notice--error">送信に失敗しました。お手数ですが<a href="mailto:info@katsucode.jp">info@katsucode.jp</a>までご連絡ください。</p>
      <?php endif; ?>

      <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
        <?php wp_nonce_field('spra_contact_submit'); ?>
        <input type="hidden" name="action" value="spra_contact_submit" />
        <input type="hidden" name="redirect_to" value="<?php echo esc_url(get_permalink()); ?>" />
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
              <th>
                ご検討中の内容<span>必須</span>
              </th>
              <td>
                <select name="category" id="category" required>
                  <option value="" selected disabled>選択してください</option>
                  <?php foreach (spra_get_contact_categories() as $category): ?>
                    <option value="<?php echo esc_attr($category['id']); ?>"><?php echo esc_html($category['name']); ?></option>
                  <?php endforeach; ?>
                </select>
              </td>
            </tr>
            <tr>
              <th>
                お名前・担当者<span>必須</span>
              </th>
              <td>
                <label>
                  <input type="text" name="name" placeholder="山田 太郎" required />
                </label>
              </td>
            </tr>
            <tr>
              <th>
                ふりがな<span>必須</span>
              </th>
              <td>
                <label>
                  <input type="text" name="name_kana" placeholder="やまだ たろう" required />
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
                  <input type="tel" name="tel" placeholder="090-1234-5678" required />
                </label>
              </td>
            </tr>
            <tr>
              <th>
                メールアドレス<span>必須</span>
              </th>
              <td>
                <label>
                  <input type="email" name="email" placeholder="example@katsucode.jp" required />
                </label>
              </td>
            </tr>
            <tr>
              <th>
                ご依頼・ご相談内容<span>必須</span>
              </th>
              <td>
                <label>
                  <textarea name="message" placeholder="お気軽にご相談内容をご記入ください。&#10;例：ホームページの制作を検討しています。予算や納期についてご相談させてください。" required></textarea>
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
              <input type="checkbox" name="privacy_agree" value="1" required />
              <span>プライバシーポリシーに同意する</span>
            </label>
          </span>
        </p>
        <p class="contact-form__privacy">
          <span>
            <label>
              <input type="checkbox" name="not_sales_agree" value="1" required />
              <span>営業・勧誘を目的としたお問い合わせではありません。</span>
            </label>
          </span>
        </p>
        <div class="p-contact__btn">
          <input type="submit" value="送信する" />
        </div>
      </form>
    </div>
  </div>
</section>
<!-- Contact Section End -->

<?php get_footer(); ?>