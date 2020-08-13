<?php
require_once '../Model/SpotsModel.php';

$place = $_POST['place'];
$distance = $_POST['distance'];
$feeling = $_POST['feeling'];
$cost = $_POST['cost'];

try {
    if (empty($place) || empty($distance) || empty($feeling) || empty($cost)) {
        $errorMessage = '未記入の項目があります。';
        include('../View/manager/spot.php');
        return $errorMessage;
    }
    $model = new SpotsModel();
    $spots = $model->selectByPlace($place);
    if (count($spots) > 0) {
        $errorMessage = 'この観光地はすでに登録されています。';
        include('../View/manager/spot.php');
        return $errorMessage;
    }
    $result = $model->create($place, $distance, $feeling, $cost);
    $resultMessage = '更新完了';
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    echo $errorMessage;
    die;
}

include('../View/manager/spot.php');

