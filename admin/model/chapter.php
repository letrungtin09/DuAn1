<?php
require_once 'pdo.php';
//Thêm chương học mới
function chapter_insert($title, $numberOrder, $courseId){
    $sql = "INSERT INTO chapter_courses(title, numberOrder, courseId) VALUES(?,?,?)";
    pdo_execute($sql, $title, $numberOrder, $courseId);
}

//Cập nhật chương học
function chapter_update($chapterId, $title, $numberOrder, $courseId){
    $sql = "UPDATE chapter_courses SET title=?, numberOrder=?, courseId=? WHERE chapterId=?";
    pdo_execute($sql, $title, $numberOrder, $courseId, $chapterId);
}

// Xóa một hoặc nhiều chương học
function chapter_delete($chapterId){
    $sql = "DELETE FROM chapter_courses WHERE chapterId=?";
    if(is_array($chapterId)){
        foreach ($chapterId as $chap) pdo_execute($sql, $chap); 
    } else pdo_execute($sql, $chapterId);
}
//Truy vấn tất cả chương
function chapter_select_all() {
    $sql = "SELECT * FROM chapter_courses";
    return pdo_query($sql);
}
// đếm số chương theo khóa học
function chapter_count_course($courseId){
    $sql = "SELECT count(courseId) FROM chapter_courses WHERE courseId=?";
    return pdo_query_value($sql, $courseId);
}
// Truy vấn chapter theo course
function chapter_select_idcourse($courseId){
    $sql = "SELECT * FROM chapter_courses WHERE courseId=?";
    return pdo_query($sql, $courseId);
}
// Truy vấn số thứ tự chapter theo course
function chapter_select_idcourse_order($courseId){
    $sql = "SELECT * FROM chapter_courses WHERE courseId=? ORDER BY numberOrder ASC";
    return pdo_query($sql, $courseId);
}
// Truy vấn chapter theo id
function chapter_select_by_id($chapterId){
    $sql = "SELECT * FROM chapter_courses WHERE chapterId=?";
    return pdo_query_one($sql, $chapterId);
}
// Truy vấn số thứ tự chương mới nhất của 1 khóa học
function chapter_numberOrder_new($courseId){
    $sql = "SELECT MAX(numberOrder) as maxNumberOrder FROM chapter_courses WHERE courseId=?";
    return pdo_query_value($sql, $courseId);
}
?>
