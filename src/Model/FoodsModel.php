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

    public function selectByPlace($place)
    {
        $sql = "SELECT place from `foods` WHERE place = :place ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':place', $place, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function selectAll()
    {
        $sql = "SELECT * from `foods`";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function create($place, $howFar, $feeling, $cost)
    {
        $stmt = $this->pdo->prepare("INSERT INTO foods (place, howFar, feeling,cost) VALUE(:place, :howFar, :feeling, :cost)");
        $stmt->bindValue(':place', $place, PDO::PARAM_STR);
        $stmt->bindValue(':howFar', $howFar, PDO::PARAM_STR);
        $stmt->bindValue(':feeling', $feeling, PDO::PARAM_STR);
        $stmt->bindValue(':cost', $cost, PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function update($howFar, $feeling, $cost, $place)
    {
        $sql = "UPDATE foods SET howFar = :howFar, feeling = :feeling, cost = :cost WHERE place = :place";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':howFar', $howFar, PDO::PARAM_STR);
        $stmt->bindValue(':feeling', $feeling, PDO::PARAM_STR);
        $stmt->bindValue(':cost', $cost, PDO::PARAM_STR);
        $stmt->bindValue(':place', $place, PDO::PARAM_STR);
        $result = $stmt->execute();
        return $result;
    }

    public function delete($place)
    {
        $sql = "DELETE FROM foods WHERE place = :place";
        $stmt = $this ->pdo->prepare($sql);
        $stmt->bindValue(':place', $place, PDO::PARAM_STR);
        $result = $stmt->execute();
        return $result;
    }
}
