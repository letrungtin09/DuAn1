<?php
    require_once 'model/courses.php';
    require_once 'model/category.php';
    require_once 'model/user.php';
    require_once 'model/evaluate.php';
    require_once 'model/news.php';
    if(isset($_GET['course'])){
        if(bill_exist($_SESSION['user']['userId'])){
            $idBillByIdUser = bill_select_by_userId($_SESSION['user']['userId']);
            extract($idBillByIdUser);
            detailBill_insert($idBill, $_GET['course']);
            include_once("view/Bill/cart.php");
        }else{
            bill_insert($_SESSION['user']['userId']);
            $idBillByIdUser = bill_select_by_userId($_SESSION['user']['userId']);
            extract($idBillByIdUser);
            detailBill_insert($idBill, $_GET['course']);
            include_once("view/Bill/cart.php");
        }
    }else{
        include_once("view/Bill/cart.php");
    }

?>