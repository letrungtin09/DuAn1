<?php
require_once 'pdo.php';
// Truy vấn tất cả khóa học và tên loại khóa học 
function namecate_course_select_idcate(){
    $sql = "SELECT courses.*, category.nameCate
    FROM category, courses
    WHERE category.cateId=courses.cateId";
    return pdo_query($sql);
}
// Truy vấn tất cả khóa học Theo idcate
function course_select_idcate($idCate){
    $sql = "SELECT *
    FROM courses
    WHERE cateId=?";
    return pdo_query($sql, $idCate);
}
?>