<?php
require_once "./../global.php";
require_once 'model/news.php';
require_once 'model/user.php';

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST);

if (exist_param("btn_insert")) {
    if ($title == "" || $userId == 0 || $description == "" || $content == "") {
        //Lấy tất cả user
        $getAllUser = user_select_all();
        $MESSAGE = "Thêm mới thất bại. Vui lòng điền đầy đủ thông tin bài viết !";
        include_once("view/News/add.php");
    } else {
        news_insert($userId, $title, $description, $image, $date, $content);
        unset($userId, $title, $description, $image, $date, $content);
        //Lấy tất cả user 
        $getAllUser = user_select_all();
        $MESSAGE = "Thêm mới bài viết thành công !";
        include_once("view/News/add.php");
    }
    include_once("view/News/add.php");
} else {
    //Lấy tất cả user
    $getAllUser = user_select_all();
    include_once("view/News/add.php");
}

?>