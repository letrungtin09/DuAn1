<?php
require_once 'model/courses.php';
require_once 'model/category.php';
require_once 'model/user.php';
require_once 'model/chapter.php';
require_once 'model/detailChapter.php';
require_once 'model/evaluate.php';
// Lấy thông tin khóa học theo Idcourse
$courseid = $_GET['course'];
$courseSlectbyid = course_select_by_id($courseid);
// Lấy loại khóa học theo idcate
$cate = category_select_by_id($courseSlectbyid['cateId']);
// Lấy tên giảng viên theo userId
$user = user_select_by_id($courseSlectbyid['userId']);
// Lấy tên giảng viên theo userId
$countChapter = chapter_count_course($courseSlectbyid['courseId']);
// Lấy chapter theo courseId
$chapter = chapter_select_idcourse($courseSlectbyid['courseId']);
// Đếm số bài học
$countAllDetailChapter = 0;
foreach($chapter as $chap){
    extract($chap);
    $countSession = detailChapter_count_chapterId($chapterId);
    $countAllDetailChapter += $countSession;
}
// Lấy 2 khóa học cùng loại
$fiveCourseSameType = five_course_select_idcate($courseSlectbyid['cateId']);
// Đếm số khóa học theo mã giảng viên
$countCourseByTeacher = course_count_userId($courseSlectbyid['userId']);
// Truy vấn đánh giá theo idcourse
$eluavateSelectByIdcourse = evaluate_select_courseId($courseSlectbyid['courseId']);
// Truy vấn 3 khóa học cùng giảng viên
$courseSelectByTeacher = three_course_select_by_userId($courseSlectbyid['userId']);
include_once("view/Detailcourse/detailcourse.php");
?>