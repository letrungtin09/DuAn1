<?php
require_once 'model/chapter.php';
require_once 'model/detailBill.php';
// Tìm kiếm đơn hàng chưa đc thanh toán
$idBillByIdUser = bill_select_by_userId($_SESSION["user"]["userId"]);
// Lấy danh sách id course
$detailBillByIdBill = detailBill_select_by_idBill($idBillByIdUser['idBill']);
// Đếm số lesson
$countLessondetail = detailBill_count_billId($idBillByIdUser['idBill']);
// 10 khóa học bán chạy nhất
$top10Course = course_select_top10_best_seller();
include_once("view/Bill/cart.php");
?>