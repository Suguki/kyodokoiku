<?php
require_once('../Model/SpotsModel.php');
$howFar = $_POST["howFar"];
$feeling = $_POST["feeling"];
$cost = $_POST["cost"];
$place = $_POST['place'];

try {
    $model = new SpotsModel();
    $result = $model->update($howFar, $feeling, $cost, $place);
    if ($result === true) {
        $resultMessage = '更新完了';
    } else {
        $resultMessage = '更新エラーです';
    }
} catch (PDOException $e) {
    die('接続エラー：' .$e->getMessage());
}
echo $resultMessage;
