<?php
require_once('../Model/CafesModel.php');

$prefecture = $_POST["prefecture"];
$purpose = $_POST["purpose"];
$atmosphere = $_POST["atmosphere"];
$feature = $_POST["feature"];


try {
    $model = new CafesModel();
    $result = $model->select($prefecture, $purpose, $atmosphere, $feature);
    $errMsg = '';
    if(count($result) === 0) {
        $errMsg = '存在しません';
    }
} catch (PDOException $e) {
    die('接続エラー：' .$e->getMessage());
}
include('../View/cafe/index.php');
