<?php

/**
 * Template Name: Flow Page
 * Description: 制作の流れページテンプレート
 * Katsucode WordPress Theme Setup
 * @author Katsuhiro Kakoi <katsuhiro.k1215@katsucode.jp>
 * @link  https://katsucode.jp/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later * 
 */
if (!defined('ABSPATH')) exit;
get_header();
?>

<!-- Intro Section Start -->
<section class="p-page__intro">
  <div class="container">
    <div class="section__body">
      <p>案件によって、制作の流れは違いますが、基本的には同じ工程となります。</p>
      <p>ここでは、Webサイト制作を例にお問い合わせから、納品までの制作の流れを紹介しています。</p>
    </div>
  </div>
</section>
<!-- Intro Section End -->

<!-- Flow Section Start -->
<section class="p-flow">
  <div class="container">
    <div class="section__header">
      <h3 class="section__title">
        <div class="section__title--logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="" />
        </div>
        <div class="section__title-en">Flow</div>
        <div class="section__title-ja">制作の流れ</div>
      </h3>
    </div>
    <div class="section__body">
      <!-- タブで切り替え -->
      <div class="tab">
        <button class="tablinks active" onclick="openTab(event, 'web')">Webサイト制作</button>
        <button class="tablinks" onclick="openTab(event, 'system')">システム開発</button>
      </div>
      <!-- ホームページ -->
      <div id="web" class="tab-content">
        <h4>ホームページやロゴ制作などの制作フロー</h4>
        <ul class="p-flow__main--list">
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(1)); ?>" alt="" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">01</span>
              <h3>お問い合わせ・ヒアリング</h3>
              <p>お電話かお問い合わせフォームにてお問い合わせください。こちらからなるべく24時間以内、2-3営業日中にお電話でご連絡いたします。</p>
              <p>お電話では、貴社様のご要望をお聞きします。</p>
            </div>
          </li>
          <div class="p-flow--arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(2)); ?>" alt="" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">02</span>
              <h3>打ち合わせ・見積書</h3>
              <p>
                表面的なご要望だけでなく、「なぜそれが必要か」「どなたに見てもらいたいか」といった背景まで丁寧にお伺いし、課題を整理した上で仮の見積書を作成します。
              </p>
              <p>
                打ち合わせには、ZoomやSkypeといったツールを使用します。ITが苦手な方には操作方法からご案内しますので、ご安心ください。
              </p>
            </div>
          </li>
          <div class="p-flow--arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(3)); ?>" alt="" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">03</span>
              <h3>提案書の提出</h3>
              <p>
                ヒアリングした内容をもとに、なぜその構成・デザインの方向性が適しているのかを整理した提案書と、制作から納品までの制作スケジュールをお送りします。ご要望によっては、複数の方向性をご提案することもあります。
              </p>
              <p>
                あわせて確定の見積書をお渡しし、内容にご納得いただけましたら、次のステップへ進みます。
              </p>
            </div>
          </li>
          <div class="p-flow--arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(4)); ?>" alt="" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">04</span>
              <h3>ご契約・システム登録</h3>
              <p>
                見積書の内容にご納得いただけましたら、正式にご契約を締結いたします。
              </p>
              <p>
                ご契約後、お客様専用の中央管理システムにプロジェクトを登録いたします。ログイン情報をお送りしますので、いつでも進捗状況や契約内容を確認できます。
              </p>
              <p>
                お支払い条件についても、この段階でご案内いたします。案件の規模や内容に応じてご相談させていただきます。
              </p>
            </div>
          </li>
          <div class="p-flow--arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(5)); ?>" alt="" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">05</span>
              <h3>ワイヤーフレーム設計</h3>
              <p>
                ご要望を元に、どのような形にするのか、ラフなデザインも含めた設計を行います。
              </p>
              <p>
                完成しましたら、確認のため、再度打ち合わせをさせていただきます。進捗状況は管理システムで随時ご確認いただけます。
              </p>
            </div>
          </li>
          <div class="p-flow--arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(6)); ?>" alt="" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">06</span>
              <h3>デザイン</h3>
              <p>設計の確認がとれましたら、デザインしていきます。</p>
              <p>1つ目の案でご納得いただけるよう作成いたします。</p>
              <p>作成したら確認していただきます。この段階の進捗も管理システムで確認可能です。</p>
            </div>
          </li>
          <div class="p-flow--arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(7)); ?>" alt="" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">07</span>
              <h3>プログラミング</h3>
              <p>
                デザインの案の確認がとれましたら、実際にプログラミングで実装していきます。
              </p>
              <p>
                HTML、CSS、JavaScriptでの実装後、再度確認をしていただき、了承が出ましたら、WordPressへ組み込んでいきます。実装状況は管理システムでリアルタイムに更新されます。
              </p>
            </div>
          </li>
          <div class="p-flow--arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(8)); ?>" alt="" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">08</span>
              <h3>確認・修正</h3>
              <p>全ての作成が完了しましたら、実際のサイトを確認していただきます。ここでは仮サイトでの確認となります。</p>
              <p>文章の修正や写真の変更があればここで修正いたします。修正履歴も管理システムで記録されます。</p>
            </div>
          </li>
          <div class="p-flow--arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(8)); ?>" alt="" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">09</span>
              <h3>本番公開・納品</h3>
              <p>修正や変更が終わりましたら、本番環境へあげます。</p>
              <p>
                正常に動作しているか確認できましたら、納品完了となります。
              </p>
            </div>
          </li>
        </ul>
      </div>
      <!-- システム -->
      <div id="system" class="tab-content" style="display: none;">
        <h4>システム開発フロー</h4>
        <ul class="p-flow__main--list">
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(1)); ?>" alt="" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">01</span>
              <h3>お問い合わせ・ヒアリング</h3>
              <p>お電話かお問い合わせフォームにてお問い合わせください。こちらからなるべく24時間以内、2-3営業日中にお電話でご連絡いたします。</p>
              <p>お電話では、貴社様のご要望をお聞きします。</p>
            </div>
          </li>
          <div class="p-flow--arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(2)); ?>" alt="" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">02</span>
              <h3>打ち合わせ・見積書</h3>
              <p>
                表面的なご要望だけでなく、「何を解決したいのか」「今どこに困っているのか」といった背景まで丁寧にお伺いし、課題を整理した上で仮の見積書を作成します。
              </p>
              <p>
                打ち合わせには、ZoomやSkypeといったツールを使用します。ITが苦手な方には操作方法からご案内しますので、ご安心ください。
              </p>
            </div>
          </li>
          <div class="p-flow--arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(3)); ?>" alt="" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">03</span>
              <h3>提案書・要件定義</h3>
              <p>
                お伺いした内容をもとに、「何を解決するためにどんな機能が必要か」を整理した要件定義書と制作スケジュールを作成いたします。実現方法に複数の選択肢がある場合は、メリット・デメリットを添えてご提案します。
              </p>
              <p>
                確定の見積書とともに提出し、内容をご確認いただきます。
              </p>
            </div>
          </li>
          <div class="p-flow--arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(4)); ?>" alt="" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">04</span>
              <h3>ご契約・システム登録</h3>
              <p>
                見積書と要件定義にご納得いただけましたら、正式にご契約を締結いたします。
              </p>
              <p>
                ご契約後、お客様専用の中央管理システムにプロジェクトを登録いたします。開発状況、タスク進捗、仕様書などをいつでも確認できます。
              </p>
              <p>
                お支払い条件についてもこの段階でご案内いたします。案件の規模や内容に応じてご相談の上、分割でのお支払いにも対応いたします。
              </p>
            </div>
          </li>
          <div class="p-flow--arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(5)); ?>" alt="" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">05</span>
              <h3>基本設計</h3>
              <p>
                システムの画面設計、データベース設計、機能仕様などの基本設計を行います。
              </p>
              <p>
                設計書は管理システムで共有し、随時フィードバックをいただきます。
              </p>
            </div>
          </li>
          <div class="p-flow--arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(6)); ?>" alt="" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">06</span>
              <h3>詳細設計・開発</h3>
              <p>基本設計を元に、詳細設計を行い、実際のプログラミング開発に入ります。</p>
              <p>開発状況は管理システムでタスク単位で進捗を確認でき、完了したタスクから順次テスト環境で確認いただけます。</p>
            </div>
          </li>
          <div class="p-flow--arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(7)); ?>" alt="" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">07</span>
              <h3>テスト・検証</h3>
              <p>
                開発が完了したら、テスト環境で動作確認を行います。
              </p>
              <p>
                機能テスト、負荷テスト、セキュリティテストなど、様々な角度から検証いたします。管理システムでテスト結果も共有します。
              </p>
            </div>
          </li>
          <div class="p-flow--arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(8)); ?>" alt="" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">08</span>
              <h3>ユーザーテスト・修正</h3>
              <p>実際にお客様にテスト環境で操作していただき、使い勝手を確認します。</p>
              <p>改善点があれば修正いたします。修正内容も管理システムで履歴を確認できます。</p>
            </div>
          </li>
          <div class="p-flow--arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <li class="p-flow__main--item">
            <figure>
              <img src="<?php echo esc_url(katsucode_flow_image(8)); ?>" alt="" />
            </figure>
            <div class="p-flow__main--info">
              <span class="number">09</span>
              <h3>本番リリース・運用開始</h3>
              <p>すべてのテストが完了したら、本番環境へリリースします。</p>
              <p>
                リリース後も管理システムで運用状況を確認でき、保守サポートが必要な場合もスムーズに対応いたします。
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Flow Section End -->

