<?php
require_once 'pdo.php';
// Truy vấn tất cả đánh gía
function evaluate_select_all(){
    $sql = "SELECT * FROM evaluate";
    return pdo_query($sql);
}

// Truy vấn đánh giá theo userId
function evaluate_select_userId($userId){
    $sql = "SELECT * FROM evaluate WHERE userId = ?";
    return pdo_query_one($sql, $userId);
}
// Truy vấn đánh giá theo courseId
function evaluate_select_courseId($courseId){
    $sql = "SELECT * FROM evaluate WHERE courseId = ?";
    return pdo_query($sql, $courseId);
}
// Kiểm tra sự tồn tại của đánh giá theo khóa học
function evaluate_exist($courseId){
    $sql = "SELECT count(*) FROM evaluate WHERE courseId=?";
    return pdo_query_value($sql, $courseId) > 0;
}
?>