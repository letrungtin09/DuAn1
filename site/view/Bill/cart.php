<?php check_login(); ?>
<?php
require_once 'controller/bill/cartBill.php';
if(isset($_GET['course'])){?>
<meta http-equiv="refresh" content="0;url=<?=$SITE_URL?>?mod=bill&act=addBill">
<?php
}
?>
<section class="header-infor td-container">
    <div class="header-infor-cart">
        <h1 class="cart-title">Giỏ hàng</h1>
        <h2 class="cart-filters"><?=$countLessondetail?> khóa học trong giỏ hàng</h2>
    </div>
    <div class="all-body-cart">
        <div class="body-info-cart">
            <?php 
            $totalBill = 0;
            $totalBillSale = 0;
            if($detailBillByIdBill != ''){
                foreach($detailBillByIdBill as $detail){
                    $courseinfo = course_select_by_id($detail['courseId']);
                    $totalBill += $courseinfo['price'];
                    $totalBillSale += $courseinfo['price'] - ($courseinfo['price'] *($courseinfo['sale']/100))?>
                    <div class="cart-info">
                        <div class="cart-info-img">
                            <img src="<?=$IMAGE_DIR?>/courses/<?=$courseinfo['image']?>" alt="">
                        </div>
                        <div class="cart-info-details">
                            <h1 class="cart-info-name"><?=$courseinfo['title']?></h1>
                            <?php
                            $username = user_select_by_id($courseinfo['userId']);
                            ?>
                            <p class="cart-info-author"><?=$username['fullName']?></p>
                            <div class="cart-info-rate">
                                <span class="detail__rate">5,0</span>
                                <span class="detail__icon">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span class="detail__evaluate">(17.000 đánh giá)</span>
                            </div>
                            <ul class="cart-info-course">
                                <li class="course time">Tổng số <?=$courseinfo['allTime']?></li>
                                <?php
                                require_once 'model/chapter.php';
                                require_once 'model/detailChapter.php';
                                $chapter = chapter_select_idcourse($courseinfo['courseId']);
                                $countAllDetailChapter = 0;
                                foreach($chapter as $chap){
                                    $countSession = detailChapter_count_chapterId($chap['chapterId']);
                                    $countAllDetailChapter += $countSession;
                                }
                                ?>
                                <li class="course lessons"><?=$countAllDetailChapter?> bài giảng</li>
                                <li class="course level"><?=$courseinfo['level']?></li>
                            </ul>
                        </div>
                        <div class="cart-info-price">
                            <div>
                                <a href="<?=$SITE_URL?>?mod=bill&act=deleteCourseInBill&del=<?=$detail['idDetailBill']?>">Xóa</a>
                                <a href="#">Yêu thích</a>
                            </div>
                            <?php if($courseinfo['sale'] != ""){ ?>
                                <span class="price"><?=number_format($courseinfo['price'])?> <span class="vnd">đ</span></span>
                                <span class="sale"><?=number_format($courseinfo['price'] - ($courseinfo['price'] *($courseinfo['sale']/100)))?> <span class="vnd">đ</span> <i class="fa-solid fa-tag"></i></span>
                            <?php } else { ?>
                                <span class="sale"><?=number_format($courseinfo['price'])?> <span class="vnd">đ</span></span>
                            <?php } ?>
                        </div>
                    </div>
                <?php
                }
                }
                ?>
            
        </div>
        <div class="cart-price">
            <h1>Tổng:</h1>
            <div class="total-price">
            <?php if($courseinfo['sale'] != ""){ ?>
                <h2 class="discount-price"><?=number_format($totalBill)?> <span>đ</span></h2>
                <h2 class="discount-sale"><?=number_format($totalBillSale)?> <span>đ</span></h2>
            <?php } else { ?>
                <h2 class="discount-sale"><?=number_format($totalBillSale)?> <span>đ</span></h2>
            <?php } ?>
            </div>
            <a href="<?=$SITE_URL?>?mod=bill&act=payCourse&payBill=<?=$idBillByIdUser['idBill']?>"  class="button-purple-large" style="display:inline-block; text-decoration: none; margin-top: 8px;">Thanh toán</a>
        </div>
    </div>

    <!-- BESTSELLER -->
    <section class="bestseller">
        <div class="bestseller__content td-container">
            <h2>Các khóa học bán chạy nhất</h2>
            <div class="owl-carousel owl-theme bestseller__item">
                <?php
                foreach($top10Course as $course10){?>
                    <div class="card">
                        <a href="<?=$SITE_URL?>?mod=detailcourse&act=showCourse&course=<?=$course10['courseId']?>"><img src="<?=$IMAGE_DIR?>/courses/<?=$course10['image']?>" alt="..."></a>
                        <div class="card-body">
                            <a href="<?=$SITE_URL?>?mod=detailcourse&act=showCourse&course=<?=$course10['courseId']?>">
                                <h5 class="card-title"><?=$course10['title']?></h5>
                            </a>
                            <?php
                            $userteaches = user_select_by_id($course10['userId']);
                            ?>
                            <p class="card-teacher"><?=$userteaches['fullName']?></p>
                            <div class="card-stars">
                                <span class="card-rate">4.5</span>
                                <span class="card-icon">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span class="card-total">(17,915)</span>
                            </div>
                            <div class="card-price">
                            <?php if($course10['sale'] != ""){ ?>
                                <span><?=number_format($course10['price'] - ($course10['price'] *($course10['sale']/100)))?><span class="vnd">đ</span></span>
                                <span class="sale"><?=number_format($course10['price'])?><span class="vnd">đ</span></span>
                            <?php } else { ?>
                                <span><?=number_format($course10['price'])?><span class="vnd">đ</span></span>
                            <?php } ?>
                            </div>
                            <span class="card-sell">Bán chạy nhất</span>
                        </div>
                        <div class="card-popover">
                            <a href="#">
                                <h3><?=$course10['title']?></h3>
                            </a>
                            <div class="section-first">
                                <span class="best-seller">Bán chạy nhất</span>
                                <span>Đăng ngày <span class="date"><?=$course10['date']?></span></span>
                            </div>
                            <div class="section-second">
                                <span>Tổng số <?=$course10['allTime']?> giờ</span>
                                <span class="dot"></span>
                                <span><?=$course10['level']?></span>
                            </div>
                            <p><?=$course10['description']?></p>
                            <div class="card-btn">
                                <?php 
                                $check_course = get_course_in_bill($_SESSION['user']['userId'], $course10['courseId']);
                                if($check_course == 0){?>
                                    <a href="<?=$SITE_URL?>?mod=lesson&act=lessonDetail&course=<?=$course10['courseId']?>" class="add-cart col-9" style="background-color:black;"><i class="fa-solid fa-check"></i> Đang học</a>
                                <?php
                                }elseif($check_course == 1){?>
                                    <a style="background-color: #adb8b8;" href="<?=$SITE_URL?>?mod=bill&act=cartBill" class="add-cart col-9 card-btn_addbill"><i class="fa-solid fa-check"></i> Đã thêm vào giỏ hàng</a>
                                <?php
                                }else{?>
                                    <a href="<?=$SITE_URL?>?mod=bill&act=addBill&course=<?=$course10['courseId']?>" class="add-cart col-9">Thêm vào giỏ hàng</a>
                                <?php
                                }
                                ?>
                                <?php
                                    if(get_course_favourite($_SESSION['user']['userId'], $course10['courseId']) == 0){?>
                                        <a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn&course=<?=$course10['courseId']?>" class="add-wishlist"><i class="fa-regular fa-heart"></i></a>
                                    <?php
                                    }else{?>
                                        <a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn&delcourse=<?=$course10['courseId']?>" class="add-wishlist"><i class="fa-solid fa-heart" style="color: #e00b27;"></i></a>
                                    <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                
            </div>
        </div>

    </section>
</section>