<?php
require_once('../Model/UsersModel.php');

$email = $_POST['email'];
$_POST['password'];


if (!$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errorMessage =  '入力された値が不正です。';
}

if (preg_match('/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{8,100}+\z/i', $_POST['password'])) {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
} else {
    $errorMessage = 'パスワードは半角英数字をそれぞれ1文字以上含んだ8文字以上で設定してください。';
}

if (!empty($email) && !empty($password)) {
    $model = new UsersModel();
    $result = $model->registerUsersInfo($email, $password);
    $resultMessage = '登録完了';
} else {
    $resultMessage  = '<br>出直してきな!！';
}
include('../View/signUp/signUp.php');
