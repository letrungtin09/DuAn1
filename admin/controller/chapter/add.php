<?php
require_once 'model/chapter.php';
require_once 'model/courses.php';

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST);

if (exist_param("btn_insert")) {
    if ($title == "") {
        $MESSAGE = "Thêm mới thất bại. Vui lòng nhập tiêu đề chương học !";
        $newNumberOrder = chapter_numberOrder_new($_GET['courseId']);
        $nameCourse = course_select_by_id($_GET['courseId']);
        include_once("view/Chapter/add.php");
    } else {
        chapter_insert($title, $numberOrder, $courseId);
        unset($title);
        $MESSAGE = "Thêm chương mới thành công!";
        $newNumberOrder = chapter_numberOrder_new($_GET['courseId']);
        $nameCourse = course_select_by_id($_GET['courseId']);
        include_once("view/Chapter/add.php");
    }
}
else{
    $newNumberOrder = chapter_numberOrder_new($_GET['courseId']);
    $nameCourse = course_select_by_id($_GET['courseId']);
    include_once("view/Chapter/add.php");
}

?>