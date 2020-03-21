<?php
require_once('../Model/SpotsModel.php');

$place = $_POST['place'];
try {
    $model = new SpotsModel();
    $result = $model->delete($place);
    if ($result === true) {
        $resultMessage = '削除完了';
    } else {
        $resultMessage = 'エラーです';
    }
} catch (PDOException $e) {
    die('接続エラー：' .$e->getMessage());
}

include_once('../View/manager/spot.php');
