<?php
require_once __DIR__. '/Model.php';

class SignUpModel extends Model
{
    public function select()
    {
        $sql = "SELECT email from `users` ";
        $stmt = $this->pdo->prepare($sql);
        $result = $stmt->execute();
        var_dump($result);
        $bbb =  $result->fetch();
    }
}

