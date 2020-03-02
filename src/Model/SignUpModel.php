<?php
require_once __DIR__. '/Model.php';

class SignUpModel extends Model {
    public function create($pdo) {
        try {
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("CREATE TABLE IF NOT EXISTS users(
                id INT NOT NULL auto_increment PRIMARY KEY,
                email VARCHAR(255),
                PASSWORD VARCHAR(255),
                created timestamp not null default current_timestamp
              )");
          } catch (Exception $e) {
            echo $e->getMessage() . PHP_EOL;
          }
    }

    public function regist($pdo,$email, $password) {
        try {
            $stmt = $pdo->prepare("INSERT INTO users (email, password) value(:email, :password)");
            $stmt->bindValue(':email', $email, ':password', $email, PDO::PARAM_STR);;
            $stmt->execute([$email, $password]);
            return '登録完★了';
          } catch (\Exception $e) {
            return '登録済みのメールアドレスです。';
          }
    }
}