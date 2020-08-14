<?php
require_once '../Model/SpotsModel.php';

$place = $_POST['place'];
$distance = $_POST['distance'];
$feeling = $_POST['feeling'];
$cost = $_POST['cost'];

try {
    if (empty($place) || empty($distance) || empty($feeling) || empty($cost)) {
        throw new Exception('未記入の項目があります。');
    }
    $model = new SpotsModel();
    $spots = $model->selectByPlace($place);
    if (count($spots) > 0) {
        throw new Exception('この観光地はすでに登録されています。');
    }
    $result = $model->create($place, $distance, $feeling, $cost);
        //ここで$resultがtrueかどうか、バリデートする必要がある。
    $resultMessage = '登録完了';
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
}

include('../View/manager/spot.php');


