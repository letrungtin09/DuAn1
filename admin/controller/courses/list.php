<?php
require_once 'model/courses.php';
require_once 'model/user.php';
require_once 'model/category.php';

extract($_REQUEST);
if (exist_param("btn_edit")) {
    include_once("view/Courses/edit.php");
} else if (exist_param("btn_delete")) {
    course_delete($courseId);
    $list_courses = course_select_all();
    $MESSAGE = "Xóa thành công !";
    include_once("view/Courses/list.php");
} else {
    $list_courses = course_select_all();
    @include_once("view/Courses/list.php");
}

?>