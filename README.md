# Pylon

## 使用技術
php
laravel
javascript
React
PostgreSQL 

## 機能
1. 文字入力・挿入・削除 
2. ファイル読み込み・保存
3. コードハイライト

## 環境構築

```
$docker-compse up -d --build
$docker-compose exec php-apache /bin/bash
$composer install
```

## user認証機能追加のためにLaravel Breezeをインストール

- Todo
  - もしかしたらDockerFile書き直したら自動で入れれれるかもしれない

```
$composer install
```
### npmが必要なのでインストール

```
$apt update
$apt install nodejs npm
```
- nodeのversionが低いと正しく動かないので注意！

- 以下のコマンドでプロジェクトをビルドする
```
$npm run dev
```

### コード整形ツール

1. まずphpcsでコーディング違反の検出を行う
```
$./vendor/bin/phpcs 書いたphpファイルのpath(./appから)
```

2. 次にphp cs fixerで自動で整形してもらう
```
./vendor/bin/php-cs-fixer  fix -v --diff ./vendor/bin/php-cs-fixer  fix -v --diff ./app/Models/Filedata.php
```

3. 再度phpcsで正しく修正したか確認