<?php
    require_once "./../global.php";
    require_once 'model/user.php';

if(exist_param("btn_change")){
    if($_POST['email'] == "" ||  $_POST['passnow'] == "" || $_POST['passnew1'] == "" || $_POST['passnew2'] == ""){
        $MESSAGE = "Bạn chưa nhập đầy đủ thông tin!";
    }else{
        if($_POST['passnew1'] != $_POST['passnew2']){
            $MESSAGE = "Xác nhận mật khẩu mới không đúng!";
        }
        else{
            $userId = user_select_by_email($_POST['email']);
            if($userId){
                if($userId['password'] == $_POST['passnow']){
                    try {
                        user_change_password($userId['userId'], $_POST['passnew1']);
                        $MESSAGE = "Đổi mật khẩu thành công!";
                    } 
                    catch (Exception $exc) {
                        $MESSAGE = "Đổi mật khẩu thất bại !";
                    }
                }
                else{
                    $MESSAGE = "Sai mật khẩu!";
                }
            }else{
                $MESSAGE = "Sai mã đăng nhập!";
            }        
        }
    }
}
include_once("view/User/changepassword.php");
?>