<!DOCTYPE html>
<html lang="ja">
   <head>
      <meta charset="utf-8">
      <title>今日どこに行く？: ログイン</title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
   </head>
   <body>
      <div id="header">
          <?php include( $_SERVER['DOCUMENT_ROOT'] . '/View/globalNav.php'); ?>
        </div>
      <div class="card">
         <div class="card-body">
            <h1>サインインする</h1>
             <form  action="/../../logIn/logIn.php" method="post">
                <label for="email">email</label>
                <input type="email" name="email">
                <label for="password">password</label>
                <input type="password" name="password">
                <button type="submit" class="btn btn-primary">Log In!</button>
             </form>
         </div>
         <hr>
         <div class="card-body">
            <h1>初めての方はこちら</h1>
            <form action="/../../signUp/signUp.php" method="post">
               <label for="email">email</label>
               <input type="email" name="email">
               <label for="password">password</label>
               <input type="password" name="password">
               <button type="submit" class="btn btn-primary">Sign Up!</button>
               <p>※パスワードは半角英数字をそれぞれ１文字以上含んだ、８文字以上で設定してください。</p>
            </form>
         </div>
      </div>

      <a href="../../Top/top.php" class="btn btn-success">Topに戻る</a>
    </body>
</html>