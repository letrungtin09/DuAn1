<?php
    require_once 'model/courses.php';
    require_once 'model/category.php';
    // Truy vấn tất cả khóa học
    $Courses = course_select_all();
    // Truy vấn tất cả loại 
    $allKind = category_select_all();
    include_once("view/Home/view.php");
?>
?>