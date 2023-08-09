<?php
require_once 'model/category.php';
require_once 'model/courses.php';
require_once 'model/pdo.php';
$cateId = $_GET['cate'];
// tìm thông tin loại khóa học
$catecourse = category_select_by_id($cateId);
// tìm các loại khóa học sắp xếp theo ngày mới nhất
$allcourseBycateArrangeDate = course_select_idcate_arrange_date($cateId);
// tìm các loại khóa học sắp xếp theo lượt mua
$allcourseBycateArrangePurchase = course_select_idcate_arrange_purchase($cateId);
 // Hàm tính số sale
 function math_sale($price, $sale){
    $result = $price - ($price * ($sale/100));
    return $result;
}
// Tính số sao
function EluavateRate($eluavateCourse){
    require_once 'model/evaluate.php';
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
// Đếm số đánh giá
function eluavate_count($courseId){
    require_once 'model/evaluate.php';
    $elua = evaluate_count_courseid($courseId);
    return $elua;
}
// Tìm các khóa học có loại 
 $course_by_cate = course_select_idcate($cateId);
//  tìm total record
$total_records = count($course_by_cate);
// BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 6;
// BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
// tổng số trang
$total_page = ceil($total_records / $limit);
// Giới hạn current_page trong khoảng 1 đến total_page
if ($current_page > $total_page){
    $current_page = $total_page;
}
else if ($current_page < 1){
    $current_page = 1;
}
// Tìm Start
$start = ($current_page - 1) * $limit;
// BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
// Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
$sql = "SELECT * FROM courses WHERE cateId=$cateId LIMIT $start, $limit";
$limitCourde = pdo_query($sql);
//  tính chapter
 function chapterSearch($courseId){
    require_once 'model/chapter.php';
    require_once 'model/detailChapter.php';
    $chaptersearch = chapter_select_idcourse($courseId);
    $countAllDetailsearch = 0;
    foreach($chaptersearch as $chap){
        $countSession = detailChapter_count_chapterId($chap['chapterId']);
        $countAllDetailsearch += $countSession;
    }
    return $countAllDetailsearch;
}
include_once("view/typecourse/coursetype.php");
?>