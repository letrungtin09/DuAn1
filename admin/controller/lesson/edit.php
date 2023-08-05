<?php
require_once "./../global.php";
require_once 'model/chapter.php';
require_once 'model/lesson.php';

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST);

if (exist_param("btn_update")) {
    if ($title == "" || $timeLesson == "" || ($video == "" && $document == "")) {
        $MESSAGE = "Cập nhật thất bại. Vui lòng nhập đầy đủ thông tin bài học !";
        $newNumberOrder = lesson_numberOrder_new($_GET['chapterId']);
        $nameChapter = chapter_select_by_id($_GET['chapterId']);
        include_once("view/Lesson/edit.php");
    } else {
        lesson_update($detailChapterId, $chapterId , $numberOrderLesson, $title, $video, $document, $timeLesson);
        $MESSAGE = "Cập nhật thành công!";
        $newNumberOrder = lesson_numberOrder_new($_GET['chapterId']);
        $nameChapter = chapter_select_by_id($_GET['chapterId']);
        include_once("view/Lesson/edit.php");
    }
}
else{
    $newNumberOrder = lesson_numberOrder_new($_GET['chapterId']);
    $nameChapter = chapter_select_by_id($_GET['chapterId']);
    include_once("view/Lesson/edit.php");
}

?>