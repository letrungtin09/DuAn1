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
                            <img src="<?=$IMAGE_DIR?>/logo-white.png" alt="">
                        </div>
                        <div class="col-sm siderbar-heading">
                            <img src="<?=$IMAGE_DIR?>/adminStatistical/admin.png" alt="">
                            <h1>TRANG QUẢN TRỊ</h1>
                        </div>
                        <div class="col-sm sidebar-content">
                            <ul>
                                <li>
                                    <div class="txt-sidebar" >
                                        <img  src="<?=$IMAGE_DIR?>/adminStatistical/icon1.png" alt="">
                                        <a href="<?=$ADMIN_URL?>?mod=statistic&act=list">Thống kê</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="txt-sidebar" >
                                        <img  src="<?=$IMAGE_DIR?>/adminStatistical/icon2.png" alt="">
                                        <a  href="<?=$ADMIN_URL?>?mod=category&act=list">Loại khóa học</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="txt-sidebar" style="border-left: 4px solid #15ad7d;">
                                        <img style="opacity: 1;" src="<?=$IMAGE_DIR?>/adminStatistical/icon3.png" alt="">
                                        <a style="opacity: 1;" href="<?=$ADMIN_URL?>?mod=courses&act=list">Khóa học</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="txt-sidebar">
                                        <img src="<?=$IMAGE_DIR?>/adminStatistical/icon4.png" alt="">
                                        <a href="<?=$ADMIN_URL?>?mod=user&act=list">Tài khoản</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="txt-sidebar">
                                        <img src="<?=$IMAGE_DIR?>/adminStatistical/icon5.png" alt="">
                                        <a href="<?=$ADMIN_URL?>?mod=news&act=list">Bài viết</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="txt-sidebar">
                                        <img src="<?=$IMAGE_DIR?>/adminStatistical/icon6.png" alt="">
                                        <a href="<?=$ADMIN_URL?>?mod=bill&act=list">Đơn hàng</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="txt-sidebar">
                                        <img src="<?=$IMAGE_DIR?>/adminStatistical/icon7.png" alt="">
                                        <a href="<?=$ADMIN_URL?>?mod=comment&act=list">Bình luận</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="txt-sidebar">
                                        <img src="<?=$IMAGE_DIR?>/adminStatistical/icon8.png" alt="">
                                        <a href="<?=$ADMIN_URL?>?mod=evaluate&act=list">Đánh giá</a>
                                    </div>
                                </li>
                            </ul>
                            <button>Quay lại trang chủ</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>