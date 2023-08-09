<?php  
require_once 'model/evaluate.php';
require_once 'model/category.php';
require_once 'model/user.php';
require_once 'model/courses.php';
// Truy vấn tất cả level
$allLevel = level_course_select_all();
// Lấy tất cả mã khóa học có tồn tại
$allIdcate = idcate_course_select_all();
// Truy van tenn loai
function nameKind($idcate){
    return category_select_by_id($idcate);
}
// Lấy tất cả giang vien tồn tại
$allTeacher = iduser_course_select_all();
// Truy vấn tên giảng viên
function nameTeacher($iduser){
    return user_select_by_id($iduser);
}
include_once("view/search/searchWord.php");