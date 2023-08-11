<?php
require_once "./../global.php";
require_once 'model/courses.php';
require_once 'model/user.php';
require_once 'model/category.php';

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST);

if (exist_param("btn_insert")) {
    if ($title == "" || $price == "" || $userId == 0 || $level == 0 || $cateId == 0 || $allTime == "" || $description == "" || $content == "") {
        //Lấy teacher
        $getTeacher = user_select_by_id($_GET['userId']);
        //Lấy tất cả loại khóa học
        $getAllCate = category_select_all();
        $MESSAGE = "Thêm mới thất bại. Vui lòng điền đầy đủ thông tin khóa học !";
        include_once("view/Managecourse/addCourse.php");
    } else if (is_numeric($price) == false || $price <= 0) {
        //Lấy teacher
        $getTeacher = user_select_by_id($_GET['userId']);
        //Lấy tất cả loại khóa học
        $getAllCate = category_select_all();
        $MESSAGE = "Thêm mới thất bại. Vui lòng nhập chữ số cho giá hoặc giảm giá !";
        include_once("view/Managecourse/addCourse.php");
    } else {
        course_insert($title, $image, $price, $sale, $userId, $purchase, $date, $level, $description, $cateId, $content, $allTime);
        unset($title, $image, $price, $sale, $userId, $purchase, $date, $level, $description, $cateId, $content, $allTime);
        $MESSAGE = "Thêm mới khóa học thành công !";
        include_once("view/Managecourse/addCourse.php");
    }
    include_once("view/Managecourse/addCourse.php");
} else {
    //Lấy teacher
    $getTeacher = user_select_by_id($_GET['userId']);
    //Lấy tất cả loại khóa học
    $getAllCate = category_select_all();
    include_once("view/Managecourse/addCourse.php");
}
?>