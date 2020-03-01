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
        $result =  $stmt->fetchAll();
        return $result;
    }
}

