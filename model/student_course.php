<?php
require_once 'pdo.php';
// Thêm sinh viên vào khóa học
function student_course_insert($userId, $courseId){
    $sql = "INSERT INTO student_courses(userId, courseId ) VALUES (?,?)";
    pdo_execute($sql, $userId, $courseId);
}
?>