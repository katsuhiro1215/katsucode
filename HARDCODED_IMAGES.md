# 画像ハードコーディング一覧

## この文書について

テーマ内でファイルパスが直接書かれている（=管理画面から変更できない）画像を、PHP・Sass(SCSS)の両方から洗い出した一覧です。

- **PHP側**：`get_template_directory_uri() . '/assets/img/...'` の形で書かれているもの。ACFフィールド化すれば管理画面から差し替え可能になります。
- **Sass(SCSS)側**：`background-image: url('../img/...')` の形で書かれているもの。**ACF化はできず、コード（.scssファイル）を直接編集して画像を差し替えるしかありません。**

件数（2026-07時点）：PHP内 147箇所 / SCSS内 6箇所。

## ✅ 対応済み：制作の流れ画像（flow/step1〜8.jpg）

`assets/img/flow/step1.jpg`〜`step8.jpg`（57箇所・page-flow.php + サービス詳細ページ5つ）をACF化しました。

- **管理画面**：「制作の流れ画像」（ACFオプションページ、`inc/acf-fields.php`で登録）から STEP1〜8 の画像を一括管理できます。未設定の場合は従来通り`assets/img/flow/stepN.jpg`が表示されます（フォールバック）。
- **実装**：`inc/helpers.php`の`katsucode_flow_image($step)`関数が、ACF値があればそれを、無ければデフォルト画像を返します。テンプレート側は`<?php echo esc_url(katsucode_flow_image(1)); ?>`のように呼び出します。
- 現状は全ページで同じSTEP画像セットを共有する設計です（従来の使い回し状態を維持しつつ、コードを触らず差し替えられるようにしたもの）。ページごとに異なる画像にしたい場合は別途ご相談ください。

## ✅ 対応済み：page-about.php / page-company.php の画像

`page-about.php`（8箇所）・`page-company.php`（5箇所）をACF化しました。この2ページは他ページと画像を共有していないため、**ページ単位（page_templateロケーションルール）でACFフィールドを割り当て**、通常の「固定ページ編集」画面から直接差し替えられるようにしています。

- **page-about.php**：「Aboutページ画像」フィールドグループ（WHY/WHAT/HOW背景3点、HOW一覧の画像4点、TRUSTセクション画像1点）
- **page-company.php**：「Companyページ画像」フィールドグループ（コンセプト3点、プロフィール写真・通常時/ホバー時の2点）
- 実装：`inc/helpers.php`の`katsucode_page_image($field_name, $default)`関数（ACF未設定時はデフォルト画像にフォールバック）
- `_about.scss`の`[data-bg='why'/'what'/'how']`背景画像も、ACF値をもとにしたインラインstyle属性で上書きするようにしたため、**PHP側の画像を差し替えるとCSS側の背景も自動的に連動します**（セクション4に記載していた「CSSとHTML両方の修正が必要」という注意点は解消されました）。`_about.scss`自体の`background-image`宣言は未使用フォールバックとしてそのまま残しています。

---

## 1. サイト共通・システム画像（ACF化はおすすめしません）

ロゴ・favicon・SNSアイコン・no-image代替画像など、**サイト全体で使い回す固定アセット**です。ページごとの内容ではないため、ACF化するより「画像ファイルを差し替える」運用の方がシンプルです。

| ファイル | 行 | 画像パス | 用途 |
|---|---|---|---|
| header.php | 24 | `assets/img/noimage.jpg` | og:image のフォールバック（アイキャッチが無い投稿用） |
| header.php | 56 | `assets/img/favicon/favicon.ico` | favicon |
| header.php | 57 | `assets/img/favicon/favicon-16x16.png` | favicon (16x16) |
| header.php | 58 | `assets/img/favicon/favicon-32x32.png` | favicon (32x32) |
| header.php | 59 | `assets/img/favicon/favicon-48x48.png` | favicon (48x48) |
| header.php | 60 | `assets/img/favicon/apple-touch-icon-180x180.png` | Apple Touch Icon |
| header.php | 61 | `assets/img/favicon/site.webmanifest` | PWA向けマニフェスト（画像そのものではない） |
| header.php | 81 | `assets/img/logo.svg` | ヘッダーロゴ |
| header.php | 127 | `assets/img/noimage.jpg` | 固定ページ上部ビジュアルのアイキャッチ代替 |
| footer.php | 121 | `assets/img/logo.svg` | フッターロゴ |
| footer.php | 148 | `assets/img/icon/facebook.png` | SNSアイコン |
| footer.php | 153 | `assets/img/icon/twitter2.png` | SNSアイコン |
| footer.php | 158 | `assets/img/icon/instagram.png` | SNSアイコン |
| footer.php | 163 | `assets/img/icon/line.png` | SNSアイコン |
| search.php | 40 | `assets/img/noimage.jpg` | 検索結果のアイキャッチ代替 |
| archive.php | 30 | `assets/img/noimage.jpg` | ブログ一覧のアイキャッチ代替 |
| single.php | 26, 76 | `assets/img/noimage.jpg` | 記事詳細・関連記事のアイキャッチ代替 |
| template-parts/front-page/blog.php | 39 | `assets/img/noimage.jpg` | トップページのブログカードのアイキャッチ代替 |
| template-parts/header/hero-front.php | 8, 16, 24, 32 | `assets/img/top/image1〜4.jpg` | トップページヒーローの4枚スライド |
| template-parts/loop/project.php | 22 | `assets/img/project/default.jpg` | 実績カードのアイキャッチ代替 |
| template-parts/front-page/project.php | 29, 50, 71 | `assets/img/project/default.jpg` | トップページ実績セクションのアイキャッチ代替（3箇所） |
| page-templates/page-swim.php | 42 | `assets/img/favicon/favicon.ico` | このLP専用の`<head>`内favicon |
| page-templates/page-nara.php | 42 | `assets/img/favicon/favicon.ico` | このLP専用の`<head>`内favicon |

