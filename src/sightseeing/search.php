<?php
require_once('../Model/Kyodoiku/connectToSql.php');
$table = 'kyodokoiku_sightseeing';
$howFar = $_POST["howFar"];
$feeling = $_POST["feeling"];
$cost = $_POST["cost"];

try {
    $db = new DB();
    $result = $db->selectKyodokoiku_sightseeing($table, $howFar, $feeling, $cost);
} catch (PDOException $e) {
    die('接続エラー：' .$e->getMessage());
}

include('../View/sightseeing/index.php');