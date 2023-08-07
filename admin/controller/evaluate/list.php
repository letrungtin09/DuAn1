<?php 
    require_once 'model/evaluate.php';
    require_once 'model/user.php';
    require_once 'model/courses.php';

    //phân giải các field name từ form trong form thành cách biến
    extract($_REQUEST);

    if (exist_param("btn_delete")) {
        evaluate_delete($evaluateId);
        $list_evaluate = evaluate_select_all();
        include_once("view/Evaluate/list.php");
    }
    else{
        $list_evaluate = evaluate_select_all();
        include_once("view/Evaluate/list.php");
    }
    
?>