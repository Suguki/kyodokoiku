<?php
require_once('../Model/CafesModel.php');

$model = new CafesModel();
$results = $model->selectAll();

include_once('../View/cafe/edit.php');
?>