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
// Truy vấn tất cả user not giảng viên
function statistic_select_all_user()
{
    $sql = "SELECT * FROM user WHERE role = 'student'";
    return pdo_query($sql);
}
// Truy vấn tất cả giảng viên
function statistic_select_all_teaching()
{
    $sql = "SELECT * FROM user WHERE role = 'teacher'";
    return pdo_query($sql);
}
// Đếm khóa học theo UserId
function statistic_course_count_userId($userId)
{
    $sql = "SELECT count(*) as sl_kh FROM courses WHERE userId=?";
    return pdo_query_value($sql, $userId);
}
// Thống kê số lượng mua khóa học theo $usrerId
function statistic_buy_all_course_userId($userId)
{
    $sql = "SELECT sum(purchase) as sl_buy FROM courses WHERE userId=?";
    return pdo_query_value($sql, $userId);
}
// Thống kê thu nhập theo ngày
function statistic_income_day()
{
    $sql = "SELECT SUM(total_money) FROM info_purchase GROUP BY DAY(date)";
    return pdo_query($sql);
}

// Thống kê thu nhập theo tháng
function statistic_income_month()
{
    $sql = "SELECT SUM(total_money) FROM info_purchase GROUP BY MONTH(date)";
    return pdo_query($sql);
}

// Thống kê thu nhập theo năm
function statistic_income_year()
{
    $sql = "SELECT SUM(total_money) FROM info_purchase GROUP BY YEAR(date)";
    return pdo_query($sql);
}

// Đếm số lượng đơn hàng trong 1 ngày
function statistic_count_bill_day()
{
    $sql = "SELECT COUNT(idInfo) FROM info_purchase GROUP BY DAY(date)";
    return pdo_query($sql);
}

// Đếm số lượng đơn hàng trong 1 tháng
function statistic_count_bill_month()
{
    $sql = "SELECT COUNT(idInfo) FROM info_purchase GROUP BY MONTH(date)";
    return pdo_query($sql);
}

