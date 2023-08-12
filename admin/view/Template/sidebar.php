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
    <link rel="stylesheet" href="<?=$ASSETS_URL?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=$ASSETS_URL?>/css/owl.theme.default.min.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?=$ASSETS_URL?>/css/main.css">
    <!-- Canvas -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
    <div class="container-all">
        <div class="col-left">
            <section class="sidebar sidebar-qt-admin">
                <div class="container container-sidebar">
                    <div class="row">
                        <div class="col-sm siderbar-logo">
                            <a href="<?= $ADMIN_URL ?>index.php"><img src="<?=$IMAGE_DIR?>/logo-white.png" alt=""></a>
                        </div>
                        <div class="col-sm siderbar-heading">
                            <img src="<?=$IMAGE_DIR?>/adminStatistical/admin.png" alt="">
                            <h1>TRANG QUẢN TRỊ</h1>
                        </div>
                        <div class="col-sm sidebar-content">
                            <ul id="adminNav">
                                <li>
                                    <div class="txt-sidebar" >
                                        <a class="active" href="<?=$ADMIN_URL?>?mod=statistic&act=list"><img  src="<?=$IMAGE_DIR?>/adminStatistical/icon1.png" alt="">Thống kê
                                    </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="txt-sidebar" >
                                        <a href="<?=$ADMIN_URL?>?mod=category&act=list"><img  src="<?=$IMAGE_DIR?>/adminStatistical/icon2.png" alt="">Loại khóa học</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="txt-sidebar">                                      
                                        <a href="<?=$ADMIN_URL?>?mod=courses&act=list"><img src="<?=$IMAGE_DIR?>/adminStatistical/icon3.png" alt="">Khóa học</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="txt-sidebar">                                       
                                        <a href="<?=$ADMIN_URL?>?mod=user&act=list"><img src="<?=$IMAGE_DIR?>/adminStatistical/icon4.png" alt="">Tài khoản</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="txt-sidebar">                                       
                                        <a href="<?=$ADMIN_URL?>?mod=news&act=list"><img src="<?=$IMAGE_DIR?>/adminStatistical/icon5.png" alt="">Bài viết</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="txt-sidebar">                                      
                                        <a href="<?=$ADMIN_URL?>?mod=bill&act=list"><img src="<?=$IMAGE_DIR?>/adminStatistical/icon6.png" alt="">Đơn hàng</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="txt-sidebar">                                       
                                        <a href="<?=$ADMIN_URL?>?mod=comment&act=list"><img src="<?=$IMAGE_DIR?>/adminStatistical/icon7.png" alt="">Bình luận</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="txt-sidebar">                                     
                                        <a href="<?=$ADMIN_URL?>?mod=evaluate&act=list"><img src="<?=$IMAGE_DIR?>/adminStatistical/icon8.png" alt="">Đánh giá</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center">
                                <a href="<?=$SITE_URL?>" class="btn-home">Quay lại trang chủ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>