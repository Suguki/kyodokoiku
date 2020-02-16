<?php
require_once('../Model/SpotsModel.php');
$howFar = $_POST["howFar"];
$feeling = $_POST["feeling"];
$cost = $_POST["cost"];

try {
    $model = new SpotsModel();
    $result = $model->select($howFar, $feeling, $cost);
} catch (PDOException $e) {
    die('接続エラー：' .$e->getMessage());
}

include('../View/sightseeing/index.php');