<?php
    require_once 'model/courses.php';
    require_once 'model/category.php';
    require_once 'model/user.php';
    require_once 'model/evaluate.php';
    require_once 'model/news.php';
    // Truy vấn tất cả khóa học
    $Courses = course_select_all();
    // Truy vấn tất cả loại khóa học
    $allKind = category_select_all();
    // Truy vấn tất cả đánh giá\
    $allEvaluate = evaluate_select_all();
    // Truy vấn 10 khóa học có lượt mua cao nhất
    $allCourseTop10 = course_select_top10_best_seller();
    // Truy vấn 8 bài viết
    $eightNew = news_select_pageHome();
    include_once("view/Home/view.php");
