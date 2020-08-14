<?php
require_once('../Model/CafesModel.php');

$prefecture = $_POST["prefecture"];
$purpose = $_POST["purpose"];
$atmosphere = $_POST["atmosphere"];
$feature = $_POST["feature"];


try {
    $model = new CafesModel();
    $result = $model->select($prefecture, $purpose, $atmosphere, $feature);
    if(count($result) === 0) {
        throw new Exception('まだ登録がありません');
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
}
include('../View/cafe/index.php');
