## WordPress Sage
- Webサイトをチーム作成するためのpublicリポジトリです
- WordPressサイトのテーマ見本をつくる参考記事一覧  
https://plusers.net/wordpress_theme_3

## 機能改善やアイデアの提案方法
- issueを使って提案してください。
  
### ブランチの仕様用途
- master　→ 本番環境の状態：Administor権限のみpush可能  
- develop → 開発環境のmaster。ここから`git pull`して作業開始  
- feature/ → 開発ブランチの接頭語。`feature/1`などで追加する。  

### 「ブランチ命名のめやす」
- [feature/issue番号/作業アクション]のようにしていく（ファイル拡張子は除く）  
- 例： `feature/1/widget_add` → （追加する/footer.blade.phpに/ウィジェットを追加）  

### 作業手順
1. ローカルに当リポジトリのWordPressテーマ環境が設置されている前提  
  参考サイト：（ https://13imi.me/sage-wordpress-theme-customize/ ）
2. ブランチdevelopにいることを `$ git branch ` で確認して最新版に戻します。  
3. `git pull`  
4. `yarn run start` でBrowsersyncを起動  
（自動でsassのインデントやコード間違いが無いかチェックしはじめます）  
5. ローカル環境で `yarn run build` まで完了したら作業開始  
6. 編集がひととおり終わったらfeature/ブランチを新設移動する  
（例：developブランチで `$ git checkout -b feature/issue番号/issue内容 ` ）  
7. `$ git add .`  
8. ` $ git commit -m "[#issue番号]issue内容" `  
9. ` $ git push origin ブランチ名`  
10. pushしたコミットのプルリクエストまでGitHubでお願いします。
　　
### コーディング規約（草案）
* Sageに入っているbrowsersyncに基づいてインデントなどは決めています。  
* 【重要！】参考サイトのcssは著作権配慮の問題もあります。そのまま使わないようにしましょう  
　（わからない場合は参考サイトを利用して実装したのち、わかる人が差し替えで当面対応）
