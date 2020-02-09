<?php
require_once('../Model/Kyodoiku/connectToSql.php');
$table = 'kyodokoiku_food';
$howFar = $_POST["howFar"];
$feeling = $_POST["feeling"];
$cost = $_POST["cost"];

try {
    $db = new DB();
    $result = $db->selectKyodokoiku_food($table, $howFar, $feeling, $cost);
} catch (PDOException $e) {
    die('接続エラー：' .$e->getMessage());
}

include('../View/food/index.php');
