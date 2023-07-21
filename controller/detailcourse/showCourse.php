<?php
require_once 'model/courses.php';
require_once 'model/category.php';
require_once 'model/user.php';
require_once 'model/chapter.php';
require_once 'model/detailChapter.php';
// Lấy thông tin khóa học theo Idcourse
$courseid = $_GET['course'];
$course = course_select_by_id($courseid);
extract($course);
// Lấy loại khóa học theo idcate
$cate = category_select_by_id($cateId);
extract($cate);
// Lấy tên giảng viên theo userId
$user = user_select_by_id($userId);
extract($user);
// Lấy tên giảng viên theo userId
$countChapter = chapter_count_course($courseId);
// Lấy chapter theo courseId
$chapter = chapter_select_idcourse($courseId);


include_once("view/Detailcourse/detailcourse.php");
?>