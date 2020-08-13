<?php
require_once '../Model/FoodsModel.php';

$place = $_POST['place'];
$distance = $_POST['distance'];
$feeling = $_POST['feeling'];
$cost = $_POST['cost'];

try {
    if (empty($place) || empty($distance) || empty($feeling) || empty($cost)) {
        throw new Exception('出直してきな！！！！');
    }
    $model = new FoodsModel();
    $foods = $model->selectByPlace($place);
    if (count($foods) > 0) {
        $errorMessage = 'このごはん屋さんはすでに登録されています。';
    }
    $result = $model->create($place, $distance, $feeling, $cost);
    $resultMessage = '更新完了';
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    echo $errorMessage;
    die;
}

include('../View/manager/food.php');
