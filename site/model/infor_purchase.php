<?php
require_once 'pdo.php';
// Thêm sinh viên vào khóa học
function infor_purchase_insert($userId, $idBill, $typepay, $total){
    $sql = "INSERT INTO info_purchase(userId, idBill, type_pay, total_money) VALUES (?,?,?,?)";
    pdo_execute($sql, $userId, $idBill, $typepay, $total);
}
?>