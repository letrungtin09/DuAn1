<?php 
    require_once 'model/evaluate.php';
    require_once 'model/user.php';
    require_once 'model/courses.php';
    $list_evaluete = evaluate_select_all();
    @include_once("view/Evaluate/list.php");
?>