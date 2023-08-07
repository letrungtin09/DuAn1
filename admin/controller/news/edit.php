<?php
require_once "./../global.php";
require_once 'model/news.php';
require_once 'model/user.php';

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST);

if (exist_param("btn_update")) {
    news_updata_admin($newsId, $status);
    $MESSAGE = "Cập nhật trạng thái thành công !";
    $list_news = news_select_by_id($newsId);
    extract($list_news);
    include_once("view/News/edit.php");

} else {
    $list_news = news_select_by_id($newsId);
    extract($list_news);
    include_once("view/News/edit.php");
}
?>