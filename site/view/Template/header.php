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

    <script src="<?=$ASSETS_URL?>/js/jquery-1.10.2.min.js"></script>
    <script src="<?=$ASSETS_URL?>/js/jquery-ui.js"></script>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="<?=$ASSETS_URL?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=$ASSETS_URL?>/css/owl.theme.default.min.css">
    <!-- MAIN CSS -->
    <link href = "<?=$ASSETS_URL?>/css/jquery-ui.css" rel = "stylesheet">
    <link rel="stylesheet" href="<?=$ASSETS_URL?>/css/main.css">
</head>

<body>
    <!-- HEADER -->
<header>
    <?php
    // Header nếu tồn tại secction user
    if(isset($_SESSION['user'])){ ?>
        <nav class="navbar navbar-expand-lg nav_header">
            <div class="container_header">
                <a class="navbar-brand" href="<?=$SITE_URL?>">
                    <img class="logo_img" src="<?=$IMAGE_DIR?>/logo.png" alt="">
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
                        <li><a class="dropdown-item" href="<?=$SITE_URL?>?mod=typecourse&act=typecourses&cate=<?=$kh['cateId']?>"><?=$nameCate?></a></li>
                    <?php
                    }
                    ?>

                    </ul>
                </div>
                <div class="header_search">
                    <form  action="<?=$SITE_URL?>" method="get">
                        <div class="form_header_search" style="display:flex;height:100%;">
                            <button class="btn btn-outline-success header_search_btn" type="submit">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                            <input name='searchInput' class="header_search_input me-2" placeholder="Tìm kiếm nội dung bất kì">
                        </div>
                    </form>
                </div>
                <div class="nav-item header_teaching">
                    <a class="nav-link" aria-current="page" href="<?=$SITE_URL?>?mod=registerteacher&act=register">Giảng dạy trên T-demy</a>
                </div>
                <div class="nav-item header_teaching">
                    <a class="nav-link" aria-current="page" href="<?=$SITE_URL?>?mod=mylearning&act=mylearn">Khóa học của tôi</a>
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
                        $tongSale = 0;
                        $tong = 0;
                        if(bill_exist($_SESSION['user']['userId'])){
                            $billByUserId = bill_select_by_userId($_SESSION['user']['userId']);
                            $detailBillByIdBill = detailBill_select_by_idBill($billByUserId['idBill']);
                            foreach ($detailBillByIdBill as $detail){
                                $course = course_select_by_id($detail['courseId']);
                                $tong += $course['price'];
                                $tongSale += ($course['price'] - ($course['price'] *($course['sale']/100)));?>
                                <li>
                                    <a href="" class="header_cart_bill-purchar-link">
                                        <img src="<?=$IMAGE_DIR?>/courses/<?=$course['image']?>">
                                        <div>
                                            <div class="header_cart_bill-title"><?=$course['title']?></div>
                                            <?php
                                            $user = user_select_by_id($course['userId']);
                                            ?>
                                            <p><?=$user['fullName']?></p>
                                            <div class="header_cart_bill-price">
                                                <h5><?=number_format($course['price'] - ($course['price'] *($course['sale']/100)))?>đ</h5><span><?=number_format($course['price'])?>đ</span>
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
                        <?php
                        if(bill_exist($_SESSION['user']['userId'])){?>
                        <div class="header_cart_bill-sum">
                            <div class="">Tổng tiền: <?=number_format($tongSale)?> đ</div>
                            <span><?=number_format($tong)?> đ</span>
                        </div>
                        <div class="header_cart_bill-submit">
                            <a href="<?=$SITE_URL?>?mod=bill&act=cartBill">Đến giỏ hàng</a>
                        </div>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="dropdown header_favorite">
                    <a class="header_dark header_favorite-icon" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-regular fa-heart"></i>
                    </a>
                
                    <ul class="dropdown-menu header_favorite_bill-purchar">
                        <?php
                        foreach($studentlikeinCourse as $studentlike){
                            $courseinfolike = course_select_by_id($studentlike['courseId']);
                        ?>
                            <li>
                                <a href="#" class="header_favorite_bill-tem">
                                    <img src="<?=$IMAGE_DIR?>/courses/<?=$courseinfolike['image']?>">
                                    <div>
                                        <div class="header_favorite_bill-title"><?=$courseinfolike['title']?></div>
                                        <p><?=get_name_teacher($courseinfolike['userId'])?></p>
                                        <div class="header_favorite_bill-price">
                                            <h5><?=number_format($courseinfolike['price'])?>đ</h5>
                                        </div>
                                    </div>
                                </a>
                                <div class="header_cart_favorite_bill-submit">
                                    <a href="<?=$SITE_URL?>?mod=bill&act=addBill&course=<?=$courseinfolike['courseId']?>">Thêm vào giỏ hàng</a>
                                </div>
                            </li>
                        <?php
                        }
                        ?>
                        
                        <div class="header_favorite_bill-submit">
                            <a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn">Xem danh sách yêu thích</a>
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
                            <img src="<?=$IMAGE_DIR?>/users/<?=$_SESSION["user"]["avatar"]?>" alt="">
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-header">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="<?=$IMAGE_DIR?>/users/<?=$_SESSION["user"]["avatar"]?>" alt="">
                                </a>
                                <div>
                                    <h6><?=$_SESSION["user"]["fullName"]?></h6>
                                    <p><?=$_SESSION["user"]["email"]?></p>
                                </div>
                            </div>
                            <ul class="dropdown-menu-mid">
                                <li><a href="<?=$SITE_URL?>?mod=user&act=updateaccount" class="">Cập nhập tài khoản</a></li>
                                <li><a href="<?=$SITE_URL?>?mod=user&act=changepass" class="">Đổi mật khẩu</a></li>
                                <li><a href="<?=$ADMIN_URL?>index.php" class="">Quản trị website</a></li>
                            </ul>
                            <div class="dropdown-menu-end">
                                <a href="<?=$SITE_URL?>?mod=user&act=logoff" class="">Đăng xuất</a>
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </div>
                        </div>
                        <!-- modal của teacher -->
                    <?php } elseif ($_SESSION["user"]["role"] == "teacher") { ?>
                        <a class="btn btn-secondary dropdown-toggle dropdown_nav_user-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?=$IMAGE_DIR?>/users/<?=$_SESSION["user"]["avatar"]?>" alt="">
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-header">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="<?=$IMAGE_DIR?>/users/<?=$_SESSION["user"]["avatar"]?>" alt="">
                                </a>
                                <div>
                                    <h6><?=$_SESSION["user"]["fullName"]?></h6>
                                    <p><?=$_SESSION["user"]["email"]?></p>
                                </div>
                            </div>
                            <ul class="dropdown-menu-mid">
                                <li><a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn" class="">Quá trình học tập của tôi</a></li>
                                <li><a href="<?=$SITE_URL?>?mod=bill&act=cartBill" class="">Giỏ hàng của tôi</a></li>
                                <li><a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn" class="">Danh sách yêu thích</a></li>
                                <li><a href='' class=''>Bảng điều khiển của giảng viên</a></li>
                            </ul>
                            <ul class="dropdown-menu-mid">
                                <li><a href="<?=$SITE_URL?>?mod=user&act=updateaccount" class="">Cập nhập tài khoản</a></li>
                                <li><a href="<?=$SITE_URL?>?mod=user&act=changepass" class="">Đổi mật khẩu</a></li>
                                <li><a href="" class="">Lịch sử mua</a></li>
                            </ul>
                            <div class="dropdown-menu-end">
                                <a href="<?=$SITE_URL?>?mod=user&act=logoff" class="">Đăng xuất</a>
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </div>
                        </div>
                        <!-- modal của student -->
                    <?php } else { ?>
                        <a class="btn btn-secondary dropdown-toggle dropdown_nav_user-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?=$IMAGE_DIR?>/users/<?=$_SESSION["user"]["avatar"]?>" alt="">
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-header">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="<?=$IMAGE_DIR?>/users/<?=$_SESSION["user"]["avatar"]?>" alt="">
                                </a>
                                <div>
                                    <h6><?=$_SESSION["user"]["fullName"]?></h6>
                                    <p><?=$_SESSION["user"]["email"]?></p>
                                </div>
                            </div>
                            <ul class="dropdown-menu-mid">
                                <li><a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn" class="">Quá trình học tập của tôi</a></li>
                                <li><a href="<?=$SITE_URL?>?mod=bill&act=cartBill" class="">Giỏ hàng của tôi</a></li>
                                <li><a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn" class="">Danh sách yêu thích</a></li>
                            </ul>
                            <ul class="dropdown-menu-mid">
                                <li><a href="<?=$SITE_URL?>?mod=user&act=updateaccount" class="">Cập nhập tài khoản</a></li>
                                <li><a href="<?=$SITE_URL?>?mod=user&act=changepass" class="">Đổi mật khẩu</a></li>
                                <li><a href="" class="">Lịch sử mua</a></li>
                            </ul>
                            <div class="dropdown-menu-end">
                                <a href="<?=$SITE_URL?>?mod=user&act=logoff" class="">Đăng xuất</a>
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </div>
                        </div>
                    <?php } ?> 
                    
                </div>
            </div>
        </nav>
    <?php } else { ?>
        <nav class="navbar navbar-expand-lg nav_header">
            <div class="container_header">
                <a class="navbar-brand" href="<?=$SITE_URL?>">
                    <img class="logo_img" src="<?=$IMAGE_DIR?>/logo.png" alt="">
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
                        <li><a class="dropdown-item" href="<?=$SITE_URL?>?mod=typecourse&act=typecourses&cate=<?=$kh['cateId']?>"><?=$nameCate?></a></li>
                    <?php
                    }
                    ?>
                    </ul>
                </div>
                <div class="header_search">
                    <form action="<?=$SITE_URL?>?mod=search&act=showSearch" method="get">
                        <button class="btn btn-outline-success header_search_btn" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                        <input name='searchInput' class="header_search_input me-2" placeholder="Tìm kiếm nội dung bất kì">
                    </form>
                </div>
                <div class="nav-item header_teaching">
                    <a class="nav-link" aria-current="page" href="<?=$SITE_URL?>?mod=registerteacher&act=register">Giảng dạy trên T-demy</a>
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
                    <a href="<?=$SITE_URL?>?mod=user&act=login" class="button-white-medium ">Đăng nhập</a>
                </div>
                <div class="header_regis">
                    <a href="<?=$SITE_URL?>?mod=user&act=signup" class="button-black-medium">Đăng ký</a>
                </div>
                <button class="header_dark">
                    <i class="fa-regular fa-moon"></i>
                </button>
            </div>
        </nav>
    <?php }
    ?>
</header>
