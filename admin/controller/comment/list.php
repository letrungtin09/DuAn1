<?php 
    require_once 'model/comment.php';
    require_once 'model/user.php';
    require_once 'model/news.php';
    $list_comment = comment_select_all();
    @include_once("view/Comment/list.php");
?>