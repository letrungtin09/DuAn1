<?php
require_once 'pdo.php';

// Xóa một hoặc nhiều đánh giá
function bill_delete($idBill){
    $sql = "DELETE FROM bill WHERE idBill=?";
    if(is_array($idBill)){
        foreach ($idBill as $bill) pdo_execute($sql, $bill); 
    } else pdo_execute($sql, $idBill);
}
// Truy vấn tất cả đơn hàng
function select_all_bill(){
    $sql = "SELECT * FROM bill";
    return pdo_query($sql);
}
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
// Truy vấn tất cả thông tin mua hàng theo mã hóa đơn
function select_info_purchase($idBill){
    $sql = "SELECT * FROM info_purchase WHERE idBill = ?";
    return pdo_query_one($sql, $idBill);
}
// Truy vấn hóa đơn theo mã hóa đơn
function select_bill_by_id($idBill){
    $sql = "SELECT * FROM bill WHERE idBill = ?";
    return pdo_query_one($sql, $idBill);
}
// Đếm số lượng khóa học trong hóa đơn
function count_course_in_bill($idBill){
    $sql = "SELECT count(courseId) FROM detail_bill WHERE idBill = ?";
    return pdo_query_value($sql, $idBill);
}
?>