<?php 
    require_once 'pdo.php';
    // Truy vấn tất cả comment
    function comment_select_all(){
        $sql = "SELECT * FROM comment";
        return pdo_query($sql);
    }
?>