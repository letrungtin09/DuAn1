<?php
require_once 'model/student_course.php';
// Chuyển đổi thành mua hàng trong bảng bill
bill_update_status_bill($_GET['paybill']);
// Lấy khóa học trong bill
$courseInBill = detailBill_select_by_idBill($_GET['paybill']);
// thêm sinh viên vào bảng student_course
foreach($courseInBill as $courseAdd){
    student_course_insert($_SESSION['user']['userId'], $courseAdd['courseId']);
}
?>
<meta http-equiv="refresh" content="0;url=<?=$base_url?>">