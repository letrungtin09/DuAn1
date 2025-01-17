<?php
require_once 'pdo.php';

//Thêm bài viết mới
function news_insert($userId, $title, $description, $image, $date, $content){
    $sql = "INSERT INTO news(userId, title, description, image, date, content) VALUES(?,?,?,?,?,?)";
    pdo_execute($sql, $userId, $title, $description, $image, $date, $content);
}

//Cập nhật bài viết
function news_update($newsId, $userId, $title, $description, $image, $date, $content, $status){
    $sql = "UPDATE news SET userId=?, title=?, description=?, image=?, date=?, content=?, status=? WHERE newsId=?";
    pdo_execute($sql, $userId, $title, $description, $image, $date, $content, $status, $newsId);
}
//Kiểm duyệt bài viết admin
function news_updata_admin($newsId, $status){
    $sql = "UPDATE news SET status=? WHERE newsId=?";
    pdo_execute($sql, $status, $newsId);
}
// Xóa một hoặc nhiều bài viết
function news_delete($newsId){
    $sql = "DELETE FROM news WHERE newsId=?";
    if(is_array($newsId)){
        foreach ($newsId as $news) pdo_execute($sql, $news); 
    } else pdo_execute($sql, $newsId);
}
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