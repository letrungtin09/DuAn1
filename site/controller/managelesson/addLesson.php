<?php
require_once 'model/chapter.php';
require_once 'model/detailChapter.php';

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST);

if (exist_param("btn_insert")) {
    if ($title == "" || $timeLesson == "" || ($video == "" && $document == "")) {
        $MESSAGE = "Thêm mới thất bại. Vui lòng nhập đầy đủ thông tin bài học !";
        $newNumberOrder = detailChapter_numberOrder_new($_GET['chapterId']);
        $nameChapter = chapter_select_by_id($_GET['chapterId']);
        include_once("view/Managelesson/addLesson.php");
    } else {
        detailChapter_insert($chapterId , $numberOrderLesson, $title, $video, $document, $timeLesson);
        unset($title, $video, $document, $timeLesson);
        $MESSAGE = "Thêm bài học mới thành công!";
        $newNumberOrder = detailChapter_numberOrder_new($_GET['chapterId']);
        $nameChapter = chapter_select_by_id($_GET['chapterId']);
        include_once("view/Managelesson/addLesson.php");
    }
}
else{
    $newNumberOrder = detailChapter_numberOrder_new($_GET['chapterId']);
    $nameChapter = chapter_select_by_id($_GET['chapterId']);
    include_once("view/Managelesson/addLesson.php");
}

?>