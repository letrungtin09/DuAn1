<?php
    require_once 'model/student_course.php';
    require_once 'model/courses.php';
    // tất cả khóa học sinh viên đã đăng ký
    $studentinCourse = student_courses_select_by_userId($_SESSION['user']['userId']);
    // khóa học sinh viên đã thích
    $studentlikeinCourse = student_courses_like_select_by_userId($_SESSION['user']['userId']);
    // Hàm lấy tên giảng viên
    function get_name_teacher($userID){
        require_once 'model/user.php';
        $user = user_select_by_id($userID);
        $name = $user['fullName'];
        return $name;
    }
    // Hàm lấy Số chap ter
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
    include_once("view/mylearning/allmylearn.php");
?>