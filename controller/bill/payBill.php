<?php
// Chuyển đổi thành mua hàng trong bảng bill
bill_update_status_bill($_GET['paybill']);

?>
<meta http-equiv="refresh" content="0;url=<?=$base_url?>">