<?php
require_once('../Model/CafesModel.php');
session_start();

$model = new CafesModel();
$results = $model->selectAll();

include_once('../View/cafe/edit.php');
?>