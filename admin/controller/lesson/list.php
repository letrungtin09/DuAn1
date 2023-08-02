<?php
    require_once 'model/lesson.php';
    $chapterId = $_GET['chapterId'];
    $listLesson = lesson_select_idchapter($chapterId);
    @include_once("view/Lesson/list.php");
?>