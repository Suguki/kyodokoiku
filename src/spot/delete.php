<?php
require_once('../Model/SpotsModel.php');

$id = $_POST['id'];

try {
    $model = new SpotsModel();
    $result = $model->delete($id);
    if($result === false){
        throw new Exception('削除処理に失敗しました。');
    }
    $resultMessage = '削除完了';
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
}

include_once('../View/manager/index.php');