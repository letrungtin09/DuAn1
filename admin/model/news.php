<?php
require_once 'pdo.php';

// Truy vấn tất cả bài viết
function news_select_all(){
    $sql = "SELECT * FROM news";
    return pdo_query($sql);
}
// Truy vấn 8 bài viết lên trang chủ
function news_select_pageHome(){
    $sql = "SELECT * FROM news LIMIT 0, 8";
    return pdo_query($sql);
}

// Truy vấn bài viết theo userId
function news_select_by_userId($userId){
    $sql = "SELECT * FROM news WHERE userId = ?";
    return pdo_query_one($sql, $userId);
}

// Truy vấn bài viết theo newsId
function news_select_by_id($newsId){
    $sql = "SELECT * FROM news WHERE newsId = ?";
    return pdo_query_one($sql, $newsId);
}

?>