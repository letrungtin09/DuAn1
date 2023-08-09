<?php
    require_once 'model/courses.php';
    require_once 'model/detailChapter.php';
    $courses = course_select_by_id($_GET['course']);
    // Hàm lấy tên giảng viên
    function get_name_teacher($userID){
        require_once 'model/user.php';
        $user = user_select_by_id($userID);
        $name = $user['fullName'];
        return $name;
    }
    // Lấy chức vụ
    function get_occupation_teacher($userID){
        require_once 'model/user.php';
        $user = user_select_by_id($userID);
        $occupation = $user['career'];
        return $occupation;
    }
    // Lấy ảnh
    function get_avatar_user($userID){
        require_once 'model/user.php';
        $user = user_select_by_id($userID);
        $avatar = $user['avatar'];
        return $avatar;
    }// thong tin
    function get_infor_user($userID){
        require_once 'model/user.php';
        $user = user_select_by_id($userID);
        $infor = $user['information'];
        return $infor;
    }
    // lấy chapter
    function get_chapter($courseid){
        require_once 'model/courses.php';
        require_once 'model/chapter.php';
        $courseSlectbyid = course_select_by_id($courseid);
        $chapter = chapter_select_idcourse($courseSlectbyid['courseId']);
        return $chapter;
    }
    if(isset($_GET['detailchapter'])){
        $detailchapet = detailChapter_select_by_idDetailChapter($_GET['detailchapter']);
    }
include_once("view/lesson/detaillesson.php");