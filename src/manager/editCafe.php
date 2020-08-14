<?php
require_once '../Model/CafesModel.php';

$place = $_POST['place'];
$prefecture  = $_POST['prefecture'];
$purpose = $_POST['purpose'];
$atmosphere  = $_POST['atmosphere'];
$feature = $_POST['feature'];

try {
    if (empty($place) || empty($prefecture) || empty($purpose) || empty($atmosphere) || empty($feature)) {
        throw new Exception('未記入の項目があります。');
    }
    $model = new CafesModel();
    $cafes = $model->selectByPlace($place);
    if (count($cafes) > 0) {
        throw new Exception('このカフェはすでに登録されています。');
    }
    $result = $model->create($place, $prefecture, $purpose, $atmosphere, $feature);
    //ここで$resultがtrueかどうか、バリデートする必要がある。
    $resultMessage = '登録完了';
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
}

include('../View/manager/cafe.php');
