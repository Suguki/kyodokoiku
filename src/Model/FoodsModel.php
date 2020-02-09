<?php

class FoodsModel extends Model
{
    private $dsn = 'mysql:dbname=kyodokoiku;host=mysql';
    private $user = 'root';
    private $password = 'secret';

    private $pdo;

    public function __construct() {
        $this->pdo = new PDO($this->dsn, $this->user, $this->password);
    }

    public function select($table, $howFar, $feeling, $cost)
    {
        $sql = "SELECT
                  place
                FROM {$table}
                  WHERE `{$table}`.`howFar`='{$howFar}'
                    AND `{$table}`.`feeling`='{$feeling}'
                    AND `{$table}`.`cost`='{$cost}'
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
