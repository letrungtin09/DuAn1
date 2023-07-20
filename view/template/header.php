<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Demy</title>
    <!-- BS5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- GG FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/owl.theme.default.min.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body>
    <!-- HEADER -->
<header>
    <?php
    // Header nếu tồn tại secction user
    if(isset($_SESSION['user'])){ ?>
        <nav class="navbar navbar-expand-lg nav_header">
            <div class="container_header">
                <a class="navbar-brand" href="<?=$base_url?>">
                    <img class="logo_img" src="./assets/img/logo.png" alt="">
                </a>
                <div class="nav-item dropdown kind_menu">
                    <a class="nav-link" href="#" role="button">
                        Thể loại
                    </a>
                    <ul class="dropdown-menu kind_menu_item">
                    <?php
                        require_once 'controller/template/header.php';
                        foreach ($allKind as $kh) {
                            extract($kh); 
                        ?>
                        <li><a class="dropdown-item" href="#"><?=$nameCate?></a></li>
                    <?php
                    }
                    ?>

                    </ul>
                </div>
                <div class="header_search">
                    <form class="d-flex" role="search">
                        <button class="btn btn-outline-success header_search_btn" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                        <input class="header_search_input me-2" placeholder="Tìm kiếm nội dung bất kì">
                    </form>
                </div>
                <div class="nav-item header_teaching">
                    <a class="nav-link" aria-current="page" href="#">Giảng dạy trên T-demy</a>
                </div>
                <div class="nav-item header_teaching">
                    <a class="nav-link" aria-current="page" href="#">Khóa học của tôi</a>
                </div>
                <div class="nav-item dropdown header_cart">
                    <a class="nav-link header_cart_link" href="#" role="button">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <div><span class="">3</span></div>
                    </a>
                    <ul class="dropdown-menu header_cart_bill-purchar">
                        <?php
                        require_once 'model/bill.php';
                        require_once 'model/detailBill.php';
                        require_once 'model/courses.php';
                        require_once 'model/user.php';
                            foreach ($_SESSION as $sec){
                            extract($sec);
                        }
                        if(bill_exist($userId)){
                            $billByUserId = bill_select_by_userId($userId);
                            extract($billByUserId);
                            $detailBillByIdBill = detailBill_select_by_idBill($idBill);
                            foreach ($detailBillByIdBill as $detail){
                                extract($detail);
                                $course = course_select_by_id($courseId);
                                extract($course);?>
                                <li>
                                    <a href="" class="header_cart_bill-purchar-link">
                                        <img src="./assets/img/courses/<?=$image?>">
                                        <div>
                                            <div class="header_cart_bill-title"><?=$title?></div>
                                            <?php
                                            $user = user_select_by_id($userId);
                                            extract($user);
                                            ?>
                                            <p><?=$fullName?></p>
                                            <div class="header_cart_bill-price">
                                                <h5><?=$price?>đ</h5><span><?=$sale?>đ</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            <?php
                            }
                        }else{
                            echo'Bạn chưa mua hàng';
                        }
                        ?>
                        
                        <div class="header_cart_bill-sum">
                            Tổng: <div class="">1.493.000đ</div>
                            <span>7.354.000đ</span>
                        </div>
                        <div class="header_cart_bill-submit">
                            <a href="#">Đến giỏ hàng</a>
                        </div>
                    </ul>
                </div>
                <div class="dropdown header_favorite">
                    <a class="header_dark header_favorite-icon" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-regular fa-heart"></i>
                    </a>
                
                    <ul class="dropdown-menu header_favorite_bill-purchar">
                        <li>
                            <a href="#" class="header_favorite_bill-tem">
                                <img src="./assets/img/courses/be5.jpg">
                                <div>
                                    <div class="header_favorite_bill-title">Khoá học cơ bản với HTML/ CSS dành cho người mới học lập trình</div>
                                    <p>Tường duy</p>
                                    <div class="header_favorite_bill-price">
                                        <h5>499.000đ</h5>
                                    </div>
                                </div>
                            </a>
                            <div class="header_cart_favorite_bill-submit">
                                <button>Thêm vào giỏ hàng</button>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="header_favorite_bill-tem">
                                <img src="./assets/img/courses/be5.jpg">
                                <div>
                                    <div class="header_favorite_bill-title">Khoá học cơ bản với HTML/ CSS dành cho người mới học lập trình</div>
                                    <p>Tường duy</p>
                                    <div class="header_favorite_bill-price">
                                        <h5>499.000đ</h5>
                                    </div>
                                </div>
                            </a>
                            <div class="header_cart_favorite_bill-submit">
                                <button>Thêm vào giỏ hàng</button>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="header_favorite_bill-tem">
                                <img src="./assets/img/courses/be5.jpg">
                                <div>
                                    <div class="header_favorite_bill-title">Khoá học cơ bản với HTML/ CSS dành cho người mới học lập trình</div>
                                    <p>Tường duy</p>
                                    <div class="header_favorite_bill-price">
                                        <h5>499.000đ</h5>
                                    </div>
                                </div>
                            </a>
                            <div class="header_cart_favorite_bill-submit">
                                <button>Thêm vào giỏ hàng</button>
                            </div>
                        </li>
                        <div class="header_favorite_bill-submit">
                            <a >Xem danh sách yêu thích</a>
                        </div>
                    </ul>
                </div>
                <button class="header_dark">
                    <i class="fa-regular fa-moon"></i>
                </button>
                <div class="dropdown dropdown_nav_user">
                    <!-- modal của admin -->
                    <?php if($_SESSION["user"]["role"] == "admin"){ ?>
                        <a class="btn btn-secondary dropdown-toggle dropdown_nav_user-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="./assets/img/users/admin.jpg" alt="">
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-header">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="./assets/img/users/admin.jpg" alt="">
                                </a>
                                <div>
                                    <h6>Lê Trung Tín</h6>
                                    <p>duytt18897@gmail.com</p>
                                </div>
                            </div>
                            <ul class="dropdown-menu-mid">
                                <li><a href="" class="">Cập nhập tài khoản</a></li>
                                <li><a href="" class="">Đổi mật khẩu</a></li>
                                <li><a href="" class="">Quản trị website</a></li>
                            </ul>
                            <div class="dropdown-menu-end">
                                <a href="<?=$base_url?>?mod=user&act=logoff" class="">Đăng xuất</a>
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </div>
                        </div>
                        <!-- modal của teacher -->
                    <?php } elseif ($_SESSION["user"]["role"] == "teacher") { ?>
                        <a class="btn btn-secondary dropdown-toggle dropdown_nav_user-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="./assets/img/users/teacher.jpg" alt="">
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-header">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="./assets/img/users/teacher.jpg" alt="">
                                </a>
                                <div>
                                    <h6>Lê Trung Tín</h6>
                                    <p>duytt18897@gmail.com</p>
                                </div>
                            </div>
                            <ul class="dropdown-menu-mid">
                                <li><a href="" class="">Quá trình học tập của tôi</a></li>
                                <li><a href="" class="">Giỏ hàng của tôi</a></li>
                                <li><a href="" class="">Danh sách yêu thích</a></li>
                                <li><a href='' class=''>Bảng điều khiển của giảng viên</a></li>
                            </ul>
                            <ul class="dropdown-menu-mid">
                                <li><a href="" class="">Cập nhập tài khoản</a></li>
                                <li><a href="" class="">Đổi mật khẩu</a></li>
                                <li><a href="" class="">Lịch sử mua</a></li>
                            </ul>
                            <div class="dropdown-menu-end">
                                <a href="<?=$base_url?>?mod=user&act=logoff" class="">Đăng xuất</a>
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </div>
                        </div>
                        <!-- modal của student -->
                    <?php } else { ?>
                        <a class="btn btn-secondary dropdown-toggle dropdown_nav_user-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="./assets/img/users/teacher.jpg" alt="">
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-header">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="./assets/img/users/teacher.jpg" alt="">
                                </a>
                                <div>
                                    <h6>Lê Trung Tín</h6>
                                    <p>duytt18897@gmail.com</p>
                                </div>
                            </div>
                            <ul class="dropdown-menu-mid">
                                <li><a href="" class="">Quá trình học tập của tôi</a></li>
                                <li><a href="" class="">Giỏ hàng của tôi</a></li>
                                <li><a href="" class="">Danh sách yêu thích</a></li>
                            </ul>
                            <ul class="dropdown-menu-mid">
                                <li><a href="" class="">Cập nhập tài khoản</a></li>
                                <li><a href="" class="">Đổi mật khẩu</a></li>
                                <li><a href="" class="">Lịch sử mua</a></li>
                            </ul>
                            <div class="dropdown-menu-end">
                                <a href="<?=$base_url?>?mod=user&act=logoff" class="">Đăng xuất</a>
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </div>
                        </div>
                    <?php } ?> 
                    
                </div>
            </div>
        </nav>
    <?php }else{ ?>
        <nav class="navbar navbar-expand-lg nav_header">
            <div class="container_header">
                <a class="navbar-brand" href="<?=$base_url?>">
                    <img class="logo_img" src="./assets/img/logo.png" alt="">
                </a>
                <div class="nav-item dropdown kind_menu">
                    <a class="nav-link" href="#" role="button">
                        Thể loại
                    </a>
                    <ul class="dropdown-menu kind_menu_item">
                    <?php
                        require_once 'controller/template/header.php';
                        foreach ($allKind as $kh) {
                            extract($kh); 
                        ?>
                        <li><a class="dropdown-item" href="#"><?=$nameCate?></a></li>
                    <?php
                    }
                    ?>
                    </ul>
                </div>
                <div class="header_search">
                    <form class="d-flex" role="search">
                        <button class="btn btn-outline-success header_search_btn" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                        <input class="header_search_input me-2" placeholder="Tìm kiếm nội dung bất kì">
                    </form>
                </div>
                <div class="nav-item header_teaching">
                    <a class="nav-link" aria-current="page" href="#">Giảng dạy trên T-demy</a>
                </div>
                <div class="nav-item dropdown header_cart">
                    <a class="nav-link header_cart_link" href="#" role="button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                    <ul class="dropdown-menu header_cart_detail-bill">
                        <li>Giỏ hàng của bạn đang trống</li>
                    </ul>
                </div>
                <div class="header_login">
                    <a href="<?=$base_url?>?mod=user&act=login" class="button-white-medium ">Đăng nhập</a>
                </div>
                <div class="header_regis">
                    <a href="<?=$base_url?>?mod=user&act=signup" class="button-black-medium">Đăng ký</a>
                </div>
                <button class="header_dark">
                    <i class="fa-regular fa-moon"></i>
                </button>
            </div>
        </nav>
    <?php }
    ?>
</header>
