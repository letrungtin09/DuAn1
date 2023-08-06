<?php
require_once 'pdo.php';

//Thêm đánh giá mới
function evaluate_insert($userId, $evaluateRate, $evaluateTime, $courseId, $content){
    $sql = "INSERT INTO evaluate(userId, evaluateRate, evaluateTime, courseId, content) VALUES(?,?,?,?,?)";
    pdo_execute($sql, $userId, $evaluateRate, $evaluateTime, $courseId, $content);
}

//Cập nhật đánh giá
function evaluate_update($evaluateId, $userId, $evaluateRate, $evaluateTime, $courseId, $content){
    $sql = "UPDATE evaluate SET userId=?, evaluateRate=?, evaluateTime=?, courseId=?, content=? WHERE evaluateId=?";
    pdo_execute($sql, $userId, $evaluateRate, $evaluateTime, $courseId, $content, $evaluateId);
}
// Xóa một hoặc nhiều đánh giá
function evaluate_delete($evaluateId){
    $sql = "DELETE FROM evaluate WHERE evaluateId=?";
    if(is_array($evaluateId)){
        foreach ($evaluateId as $evaluate) pdo_execute($sql, $evaluate); 
    } else pdo_execute($sql, $evaluateId);
}
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
// Truy vấn đánh giá theo id
function evaluate_select_by_id($evaluateId){
    $sql = "SELECT * FROM evaluate WHERE evaluateId = ?";
    return pdo_query_one($sql, $evaluateId);
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