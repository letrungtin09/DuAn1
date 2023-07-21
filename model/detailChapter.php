<?php
require_once 'pdo.php';
// Lấy detailchapter theo Idchapter
function detailChapter_select_by_idchapter($chapterId){
    $sql = "SELECT * FROM detail_chapter WHERE chapterId = ?";
    return pdo_query($sql, $chapterId);
}
?>
