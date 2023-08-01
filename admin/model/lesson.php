<?php
require_once 'pdo.php';
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

?>