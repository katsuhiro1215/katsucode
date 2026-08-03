# CLAUDE.md

このファイルは、このリポジトリで作業する際にClaude Code（および人間の開発者）が参照するプロジェクト指示書です。

## プロジェクト概要

「かつコード」のWordPressオリジナルテーマ。ホームページ制作・LP制作・ECサイト構築・システム開発を主軸とするWeb制作会社のコーポレートサイト兼サービスサイト。

- 詳細な仕様は [SPEC.md](./SPEC.md) を参照
- 実装計画・タスク一覧は [TASKS.md](./TASKS.md) を参照

## ドキュメント方針

- **すべてのドキュメント成果物（設計書・仕様書・README・コメント等）は日本語で作成する。**
- 仕様は `SPEC.md` に一元化する。機能追加のたびに個別の `*.md` を乱立させない（旧 `MENU_GUIDE.md` / `HARDCODED_IMAGES.md` は `SPEC.md` に統合済み・削除済み）。
- タスク・実装計画は `TASKS.md` に集約する。

## 技術スタック

- **CMS**: WordPress（テーマ内蔵、プラグイン非依存を基本方針。Contact Form 7は廃止しSpra API連携に置き換え済み）
- **PHP**: テンプレート階層 + `get_template_part()` によるパーツ分割（`template-parts/front-page/*.php` 等）
- **CSS**: Sass（`assets/sass/`）。**VSCode拡張機能「Live Sass Compiler」でコンパイル**し、`assets/css/style.css`（expanded）と `assets/css/style.min.css`（compressed）を出力する。設定は `.vscode/settings.json` 参照。Sassを編集したら必ずコンパイルし、生成物もコミットする。
- **JS**: `assets/js/main.js`（素のJS。jQueryは`wp_deregister_script('jquery')`で明示的に外している）。GSAP/ScrollTriggerは奈良・水泳LP限定でCDN読み込み。
- **カスタムフィールド**: ACF（`inc/acf-fields.php`）
- **カスタム投稿タイプ**: `project`（制作実績）、`faq`（FAQ、タクソノミー`faq-cat`）、`voice`（お客様の声）など（`inc/custom-post-type.php`）

## コーディング規約

- インデントは2スペース、シングルクォート優先、行末セミコロンあり（`.prettierrc`準拠）。
- PHPファイル冒頭に `if (!defined('ABSPATH')) exit;` を必ず入れる。
- Sassは `foundation/variable` の変数（`$accent` `$accent-dark` `$accent-light` `$accent-yellow` `$dark` 等）を使い、色のハードコードは避ける。
- コメントは「なぜそうしているか」が非自明な場合のみ最小限に。何をしているかの説明コメントは書かない。

## Git運用ルール

- **ブランチ戦略**: `main` を保護ブランチとし、機能・修正ごとに `feature/xxx` ブランチを切ってPRを作成する。
- **マージ**: PRのマージは必ずユーザー（Katsuhiro Kakoi）本人が確認・実行する。Claude Codeは自動でマージしない。
- **コミット粒度**: 1コミット=1目的。複数の意図が異なる変更を1コミットに混在させない（例: 配色修正と新規ページ追加は分ける）。
- **除外設定**: `.gitignore` で `.claude/` と `wp-config.php` を除外している。`.claude/` は絶対にpushしない。
- **秘匿情報**: APIキー・DB接続情報などは `wp-config.php`（WordPressルート側、このテーマリポジトリ外）に定義し、テーマ側のコードに直書きしない（`inc/spra-contact-api.php` のコメント参照）。

## 外部連携

- **お問い合わせフォーム**: Contact Form 7を廃止し、Spra（中央管理システム）のお問い合わせAPIとサーバー間通信で連携（`inc/spra-contact-api.php`）。APIキーはブラウザに渡さない設計。
