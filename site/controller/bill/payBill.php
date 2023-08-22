<?php
require_once 'model/student_course.php';
require_once 'model/infor_purchase.php';
require_once 'model/bill.php';
// tìm hóa đơn
    $findbill = bill_select_by_userId($_SESSION['user']['userId']);
// Chuyển đổi thành mua hàng trong bảng bill
bill_update_status_bill($findbill['idBill']);
// Lấy khóa học trong bill
$courseInBill = detailBill_select_by_idBill($findbill['idBill']);
// thêm sinh viên vào bảng student_course
foreach($courseInBill as $courseAdd){
    student_course_insert($_SESSION['user']['userId'], $courseAdd['courseId']);
}
$total = $_GET['total'] / 100;
infor_purchase_insert($_SESSION['user']['userId'], $findbill['idBill'], $_GET['typepay'], $total);
?>
<meta http-equiv="refresh" content="0;url=index.php">