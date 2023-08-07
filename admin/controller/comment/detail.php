<?php
require_once 'model/comment.php';
require_once 'model/user.php';
require_once 'model/news.php';

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST);

if (exist_param("btn_delete")) {
    comment_delete($idComment);
    $list_comment = comment_select_all();
    include_once("view/Comment/list.php");
}
else{
    $getComment = comment_select_by_id($idComment);
    extract($getComment);
    $getUser = user_select_by_id($userId);
    $getNews = news_select_by_id($newsId);
    include_once("view/Comment/detail.php");
}
?>