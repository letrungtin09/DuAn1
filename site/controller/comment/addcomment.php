<?php
require_once 'model/comment.php';
if(exist_param("cmt-btn")){
    comment_insert($_SESSION['user']['userId'], $_GET['post'], $_POST['content']);
}
?>
<meta http-equiv="refresh" content="0;url=<?=$SITE_URL?>/?mod=news&act=newpost&post=<?=$_GET['post']?>";
