<?php
require_once('../Model/SpotsModel.php');
$distance = $_POST["distance"];
$feeling = $_POST["feeling"];
$cost = $_POST["cost"];
$place = $_POST['place'];
$id = $_POST['id'];

try {
    if(mb_strlen($place) === 0){
        throw new Exception('未記入の項目があります。');
    }
    $model = new SpotsModel();
    $result = $model->update($distance, $feeling, $cost, $place, $id);
    if ($result === true) {
        $resultMessage = '更新完了';
        include('../manager/index.php');
        return $resultMessage;
    } else {
        throw new Exception('更新エラーです。');
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
}

include('../View/manager/food.php');
