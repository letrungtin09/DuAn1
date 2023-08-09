<?php
require_once 'pdo.php';

// Thêm khóa học
function course_insert($title, $image, $price, $sale, $userId, $purchase, $date, $level, $description, $cateId, $content, $allTime){
    $sql = "INSERT INTO courses(title, image, price, sale, userId, purchase, date, level, description, cateId, content, allTime) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $title, $image, $price, $sale, $userId, $purchase, $date, $level, $description, $cateId, $content, $allTime);
}

// Sửa khóa học
function course_update($courseId, $title, $image, $price, $sale, $userId, $purchase, $date, $level, $description, $cateId, $content, $allTime){
    $sql = "UPDATE courses SET title=?, image=?, price=?, sale=?, userId=?, purchase=?, date=?, level=?, description=?, cateId=?, content=?, allTime=? WHERE courseId = ?";
    pdo_execute($sql, $title, $image, $price, $sale, $userId, $purchase, $date, $level, $description, $cateId, $content, $allTime, $courseId);
}

// Xóa khóa học
function course_delete($courseId){
    $sql = "DELETE FROM courses WHERE courseId=?";
    if(is_array($courseId)){
        foreach ($courseId as $course) pdo_execute($sql, $course);
    } else {
        pdo_execute($sql, $courseId);
    }
}

// Truy vấn tất cả khóa học
function course_select_all(){
    $sql = "SELECT * FROM courses";
    return pdo_query($sql);
}

// Truy vấn khóa học theo mã khóa học
function course_select_by_id($courseId){
    $sql = "SELECT * FROM courses WHERE courseId=?";
    return pdo_query_one($sql, $courseId);
}
// Truy vấn 2 khóa học theo mã giảng viên
function three_course_select_by_userId($userId){
    $sql = "SELECT * FROM courses WHERE userId=? limit 3";
    return pdo_query($sql, $userId);
}
// Truy vấn tất cả khóa học theo loại
function course_select_idcate($cateId){
    $sql = "SELECT * FROM courses WHERE cateId=?";
    return pdo_query($sql, $cateId);
}
// Truy vấn tất cả khóa học theo loại sắp xếp theo ngày update
function course_select_idcate_arrange_date($cateId){
    $sql = "SELECT * FROM courses WHERE cateId=? ORDER BY date DESC";
    return pdo_query($sql, $cateId);
}
// Truy vấn tất cả khóa học theo loại sắp xếp theo lượt mua
function course_select_idcate_arrange_purchase($cateId){
    $sql = "SELECT * FROM courses WHERE cateId=? ORDER BY purchase DESC";
    return pdo_query($sql, $cateId);
}
// Kiểm tra sự tồn tại của khóa học
function course_exist($courseId){
    $sql = "SELECT count(*) FROM courses WHERE courseId=?";
    return pdo_query_value($sql, $courseId) > 0;
}

// Tăng lượt mua lên 1
function course_to_increase_purchases($courseId){
    $sql = "UPDATE courses SET purchase = purchase + 1 where courseId = ?";
    return pdo_execute($sql, $courseId);
}

// Tìm kiếm khóa học
function course_select_keyword($keywords){
    $sql = "SELECT * FROM courses cou "." JOIN category cate ON cate.cateId = cou.cateId "." WHERE title LIKE ? OR nameCate LIKE ?";
    return pdo_query($sql, '%'.$keywords.'%', '%'.$keywords.'%');
}

// Top 10 khóa học bán chạy nhất
function course_select_top10_best_seller(){
    $sql = "SELECT * FROM courses WHERE purchase > 0 ORDER BY purchase DESC LIMIT 0, 10";
    return pdo_query($sql);
}
// Truy vấn 2 khóa học theo loại
function five_course_select_idcate($cateId){
    $sql = "SELECT * FROM courses WHERE cateId=? limit 5";
    return pdo_query($sql, $cateId);
}
// đếm số khóa học theo userId
function course_count_userId($userId){
    $sql = "SELECT count(userId) FROM courses WHERE userId=?";
    return pdo_query_value($sql, $userId);
}
// Truy vấn tất cả trình độ
function level_course_select_all(){
    $sql = "SELECT DISTINCT level FROM courses;";
    return pdo_query($sql);
}
// Truy vấn tất cả mã loại khóa học
function idcate_course_select_all(){
    $sql = "SELECT DISTINCT cateId FROM courses;";
    return pdo_query($sql);
}
// Truy vấn tất cả giang vien ton tai
function iduser_course_select_all(){
    $sql = "SELECT DISTINCT userId FROM courses;";
    return pdo_query($sql);
}

?>