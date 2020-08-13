<?php
require_once('../Model/SpotsModel.php');
$distance = $_POST["distance"];
$feeling = $_POST["feeling"];
$cost = $_POST["cost"];
$place = $_POST['place'];

try {
    $model = new SpotsModel();
    $result = $model->update($distance, $feeling, $cost, $place);
    if ($result === true) {
        $resultMessage = '更新完了';
        include('../manager/index.php');
        return $resultMessage;
    } else {
        $resultMessage = '更新エラーです';
    }
} catch (PDOException $e) {
    die('接続エラー：' .$e->getMessage());
}
