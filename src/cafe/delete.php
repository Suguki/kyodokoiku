<?php
require_once('../Model/CafesModel.php');

$id = $_POST['id'];

try {
    $model = new CafesModel();
    $result = $model->delete($id);
    if($result === false){
        throw new Exception('削除処理に失敗しました。');
    }
    $resultMessage = '削除完了';
} catch (PDOException $e) {
    $errorMessage = $e->getMessage();
}

include_once('../View/manager/index.php');