# SPEC.md — かつコード サイト仕様書

最終更新: 2026-08-03

このドキュメントは、テーマ内に散在していた仕様（`MENU_GUIDE.md` / `HARDCODED_IMAGES.md`）を統合し、進行中の改善タスクの仕様を1箇所にまとめたものです。運用ルールは [CLAUDE.md](./CLAUDE.md)、タスク分解は [TASKS.md](./TASKS.md) を参照してください。

## 目次

1. サイト概要
2. メニュー構成
3. 画像管理（ACF化状況）
4. お問い合わせフォーム / FlashMessage仕様
5. Front-page Concernsセクション 配色仕様
6. FAQコンテンツ仕様
7. ビジネスルール（FAQ回答の根拠となる社内方針）

---

## 1. サイト概要

「かつコード」は、ホームページ制作・LP制作・ECサイト構築・システム開発（受託開発）を主軸とするWeb制作会社のコーポレートサイト兼サービスサイト。加えて、業種特化型の特設LP（奈良・水泳）を運用している。

### 主要カスタム投稿タイプ
- `project`：制作実績
- `faq`：よくある質問（タクソノミー `faq-cat` で階層カテゴリ分類）
- `voice`：お客様の声

### 主要サービスページ
- `page-web-production.php`（Web制作）
- `page-lp.php`（LP制作）
- `page-ec-site.php`（ECサイト構築）
- `page-app-development.php`（アプリ開発）
- `page-system-development.php`（システム開発）
- `page-nara.php` / `page-swim.php`（業種特化オリジナルLP・特設サイト）

各サービス詳細ページ・特設LPには共通の `faq` ループ（`template-parts/loop/faq.php`）でFAQを表示する箇所がある（現状コンテンツ未投入）。

---

## 2. メニュー構成

テーマには4つのメニュー位置がある。

| メニュー位置 | 表示箇所 | デバイス | サブメニュー |
|---|---|---|---|
| Global Navigation | ヘッダー下部の横並びメニュー | PCのみ（lg以上） | ✅ ドロップダウン |
| Header Navigation | ヘッダー右上（検索・無料相談・資料請求） | PCのみ（lg以上） | `template-parts/nav/header-nav.php` に直書き。管理画面からは変更不可 |
| Drawer Navigation | ハンバーガーメニュー内 | 全デバイス | ✅ アコーディオン展開 |
| Footer Navigation | フッター右側（サイトマップ的） | PCのみ（lg以上） | ✅ 常に展開表示 |

### 推奨構成（Global / Drawer 共通の骨格）
```
├─ ホーム
├─ かつコードについて
├─ 事業内容 ▼
│  ├─ Webデザイン / デザイン / システム開発 / ECサイト / 契約形態
├─ 制作実績
├─ よくある質問
└─ お問い合わせ
```
Drawer / Footer はこれに加えて「制作の流れ」「ブログ」「プライバシーポリシー」「採用情報」等を含めたサイトマップ相当まで拡張してよい。

### 設定方法
外観 > メニュー > メニュー位置を選択 > 固定ページ/投稿/カスタムリンクを追加 > 子項目にする場合は少し右にドラッグしてインデント。

### ベストプラクティス
- Global Navigation: 5〜7項目、サブメニューは1階層（最大2階層）まで。
- Drawer Navigation: 全ページ含めてOK、モバイル操作性優先、2〜3階層まで。
- Footer Navigation: サイトマップとして全ページ、SEOの内部リンクとしても機能させる。

### CSSカスタマイズ
`assets/sass/layout/_nav.scss` を編集（ドロップダウン幅・配色・ホバー背景など）。編集後は必ずSassをコンパイルする（[CLAUDE.md](./CLAUDE.md)のビルド手順を参照）。

---

## 3. 画像管理（ACF化状況）

テーマ内の画像パスのうち、**ACF化して管理画面から差し替え可能にしたもの**と、**コード直編集が必要なもの**の一覧。件数は2026-07時点の調査値。

### 対応済み
- **制作の流れ画像（flow/step1〜8.jpg）**: ACFオプションページ「制作の流れ画像」（`inc/acf-fields.php`）から一括管理。`inc/helpers.php` の `katsucode_flow_image($step)` がACF値優先・未設定時はデフォルト画像にフォールバック。page-flow.php + サービス詳細ページ5つで共有。
- **page-about.php**: 「Aboutページ画像」フィールドグループ（WHY/WHAT/HOW背景3点、HOW一覧4点、TRUSTセクション1点）。`_about.scss` の `[data-bg]` 背景もインラインstyleで自動連動。
- **page-company.php**: 「Companyページ画像」フィールドグループ（コンセプト3点、プロフィール写真・通常/ホバー2点）。
- **page-saas.php / page-privacy-policy.php**: `logo.png` → `logo.svg` に統一。

いずれも `inc/helpers.php` の `katsucode_page_image($field_name, $default)` がフォールバック処理を担う。

### 対応不要（システム共通アセット）
ロゴ・favicon・SNSアイコン・no-image代替画像など、サイト全体で使い回す固定アセットはACF化せず、ファイル差し替え運用のままとする（header.php / footer.php / search.php / archive.php / single.php 等）。

### 未対応・保留中
- `page-service.php` の6サービスカード画像（現状 `noimage.jpg` のまま実質未設定）— service関連のリニューアルとまとめて後日対応。
- `template-parts/front-page/service.php` の6項目画像（現状 `top/webdesign.jpg` を使い回し）。
- `page-swim.php` / `page-nara.php` のヒーロー画像（`swim/swimming.jpg` / `nara/nara.jpg`）— 写真追加予定に合わせてACF化を検討。
- Sass内の背景画像（`_about.scss` の透かしロゴ、`_banner.scss` のバナー背景2点）— ACF化不可、コード直編集のみ。

