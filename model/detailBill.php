<?php
require_once 'pdo.php';

// Truy vấn chi tiết đơn hàng theo courseId
function detailBill_select_by_courseId($courseId){
    $sql = "SELECT * FROM detail_bill WHERE courseId = ?";
    return pdo_query_one($sql, $courseId);
}

// Truy vấn chi tiết đơn hàng theo idBill
function detailBill_select_by_idBill($idBill){
    $sql = "SELECT * FROM detail_bill WHERE idBill = ?";
    return pdo_query($sql, $idBill);
}
// Truy vấn chi tiết đơn hàng theo idDetailBill
function detailBill_select_by_id($idDetailBill){
    $sql = "SELECT * FROM detail_bill WHERE idDetailBill = ?";
    return pdo_query_one($sql, $idDetailBill);
}
// Thêm detail bill cho user
function detailBill_insert($idBill, $courseId){
    $sql = "INSERT INTO detail_bill(idBill, courseId) VALUES (?,?)";
    pdo_execute($sql, $idBill, $courseId);
}

// Kiểm tra chi tiết đơn hàng tồn tại
function detailBill_exist($idDetailBill){
    $sql = "SELECT count(*) FROM detail_bill WHERE idDetailBill=?";
    return pdo_query_value($sql, $idDetailBill) > 0;
}
?>