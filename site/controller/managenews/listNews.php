<?php
require_once 'model/news.php';

extract($_REQUEST);
if (exist_param("btn_delete")) {
    news_delete($newsId);
    $MESSAGE = "Xóa thành công !";
    $getNews = news_select_by_userId($_GET['userId']);
    include_once('view/Managenews/listNews.php');
} else {
    $getNews = news_select_by_userId($_GET['userId']);
    include_once('view/Managenews/listNews.php');
}

?>