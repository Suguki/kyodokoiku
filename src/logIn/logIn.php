<?php
require_once('../Model/UsersModel.php');
session_start();

$email = $_POST['email'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo '出直してきな！';
    return false;
}

$model = new UsersModel();
$result = $model->selectByEmail($email);

if (!isset($result[0]['email'])) {
    echo 'メールアドレス又はパスワードが間違っているよ。';
    return false;
}

if (password_verify($_POST['password'], $result[0]['password'])) {
    $_SESSION['EMAIL'] = $result[0]['email'];
    echo 'ログインしました';
} else {
    echo 'メールアドレス又はパスワードが間違っています。';
}