### 気づいた点（申し送り事項）
- `logo.svg` と `logo.png` が混在。`template-parts/service/` 配下5ファイルは `.png` のまま（service関連リニューアル時に統一予定）。
- `flow/step1〜8.jpg`、`about/step1〜3.jpg`、`project/default.jpg`、`top/webdesign.jpg` は複数箇所での使い回しが多い。差別化したい場合は個別画像への切り替えを検討。

---

## 4. お問い合わせフォーム / FlashMessage仕様

### 現状の仕組み（実装済み・変更しない部分）
- `page-templates/page-contact.php` のフォームは `admin-post.php` へPOSTし、`inc/spra-contact-api.php` の `spra_handle_contact_submit()` がSpra（中央管理システム）のお問い合わせAPIへサーバー間通信で中継する。
- 処理結果はクエリパラメータ `?contact=success|invalid|error` を付けて元ページへリダイレクトする（`wp_safe_redirect`）。
- APIキーはブラウザに渡らない設計（`wp-config.php` 側の定数で管理、テーマには含めない）。

### 課題
送信自体はシステム・クライアント双方に届いているが、送信完了がユーザーに視覚的に伝わりにくい（現状はフォーム上部の静的 `<p class="contact-form__notice">`）。

### FlashMessage仕様（新規）
- **表示形式**: 画面にフレートするトースト通知（右上/左下等、`frontend-design`の判断で配置）。
- **表示時間**: 5秒で自動フェードアウト。手動で閉じる「×」ボタンを併設。
- **対象ケース**: `success`（緑・成功）/ `invalid`（黄・入力不備）/ `error`（赤・送信失敗）の3種類すべて。
- **実装方針**:
  - PHP側（`page-contact.php`）: `?contact=` の値を元に、bodyタグ等へ `data-flash-type` / `data-flash-message` を出力する。現行の静的 `<p>` ノーティスは削除する。
  - JS側（`assets/js/main.js`）: `initFlashMessage()` を追加し、`DOMContentLoaded` 時にdata属性を読み取ってトーストDOMを生成・表示・自動/手動クローズを制御する。
  - CSS側: `assets/sass/object/project/_flash-message.scss` を新規追加し、`style.scss` からimportする。
- **共通部品化**: 将来的に他フォームでも使えるよう、JS関数・CSSクラス名は特定フォームに依存しない汎用設計にする（クエリキーは `?flash=success` のような共通規約を見据えるが、今回はContactの `?contact=` をそのままマッピングする形で実装してよい）。
- **アクセシビリティ**: トースト要素に `role="status"` と `aria-live="polite"` を付与する。

---

## 5. Front-page Concernsセクション 配色仕様

### 現状の課題
`template-parts/front-page/concerns.php` の6枚のカード（`.p-index__concerns--item`）は、`assets/sass/object/project/_index.scss` にて `background-color: lighten($accent, 10%)`（藝い浅緑）が指定されており、周囲の白〜グレー系セクション（About / Service等）と比べて明るさが浮いている。ホバー時は `lighten($accent, 20%)` でさらに明るくなる。

### 修正方針
- カード背景を **白地 + `$accent-dark` 基調のアクセント**に変更する（枠線・アイコン背景・テキストの強調色に `$accent` / `$accent-dark` を使い、カード面自体は白〜 `#f8f9fa` 系にする）。
- ホバー時の演出も、明度を上げるのではなく `$accent-dark` 方向の濃色シフトや境界線強調に置き換える。
- 修正範囲はConcernsセクションを主としつつ、前後（About → Concerns → Service）のセクション遷移で違和感が出ないか確認する。大きな構造変更は行わず、色トーンの調整に留める。

---

## 6. FAQコンテンツ仕様

### 納品形式
`docs/faq-content.md`（Markdown、カテゴリ別Q&A一覧）として納品する。担当者（Katsuhiro Kakoi）がWordPress管理画面から `faq` 投稿タイプ・`faq-cat` タクソノミーへ手動で投稿する。

### 構成
1. **全般共通FAQ**（見積・料金、進行フロー、専門知識不要な旨、発注前準備、契約・支払い）
2. **サービス別FAQ**（各「制作」「保守・運用」で分割。Web制作は「記事作成」も追加）
   - Web制作（制作 / 保守・運用 / 記事作成）
   - LP（制作 / 保守・運用）
   - ECサイト（制作 / 保守・運用）
   - システム開発（制作・開発 / 保守・運用）
3. **奈良・水泳 特設LP専用FAQ**（既存の `faq` 投稿タイプ・`faq-cat` タクソノミーを、この2LP専用カテゴリとして流用する）

### 表示上の推奨（実装への申し送り、今回のコード変更範囲外）
- アコーディオン形式（折りたたみ）で表示する。
- FAQ一覧の最下部に「解決しない場合はお問い合わせください」の導線ボタンを設置する。

---

## 7. ビジネスルール（FAQ回答の根拠となる社内方針）

FAQコンテンツを作成するにあたりヒアリングした、コード上には存在しない社内方針。

- **料金**: 具体的な金額・比率はFAQに記載せず、「ご相談内容によって異なります」と抽象化する。
- **保守契約**: 月額保守契約は任意。契約なしでの単発修正も受け付け可能。
- **インフラ代行**: ドメイン・サーバーの管理代行に対応（クライアント名義での取得代行、既存インフラの運用代行の両方に対応）。
- **システム開発の障害対応**: 営業日ベースでの対応を基本とし、重大障害は可能な限り早急に対応する（24時間365日の保証体制ではない）。
