<?php
require_once('../Model/FoodsModel.php');

$id = $_POST['id'];

try {
    $model = new FoodsModel();
    $result = $model->delete($id);
    if ($result === true) {
        $resultMessage = '削除完了';
    } else {
        $resultMessage = 'エラーです';
    }
} catch (PDOException $e) {
    die('接続エラー：' .$e->getMessage());
}

include_once('../View/manager/food.php');