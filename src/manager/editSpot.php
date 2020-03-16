<?php
require_once '../Model/SpotsModel.php';

$place = $_POST['place'];
$howFar = $_POST['howFar'];
$feeling = $_POST['feeling'];
$cost = $_POST['cost'];

try {
    if (empty($place) || empty($howFar) || empty($feeling) || empty($cost)) {
        throw new Exception('出直してきな！！！！');
    }
    $model = new SpotsModel();
    $spots = $model->selectByPlace($place);
    if (count($spots) > 0) {
        throw new Exception('この観光地はすでに登録されています');
    }
    $result = $model->create($place, $howFar, $feeling, $cost);
    $resultMessage = '更新完了';
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    echo $errorMessage;
    die;
}

include('../View/manager/spot.php');

