<?php
require_once 'model/detailChapter.php';
require_once 'model/chapter.php';

extract($_REQUEST);
if (exist_param("btn_delete")) {
    detailChapter_delete($detailChapterId);
    $MESSAGE = "Xóa thành công !";
    $listLesson = detailChapter_select_idchapter_order($_GET['chapterId']);
    include_once("view/Managelesson/listLesson.php");
} else {
    $listLesson = detailChapter_select_idchapter_order($_GET['chapterId']);
    include_once("view/Managelesson/listLesson.php");
}

?>