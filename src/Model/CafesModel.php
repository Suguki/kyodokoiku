<?php
require_once __DIR__. '/Model.php';

class CafesModel extends Model
{
    public function select($prefecture, $purpose, $atmosphere, $feature)
    {
        $sql = "SELECT
                  place
                FROM `cafes`
                  WHERE `cafes`.`prefecture`='{$prefecture}'
                    AND `cafes`.`purpose`='{$purpose}'
                    AND `cafes`.`atmosphere`='{$atmosphere}'
                    AND `cafes`.`feature`='{$feature}'

        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function selectByPlace($place)
    {
        $sql = "SELECT place from `cafes` WHERE place = :place ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':place', $place, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function selectAll()
    {
        $sql = "SELECT * from `cafes`";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function create($place, $prefecture, $purpose, $atmosphere, $feature)
    {
        $stmt = $this->pdo->prepare("INSERT INTO cafes (place, prefecture, purpose, atmosphere, feature)
                                    VALUE(:place, :prefecture, :purpose, :atmosphere, :feature)");
        $stmt->bindValue(':place', $place, PDO::PARAM_STR);
        $stmt->bindValue(':prefecture', $prefecture, PDO::PARAM_STR);
        $stmt->bindValue(':purpose', $purpose, PDO::PARAM_STR);
        $stmt->bindValue(':atmosphere', $atmosphere, PDO::PARAM_STR);
        $stmt->bindValue(':feature', $feature, PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function update($prefecture, $purpose, $atmosphere, $feature, $place, $id)
    {
        $sql = "UPDATE cafes SET prefecture = :prefecture, purpose = :purpose, atmosphere = :atmosphere, feature = :feature, place = :place WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':place', $place, PDO::PARAM_STR);
        $stmt->bindValue(':prefecture', $prefecture, PDO::PARAM_STR);
        $stmt->bindValue(':purpose', $purpose, PDO::PARAM_STR);
        $stmt->bindValue(':atmosphere', $atmosphere, PDO::PARAM_STR);
        $stmt->bindValue(':feature', $feature, PDO::PARAM_STR);
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        $result = $stmt->execute();
        return $result;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM cafes WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        $result = $stmt->execute();
        return $result;
    }
}
