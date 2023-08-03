<?php
require_once 'pdo.php';
// Thêm sinh viên vào khóa học
function student_course_insert($userId, $courseId){
    $sql = "INSERT INTO student_courses(userId, courseId ) VALUES (?,?)";
    pdo_execute($sql, $userId, $courseId);
}
// Truy vấn student_course bằng userId
function student_courses_select_by_userId($userId){
    $sql = "SELECT * FROM student_courses WHERE userId = ?";
    return pdo_query($sql, $userId);
}
// Truy vấn khóa học ưa thích
function student_courses_like_select_by_userId($userId){
    $sql = "SELECT * FROM student_courses WHERE userId = ? and favourite = 1";
    return pdo_query($sql, $userId);
}
?>