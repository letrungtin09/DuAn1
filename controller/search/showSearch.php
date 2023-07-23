<?php  
if(isset($_GET['search'])){
    $resultKeyWord = course_select_keyword($_GET['search']);
    $quantityCountSearch = count($resultKeyWord);
    include_once("view/search/searchWord.php");
}else{
    include_once("view/search/searchWord.php");

}
?>