<?php
require_once 'pdo.php';
// Truy vấn tất cả khóa học
function course_select_all(){
    $sql = "SELECT * FROM courses";
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