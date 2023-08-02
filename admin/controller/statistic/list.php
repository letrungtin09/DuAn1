<?php
require_once 'model/statistic.php';
$listStatistic = statistic_courses();

@include_once('view/Statistic/list.php');
?>