<?php
require_once 'pdo.php';

//Thêm loại mới
function category_insert($nameCate){
    $sql = "INSERT INTO category(nameCate) VALUES(?)";
    pdo_execute($sql, $nameCate);
}
//Cập nhật tên loại
function category_update($cateId, $nameCate){
    $sql = "UPDATE category SET nameCate=? WHERE cateId=?";
    pdo_execute($sql, $nameCate, $cateId);
}
// Xóa một hoặc nhiều loại
function category_delete($cateId){
    $sql = "DELETE FROM category WHERE cateId=?";
    if(is_array($cateId)){
        foreach ($cateId as $ma) pdo_execute($sql, $ma); 
    } else pdo_execute($sql, $cateId);
}
// Truy vấn tất cả các loại
function category_select_all(){
    $sql = "SELECT * FROM category";
    return pdo_query($sql);
}
//Truy vấn một loại theo mã
function category_select_by_id($cateId){
    $sql = "SELECT * FROM category WHERE cateId=?";
    return pdo_query_one($sql, $cateId);
}
//Kiểm tra sự tồn tại của một loại
function category_exist($cateId){
    $sql = "SELECT count(*) FROM category WHERE cateId=?";
    return pdo_query_value($sql, $cateId) > 0;
}
?>