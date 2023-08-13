<?php
require_once "./../global.php";
require_once 'model/news.php';
require_once 'model/user.php';

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST);

if (exist_param("btn_update")) {

    $url = $_SERVER["DOCUMENT_ROOT"] . "$IMAGE_DIR/post/";
    $file_name = save_file("upload_imgPost", $url);
    $image = $file_name ? $file_name : $image;
    
    if($title == "" || $description == "" || $content == ""){
        $MESSAGE = "Cập nhật thất bại. Vui lòng điền đủ thông tin bài viết !";
        $list_news = news_select_by_id($_GET['newsId']);
        extract($list_news);
        include_once("view/Managenews/editNews.php");
    }
    else{
        news_update($newsId, $userId, $title, $description, $image, $date, $content, $status, $view);
        $MESSAGE = "Cập nhật bài viết thành công !";
        $list_news = news_select_by_id($_GET['newsId']);
        extract($list_news);
        include_once("view/Managenews/editNews.php");
    }

} else {
    $list_news = news_select_by_id($_GET['newsId']);
    extract($list_news);
    include_once("view/Managenews/editNews.php");
}
?>