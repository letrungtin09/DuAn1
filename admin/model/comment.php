<?php
require_once 'pdo.php';

//Thêm bình luận mới
function comment_insert($userId, $newsId, $content, $date){
    $sql = "INSERT INTO comment(userId, newsId, content, date) VALUES(?,?,?,?)";
    pdo_execute($sql, $userId, $newsId, $content, $date);
}

//Cập nhật bình luận
function comment_update($idComment, $userId, $newsId, $content, $date){
    $sql = "UPDATE comment SET userId=?, newsId=?, content=?, date=? WHERE idComment=?";
    pdo_execute($sql, $userId, $newsId, $content, $date, $idComment);
}
// Xóa một hoặc nhiều bình luận
function comment_delete($idComment){
    $sql = "DELETE FROM comment WHERE idComment=?";
    if(is_array($idComment)){
        foreach ($idComment as $cmt) pdo_execute($sql, $cmt); 
    } else pdo_execute($sql, $idComment);
}
// Truy vấn tất cả comment
function comment_select_all()
{
    $sql = "SELECT * FROM comment";
    return pdo_query($sql);
}
// Truy vấn bình luận theo id
function comment_select_by_id($idComment){
    $sql = "SELECT * FROM comment WHERE idComment = ?";
    return pdo_query_one($sql, $idComment);
}

?>