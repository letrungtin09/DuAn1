<?php
require_once 'pdo.php';

function statistic_courses()
{
    $sql = "SELECT cate.cateId,cate.nameCate,"
        . " COUNT(*) quantity,"
        . " MIN(cour.price) price_min,"
        . " MAX(cour.price) price_max,"
        . " SUM(cour.purchase) price_sum,"
        . " AVG(cour.price) price_avg,"
        . " cour.purchase * cour.price sum_collect," // tiền thu vê
        . " (cour.purchase * cour.price) * 0.7 discount" // chiếc khấu cho giảng viên
        . " FROM courses cour "
        . " JOIN category cate ON cate.cateId=cour.cateId "
        . " GROUP BY cate.cateId";
    return pdo_query($sql);
}
// Tính tiền thu về, chiếc khấu, doanh thu theo $cateId
function statistic_all_buy_courses($cateId)
{
    $sql = "SELECT SUM(purchase * price) as sum_buy,
                 (SUM(purchase * price)*0.7) as discount,
                 (SUM(purchase * price) - (SUM(purchase * price)*0.7)) as revenue
                  FROM courses WHERE cateId=?";
    return pdo_query($sql, $cateId);
}
// Thống kê tất cả dữ liệu
function statistic_all_courses()
{
    $sql = "SELECT count(courseId) as sum_kh,
                sum(purchase) as sum_lm,
                sum(purchase * price) as sum_sum_buy,
                (sum(purchase * price) * 0.7) as sum_discount,
                (SUM(purchase * price) - (SUM(purchase * price)*0.7)) as sum_revenue
                FROM courses";
    return pdo_query($sql);
}
// Truy vấn tất cả giảng viên
function statistic_select_all_teaching(){
    $sql = "SELECT * FROM user WHERE role = 'teacher'";
    return pdo_query($sql);
}
// Đếm khóa học theo UserId
function statistic_course_count_userId($userId){
    $sql = "SELECT count(*) as sl_kh FROM courses WHERE userId=?";
    return pdo_query_value($sql, $userId);
}
?>