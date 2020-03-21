<?php
require_once '../Model/FoodsModel.php';

$place = $_POST['place'];
$howFar = $_POST['howFar'];
$feeling = $_POST['feeling'];
$cost = $_POST['cost'];

try {
    if (empty($place) || empty($howFar) || empty($feeling) || empty($cost)) {
        throw new Exception('出直してきな！！！！');
    }
    $model = new FoodsModel();
    $foods = $model->selectByPlace($place);
    if (count($foods) > 0) {
        throw new Exception('このごはん屋さんはすでに登録されています');
    }
    $result = $model->create($place, $howFar, $feeling, $cost);
    $resultMessage = '更新完了';
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    echo $errorMessage;
    die;
}

include_once('../View/manager/food.php');
