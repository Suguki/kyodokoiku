## 今日どこに行く？

docker-compose up
サーバー起動

### 大事！！
kyodokoniiku_phpはphpが動作するコンテナ（サーバー）
ここでLaravelのコマンドを叩く


Command + P

## キーワード
- ルーティング
  - ブラウザでURLを叩く
    - https://labo.nozomi.bike/article/24

  
以下備忘録
まず、web.phpでルーティングを設定。次にコントローラーを作成。関数を定義する( public function index() {return view('ルーティングの名前') }
bladeを作成し、HTMLの内容を書き込んでいく。

ブラウザの確認はこまめに行う。

dd関数とは？
プログラムが正しく動いているかをcheckするやつ
dump()で変数の中身を出力
die()で動作を止める

index()
対象となる文字列の中に部分文字列が含まれるか検索し、最初の位置を返す

$_request
→$_GET、$_POST、$_COOKIE などの内容をまとめた変数

通信方式について(requestの方式)
GET: 指定したURLのリソースについて、ヘッダーと本文を取得（えつらん）
----
POST: フォームなどで入力した内容を処理(とうろく)
PUT: 指定したURLの内容を、送信したデータで作成、置換（こうしん）
DELETE: 指定したURLのリソースを削除（さくじょ）

CRUD処理
C - Create
R - Read
U - Update
D - Delete

routing
 どのコントローラー（処理）を走らせるか？
　
controller
　requestを制御
 
blade
 view定義している


 命名の際、単語を区切る時は大文字を使う
 cssの命名
 単語の間には-をつける