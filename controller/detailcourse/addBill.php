<?php
    require_once 'model/courses.php';
    require_once 'model/category.php';
    require_once 'model/user.php';
    require_once 'model/evaluate.php';
    require_once 'model/news.php';
    if(isset($_GET['course'])){
        foreach ($_SESSION as $sec){
        }
        if(bill_exist($sec['userId'])){
            $idBillByIdUser = bill_select_by_userId($sec['userId']);
            extract($idBillByIdUser);
            detailBill_insert($idBill, $_GET['course']);
            include_once("view/Bill/cart.php");
        }else{
            bill_insert($sec['userId']);
            $idBillByIdUser = bill_select_by_userId($sec['userId']);
            extract($idBillByIdUser);
            detailBill_insert($idBill, $_GET['course']);
            include_once("view/Bill/cart.php");
        }
    }else{
        include_once("view/Bill/cart.php");
    }

?>