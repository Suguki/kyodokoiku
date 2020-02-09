<?php

class CafesModel extends Model
{
    private $dsn = 'mysql:dbname=kyodokoiku;host=mysql';
    private $user = 'root';
    private $password = 'secret';

    private $pdo;

    public function __construct() {
        $this->pdo = new PDO($this->dsn, $this->user, $this->password);
    }

    public function select($table, $prefecture, $purpose, $atomosphere, $feature)
    {
        $sql = "SELECT
                  place
                FROM {$table}
                  WHERE `{$table}`.`prefecture`='{$prefecture}'
                    AND `{$table}`.`purpose`='{$purpose}'
                    AND `{$table}`.`atomosphere`='{$atomosphere}'
                    AND `{$table}`.`feature`='{$feature}'

        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
