<?php
require_once 'model/chapter.php';
$idCourse = $_GET['courseId'];
$listChapter = chapter_select_idcourse($idCourse);

include_once("view/Chapter/list.php");
?>