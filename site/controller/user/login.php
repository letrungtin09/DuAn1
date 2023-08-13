<?php
    require_once "./../global.php";
    require_once 'model/user.php';
    extract($_REQUEST);
    if(exist_param("btn_login")){
        $user = user_select_by_email($email);
        if($email == "" || $password== ""){
            $MESSAGE = "Bạn chưa nhập tài khoản hoặc mật khẩu";
            include_once("view/User/login.php");
        }else{
            if($user){
                if($user['password'] == $password){
                    $_SESSION["user"] = $user;
                    if($user['role']=="admin"){
                        echo '<meta http-equiv="refresh" content="0;url=/DuAn1/admin/index.php">';
                    } else {
                        echo '<meta http-equiv="refresh" content="0;url=index.php">';
                    }                 
                }
                else{
                    $MESSAGE = "Sai mật khẩu!";
                    include_once("view/User/login.php");
                }
            }
            else{
                $MESSAGE = "Sai mã đăng nhập!";
                include_once("view/User/login.php");
            }
        }
    }
    else{
        include_once("view/User/login.php");
    }
?>