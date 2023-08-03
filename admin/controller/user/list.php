<?php
require_once 'model/user.php';

extract($_REQUEST);
if (exist_param("btn_edit")) {
    include_once("view/User/edit.php");
} else if (exist_param("btn_delete")) {
    user_delete($userId);
    $list_user = user_select_all();
    $MESSAGE = "Xóa thành công !";
    include_once("view/User/list.php");
} else {
    $list_user = user_select_all();
    @include_once("view/User/list.php");
}

?>