<?php 
    require_once 'model/user.php';
    $list_user = user_select_all();
    @include_once ('view/User/list.php');
?>