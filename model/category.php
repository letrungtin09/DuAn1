<?php
require_once 'pdo.php';
// Truy vấn tất cả khóa học
function category_select_all(){
    $sql = "SELECT * FROM category";
    return pdo_query($sql);
}
?>