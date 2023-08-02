<?php
require_once "./../global.php";
require_once 'model/category.php';

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST);

if (exist_param("btn_insert")) {
    if ($nameCate == "" || is_numeric($nameCate)) {
        $MESSAGE = "Thêm mới thất bại. Vui lòng nhập lại tên loại khóa học !";
        include_once("view/Category/add.php");
    } else {
        category_insert($nameCate);
        unset($nameCate, $cateId);
        $MESSAGE = "Thêm loại khóa học mới thành công!";
        include_once("view/Category/add.php");
    }
}
else{
    include_once("view/Category/add.php");
}
?>