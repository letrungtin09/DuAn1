<?php  
require_once 'model/evaluate.php';
require_once 'model/category.php';
require_once 'model/user.php';
// Truy vấn tất cả level
$allLevel = level_course_select_all();
// Lấy tất cả mã khóa học có tồn tại
$allIdcate = idcate_course_select_all();
// Truy van tenn loai
function nameKind($idcate){
    return category_select_by_id($idcate);
}
// Lấy tất cả giang vien tồn tại
$allTeacher = iduser_course_select_all();
function nameTeacher($iduser){
    return user_select_by_id($iduser);
}
if(isset($_GET['search'])){
    if(isset($_GET['arrange'])){
        if($_GET['arrange'] == 1) {
            $resultKeyWord = course_select_keyword_arrange_by_purchar_increase($_GET['search']);
        }elseif($_GET['arrange'] == 2){
            $resultKeyWord = course_select_keyword_arrange_by_price_decrease($_GET['search']);
        }elseif($_GET['arrange'] == 3){
            $resultKeyWord = course_select_keyword_arrange_by_date_decrease($_GET['search']);
        }elseif($_GET['arrange'] == 0){
            $resultKeyWord = course_select_keyword($_GET['search']);
        }else{
            $resultKeyWord = course_select_keyword_arrange_by_alltime_decrease($_GET['search']);
        }
    }else{
        $resultKeyWord = course_select_keyword($_GET['search']);
    }
    $quantityCountSearch = count($resultKeyWord);
    include_once("view/search/searchWord.php");
}else{
    include_once("view/search/searchWord.php");
}
include_once("view/search/searchWord.php");