<?php
    require_once 'model/courses.php';
    // Truy vấn tất cả khóa học
    $Courses = course_select_all();
    
    include_once("view/Home/view.php");
?>
?>