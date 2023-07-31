<?php
require_once 'model/detailBill.php';
detail_bill_delete($_GET['del']);
include_once("view/Bill/cart.php");
?>