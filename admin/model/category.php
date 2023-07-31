<?php
require_once 'pdo.php';
// Truy vấn tất cả khóa học
function category_select_all(){
    $sql = "SELECT * FROM category";
    return pdo_query($sql);
}
// Lấy loại theo idcate
// Truy vấn khóa học theo mã khóa học
function category_select_by_id($cateId){
    $sql = "SELECT * FROM category WHERE cateId=?";
    return pdo_query_one($sql, $cateId);
}
?>