<!DOCTYPE html>
<html lang="ja">
 <head>
   <meta charset="utf-8">
   <title>Sign Up</title>
 </head>
 <body>
   <h1>イケてるスポットを教えてくれ！</h1>
   <form  action="/../../signUp/logIn.php" method="post">
     <label for="email">email</label>
     <input type="email" name="email">
     <label for="password">password</label>
     <input type="password" name="password">
     <button type="submit">Sign In!</button>
   </form>
   <h1>初めての方はこちら</h1>
   <form action="signUp.php" method="post">
     <label for="email">email</label>
     <input type="email" name="email">email
     <label for="password">password</label>
     <input type="password" name="password">
     <button type="submit">Sign Up!</button>
     <p>※パスワードは半角英数字をそれぞれ１文字以上含んだ、８文字以上で設定してください。</p>
   </form>
 </body>
</html>