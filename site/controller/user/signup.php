<?php
require_once "./../global.php";
require_once 'model/user.php';
extract($_REQUEST);

if(exist_param("btn_register")){
    if(user_exist($email)){
        $MESSAGE = "Email này đã được đăng ký!";
        include_once("view/User/signup.php");
    }
    elseif($nameuser == "" || $email == "" || $password ==""){
        $MESSAGE = "Bạn chưa nhập đầy đủ thông tin";
        include_once("view/User/signup.php");
    }
    else{
        try {
            user_insert($nameuser, $email, $password);
            $MESSAGE = "Đăng ký thành viên thành công mời đăng nhập!";
            include_once("view/User/login.php");
        } 
        catch (Exception $exc) {
            $MESSAGE = "Đăng ký thành viên thất bại!";
        }
    }
}
else{
    include_once("view/User/signup.php");
}
?>