<?php
require_once 'model/detailBill.php';
require_once 'model/courses.php';
// Lấy detailbill với idbill
function get_detail_onBill($idbill){
    $detailbill = detailBill_select_by_idBill($idbill);
    return $detailbill;
}
// truy vấn khóa học với id course
function get_course_ondetailBill($courseId){
    $coursebyidcourse = course_select_by_id($courseId);
    return $coursebyidcourse;
}
include_once("view/Bill/payCourse.php");