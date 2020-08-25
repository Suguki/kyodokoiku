<?php
require_once('../Model/FoodsModel.php');
session_start();

$model = new FoodsModel();
$results = $model->selectAll();

include_once('../View/food/edit.php');
?>