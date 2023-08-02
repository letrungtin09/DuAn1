<?php
require_once "./../global.php";
require_once 'model/category.php';

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST);

if (exist_param("btn_update")) {
    if ($nameCate == "" || is_numeric($nameCate)) {
        $MESSAGE = "Cập nhật thất bại. Vui lòng nhập lại tên loại khóa học !";
        include_once("view/Category/edit.php");
    } else {
        category_update($cateId, $nameCate);
        $MESSAGE = "Cập nhật loại khóa học mới thành công!";
        include_once("view/Category/edit.php");
    }
}
else{
    $editCate = category_select_by_id($cateId);
    extract($editCate);
    include_once("view/Category/edit.php");
}
?>