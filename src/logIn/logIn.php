<?php
require_once('../Model/UsersModel.php');
session_start();

$email = $_POST['email'];
var_dump($email);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $resultMessage =  '出直してきな！';
    return false;
}

$model = new UsersModel();
$result = $model->selectByEmail($email);

if (!isset($result[0]['email'])) {
    $resultMessage =  'メールアドレス又はパスワードが間違っているよ。';
    return false;
}

if (password_verify($_POST['password'], $result[0]['password'])) {
    $_SESSION['EMAIL'] = $result[0]['email'];
    $resultMessage = 'ログイン完了！';
} else {
    $resultMessage = 'メールアドレス又はパスワードが間違っています。<br>半角になっているか、形式に沿っているかを確認してね。';
}

include('../View/logIn/logedIn.php');
