
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
		<meta http-equiv="refresh" content="0;url=<?=$SITE_URL?>?mod=search&act=showSearch&search=<?=$_GET['searchInput']?>">;
	<?php
	}elseif(isset($_GET['checkVNPay'])){?>
		<meta http-equiv="refresh" content="0;url=<?=$SITE_URL?>?mod=bill&act=payVNpay&payBill=<?=$_GET['payBill']?>&total=<?=$_GET['total']?>">;
	<?php
	}elseif(isset($_GET['vnp_ResponseCode']) && $_GET['vnp_ResponseCode'] == 00){?>
		<meta http-equiv="refresh" content="0;url=<?=$SITE_URL?>?mod=bill&act=payBill&total=<?=$_GET['vnp_Amount']?>&typepay=<?=$_GET['vnp_CardType']?>">;
	<?php
	}else{
		include_once("controller/home/view.php");
	}
	
	include_once 'view/Template/footer.php';
?>
		