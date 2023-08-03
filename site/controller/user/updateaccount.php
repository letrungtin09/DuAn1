<?php
    require_once "./../global.php";
    require_once 'model/user.php';
    $userAcc = user_select_by_id($_SESSION['user']['userId']);
    if(exist_param("btn_update_account")){
        if($_POST['image'] == ''){
            $_POST['image'] = $userAcc['avatar'];
        }
        try {
            user_update_account($userAcc['userId'], $_POST['nameuser'], $_POST['phonenumber'], $_POST['career'], $_POST['image'], $_POST['infor']);
            $MESSAGE = "Cập nhật thông tin thành viên thành công!";
            $_SESSION['user'] = user_select_by_email($_POST['email']);
            $userAcc = user_select_by_id($_SESSION['user']['userId']);
        } 
        catch (Exception $exc) {
            $MESSAGE = "Cập nhật thông tin thành viên thất bại!";
            $userAcc = user_select_by_id($_SESSION['user']['userId']);
        }
    }
    include_once("view/User/accountupdate.php");
?>