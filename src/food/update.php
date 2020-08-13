<?php
require_once('../Model/FoodsModel.php');
$distance = $_POST["distance"];
$feeling = $_POST["feeling"];
$cost = $_POST["cost"];
$place = $_POST['place'];

try {
    $model = new FoodsModel();
    $result = $model->update($distance, $feeling, $cost, $place);
    if ($result === true) {
        $resultMessage = '登録完了';
    } else {
        $resultMessage = '更新エラーです';
    }
} catch (PDOException $e) {
    die('接続エラー：' .$e->getMessage());
}
echo $resultMessage;
