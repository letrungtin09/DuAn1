<?php 
    require_once 'model/courses.php';
    require_once 'model/user.php';
    require_once 'model/category.php';
    $list_courses = course_select_all();
    @include_once("view/Courses/list.php");
?>