<?php
require_once('../Model/FoodsModel.php');

$place = $_POST['place'];

try {
    $model = new FoodsModel();
    $result = $model->delete($place);
    if ($result === true) {
        $resultMessage = '削除完了';
    } else {
        $resultMessage = 'エラーです';
    }
} catch (PDOException $e) {
    die('接続エラー：' .$e->getMessage());
}

include_once('../View/manager/food.php');