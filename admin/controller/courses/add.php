<?php
require_once "./../global.php";
require_once 'model/courses.php';
require_once 'model/user.php';
require_once 'model/category.php';

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST);

if (exist_param("btn_insert")) {
    if ($title == "" || $price == "" || $userId == 0 || $level == 0 || $cateId == 0 || $allTime == "" || $description == "" || $content == "") {
        //Lấy tất cả user có vai trò là teacher
        $getAllTeacher = user_select_by_role("teacher");
        //Lấy tất cả loại khóa học
        $getAllCate = category_select_all();
        $MESSAGE = "Thêm mới thất bại. Vui lòng điền đầy đủ thông tin khóa học !";
        include_once("view/Courses/add.php");
    } else if (is_numeric($price) == false || $price <= 0) {
        //Lấy tất cả user có vai trò là teacher
        $getAllTeacher = user_select_by_role("teacher");
        //Lấy tất cả loại khóa học
        $getAllCate = category_select_all();
        $MESSAGE = "Thêm mới thất bại. Vui lòng nhập chữ số cho giá hoặc giảm giá !";
        include_once("view/Courses/add.php");
    } else {
        course_insert($title, $image, $price, $sale, $userId, $purchase, $date, $level, $description, $cateId, $content, $allTime);
        unset($title, $image, $price, $sale, $userId, $purchase, $date, $level, $description, $cateId, $content, $allTime);
        //Lấy tất cả user có vai trò là teacher
        $getAllTeacher = user_select_by_role("teacher");
        //Lấy tất cả loại khóa học
        $getAllCate = category_select_all();
        $MESSAGE = "Thêm mới khóa học thành công !";
        include_once("view/Courses/add.php");
    }
    include_once("view/Courses/add.php");
} else {
    //Lấy tất cả user có vai trò là teacher
    $getAllTeacher = user_select_by_role("teacher");
    //Lấy tất cả loại khóa học
    $getAllCate = category_select_all();
    include_once("view/Courses/add.php");
}
?>