<?php 
    require_once 'model/bill.php';
    require_once 'model/user.php';

    //phân giải các field name từ form trong form thành cách biến
    extract($_REQUEST);

    if (exist_param("btn_delete")) {
        bill_delete($idBill);
        $list_bill =  select_all_bill();
        include_once("view/Bill/list.php");
    }
    else{
        $list_bill =  select_all_bill();
        include_once("view/Bill/list.php");
    }

?>