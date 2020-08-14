<?php
require_once '../Model/FoodsModel.php';

$place = $_POST['place'];
$distance = $_POST['distance'];
$feeling = $_POST['feeling'];
$cost = $_POST['cost'];

try {
    if (empty($place) || empty($distance) || empty($feeling) || empty($cost)) {
        throw new Exception('未記入の項目があります。');
    }
    $model = new FoodsModel();
    $foods = $model->selectByPlace($place);
    if (count($foods) > 0) {
        throw new Exception('このごはん屋さんはすでに登録されています。');
    }
    $result = $model->create($place, $distance, $feeling, $cost);
        //ここで$resultがtrueかどうか、バリデートする必要がある。
    $resultMessage = '登録完了';
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
}

include('../View/manager/food.php');
