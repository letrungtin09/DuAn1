<?php
require_once 'model/chapter.php';
require_once 'model/courses.php';

extract($_REQUEST);
if (exist_param("btn_delete")) {
    chapter_delete($chapterId);
    $MESSAGE = "Xóa thành công !";
    $listChapter = chapter_select_idcourse_order($_GET['courseId']);
    include_once("view/Chapter/list.php");
} else {
    $listChapter = chapter_select_idcourse_order($_GET['courseId']);
    include_once("view/Chapter/list.php");
}

?>