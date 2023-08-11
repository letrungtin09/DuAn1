<?php
require_once "model/courses.php";
require_once "model/user.php";

extract($_REQUEST);
if (exist_param("btn_delete")) {
    course_delete($courseId);
    $MESSAGE = "Xóa thành công !";
    //Lấy tất cả khóa học của giảng viên
    $getTeacherCourse = course_select_by_userId($_GET['userId']);
    $getInfoTeacher = user_select_by_id($_GET['userId']);
    $countCourse = course_count_userId($_GET['userId']);
    include_once("view/Managecourse/listCourse.php");
} else {
    //Lấy tất cả khóa học của giảng viên
    $getTeacherCourse = course_select_by_userId($_GET['userId']);
    $getInfoTeacher = user_select_by_id($_GET['userId']);
    $countCourse = course_count_userId($_GET['userId']);
    include_once("view/Managecourse/listCourse.php");
}

?>