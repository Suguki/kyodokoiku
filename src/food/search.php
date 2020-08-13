<?php
require_once('../Model/FoodsModel.php');
$distance = $_POST["distance"];
$feeling = $_POST["feeling"];
$cost = $_POST["cost"];


try {
    $model = new FoodsModel();
    $result = $model->select($distance, $feeling, $cost);
    $errMsg = '';
    if(count($result) === 0) {
        $errMsg = '存在しません';
    }
} catch (PDOException $e) {
    die('接続エラー：' .$e->getMessage());
}



include('../View/food/index.php');