
<?php
	session_start();
	date_default_timezone_set("Asia/Ho_Chi_Minh");
	require "../global.php";
	include_once 'view/Template/header.php';

	if(isset($_GET['mod'])){
		$inclFile = "";
		if(isset($_GET['act'])){
			$inclFile = "controller/".$_GET['mod']."/".$_GET['act'].".php";
		}
		else{
			$inclFile = "controller/".$_GET['mod']."/view.php";
		}
		
		if(!file_exists($inclFile)){
			include_once("404.php");
		}else{
			include_once($inclFile);
		}
	}elseif(isset($_GET['searchInput'])){?>
		<meta http-equiv="refresh" content="0;url=<?=$ROOT_URL?>?mod=search&act=showSearch&search=<?=$_GET['searchInput']?>">;
	<?php
	}
    else{
		include_once("controller/home/view.php");
	}
	
	include_once 'view/Template/footer.php';
?>
		