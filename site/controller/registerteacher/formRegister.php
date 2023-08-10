<?php
require_once "./../global.php";
require_once 'model/user.php';

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST);

if (exist_param("btn_update")) {
    if ($career == "" || $information == "") {
        $MESSAGE = "Đăng ký thất bại. Vui lòng điền đầy đủ thông tin cá nhân và nghề nghiệp cho giảng viên !";
        $getUser = user_select_by_id($userId);
        extract($getUser);
        include_once("view/Registerteacher/formRegister.php");
    } else {
        user_update($userId, $email, $fullName, $phoneNumber, $password, $information, $career, $avatar, $role);
        $MESSAGE = "Đăng ký thành công !";
        $getUser = user_select_by_id($userId);
        extract($getUser);
        include_once("view/Registerteacher/formRegister.php");
    }
    include_once("view/Registerteacher/formRegister.php");
} else {
    $getUser = user_select_by_id($userId);
    extract($getUser);
    include_once("view/Registerteacher/formRegister.php");
}

?>