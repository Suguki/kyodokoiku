<?php
require_once __DIR__. '/Model.php';
class FoodsModel extends Model
{
    public function select($howFar, $feeling, $cost)
    {
        $sql = "SELECT
                  place
                FROM `foods`
                  WHERE `foods`.`howFar`='{$howFar}'
                    AND `foods`.`feeling`='{$feeling}'
                    AND `foods`.`cost`='{$cost}'
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
