<?php
require_once "./../global.php";
require_once 'model/user.php';

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST);

if(exist_param("btn_update")){

    $file_name = save_file("upload_avatar","$IMAGE_DIR/user/");
    $avatar = $file_name ? $file_name : $avatar;

    if($fullName == "" || $email == "" || $phoneNumber == "" || $password == "" || $role == 0 || is_numeric($phoneNumber) == false){
        $MESSAGE = "Cập nhật thất bại. Vui lòng điền đầy đủ thông tin tài khoản !";
        @include_once ('view/User/edit.php');
    }
    else if($role == "teacher"){
        if($career == "" || $information == ""){
            $MESSAGE = "Cập nhật thất bại. Vui lòng điền đầy đủ thông tin cá nhân và nghề nghiệp cho giảng viên !";
            @include_once ('view/User/edit.php');
        }
    }
    else{
        user_update($userId, $email, $fullName, $phoneNumber, $password, $information, $career, $avatar, $role);
        $MESSAGE = "Cập nhật tài khoản thành công !";
        @include_once ('view/User/edit.php');
    }
    @include_once ('view/User/edit.php');
}else{
    $getUser = user_select_by_id($userId);
    extract($getUser);
    @include_once ('view/User/edit.php');
}

?>