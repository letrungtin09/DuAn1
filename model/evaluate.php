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


?>
?>