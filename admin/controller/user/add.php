<?php
require_once "./../global.php";
require_once 'model/user.php';

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST);

if(exist_param("btn_insert")){
    if($fullName == "" || $email == "" || $phoneNumber == "" || $password == "" || $role == 0 || is_numeric($phoneNumber) == false){
        $MESSAGE = "Thêm mới thất bại. Vui lòng điền đầy đủ thông tin tài khoản !";
        @include_once ('view/User/add.php');
    }
    else if($role == "teacher"){
        if($career == "" || $information == ""){
            $MESSAGE = "Thêm mới thất bại. Vui lòng điền đầy đủ thông tin cá nhân và nghề nghiệp cho giảng viên !";
            @include_once ('view/User/add.php');
        }
    }
    else{
        user_insert_admin($email, $fullName, $phoneNumber, $password, $information, $career, $avatar, $role);
        unset($email, $fullName, $phoneNumber, $password, $information, $career, $avatar, $role);
        $MESSAGE = "Thêm mới tài khoản thành công !";
        @include_once ('view/User/add.php');
    }
    @include_once ('view/User/add.php');
}else{
    @include_once ('view/User/add.php');
}

?>