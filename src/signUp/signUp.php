<?php
require_once('../Model/UsersModel.php');

$email = $_POST['email'];
$password = $_POST['password'];
try {
    if (empty($email) || empty($password)) {
        throw new Exception('出直してきな!！');
    }

    if (!$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        throw new Exception('入力された値が不正です。');
    }

    if (preg_match('/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{8,100}+\z/i', $_POST['password'])) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    } else {
        throw new Exception('パスワードは半角英数字をそれぞれ1文字以上含んだ8文字以上で設定してください。');
    }

    $model = new UsersModel();

    $user = $model->selectByEmail($email);
    if (count($user) > 0) {
        throw new Exception('このメールアドレスはすでに使用されています。');
    }

    $result = $model->registerUsersInfo($email, $password);
    if ($result === false) {
        throw new Exception('登録に失敗しました。');
    }
    $resultMessage = '登録完了';
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
}

include('../View/signUp/signUp.php');
