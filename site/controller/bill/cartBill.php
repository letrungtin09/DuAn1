<?php
require_once 'model/chapter.php';
require_once 'model/detailBill.php';
// Tìm kiếm đơn hàng chưa đc thanh toán
if(bill_exist($_SESSION["user"]["userId"])){
    $idBillByIdUser = bill_select_by_userId($_SESSION["user"]["userId"]);
    // Lấy danh sách id course
    $detailBillByIdBill = detailBill_select_by_idBill($idBillByIdUser['idBill']);
    // Đếm số lesson
    $countLessondetail = detailBill_count_billId($idBillByIdUser['idBill']);
}else{
    $countLessondetail = '';
    $detailBillByIdBill= '';
    include_once("view/Bill/cart.php");
}
// 10 khóa học bán chạy nhất
$top10Course = course_select_top10_best_seller();
// Kiểm tra course 
function get_course_in_bill($userId, $courseId){
    require_once 'model/bill.php';
    require_once 'model/detailBill.php';
    require_once 'model/student_course.php';
    $billByUserId = bill_select_by_userId($userId);
    $detailBillByIdBill = detailBill_select_by_idBill($billByUserId['idBill']);
    $courseRegisted = student_courses_select_by_userId($userId);
    foreach($courseRegisted as $courseRegis){
        if($courseRegis['courseId'] == $courseId){
            return 0;
        }
    }
    foreach($detailBillByIdBill as $coursebuied){
        if($coursebuied['courseId'] == $courseId){
            return 1;
        }
    }
    return 2;
}
// kiểm tra khóa học yêu thích 
function get_course_favourite($userId, $courseId){
    require_once 'model/favourite.php';
    return favourite_exist($userId, $courseId);
}
include_once("view/Bill/cart.php");
?>