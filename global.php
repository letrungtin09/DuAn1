<?php 

// Định nghĩa các url cần thiết được sử dụng trong website
$ROOT_URL = "http://localhost/DuAn1"; //đường dẫn gốc của website
$ASSETS_URL = "$ROOT_URL/assets"; //đường dẫn chứa tài nguyên tĩnh (img, css, js)
$ADMIN_URL = "$ROOT_URL/admin/"; //đường dẫn vào phần quản trị
$SITE_URL = "$ROOT_URL/site/"; //đường dẫn vào phần site
// đường dẫn chứa hình khi upload
$IMAGE_DIR = "$ROOT_URL/assets/img";

// biến lưu các thông báo
$MESSAGE = "";

//Kiểm tra sự tồn tại của 1 tham số trong request, trả về true nếu tồn tại
function exist_param($fieldname){
    return array_key_exists($fieldname, $_REQUEST);
}
/* Lưu file upload vào folder
 * $fieldname là tên field trong form, $target_dir là folder lưu file
 * trả về tên file đã upload
 */
function save_file($fieldname, $target_dir){
    $file_uploaded = $_FILES[$fieldname];
    $file_name = basename($file_uploaded["name"]);
    $target_path = $target_dir . $file_name;
    move_uploaded_file($file_uploaded["tmp_name"], $target_path);
    return $file_name;
}
/* Tạo cookie
 * $name là tên cookie, $value là giá trị cookie
 * $day là số ngày tồn tại cookie
 */
function add_cookie($name, $value, $day){
    setcookie($name, $value, time() + (86400 * $day), "/");
}
/* Xóa cookie, $name là tên cookie muốn xóa
 */
function delete_cookie($name){
    add_cookie($name, "", -1);
}
/* Đọc giá trị cookie
 * $name là tên cookie, trả vể giá trị của cookie
 */
function get_cookie($name){
    return $_COOKIE[$name]??'';
}
/* Kiểm tra đăng nhập và vai trò
 * Các trang php yêu cầu user đăng nhập sẽ gọi hàm này ở đầu file
 */
function check_login(){
    global $SITE_URL;
    if(isset($_SESSION['user'])){
        if($_SESSION['user']['role'] == student || $_SESSION['user']['role'] == teacher){
            return;
        }
        if(strpos($_SERVER["REQUEST_URI"], '/admin/') == FALSE){
            return;
        }
    }
    $_SESSION['request_uri'] = $_SERVER["REQUEST_URI"];
    header("location: controller/user/login.php");
}
?>