<?php
require_once 'model/category.php';

extract($_REQUEST);
if(exist_param("btn_edit")){
    include_once("view/Category/edit.php");
}else if(exist_param("btn_delete")){
    category_delete($cateId);
    include_once("view/Category/list.php");
}
else{
    $listCate = category_select_all();
    include_once("view/Category/list.php");
}
?>