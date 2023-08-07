<?php
require_once "./../global.php";
require_once 'model/chapter.php';
require_once 'model/courses.php';

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST);

if (exist_param("btn_update")) {
    if ($title == "") {
        $MESSAGE = "Cập nhật thất bại. Vui lòng nhập tiêu đề chương học !";
        $newNumberOrder = chapter_numberOrder_new($_GET['courseId']);
        $nameCourse = course_select_by_id($_GET['courseId']);
        include_once("view/Chapter/edit.php");
    } else {
        chapter_update($chapterId, $title, $numberOrder, $courseId);
        $MESSAGE = "Cập nhật thành công!";
        $newNumberOrder = chapter_numberOrder_new($_GET['courseId']);
        $nameCourse = course_select_by_id($_GET['courseId']);
        include_once("view/Chapter/edit.php");
    }
}
else{
    $newNumberOrder = chapter_numberOrder_new($_GET['courseId']);
    $nameCourse = course_select_by_id($_GET['courseId']);
    include_once("view/Chapter/edit.php");
}

?>