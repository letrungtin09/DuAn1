<?php
require_once 'pdo.php';

function statistic_courses(){
    $sql = "SELECT cate.nameCate,"
            . " COUNT(*) quantity,"
            . " MIN(cour.price) price_min,"
            . " MAX(cour.price) price_max,"
            . " AVG(cour.price) price_avg"
            . " FROM courses cour "
            . " JOIN category cate ON cate.cateId=cour.cateId "
            . " GROUP BY cate.cateId";
    return pdo_query($sql);
}
?>