<?php 
    require_once 'model/news.php';
    require_once 'model/user.php';
    $list_news = news_select_all();
    @include_once('view/News/list.php');
?>