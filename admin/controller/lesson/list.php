<?php
require_once 'model/lesson.php';
require_once 'model/chapter.php';

extract($_REQUEST);
if (exist_param("btn_delete")) {
    lesson_delete($detailChapterId);
    $MESSAGE = "Xóa thành công !";
    $listLesson = lesson_select_idchapter_order($_GET['chapterId']);
    include_once("view/Lesson/list.php");
} else {
    $listLesson = lesson_select_idchapter_order($_GET['chapterId']);
    include_once("view/Lesson/list.php");
}

?>