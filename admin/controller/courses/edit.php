<?php
require_once "./../global.php";
require_once 'model/courses.php';
require_once 'model/user.php';
require_once 'model/category.php';

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST);

if (exist_param("btn_update")) {

    $url = $_SERVER["DOCUMENT_ROOT"] . "$IMAGE_DIR/courses/";
    $file_name = save_file("upload_image",$url);
    $image = $file_name ? $file_name : $image;

    if($title != "" || $price != "" || $allTime != "" || $description != "" || $content != "" || is_numeric($price) || is_numeric($sale) || $price > 0 || ($sale < 100 && $sale >= 0)){
        course_update($courseId, $title, $image, $price, $sale, $userId, $purchase, $date, $level, $description, $cateId, $content, $allTime);
        $editCourse = course_select_by_id($courseId);
        extract($editCourse);
        //Lấy tất cả user có vai trò là teacher
        $getTeacher = user_select_by_role("teacher");
        //Lấy tất cả loại khóa học
        $getCate = category_select_all();
        $MESSAGE = "Cập nhật khóa học thành công !";
        include_once("view/Courses/edit.php");
    }
    else{
        $editCourse = course_select_by_id($courseId);
        extract($editCourse);
        //Lấy tất cả user có vai trò là teacher
        $getTeacher = user_select_by_role("teacher");
        //Lấy tất cả loại khóa học
        $getCate = category_select_all();
        $MESSAGE = "Cập nhật thất bại. Vui lòng nhập lại thông tin khóa học !";
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