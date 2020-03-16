<?php

require_once('../Model/CafesModel.php');

$place = $_POST['place'];
$prefecture = $_POST["prefecture"];
$purpose = $_POST["purpose"];
$atmosphere = $_POST["atmosphere"];
$feature = $_POST["feature"];

try {
    $model = new CafesModel();
    $result = $model->update($prefecture, $purpose, $atmosphere, $feature, $place);

    if ($result === true) {
        $resultMessage = '更新完了';
    } else {
        $resultMessage = '更新エラーです';
    }
} catch (PDOException $e) {
    die('接続エラー：' .$e->getMessage());
}
echo $resultMessage;
