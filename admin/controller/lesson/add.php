<?php
require_once 'model/chapter.php';
require_once 'model/lesson.php';

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST);

if (exist_param("btn_insert")) {
    if ($title == "" || $timeLesson == "" || ($video == "" && $document == "")) {
        $MESSAGE = "Thêm mới thất bại. Vui lòng nhập đầy đủ thông tin bài học !";
        $newNumberOrder = lesson_numberOrder_new($_GET['chapterId']);
        $nameChapter = chapter_select_by_id($_GET['chapterId']);
        include_once("view/Lesson/add.php");
    } else {
        lesson_insert($chapterId , $numberOrderLesson, $title, $video, $document, $timeLesson);
        unset($title, $video, $document, $timeLesson);
        $MESSAGE = "Thêm bài học mới thành công!";
        $newNumberOrder = lesson_numberOrder_new($_GET['chapterId']);
        $nameChapter = chapter_select_by_id($_GET['chapterId']);
        include_once("view/Lesson/add.php");
    }
}
else{
    $newNumberOrder = lesson_numberOrder_new($_GET['chapterId']);
    $nameChapter = chapter_select_by_id($_GET['chapterId']);
    include_once("view/Lesson/add.php");
}

?>