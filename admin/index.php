
<?php
	session_start();
	date_default_timezone_set("Asia/Ho_Chi_Minh");
	$base_url = "http://localhost/duan1/";
	include_once 'view/Admin/Template/sidebar.php';
    include_once 'view/Admin/Template/header.php';

	if(isset($_GET['mod'])){
		$inclFile = "";
		if(isset($_GET['act'])){
			$inclFile = "controller/admin/".$_GET['mod']."/".$_GET['act'].".php";
		}
		else{
			$inclFile = "controller/admin/".$_GET['mod']."/view.php";
		}
		
		if(!file_exists($inclFile)){
			include_once("404.php");
		}else{
			include_once($inclFile);
		}
	}
    else{
		include_once("controller/user/login.php");
	}
	
	include_once 'view/Admin/Template/footer.php';
?>
		