<!-- Management System Section Start -->
<section class="p-flow__system">
  <div class="container">
    <div class="section__header">
      <h3 class="section__title">
        <div class="section__title--logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="" />
        </div>
        <div class="section__title-en">Management System</div>
        <div class="section__title-ja">進捗管理システムについて</div>
      </h3>
    </div>
    <div class="section__body">
      <div class="p-flow__system--intro">
        <p>
          当社では、お客様に安心してプロジェクトをお任せいただくため、独自開発の中央管理システムを導入しています。
        </p>
        <p>
          システムエンジニアである代表が開発したこのシステムでは、契約状況、開発進捗、タスク管理など、プロジェクトに関するすべての情報をリアルタイムで確認できます。
        </p>
      </div>

      <div class="p-flow__system--features">
        <h4>主な機能</h4>
        <ul class="p-flow__system--list">
          <li class="p-flow__system--item">
            <div class="p-flow__system--icon">
              <i class="fas fa-file-contract"></i>
            </div>
            <div class="p-flow__system--content">
              <h5>契約状況の確認</h5>
              <p>契約内容、見積書、請求書など、契約に関する書類をいつでも閲覧できます。</p>
            </div>
          </li>
          <li class="p-flow__system--item">
            <div class="p-flow__system--icon">
              <i class="fas fa-tasks"></i>
            </div>
            <div class="p-flow__system--content">
              <h5>進捗状況の可視化</h5>
              <p>現在どの工程にいるのか、各タスクの進捗率、完了予定日などをリアルタイムで確認できます。</p>
            </div>
          </li>
          <li class="p-flow__system--item">
            <div class="p-flow__system--icon">
              <i class="fas fa-file-alt"></i>
            </div>
            <div class="p-flow__system--content">
              <h5>ドキュメント管理</h5>
              <p>設計書、仕様書、テスト結果など、プロジェクトに関するすべてのドキュメントを一元管理します。</p>
            </div>
          </li>
          <li class="p-flow__system--item">
            <div class="p-flow__system--icon">
              <i class="fas fa-comments"></i>
            </div>
            <div class="p-flow__system--content">
              <h5>コミュニケーション履歴</h5>
              <p>打ち合わせ内容、修正依頼、フィードバックなど、すべてのやり取りを記録・確認できます。</p>
            </div>
          </li>
          <li class="p-flow__system--item">
            <div class="p-flow__system--icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <div class="p-flow__system--content">
              <h5>スケジュール管理</h5>
              <p>工程ごとのスケジュール、マイルストーン、納期までの残り日数などを視覚的に確認できます。</p>
            </div>
          </li>
          <li class="p-flow__system--item">
            <div class="p-flow__system--icon">
              <i class="fas fa-bell"></i>
            </div>
            <div class="p-flow__system--content">
              <h5>通知機能</h5>
              <p>重要な更新や確認が必要な事項があった場合、メールやシステム内で通知されます。</p>
            </div>
          </li>
        </ul>
      </div>

      <div class="p-flow__system--benefits">
        <h4>システムを使うメリット</h4>
        <ul>
          <li>24時間365日、いつでもプロジェクトの状況を確認できる</li>
          <li>「今どうなっているんだろう？」という不安を解消</li>
          <li>過去のやり取りや変更履歴をいつでも振り返れる</li>
          <li>複数の担当者で情報を共有しやすい</li>
          <li>透明性の高いプロジェクト運営で安心</li>
        </ul>
      </div>

      <div class="p-flow__system--note">
        <p>
          <i class="fas fa-info-circle"></i>
          ご契約後、専用のログイン情報をお送りいたします。スマートフォンやタブレットからもアクセス可能です。
        </p>
      </div>
    </div>
  </div>
</section>
<!-- Management System Section End -->

<?php get_footer(); ?>