<?php
require_once('../Model/SpotsModel.php');

$model = new SpotsModel();
$results = $model->selectAll();

include_once('../View/spot/edit.php');
?>