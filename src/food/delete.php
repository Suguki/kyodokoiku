<?php
require_once('../Model/FoodsModel.php');

$id = $_POST['id'];

try {
    $model = new FoodsModel();
    $result = $model->delete($id);
    if($result === false){
        throw new Exception('削除処理に失敗しました。');
    }
    $resultMessage = '削除完了';
} catch (PDOException $e) {
    $errorMessage = $e->getMessage();
}

include_once('../View/manager/index.php');