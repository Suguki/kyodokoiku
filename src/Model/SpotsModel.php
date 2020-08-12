<?php
require_once __DIR__. '/Model.php';

class SpotsModel extends Model
{
    public function select($distance, $feeling, $cost)
    {
        $sql = "SELECT
                  place
                FROM `spots`
                  WHERE `spots`.`distance`='{$distance}'
                    AND `spots`.`feeling`='{$feeling}'
                    AND `spots`.`cost`='{$cost}'
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function selectByPlace($place)
    {
        $sql = "SELECT place from `spots` WHERE place = :place ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':place', $place, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function selectAll()
    {
        $sql = "SELECT * from `spots`";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function create($place, $distance, $feeling, $cost)
    {
        $stmt = $this->pdo->prepare("INSERT INTO spots (place, distance, feeling,cost) VALUE(:place, :distance, :feeling, :cost)");
        $stmt->bindValue(':place', $place, PDO::PARAM_STR);
        $stmt->bindValue(':distance', $distance, PDO::PARAM_STR);
        $stmt->bindValue(':feeling', $feeling, PDO::PARAM_STR);
        $stmt->bindValue(':cost', $cost, PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function update($distance, $feeling, $cost, $place)
    {
        $sql = "UPDATE spots SET distance = :distance, feeling = :feeling, cost = :cost WHERE place = :place";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':distance', $distance, PDO::PARAM_STR);
        $stmt->bindValue(':feeling', $feeling, PDO::PARAM_STR);
        $stmt->bindValue(':cost', $cost, PDO::PARAM_STR);
        $stmt->bindValue(':place', $place, PDO::PARAM_STR);
        $result = $stmt->execute();
        return $result;
    }
}