---

## 2. 固定ページ（page-templates）ごとの画像

**ここが今回いちばん見てほしい部分です。** ページ固有の説明・実績イメージなどで、ACF化する価値が高いのはこの層です。

### page-flow.php（制作の流れ）— 20箇所
- 32, 397行目: `assets/img/logo.svg`（背景装飾ロゴ、共通アセットに近い・未対応）
- ~~50〜203行目: `assets/img/flow/step1.jpg`〜`step8.jpg`~~／~~222〜373行目: 同8枚~~ → **✅ ACF化済み**（`katsucode_flow_image()`、計18箇所）

### page-web-production.php / page-lp.php / page-ec-site.php / page-app-development.php / page-system-development.php（各サービス詳細ページ）— 各11〜12箇所
5ページとも同じパターンです：
- `assets/img/about/step1.jpg`（冒頭の紹介画像、1箇所・未対応）
- `assets/img/project/default.jpg`（実績カードのアイキャッチ代替、3箇所・未対応）
- ~~`assets/img/flow/step1.jpg`〜`step8.jpg`（制作の流れ、7〜8箇所）~~ → **✅ ACF化済み**

### page-service.php（事業内容一覧）— 8箇所
- 22行目: `assets/img/about/step1.jpg`
- 33行目: `assets/img/logo.svg`
- 80, 120, 159, 199, 239, 279行目: `assets/img/noimage.jpg`（6サービスカード全てが代替画像のまま＝実質未設定の状態）

### page-company.php（会社概要）— 5箇所 → **✅ ACF化済み**
- ~~30, 46, 61行目: `assets/img/about/step1〜3.jpg`~~ → `company_concept_image_1〜3`
- ~~89, 90行目: `assets/img/profile/sample01.jpg` / `sample02.jpg`~~ → `company_profile_image` / `company_profile_image_hover`

### page-about.php（かつコードについて）— 8箇所 → **✅ ACF化済み**
- ~~WHY/WHAT/HOW背景（`_about.scss`と共有していたもの）~~ → `about_bg_why` / `about_bg_what` / `about_bg_how`（インラインstyleで出力）
- ~~97, 109, 121, 133行目: HOW一覧4点~~ → `about_how_image_1〜4`
- ~~208行目: TRUSTセクション画像~~ → `about_trust_image`

### page-swim.php / page-nara.php（今回作成した地域・業種特化LP）— 各1箇所（favicon除く）
- `assets/img/swim/swimming.jpg` / `assets/img/nara/nara.jpg`（ヒーロー背景）
- 画像が増えたら`assets/img/swim/`・`assets/img/nara/`配下に追加し、該当箇所のパスを増やす想定です。

### page-saas.php — 1箇所 → **✅ svg化済み**
- ~~21行目: `assets/img/logo.png`~~ → `assets/img/logo.svg`（他ページと統一）

### page-privacy-policy.php — 1箇所 → **✅ svg化済み**
- ~~11行目: `assets/img/logo.png`~~ → `assets/img/logo.svg`（同上）

---

## 3. テンプレートパーツ内の画像

