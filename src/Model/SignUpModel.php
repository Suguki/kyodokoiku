<?php
require_once __DIR__. '/Model.php';

class SignUpModel extends Model
{
    public function register($pdo, $email, $password)
    {
        try {
            $stmt = $pdo->prepare("INSERT INTO users (email, password) value(:email, :password)");
            $stmt->bindValue(':email', $email, ':password', $email, PDO::PARAM_STR);
            $stmt->execute([$email, $password]);
            return '登録完★了';
        } catch (\Exception $e) {
            return '登録済みのメールアドレスです。';
        }
    }
}
