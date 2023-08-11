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
    <link rel="stylesheet" href="<?= $ASSETS_URL ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $ASSETS_URL ?>/css/owl.theme.default.min.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= $ASSETS_URL ?>/css/main.css">
</head>

<body>
    <div class="container-all">
        <div class="col-left">
            <section class="sidebar sidebar-controlCourse">
                <div class="container container-sidebar">
                    <div class="row">
                        <div class="col-sm siderbar-logo">
                            <a href="<?=$SITE_URL?>?mod=managecourse&act=listCourse&userId=<?=$_GET["userId"]?>"><img src="<?= $IMAGE_DIR ?>/logo-white.png" alt=""></a>
                        </div>
                        <div class="col-sm sidebar-content">
                            <ul>
                                <li>
                                    <div class="txt-sidebar">
                                        <a class="active" href="<?=$SITE_URL?>?mod=managecourse&act=listCourse&userId=<?=$_GET["userId"]?>"><img src="<?= $IMAGE_DIR ?>/controlCourses/icon1.png" alt="">Khóa học</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="txt-sidebar">
                                        <a href=""><img src="<?= $IMAGE_DIR ?>/controlCourses/icon2.png" alt="">Đánh giá</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="txt-sidebar">
                                        <a href=""><img src="<?= $IMAGE_DIR ?>/controlCourses/icon3.png" alt="">Thống kê</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-right">
            <!-- HEADER -->
            <header class="header-sideHead">
                <!-- <nav class="navbar navbar-expand-lg nav-slidebar">
            <div class="slidebar-logo">
                <img src="./img/logo-white.png" alt="">
            </div>
            <div class="slidebar-content">

            </div>
        </nav> -->
                <nav class="navbar navbar-expand-lg nav_header">
                    <div class="container_header">
                        <div class="nav-item header_teaching">
                            <a class="nav-link" aria-current="page" href="<?= $SITE_URL ?>">Học viên</a>
                        </div>

                        <button class="header_dark">
                            <i class="fa-regular fa-moon"></i>
                        </button>
                        <div class="dropdown dropdown_nav_user">
                            <!-- modal của giảng viên -->
                            <?php
                                require_once "model/user.php";
                                $getInfoTeacher = user_select_by_id($_GET['userId']);
                            ?>
                            <a class="btn btn-secondary dropdown-toggle dropdown_nav_user-link" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?= $IMAGE_DIR ?>/users/<?= $getInfoTeacher['avatar'] ?>" alt="">
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-header">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="<?= $IMAGE_DIR ?>/users/<?= $getInfoTeacher['avatar'] ?>" alt="">
                                    </a>
                                    <div>
                                        <h6>
                                            <?= $getInfoTeacher['fullName'] ?>
                                        </h6>
                                        <p>
                                            <?= $getInfoTeacher['email'] ?>
                                        </p>
                                    </div>
                                </div>
                                <ul class="dropdown-menu-mid">
                                    <li><a href="<?= $SITE_URL ?>" class="">Học viên</a></li>
                                </ul>
                                <ul class="dropdown-menu-mid">
                                    <li><a href="<?=$SITE_URL?>?mod=user&act=updateaccount" class="">Cập nhập tài khoản</a></li>
                                    <li><a href="<?=$SITE_URL?>?mod=user&act=changepass" class="">Đổi mật khẩu</a></li>
                                </ul>
                                <div class="dropdown-menu-end">
                                    <a href="<?=$SITE_URL?>?mod=user&act=logoff" class="">Đăng xuất</a>
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>