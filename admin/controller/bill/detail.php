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
    $getBill = select_bill_by_id($idBill);
    $getInfo = select_info_purchase($idBill);
    $countCourse = count_course_in_bill($idBill);
    include_once("view/Bill/detail.php");
}
?>