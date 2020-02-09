<?php
require_once('../Model/Kyodoiku/connectToSql.php');

$table = 'kyodokoiku_cafe';
$prefecture = $_POST["prefecture"];
$purpose = $_POST["purpose"];
$atomosphere = $_POST["atomosphere"];
$feature = $_POST["feature"];


try {
    $db = new DB();
    $result = $db->selectKyodokoiku_cafe($table, $prefecture, $purpose, $atomosphere, $feature);
} catch (PDOException $e) {
    die('接続エラー：' .$e->getMessage());
}
include('../View/cafe/index.php');

//結果を表示したあと、質問が初期設定に戻ってややこしい
