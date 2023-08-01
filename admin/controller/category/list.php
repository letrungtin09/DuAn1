<?php
require_once 'model/category.php';
// Truy vấn tất cả khóa học
$listCate = category_select_all();
include_once("view/Category/list.php");
?>