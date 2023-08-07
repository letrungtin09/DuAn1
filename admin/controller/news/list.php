<?php
require_once 'model/news.php';
require_once 'model/user.php';

extract($_REQUEST);
if (exist_param("btn_delete")) {
    news_delete($newsId);
    $MESSAGE = "Xóa thành công !";
    $list_news = news_select_all();
    @include_once('view/News/list.php');
} else {
    $list_news = news_select_all();
    @include_once('view/News/list.php');
}

?>