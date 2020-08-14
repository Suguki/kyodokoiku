<?php

require_once('../Model/CafesModel.php');

$place = $_POST['place'];
$prefecture = $_POST["prefecture"];
$purpose = $_POST["purpose"];
$atmosphere = $_POST["atmosphere"];
$feature = $_POST["feature"];
$id = $_POST['id'];

try {
    if(mb_strlen($place) === 0){
        throw new Exception('未記入の項目があります。');
    }
    $model = new CafesModel();
    $result = $model->update($prefecture, $purpose, $atmosphere, $feature, $place, $id);

    if ($result === true) {
        $resultMessage = '更新完了';
    } else {
        throw new Exception('更新エラーです。');
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
}

include('../View/manager/food.php');



