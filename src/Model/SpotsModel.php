<?php
require_once __DIR__. '/Model.php';

class SpotsModel extends Model
{
    public function select($howFar, $feeling, $cost)
    {
        $sql = "SELECT
                  place
                FROM `spots`
                  WHERE `spots`.`howFar`='{$howFar}'
                    AND `spots`.`feeling`='{$feeling}'
                    AND `spots`.`cost`='{$cost}'
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
