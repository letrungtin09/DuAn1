<?php
require_once 'pdo.php';
// Truy vấn khóa học ưa thích
function student_courses_like_select_by_userId($userId){
    $sql = "SELECT * FROM favourite WHERE userId = ? and favouritestatus = 1";
    return pdo_query($sql, $userId);
}
    // Thêm khóa học ưa thích
function favourite_insert($userId, $courseId){
    $sql = "INSERT INTO favourite(userId, courseId ) VALUES (?,?)";
    pdo_execute($sql, $userId, $courseId);
}
// Xóa khóa học
function favourite_delete($userId, $courseId){
    $sql = "DELETE FROM favourite WHERE userId=? and courseId=?";
    pdo_execute($sql, $userId, $courseId);
    }
// Kiểm tra sự tồn tại của khóa học yêu thích
function favourite_exist($userId, $courseId){
    $sql = "SELECT count(*) FROM favourite WHERE userId=? and courseId=?";
    return pdo_query_value($sql, $userId, $courseId) > 0;
}
?>