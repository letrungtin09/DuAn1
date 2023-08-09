<?php
    require_once 'model/news.php';
    require_once 'model/comment.php';
    $postdetail = news_select_by_id($_GET['post']);
    // Đếm số comment
    $countcomment = comment_count_newsId($_GET['post']);
    // tìm bình luận 
    $allcomment = comment_select_by_newsid($_GET['post']);
    // tìm bài viết cùg tác giả
    $newsSameAuthor = news_select_three_by_userId($postdetail['userId']);
    include_once("view/news/postnew.php");
?>