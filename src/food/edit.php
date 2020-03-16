<?php
require_once('../Model/FoodsModel.php');

$model = new FoodsModel();
$results = $model->selectAll();

include_once('../View/food/edit.php');
?>