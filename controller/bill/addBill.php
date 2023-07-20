<?php
    require_once 'model/courses.php';
    require_once 'model/category.php';
    require_once 'model/user.php';
    require_once 'model/evaluate.php';
    require_once 'model/news.php';

    foreach ($_SESSION as $sec){
        extract($sec);
    }
    if(bill_exist($userId)){
        $idBillByIdUser = bill_select_by_userId($userId);
        extract($idBillByIdUser);
        $course = $_GET['course'];
        detailBill_insert($idBill, $course);
        echo '<meta http-equiv="refresh" content="0;url=index.php">';
    }else{
        bill_insert($userId);
        $idBillByIdUser = bill_select_by_userId($userId);
        extract($idBillByIdUser);
        $course = $_GET['course'];
        detailBill_insert($idBill, $course);
        echo '<meta http-equiv="refresh" content="0;url=index.php">';
    }

?>