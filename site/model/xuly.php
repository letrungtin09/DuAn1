<?php
require_once 'evaluate.php';
require "../../global.php";
require_once 'chapter.php';
require_once 'detailChapter.php';
require_once 'user.php';

function EluavateRate($eluavateCourse){
    $sum = 0;
    $count = 0;
    if(evaluate_exist($eluavateCourse)){
        $coursesElua = evaluate_select_courseId($eluavateCourse);
        foreach($coursesElua as $course){
            $sum += $course['evaluateRate'];
            $count++;
        }
        $everage = $sum / $count;
        return $everage;
    }else{
        return 0;
    }
}
function chapterSearch($courseId){
    $chaptersearch = chapter_select_idcourse($courseId);
    $countAllDetailsearch = 0;
    foreach($chaptersearch as $chap){
        $countSession = detailChapter_count_chapterId($chap['chapterId']);
        $countAllDetailsearch += $countSession;
    }
    return $countAllDetailsearch;
}
$connect = new PDO("mysql:host=localhost;dbname=tdemy;charset=utf8", "root", "");

if(isset($_POST["action"])){
    $keyWord = $_POST["wordsearch"];
    $query = "
		SELECT * FROM courses WHERE title LIKE '%".$keyWord."%'
	";
    if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])){
		$query .= "
		 AND price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}
    if(isset($_POST["type"])){
        $type_filter = implode("','", $_POST["type"]);
		$query .= "
		 AND cateId IN('".$type_filter."')
		";
    }
    if(isset($_POST["level"])){
        $level_filter = implode("','", $_POST["level"]);
		$query .= "
		 AND level IN('".$level_filter."')
		";
    }
    if(isset($_POST["teacher"])){
        $teacher_filter = implode("','", $_POST["teacher"]);
		$query .= "
		 AND userId IN('".$teacher_filter."')
		";
    }
    if(isset($_POST["arrange"])){
        if($_POST["arrange"] == 1){
            $query .= 'ORDER BY purchase DESC';   
        }elseif($_POST["arrange"] == 2) {
            $query .= 'ORDER BY price ASC';
        }elseif($_POST["arrange"] == 3){
            $query .= 'ORDER BY date DESC';
        }elseif($_POST["arrange"] == 4){
            $query .= 'ORDER BY allTime DESC';
        }else{
            $query .= '';
        }
    }
    $statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
    // TỔNG SỐ RECORDS
	$total_row = $statement->rowCount();
    // TÌM LIMIT VÀ CURRENT_PAGE
    $current_page = isset($_POST['pages']) ? $_POST['pages'] : 1;
    $limit = 6;
    // TÍNH TOÁN TOTAL_PAGE VÀ START
    // tổng số trang
    $total_page = ceil($total_row / $limit);
    // Giới hạn current_page trong khoảng 1 đến total_page
    if ($current_page > $total_page){
        $current_page = $total_page;
    }
    else if ($current_page < 1){
        $current_page = 1;
    }
    // Tìm Start
    $start = ($current_page - 1) * $limit;
    $query .= " LIMIT $start, $limit";
    try {
    $sta = $connect->prepare($query);
	$sta->execute();
	$re = $sta->fetchAll();

    } catch(PDOException $e) {
    echo "Error: ";
    }
    $totald = $sta->rowCount();
	$output = '';
    if($totald > 0){
        foreach($re as $row){
            $nameUserSearch = user_select_by_id($row['userId']);
            $output .= '
            <div class="searchCourse_content-product-div card">
                <a href="'.$SITE_URL.'?mod=detailcourse&act=showCourse&course='.$row['courseId'].'" class="searchCourse_content-product-cart card-body">
                    <img src="'.$IMAGE_DIR.'/courses/'.$row["image"].'" alt="" class="">
                    <div class="searchCourse_content-product-cart-infor">
                        <h3 class="">'.$row['title'].'</h3>
                        <p class="">'.$row['description'].'</p>
                        <div class="searchCourse_content-product-cart-infor-nameuser">'.$nameUserSearch['fullName'].'</div>
                        <div class="searchCourse_content-product-cart-infor-rate">
                            <span class="searchCourse_content-product-cart-infor-point">'.EluavateRate($row['courseId']).'</span>
                            <div class="classification">
                                <div class="cover">
                                    <img src="'.$IMAGE_DIR.'/courses/eluavation/cEQfe.png" alt="" class="">
                                </div>
                                <div class="progress" style="width: '.EluavateRate($row['courseId'])*20 .'%;">
                                    <img src="'.$IMAGE_DIR.'/courses/eluavation/â.png" alt="" class="">
                                </div>
                            </div>
                            <span class="searchCourse_content-product-cart-infor-quantity">(42)</span>
                        </div>
                        <div class="searchCourse_content-product-cart-infor-lever">
                            <ul class="">
                                <span>Tổng số giờ '.$row['allTime'].'</span>
                                <li class="">'.chapterSearch($row['courseId']).' bài giảng</li>
                                <li class="">'.$row['level'].'</li>
                            </ul>
                        </div>
                    </div>
                    <span class="searchCourse_content-product-cart-infor-price">
                        &#8363;
                        <span class="searchCourse_content-product-cart-infor-d">'.number_format($row['price']).'</span>
                    </span>
                </a>
                <div class="card-popover" style=z-index:200>
                    <a href="#">
                        <h3>Những kiến thức bạn sẽ học</h3>
                    </a>
                    <p>'.$row['description'].'</p>
                    <div class="card-btn row">
                        <a href="'.$SITE_URL.'?mod=bill&act=addBill&course='.$row['courseId'].'" class="add-cart col-9">Thêm vào giỏ hàng</a>
                        <button class="add-like col-2">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
			';
        }
    }else{
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}
?>