<?php
require_once('../Model/SpotsModel.php');
$distance = $_POST["distance"];
$feeling = $_POST["feeling"];
$cost = $_POST["cost"];

try {
    $model = new SpotsModel();
    $result = $model->select($distance, $feeling, $cost);
    if(count($result) === 0) {
        throw new Exception('まだ登録がありません。');
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
}

include('../View/spot/index.php');