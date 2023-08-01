<?php 
    require_once 'model/bill.php';
    require_once 'model/user.php';
    $list_bill =  select_all_bill();
    @include_once("view/Bill/list.php");
?>