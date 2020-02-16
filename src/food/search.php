<?php
require_once('../Model/FoodsModel.php');
$howFar = $_POST["howFar"];
$feeling = $_POST["feeling"];
$cost = $_POST["cost"];

try {
    $model = new FoodsModel();
    $result = $model->select($howFar, $feeling, $cost);
    $errMsg = '';
    if(count($result) === 0) {
        $errMsg = '存在しません';
    }
} catch (PDOException $e) {
    die('接続エラー：' .$e->getMessage());
}

include('../View/food/index.php');
