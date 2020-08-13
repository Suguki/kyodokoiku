<?php
require_once('../Model/SpotsModel.php');
$distance = $_POST["distance"];
$feeling = $_POST["feeling"];
$cost = $_POST["cost"];

try {
    $model = new SpotsModel();
    $result = $model->select($distance, $feeling, $cost);
    $errMsg = '';
    if(count($result) === 0) {
        $errMsg =  '開拓中です';
    }
} catch (PDOException $e) {
    die('接続エラー：' .$e->getMessage());
}

include('../View/spot/index.php');