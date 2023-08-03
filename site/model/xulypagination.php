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
	$output = '';
     // Lặp khoảng giữa
     for ($i = 1; $i <= $total_page; $i++){
        if($i == $current_page){
            $output .= '
                <li class="page-item" onclick="myFunction(this)" value="'.$i.'">
                    <a class="page-link click-page" href="#">'.$i.'</a>
                </li>';
        }else{
            $output .= '
            <li class="page-item" onclick="myFunction(this)" value="'.$i.'">
                <a class="page-link" href="#">'.$i.'</a>
            </li>';
        }
    }
    
    echo $output;
}
?>