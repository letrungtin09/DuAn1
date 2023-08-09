<?php
require_once 'pdo.php';
// đếm comment theo newsid
function comment_count_newsId($newsId){
    $sql = "SELECT count(newsId) FROM comment WHERE newsId=?";
    return pdo_query_value($sql, $newsId);
}
// truy vấn comment theo newsid
function comment_select_by_newsid($newsId){
    $sql = "SELECT * FROM comment WHERE newsId = ?";
    return pdo_query($sql, $newsId);
}
// Thêm comment
function comment_insert($userId, $newsId, $content){
    $sql = "INSERT INTO comment(userId, newsId, content) VALUES(?,?,?)";
    pdo_execute($sql, $userId, $newsId, $content);
}

