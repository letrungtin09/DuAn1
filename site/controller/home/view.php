<?php
    require_once 'model/courses.php';
    require_once 'model/category.php';
    require_once 'model/user.php';
    require_once 'model/evaluate.php';
    require_once 'model/news.php';
    require_once 'model/student_course.php';
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
    // kiểm tra khóa học yêu thích 
    function get_course_favourite($userId, $courseId){
        require_once 'model/favourite.php';
        return favourite_exist($userId, $courseId);
    }
    // Truy vấn các học sinh trong lớp
    if(isset($_SESSION['user'])){
        $courseRegisted = student_courses_select_by_userId($_SESSION['user']['userId']);
    }
    // Đếm số đánh giá
    function eluavate_count($courseId){
        require_once 'model/evaluate.php';
        $elua = evaluate_count_courseid($courseId);
        return $elua;

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
    include_once("view/Home/view.php");
?>
