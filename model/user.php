<?php
require_once 'pdo.php';
    //Model user

    //Truy vấn một Tài khoản theo email
    function user_select_by_email($email){
        $sql = "SELECT * FROM user WHERE email=?";
        return pdo_query_one($sql, $email);
    }
    //Kiểm tra sự tồn tại của một khách hang3
    function user_exist($email){
        $sql = "SELECT count(*) FROM user WHERE email=?";
        return pdo_query_value($sql, $email) > 0;
    }
    // Thêm tài khoản
    function user_insert($fullname, $email, $password){
        $sql = "INSERT INTO user(fullName, email, password) VALUES (?, ?, ?)";
        pdo_execute($sql, $fullname, $email, $password);
    }

?>