<?php
require_once 'pdo.php';

//Thêm bài học mới
function detailChapter_insert($chapterId , $numberOrderLesson, $title, $video, $document, $timeLesson){
    $sql = "INSERT INTO detail_chapter(chapterId , numberOrderLesson, title, video, document, timeLesson) VALUES(?,?,?,?,?,?)";
    pdo_execute($sql, $chapterId , $numberOrderLesson, $title, $video, $document, $timeLesson);
}

//Cập nhật bài học
function detailChapter_update($detailChapterId, $chapterId , $numberOrderLesson, $title, $video, $document, $timeLesson){
    $sql = "UPDATE detail_chapter SET chapterId=?, numberOrderLesson=?, title=?, video=?, document=?, timeLesson=? WHERE detailChapterId=?";
    pdo_execute($sql, $chapterId , $numberOrderLesson, $title, $video, $document, $timeLesson, $detailChapterId);
}

// Xóa một hoặc nhiều bài học
function detailChapter_delete($detailChapterId){
    $sql = "DELETE FROM detail_chapter WHERE detailChapterId=?";
    if(is_array($detailChapterId)){
        foreach ($detailChapterId as $lesson) pdo_execute($sql, $lesson); 
    } else pdo_execute($sql, $detailChapterId);
}
// Lấy bài học theo Idchapter
function detailChapter_select_by_idchapter($chapterId){
    $sql = "SELECT * FROM detail_chapter WHERE chapterId = ?";
    return pdo_query($sql, $chapterId);
}
// đếm số bài học theo chapterId
function detailChapter_count_chapterId($chapterId){
    $sql = "SELECT count(chapterId) FROM detail_chapter WHERE chapterId=?";
    return pdo_query_value($sql, $chapterId);
}
// Lấy bài học theo id
function detailChapter_select_by_idDetailChapter($detailChapterId){
    $sql = "SELECT * FROM detail_chapter WHERE detailChapterId = ?";
    return pdo_query_one($sql, $detailChapterId);
}
// Truy vấn số thứ tự lesson theo chapter
function detailChapter_select_idchapter_order($chapterId){
    $sql = "SELECT * FROM detail_chapter WHERE chapterId=? ORDER BY numberOrderLesson ASC";
    return pdo_query($sql, $chapterId);
}

// Truy vấn số thứ tự bài học mới nhất của 1 chương
function detailChapter_numberOrder_new($chapterId){
    $sql = "SELECT MAX(numberOrderLesson) as maxNumberOrder FROM detail_chapter WHERE chapterId=?";
    return pdo_query_value($sql, $chapterId);
}

// đếm số bài học theo chương
function detailChapter_count_chapter($chapterId){
    $sql = "SELECT count(detailChapterId) FROM detail_chapter WHERE chapterId=?";
    return pdo_query_value($sql, $chapterId);
}
?>
