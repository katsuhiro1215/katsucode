# TASKS.md — 実装計画

最終更新: 2026-08-03

仕様の詳細は [SPEC.md](./SPEC.md)、運用ルールは [CLAUDE.md](./CLAUDE.md) を参照。優先度順に並べる。

---

## 0. ドキュメント・リポジトリ整理（完了）

- [x] `.gitignore` 作成（`.claude/` / `wp-config.php` 等を除外）
- [x] `CLAUDE.md` 作成（技術スタック・規約・Git運用ルール）
- [x] `SPEC.md` 作成（`MENU_GUIDE.md` / `HARDCODED_IMAGES.md` を統合）
- [x] `TASKS.md` 作成（本ファイル）
- [ ] `MENU_GUIDE.md` / `HARDCODED_IMAGES.md` を削除
- [ ] 上記をまとめて1コミット（「ドキュメント整理」目的のみ）

---

## ① FlashMessage実装（最優先・完了）

お問い合わせ送信結果をトースト通知で表示する。詳細仕様は [SPEC.md §4](./SPEC.md#4-お問い合わせフォーム--flashmessage仕様)。

- [x] `page-templates/page-contact.php`: 静的 `<p class="contact-form__notice">` ブロックを削除し、`?contact=` の値を `data-flash-type` / `data-flash-message` としてbody等に出力する処理に置き換える
- [x] `assets/js/main.js`: `showFlashMessage()` を追加し、data属性からトーストDOMを生成。5秒自動フェードアウト＋手動×ボタン、`role="status"` `aria-live="polite"` を付与
- [x] `assets/sass/object/component/_flash-message.scss` を新規作成し、`style.scss` からimport
- [x] コンパイル済みCSSへ反映
- [x] ブラウザ（Playwright）で `?contact=success` / `invalid` / `error` の3パターンを確認（表示・自動消滅・手動クローズ・アクセシビリティ）
- [x] 1コミット（「Contact送信時のFlashMessage表示」目的のみ）でコミット（`1010491`）

---

## ② Front-page Concernsグリッドの配色修正（完了）

詳細仕様は [SPEC.md §5](./SPEC.md#5-front-page-concernsセクション-配色仕様)。

- [x] `assets/sass/object/project/_index.scss` の `&__concerns--item` の `background-color: lighten($accent, 10%)` を、白地＋`$accent-dark`基調のアクセントに変更
- [x] ホバー時の `lighten($accent, 20%)` も濃色系の演出に変更
- [x] About → Concerns → Service のセクション遷移を通しで確認し、違和感がないか確認（いずれも白背景のため統一感あり）
- [x] Sassの差分をコンパイル相当の内容でCSS生成物へ反映
- [x] ブラウザ（Playwright）で通常時・ホバー時の見た目を確認
- [x] 1コミット（「Concernsセクションの配色調整」目的のみ）でコミット（`701a6bc`）

---

## ③ FAQコンテンツ作成（ドラフト完了）

詳細仕様は [SPEC.md §6](./SPEC.md#6-faqコンテンツ仕様) / [SPEC.md §7](./SPEC.md#7-ビジネスルールfaq回答の根拠となる社内方針)。

- [x] `docs/faq-content.md` を作成
  - [x] 全般共通FAQ（見積・料金／進行・対応／スキル不要／発注準備／契約・支払い）
  - [x] Web制作（制作／保守・運用／記事作成）
  - [x] LP（制作／保守・運用）
  - [x] ECサイト（制作／保守・運用）
  - [x] システム開発（制作・開発／保守・運用）
  - [x] 奈良・水泳 特設LP専用FAQ
- [ ] ユーザーが内容をレビュー・加筆（実際の納期目安や料金レンジなど、抽象化した箇所の具体化） ※要判断
- [ ] ユーザーがWordPress管理画面（`faq` 投稿タイプ / `faq-cat` タクソノミー）へ手動投稿 ※Claude Codeの作業範囲外

---

## ④ 実績カード（Project）のデザイン統一・フロント特集カード化（ソース完了・CSS未コミット）

Front-pageの実績カードが縦書き・画像オーバーレイで読みにくいという指摘を受け、archive-project.phpの
横書きカードに統一。tane-be.co.jp を参考に、フロントページ1件目のみ右側がビューポート端まで
はみ出す「特集カード」にする案を採用。

- [x] `template-parts/loop/project-card.php` を新規作成（archive・フロント共通の実績カードマークアップ）
- [x] `template-parts/loop/project.php`（archive用ラッパー）を上記partialを呼び出す形にリファクタリング。`data-categories` によるタブ絞り込みは維持
- [x] `template-parts/front-page/project.php` を書き換え。1件目は `.p-index__project--featured` + `c-card__project--featured` 修飾、2・3件目は通常グリッド
- [x] `assets/sass/object/component/_card.scss` に `.c-card__project`（共通カード）を追加。`--featured` 修飾で特集レイアウト（lg以上で画像/本文2カラム）
- [x] `assets/sass/object/project/_project.scss` から旧 `.p-index__project--item`（clip-path・縦書き）と `.p-project__card`（archiveの旧カードスタイル、`.c-card__project`と重複）を削除
- [x] ブラウザ（Playwright）でフロント特集カード・archiveグリッド・タブ絞り込み・モバイル1カラム・横スクロール未発生を確認
- [x] ソース（SCSS/PHP）のみ1コミット（`29a9c7a`）
- [ ] **コンパイル済みCSS（`assets/css/style.*.css` 等）は他の作業中の変更と混在するため未コミット。別途ユーザー側でSassを再コンパイルしてコミットするか、Claude Codeに依頼してください。**

---

## 今後の申し送り事項（今回のスコープ外）

- `page-service.php` の6サービスカード画像・`_service.scss` / `_project.scss` の配色は、service関連リニューアルとまとめて別途対応。
- FAQのフロントエンド表示（アコーディオン化、「解決しない場合」の導線ボタン）は、コンテンツ投入後に別タスクとして実装する。
