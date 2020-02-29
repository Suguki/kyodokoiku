<?php
require_once('../Model/signUpModel.php');
session_start();

$email = $_POST['email'];

  $model = new SignUpModel();
  $aaa = $model->select();
  var_dump($aaa);




var_dump($aaa);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo '出直してきな！';
  return false;
}

var_dump($result);
if (!isset($result['email'])) {
    echo 'メールアドレス又はパスワードが間違っているよ。';
    return false;
  }

if (password_verify($_POST['password'], $row['password'])) {
    session_regenerate_id(true); //session_idを新しく生成し、置き換える
    $_SESSION['EMAIL'] = $row['email'];
    echo 'ログインしました';
} else {
    echo 'メールアドレス又はパスワードが間違っています。';

  }