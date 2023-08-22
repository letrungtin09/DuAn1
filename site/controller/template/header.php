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
// Lấy chức vụ
function get_occupation_teacher($userID){
    require_once 'model/user.php';
    $user = user_select_by_id($userID);
    $occupation = $user['career'];
    return $occupation;
}
// Lấy ảnh
function get_avatar_user($userID){
    require_once 'model/user.php';
    $user = user_select_by_id($userID);
    $avatar = $user['avatar'];
    return $avatar;
}
// đếm số khóa học trong bill
function get_count_course_in_bill($userID){
    require_once 'model/bill.php';
    require_once 'model/detailBill.php';
    $bill = bill_select_by_userId($userID);
    if(isset($bill)){
        $lesson = detailBill_count_billId($bill['idBill']);
    }else{
        $lesson = 0;
    }
    
    return $lesson;
}
?>