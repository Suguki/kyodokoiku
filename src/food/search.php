<?php
require_once('../Model/FoodsModel.php');
session_start();

$distance = $_POST["distance"];
$feeling = $_POST["feeling"];
$cost = $_POST["cost"];


try {
    $model = new FoodsModel();
    $result = $model->select($distance, $feeling, $cost);
    $errMsg = '';
    if(count($result) === 0) {
        throw new Exception('まだ登録がありません');
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
}



include('../View/food/index.php');