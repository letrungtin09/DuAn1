<?php
require_once 'pdo.php';

//Thêm bài học mới
function lesson_insert($chapterId , $numberOrderLesson, $title, $video, $document, $timeLesson){
    $sql = "INSERT INTO detail_chapter(chapterId , numberOrderLesson, title, video, document, timeLesson) VALUES(?,?,?,?,?,?)";
    pdo_execute($sql, $chapterId , $numberOrderLesson, $title, $video, $document, $timeLesson);
}

//Cập nhật bài học
function lesson_update($detailChapterId, $chapterId , $numberOrderLesson, $title, $video, $document, $timeLesson){
    $sql = "UPDATE detail_chapter SET chapterId=?, numberOrderLesson=?, title=?, video=?, document=?, timeLesson=? WHERE detailChapterId=?";
    pdo_execute($sql, $chapterId , $numberOrderLesson, $title, $video, $document, $timeLesson, $detailChapterId);
}

// Xóa một hoặc nhiều bài học
function lesson_delete($detailChapterId){
    $sql = "DELETE FROM detail_chapter WHERE detailChapterId=?";
    if(is_array($detailChapterId)){
        foreach ($detailChapterId as $lesson) pdo_execute($sql, $lesson); 
    } else pdo_execute($sql, $detailChapterId);
}

//Truy vấn tất cả bài học
function lesson_select_all() {
    $sql = "SELECT * FROM detail_chapter";
    return pdo_query($sql);
}

// Truy vấn bài học theo chapter
function lesson_select_idchapter($chapterId){
    $sql = "SELECT * FROM detail_chapter WHERE chapterId=?";
    return pdo_query($sql, $chapterId);
}

// Truy vấn số thứ tự lesson theo chapter
function lesson_select_idchapter_order($chapterId){
    $sql = "SELECT * FROM detail_chapter WHERE chapterId=? ORDER BY numberOrderLesson ASC";
    return pdo_query($sql, $chapterId);
}

// Truy vấn số thứ tự bài học mới nhất của 1 chương
function lesson_numberOrder_new($chapterId){
    $sql = "SELECT MAX(numberOrderLesson) as maxNumberOrder FROM detail_chapter WHERE chapterId=?";
    return pdo_query_value($sql, $chapterId);
}

// đếm số bài học theo chương
function lesson_count_chapter($chapterId){
    $sql = "SELECT count(detailChapterId) FROM detail_chapter WHERE chapterId=?";
    return pdo_query_value($sql, $chapterId);
}

?>