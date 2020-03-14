<?php
require_once('../Model/UsersModel.php');
session_start();

$email = $_POST['email'];
    $password = $_POST['password'];

    try {
        if (empty($email) || empty($password)) {
            throw new Exception('出直してきな!！');
        }

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

        if (empty($email) || empty($password)) {
            throw new Exception('出直してきな!！');
        }
    } catch (Exception $e) {
        $errorMessage = $e->getMessage();
    }
include('../View/logIn/logedIn.php');
