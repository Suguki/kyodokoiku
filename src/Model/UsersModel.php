<?php
require_once __DIR__. '/Model.php';

class UsersModel extends Model
{
    public function selectByEmail($email)
    {
        $sql = "SELECT * from `users` WHERE email = :email ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function registerUsersInfo($email, $password)
    {
        $sql = "INSERT INTO `users`(email, password) VALUE(:email, :password)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':email', $email, ':password', $password);
        $stmt->execute();
    }
}