// Đếm số lượng đơn hàng trong 1 năm
function statistic_count_bill_year()
{
    $sql = "SELECT COUNT(idInfo) FROM info_purchase GROUP BY YEAR(date)";
    return pdo_query($sql);
}
// Truy vấn thu nhập theo ngày dựa vào userId
function statistic_income_date_user($userId)
{
    $sql = "SELECT SUM(courses.price) as 'income_date'
    FROM detail_bill
    INNER JOIN courses 
    ON detail_bill.courseId = courses.courseId
    WHERE detail_bill.day_bill = CURDATE() and MONTH(detail_bill.day_bill) = MONTH(CURDATE()) AND YEAR(detail_bill.day_bill) = YEAR(CURDATE()) and courses.userId = ?";
    return pdo_query($sql, $userId);
}
// Truy vấn thu nhập theo tháng dựa vào userId
function statistic_income_month_user($userId)
{
    $sql = "SELECT SUM(courses.price) as 'income_month'
    FROM detail_bill
    INNER JOIN courses 
    ON detail_bill.courseId = courses.courseId
    WHERE MONTH(detail_bill.day_bill) = MONTH(CURDATE()) AND YEAR(detail_bill.day_bill) = YEAR(CURDATE()) AND courses.userId = ?";
    return pdo_query($sql, $userId);
}
// Truy vấn thu nhập theo năm dựa vào userId
function statistic_income_year_user($userId)
{
    $sql = "SELECT SUM(courses.price) as 'income_year'
    FROM detail_bill
    INNER JOIN courses 
    ON detail_bill.courseId = courses.courseId
    WHERE YEAR(detail_bill.day_bill) = YEAR(CURDATE()) AND courses.userId = ?";
    return pdo_query($sql, $userId);
}
// Truy vấn số lượng khóa học theo userId
function statistic_all_courses_users($userId)
{
    $sql = "SELECT COUNT(detail_bill.courseId) as sl_kh
    FROM bill
    INNER JOIN user
    ON bill.userId = user.userId
    INNER JOIN detail_bill
    ON bill.idBill = detail_bill.idBill
    WHERE user.userId = ?";
    return pdo_query($sql, $userId);
}
// Truy vấn chi tiêu trong ngày của user dựa vào userId
function statistic_spending_date_user($userId)
{
    $sql = "SELECT SUM(courses.price) as sum_spen
    FROM bill
    INNER JOIN user
    ON bill.userId = user.userId
    INNER JOIN detail_bill
    ON bill.idBill = detail_bill.idBill
    INNER JOIN courses
    on detail_bill.courseId = courses.courseId
    WHERE user.userId = ? AND detail_bill.day_bill = CURDATE() and MONTH(detail_bill.day_bill) = MONTH(CURDATE()) AND YEAR(detail_bill.day_bill) = YEAR(CURDATE())";
    return pdo_query($sql, $userId);
}
// Truy vấn chi tiêu trong tháng của user dựa vào userId
function statistic_spending_month_user($userId)
{
    $sql = "SELECT SUM(courses.price) as sum_spen_month
    FROM bill
    INNER JOIN user
    ON bill.userId = user.userId
    INNER JOIN detail_bill
    ON bill.idBill = detail_bill.idBill
    INNER JOIN courses
    on detail_bill.courseId = courses.courseId
    WHERE MONTH(detail_bill.day_bill) = MONTH(CURDATE()) AND YEAR(detail_bill.day_bill) = YEAR(CURDATE()) AND bill.userId = ?";
    return pdo_query($sql, $userId);
}
// Truy vấn chi tiêu trong năm của user dựa vào userId
function statistic_spending_year_user($userId)
{
    $sql = "SELECT SUM(courses.price) as sum_spen_year
    FROM bill
    INNER JOIN user
    ON bill.userId = user.userId
    INNER JOIN detail_bill
    ON bill.idBill = detail_bill.idBill
    INNER JOIN courses
    on detail_bill.courseId = courses.courseId
    WHERE YEAR(detail_bill.day_bill) = YEAR(CURDATE()) AND bill.userId = ?";
    return pdo_query($sql, $userId);
}
// Truy vấn lượt mua admin trong ngày theo cateId
function statistic_buy_admin_date($cateId)
{
    $sql = "SELECT COUNT(courses.courseId) as sl_ad_d FROM `detail_bill`
    INNER JOIN courses
    on detail_bill.courseId = courses.courseId
    WHERE courses.cateId = ? and detail_bill.day_bill = CURDATE() and MONTH(detail_bill.day_bill) = MONTH(CURDATE()) and YEAR(detail_bill.day_bill) = YEAR(CURDATE())";
    return pdo_query($sql, $cateId);
}
// Truy vấn lượt mua admin trong tháng theo cateId
function statistic_buy_admin_month($cateId)
{
    $sql = "SELECT COUNT(courses.courseId) as sl_ad_m FROM `detail_bill`
    INNER JOIN courses
    ON detail_bill.courseId = courses.courseId
    WHERE courses.cateId = ? AND MONTH(detail_bill.day_bill) = MONTH(CURDATE()) and YEAR(detail_bill.day_bill) = YEAR(CURDATE())";
    return pdo_query($sql, $cateId);
}
// Truy vấn lượt mua trong năm theo cateId
function statistic_buy_admin_year($cateId)
{
    $sql = "SELECT COUNT(courses.courseId) as sl_ad_y FROM `detail_bill`
    INNER JOIN courses
    ON detail_bill.courseId = courses.courseId
    WHERE courses.cateId = ? and YEAR(detail_bill.day_bill) = YEAR(CURDATE())";
    return pdo_query($sql, $cateId);
}
// Truy vấn thu nhập admin trong ngày theo cateId
function statistic_income_admin_date($cateId)
{
    $sql = "SELECT sum(courses.price) as buy_ad_d FROM `detail_bill`
    INNER JOIN courses
    on detail_bill.courseId = courses.courseId
    WHERE courses.cateId = ? and detail_bill.day_bill = CURDATE() and MONTH(detail_bill.day_bill) = MONTH(CURDATE()) and YEAR(detail_bill.day_bill) = YEAR(CURDATE())";
    return pdo_query($sql, $cateId);
}
// Truy vấn thu nhập admin trong tháng theo cateId
function statistic_income_admin_month($cateId)
{
    $sql = "SELECT sum(courses.price) as buy_ad_m FROM `detail_bill`
    INNER JOIN courses
    on detail_bill.courseId = courses.courseId
    WHERE courses.cateId = ? and MONTH(detail_bill.day_bill) = MONTH(CURDATE()) and YEAR(detail_bill.day_bill) = YEAR(CURDATE())";
    return pdo_query($sql, $cateId);
}
// Truy vấn thu nhập admin trong năm theo cateId
function statistic_income_admin_year($cateId)
{
    $sql = "SELECT sum(courses.price) as buy_ad_y FROM `detail_bill`
    INNER JOIN courses
    on detail_bill.courseId = courses.courseId
    WHERE courses.cateId = ? and YEAR(detail_bill.day_bill) = YEAR(CURDATE())";
    return pdo_query($sql, $cateId);

}
?>