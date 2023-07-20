<?php
require_once 'pdo.php';

// Truy vấn đơn hàng theo userId
function bill_select_by_userId($userId){
    $sql = "SELECT * FROM bill WHERE userId = ?";
    return pdo_query_one($sql, $userId);
}
// Thêm bill cho user
function bill_insert( $userId){
    $sql = "INSERT INTO bill(userId) VALUES (?)";
    pdo_execute($sql, $userId);
}

// Kiểm tra đơn hàng tồn tại
function bill_exist($userId){
    $sql = "SELECT count(*) FROM bill WHERE userId=?";
    return pdo_query_value($sql, $userId) > 0;
}
?>