<?php
require_once 'pdo.php';
//Truy vấn tất cả chương
function chapter_select_all() {
    $sql = "SELECT * FROM chapter_courses";
    return pdo_query($sql);
}
// đếm số chương theo khóa học
function chapter_count_course($courseId){
    $sql = "SELECT count(courseId) FROM chapter_courses WHERE courseId=?";
    return pdo_query_value($sql, $courseId);
}
// Truy vấn chapter theo course
function chapter_select_idcourse($courseId){
    $sql = "SELECT * FROM chapter_courses WHERE courseId=?";
    return pdo_query($sql, $courseId);
}
