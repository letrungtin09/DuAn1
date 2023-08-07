<?php
require_once 'model/category.php';
require_once 'model/favourite.php';
// Truy vấn tất cả loại khóa học
$allKind = category_select_all();
// khóa học sinh viên đã thích
$studentlikeinCourse = student_courses_like_select_by_userId($_SESSION['user']['userId']);
// Hàm lấy tên giảng viên
function get_name_teacher($userID){
    require_once 'model/user.php';
    $user = user_select_by_id($userID);
    $name = $user['fullName'];
    return $name;
}
?>