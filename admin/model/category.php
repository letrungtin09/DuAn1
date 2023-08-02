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
        foreach ($cateId as $cate) pdo_execute($sql, $cate); 
    } else pdo_execute($sql, $cateId);
}
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