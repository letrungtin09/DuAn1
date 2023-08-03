<?php
require_once "./../global.php";
require_once 'model/courses.php';
require_once 'model/user.php';
require_once 'model/category.php';

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST);

if (exist_param("btn_update")) {
    $file_name = save_file("upload_image","$IMAGE_DIR/courses/");
    $image = $file_name ? $file_name : $image;
    if($title == "" || $price == "" || $allTime == "" || $description == "" || $content == ""){
        $MESSAGE = "Cập nhật thất bại. Vui lòng nhập đầy đủ thông tin khóa học !";
        include_once("view/Courses/edit.php");
    }
    else if(is_numeric($price) == false || is_numeric($sale) == false || $price <= 0 || ($sale >= 100 || $sale <= 0)){
        $MESSAGE = "Cập nhật thất bại. Vui lòng nhập chữ số cho giá hoặc giảm giá !";
        include_once("view/Courses/edit.php");
    }
    else{
        course_update($courseId, $title, $image, $price, $sale, $userId, $purchase, $date, $level, $description, $cateId, $content, $allTime);
        $MESSAGE = "Cập nhật khóa học mới thành công !";
        include_once("view/Courses/edit.php");
    }
    include_once("view/Courses/edit.php");
}
else{
    $editCourse = course_select_by_id($courseId);
    extract($editCourse);
    //Lấy tất cả user có vai trò là teacher
    $getTeacher = user_select_by_role("teacher");
    //Lấy tất cả loại khóa học
    $getCate = category_select_all();
    include_once("view/Courses/edit.php");
}
?>