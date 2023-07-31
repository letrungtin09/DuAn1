<?php
require_once 'pdo.php';
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

// Truy vấn tất cả tài khoản
function user_select_all(){
    $sql = "SELECT * FROM user";
    return pdo_query($sql);
}

// Truy vấn một tài khoản theo userId
function user_select_by_id($userId){
    $sql = "SELECT * FROM user WHERE userId=?";
    return pdo_query_one($sql, $userId);
}

//Truy vấn một tài khoản theo email
function user_select_by_email($email){
    $sql = "SELECT * FROM user WHERE email=?";
    return pdo_query_one($sql, $email);
}

// Lấy danh sách tài khoản theo vai trò
function user_select_by_role($role){
    $sql = "SELECT * FROM user WHERE role=?";
    return pdo_query($sql, $role);
}

// Cập nhật mật khẩu của 1 tài khoản
function user_change_password($userId, $password_new){
    $sql = "UPDATE user SET password=? WHERE userId=?";
    pdo_execute($sql, $password_new, $userId);
}

?>