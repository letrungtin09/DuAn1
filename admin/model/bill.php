<?php
require_once 'pdo.php';

// Truy vấn đơn hàng chưa thanh toán theo userId
function bill_select_by_userId($userId){
    $sql = "SELECT * FROM bill WHERE userId = ? and statusBill = 0";
    return pdo_query_one($sql, $userId);
}
// Thêm bill cho user
function bill_insert( $userId){
    $sql = "INSERT INTO bill(userId) VALUES (?)";
    pdo_execute($sql, $userId);
}

// Kiểm tra đơn hàng tồn tại của bill chưa thanh toán theo userId
function bill_exist($userId){
    $sql = "SELECT count(*) FROM bill WHERE userId=? and statusBill = 0";
    return pdo_query_value($sql, $userId) > 0;
}
// Sửa statusBill
function bill_update_status_bill($idbill){
    $sql = "UPDATE bill SET statusBill=1 WHERE idBill = ?";
    pdo_execute($sql, $idbill);
}
?>