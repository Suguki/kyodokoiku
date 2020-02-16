<?php
require_once __DIR__. '/Model.php';

class CafesModel extends Model
{
    public function select($prefecture, $purpose, $atomosphere, $feature)
    {
        $sql = "SELECT
                  place
                FROM `cafes`
                  WHERE `cafes`.`prefecture`='{$prefecture}'
                    AND `cafes`.`purpose`='{$purpose}'
                    AND `cafes`.`atomosphere`='{$atomosphere}'
                    AND `cafes`.`feature`='{$feature}'

        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