| ファイル | 行 | 画像パス | 備考 |
|---|---|---|---|
| template-parts/front-page/service.php | 56, 71, 86, 105, 125, 146 | `assets/img/top/webdesign.jpg` | トップページのサービス紹介6項目、**全て同じ画像を使い回し**（差し替え候補） |
| template-parts/service/webdesign.php | 5 | `assets/img/logo.png` | 背景装飾ロゴ |
| template-parts/service/webdesign.php | 19, 271, 341, 402, 434 | `assets/img/service/image1〜5.jpg` | Webデザインサービスの説明画像5枚 |
| template-parts/service/contract.php | 5 | `assets/img/logo.png` | 背景装飾ロゴ |
| template-parts/service/contract.php | 16 | `assets/img/service/image6.jpg` | 契約形態の説明画像 |
| template-parts/service/system.php | 5 | `assets/img/logo.png` | 背景装飾ロゴ |
| template-parts/service/ec.php | 5 | `assets/img/logo.png` | 背景装飾ロゴ |
| template-parts/service/design.php | 5 | `assets/img/logo.png` | 背景装飾ロゴ |

---

## 4. Sass(SCSS)内の画像 — コードを直接編集する必要あり

ACFでは差し替えできません。デザインとして固定するCSS背景画像です。

| ファイル | 行 | 画像パス | 用途 |
|---|---|---|---|
| assets/sass/object/project/_about.scss | 77 | `../img/about/step1.jpg` | `[data-bg='why']`の背景（**未使用フォールバック**。実際はpage-about.php側のインラインstyleで上書きされます） |
| assets/sass/object/project/_about.scss | 82 | `../img/about/step2.jpg` | `[data-bg='what']`の背景（同上） |
| assets/sass/object/project/_about.scss | 87 | `../img/about/step3.jpg` | `[data-bg='how']`の背景（同上） |
| assets/sass/object/project/_about.scss | 254 | `../img/logo.svg` | `.container`内の透かしロゴ（opacity: 0.08）・未対応 |
| assets/sass/object/project/_banner.scss | 25 | `../../assets/img/top/banner1.jpg` | トップページ`.p-index__banner--elem-1`の背景（`background-attachment: fixed`）・未対応 |
| assets/sass/object/project/_banner.scss | 29 | `../../assets/img/top/banner2.jpg` | トップページ`.p-index__banner--elem-2`の背景・未対応 |

※ `_about.scss`の`[data-bg]`背景は、page-about.php側で`about_bg_why/what/how`のACF値を使ったインラインstyleを常に出力するようにしたため、実際にはこのSCSSの`background-image`は表示に使われません（ACF未設定時のデフォルト値と同じ画像なので、削除はせずフォールバックとして残しています）。

---

## 5. 気づいた点

- **`logo.svg` と `logo.png` が混在**しています。page-saas.php・page-privacy-policy.phpは`.svg`に統一済み（✅）。template-parts/service/配下5ファイルはまだ`.png`のままですが、service関連は保留中のため未対応です。
- **`noimage.jpg`が実質「未設定」のまま公開されている箇所がある**：page-service.phpの6サービスカードは全て代替画像のままです。ACF化以前に、まず実画像を用意した方が良いかもしれません。
- **同一画像の使い回しが多い箇所**：
  - `flow/step1〜8.jpg`：page-flow.php、および5つのサービス詳細ページ（web-production/lp/ec-site/app-development/system-development）で共通使用
  - `about/step1〜3.jpg`：page-about.php、page-company.php、`_about.scss`で共通使用
  - `project/default.jpg`：実績カードのアイキャッチ未設定時の代替として6箇所以上で使用
  - `top/webdesign.jpg`：トップページのサービス紹介6項目すべてで同一画像

---

## 6. ACF化の優先度（参考）

すべてを対応する必要はないとのことでしたので、優先度の参考として整理します。

**優先度：高**（ページ固有の内容で、更新頻度が高そうな箇所）
- ~~page-company.phpのプロフィール写真（`profile/sample01.jpg` / `sample02.jpg`）~~ → ✅ 対応済み
- ~~各サービス詳細ページの「制作の流れ」画像（`flow/step1〜8.jpg`）~~ → ✅ 対応済み
- ~~page-about.phpの画像一式~~ → ✅ 対応済み
- page-service.phpの6サービスカード画像（現状noimage.jpgのまま）※service関連のため保留中

**優先度：中**
- page-swim.php / page-nara.phpのヒーロー画像（今後写真追加予定とのことなので、ACF化しておくと管理画面から差し替えやすくなります）
- template-parts/front-page/service.phpの6項目画像（現状使い回しのため差別化したい場合）

**優先度：低（ACF化不要と考えられる）**
- ロゴ・favicon・SNSアイコン・noimage代替画像などのシステム系アセット（セクション1）
- Sass内の背景画像（セクション4）※そもそもACF化不可

**保留中（service / projectまとめて後日対応）**
- page-service.php、template-parts/service/配下、`_service.scss`、`_project.scss`関連の画像・配色は、変更点が多いため一区切りしてから改めて検討します。
