<?php
require_once 'model/chapter.php';
require_once 'model/courses.php';
$idCourse = $_GET['courseId'];
$listChapter = chapter_select_idcourse($idCourse);

include_once("view/Chapter/list.php");
?>