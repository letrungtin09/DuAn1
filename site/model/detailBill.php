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
// Đếm số lesson theo bill
function detailBill_count_billId($idBill){
    $sql = "SELECT count(idBill) FROM detail_bill WHERE idBill=?";
    return pdo_query_value($sql, $idBill);
}
// Xóa detailBill theo idDetailBill
function detail_bill_delete($idDetailBill){
    $sql = "DELETE FROM detail_bill WHERE idDetailBill=?";
    if(is_array($idDetailBill)){
        foreach ($idDetailBill as $detailbill) pdo_execute($sql, $detailbill);
    } else {
        pdo_execute($sql, $idDetailBill);
    }
}
?>