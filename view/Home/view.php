<section class="carousel">
    <div id="carouselTdemy" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel__text">
                    <h1>Xây dựng các đội nhóm luôn sẵn sàng</h1>
                    <p>Xem lý do các tổ chức hàng đầu chọn học với T-Demy.</p>
                    <button class="button-black-large">Xem các khóa học trên T-Demy</button>
                </div>
                <img src="./assets/img/s2.jpg" class="d-block w-100" alt="slide 1">
            </div>
            <div class="carousel-item">
                <div class="carousel__text">
                    <h1>Xây dựng các đội nhóm luôn sẵn sàng</h1>
                    <p>Xem lý do các tổ chức hàng đầu chọn học với T-Demy.</p>
                    <button class="button-black-large">Xem các khóa học trên T-Demy</button>
                </div>
                <img src="./assets/img/s1.jpg" class="d-block w-100" alt="slide 2">
            </div>
            <div class="carousel-item">
                <div class="carousel__text">
                    <h1>Xây dựng các đội nhóm luôn sẵn sàng</h1>
                    <p>Xem lý do các tổ chức hàng đầu chọn học với T-Demy.</p>
                    <button class="button-black-large">Xem các khóa học trên T-Demy</button>
                </div>
                <img src="./assets/img/s3.png" class="d-block w-100" alt="slide 3">
            </div>
            <div class="carousel-item">
                <div class="carousel__text">
                    <h1>Xây dựng các đội nhóm luôn sẵn sàng</h1>
                    <p>Xem lý do các tổ chức hàng đầu chọn học với T-Demy.</p>
                    <button class="button-black-large">Xem các khóa học trên T-Demy</button>
                </div>
                <img src="./assets/img/s4.jpg" class="d-block w-100" alt="slide 4">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTdemy" data-bs-slide="prev">
            <div class="button-prev-medium">
                <i class="fa-solid fa-chevron-left"></i>
            </div>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselTdemy" data-bs-slide="next">
            <div class="button-next-medium">
                <i class="fa-solid fa-chevron-right"></i>
            </div>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section class="courses">
    <div class="courses__content td-container">
        <div class="courses__text">
            <h2>A broad selection of courses</h2>
            <p>Choose from over 210,000 online video courses with new additions published every month</p>
        </div>
        <div class="courses__list">
            <ul class="nav nav-tabs" id="tdTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane"
                        type="button" role="tab" aria-controls="all-tab-pane" aria-selected="true">Tất cả các khóa
                        học</button>
                </li>
                
                <?php
                    foreach ($allKind as $kh) {
                        extract($kh); 
                    ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="<?=$nameCate?>-tab" data-bs-toggle="tab" data-bs-target="#<?=$nameCate?>-tab-pane"
                            type="button" role="tab" aria-controls="<?=$nameCate?>-tab-pane" aria-selected="false"><?=$nameCate?></button>
                    </li>
                <?php
                }
                ?>
            </ul>
            <div class="tab-content" id="tdTabContent">
                <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab"
                    tabindex="0">
                    <div class="courses__des">
                        <h3>Tất cả khóa học</h3>
                        <p>Take one of Udemy's range of Python courses and learn how to code using this incredibly
                            useful language. Its simple syntax and readability makes Python perfect for Flask,
                            Django, data science, and machine learning. You'll learn how to build everything from
                            games to sites to apps. Choose from a range of courses that will appeal to</p>
                        <button class="button-white-medium">Tìm hiểu thêm</button>
                    </div>
                    <div class="owl-carousel owl-theme courses__item">
                    <?php 
                            foreach ($Courses as $course){
                                extract($course); 
                            ?>
                            <div class="card">
                                <a href="#"><img src="./assets/img/courses/<?=$image?>" alt="..."></a>
                                <div class="card-body">
                                    <a href="#">
                                        <h5 class="card-title"><?=$title?></h5>
                                    </a>
                                    <?php
                                    $nameTeacher = user_select_by_id($userId);
                                    extract($nameTeacher); 
                                    ?>
                                    <p class="card-teacher"><?=$fullName?></p>
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
                                        <span><?=number_format($price - ($price * ($sale/100)))?><span class="vnd">đ</span></span>
                                        <span class="sale"><?=number_format($price)?><span class="vnd">đ</span></span>
                                    </div>
                                    <span class="card-sell">Bán chạy nhất</span>
                                </div>
                                <div class="card-popover">
                                    <a href="#">
                                        <h3><?=$title?></h3>
                                    </a>
                                    <div class="section-first">
                                        <span class="best-seller">Bán chạy nhất</span>
                                        <span>Đăng ngày <span class="date"><?=$date?></span></span>
                                    </div>
                                    <div class="section-second">
                                        <span>Tổng số <?=$allTime?></span>
                                        <span class="dot"></span>
                                        <span><?=$level?></span>
                                    </div>
                                    <p><?=$description?></p>
                                    <div class="card-btn row">
                                        <a href="<?=$base_url?>?mod=bill&act=addBill&course=<?=$courseId?>" class="add-cart col-9 card-btn_addbill">Thêm vào giỏ hàng</a>
                                        <button class="add-like col-2">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                    </div>
                </div>
                <?php
                    foreach ($allKind as $kh) {
                        extract($kh); 
                    ?>
                    <div class="tab-pane fade" id="<?=$nameCate?>-tab-pane" role="tabpanel" aria-labelledby="<?=$nameCate?>-tab" tabindex="0">
                        <div class="courses__des">
                            <h3>Khóa học <?=$nameCate?></h3>
                            <p>Take one of Udemy's range of Python courses and learn how to code using this incredibly
                                useful language. Its simple syntax and readability makes Python perfect for Flask,
                                Django, data science, and machine learning. You'll learn how to build everything from
                                games to sites to apps. Choose from a range of courses that will appeal to</p>
                                <button class="button-white-medium">Tìm hiểu thêm</button>
                        </div>
                        <div class="owl-carousel owl-theme courses__item">
                            <?php 
                            $allCourses = course_select_idcate($cateId);
                            foreach ($allCourses as $course){
                                extract($course); 
                            ?>
                            <div class="card">
                                <a href="#"><img src="./assets/img/courses/<?=$image?>" alt="..."></a>
                                <div class="card-body">
                                    <a href="#">
                                        <h5 class="card-title"><?=$title?></h5>
                                    </a>
                                    <p class="card-teacher"><?=$userId?></p>
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
                                        <span><?=number_format($price - ($price * ($sale/100)))?><span class="vnd">đ</span></span>
                                        <span class="sale"><?=number_format($price)?><span class="vnd">đ</span></span>
                                    </div>
                                    <span class="card-sell">Bán chạy nhất</span>
                                </div>
                                <div class="card-popover">
                                    <a href="#">
                                        <h3><?=$title?></h3>
                                    </a>
                                    <div class="section-first">
                                        <span class="best-seller">Bán chạy nhất</span>
                                        <span>Đăng ngày <span class="date"><?=$date?></span></span>
                                    </div>
                                    <div class="section-second">
                                        <span>Tổng số <?=$allTime?></span>
                                        <span class="dot"></span>
                                        <span><?=$level?></span>
                                    </div>
                                    <p><?=$content?></p>
                                    <div class="card-btn row">
                                        <button class="add-cart col-9">Thêm vào giỏ hàng</button>
                                        <button class="add-like col-2">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- FEEDBACK -->
<section class="feedback">
    <div class="feedback_container td-container">
        <h3 class="feedback_title">Nhận xét của học viên</h3>
        <div class="owl-carousel owl-theme feedback__item" id="feedback_carousel-id">
            <?php
                foreach ($allEvaluate as $evaluate) {
                    extract($evaluate); 
                ?>
                <div class="feedback_carousel-list">
                    <div class="feedback_carousel-list-head">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <div class="feedback_carousel-list-text">
                        <p><?=$content?></p>
                    </div>
                    <div class="feedback_carousel-list-user">
                        <?php
                        $user = user_select_by_id($userId);
                        extract($user); 
                        ?>
                        <img src="./assets/img/users/<?=$avatar?>" alt="" class="">
                        <p><?=$fullName?></p>
                    </div>
                    <div class="feedback_carousel-list-end">
                        <?php
                        $course = course_select_by_id($courseId);
                        extract($course); 
                        ?>
                        <a href="" class=""><?=$title?> </a>
                    </div>
                </div>
            <?php
            }
            ?>
            
        </div>
    </div>
</section>
<!-- BESTSELLER -->
<section class="bestseller">
    <div class="bestseller__content td-container">
        <h2>Các khóa học bán chạy nhất</h2>
        <div class="owl-carousel owl-theme bestseller__item">
            <?php
                foreach ($allCourseTop10 as $courseTop10) {
                    extract($courseTop10); 
                ?>
                <div class="card">
                    <a href="#"><img src="./assets/img/courses/<?=$image?>" alt="..."></a>
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title"><?=$title?></h5>
                        </a>
                        <p class="card-teacher"><?=$userId?></p>
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
                            <span><?=number_format($price - ($price * ($sale/100)))?><span class="vnd">đ</span></span>
                            <span class="sale"><?=number_format($price)?><span class="vnd">đ</span></span>
                        </div>
                        <span class="card-sell">Bán chạy nhất</span>
                    </div>
                    <div class="card-popover">
                        <a href="#">
                            <h3><?=$title?></h3>
                        </a>
                        <div class="section-first">
                            <span class="best-seller">Bán chạy nhất</span>
                            <span>Đăng ngày <span class="date"><?=$date?></span></span>
                        </div>
                        <div class="section-second">
                            <span>Tổng số <?=$allTime?></span>
                            <span class="dot"></span>
                            <span><?=$level?></span>
                        </div>
                        <p><?=$description?></p>
                        <div class="card-btn row">
                            <button class="add-cart col-9">Thêm vào giỏ hàng</button>
                            <button class="add-like col-2">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            
        </div>
    </div>

</section>
<!-- CATEGORIES -->
<section class="categories">
    <div class="categories_content td-container">
        <h2>Thể loại khóa học</h2>
        <div class="row justify-content-flex-start">
            <?php
            foreach ($allKind as $kh) {
                extract($kh);
            ?>
                <div class="col-3">
                    <div class="card">
                        <div class="card-img">
                            <a href="#"><img src="./assets/img/categories/<?=$nameCate?>.jpg" class="card-img-top" alt="..."> </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><?=$nameCate?></h3>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<!-- POSTS -->
<section class="posts">
    <div class="posts_container td-container">
        <h3 class="posts_title">Bài viết nổi bật</h3>
        <div class="posts_content">
            <ul class="posts_content-list row">
                <?php
                foreach ($eightNew as $new) {
                    extract($new);
                ?>
                    <li class="posts_content-item col-3">
                        <a href="" class="posts_content-link">
                            <div class="posts_content-link-img">
                                <img src="./assets/img/post/<?=$image?>" alt="" class="">
                            </div>
                            <div class="posts_content-link-title">
                                <p><?=$title?></p>
                            </div>
                            <div class="posts_content-link-user">
                                <?php
                                $user = user_select_by_id($userId);
                                extract($user);
                                
                                ?>
                                <p href=""><?=$fullName?></p>
                                <p><?=$date?></p>
                            </div>
                        </a>
                    </li>
                <?php
                }
                ?>
                
            </ul>
        </div>
    </div>
</section>
<!-- COMPANIES -->
<section class="companies">
    <div class="companies_container td-container">
        <div class="row">
            <div class="col-sm">
                <h1>ĐƯỢC TIN TƯỞNG BỞI CÁC CÔNG TY HÀNG ĐẦU</h1>
                <p>Các công ty hàng đầu sử dụng các khóa học tương tự để giúp nhân viên giữ cho các kỹ năng của họ
                    luôn mới mẻ.</p>
            </div>
            <div class="col-img">
                <img src="./assets/img/companies/img1.svg" alt="">
                <img src="./assets/img/companies/img2.svg" alt="">
                <img src="./assets/img/companies/img3.svg" alt="">
                <img src="./assets/img/companies/img4.svg" alt="">
                <img src="./assets/img/companies/img5.svg" alt="">
                <img src="./assets/img/companies/img6.svg" alt="">
            </div>

        </div>
    </div>
</section>
<!-- TEACHING -->
<section class="teaching">
    <div class="teaching_container td-container">
        <div class="row">
            <div class="col-sm col-left">
            <img src="./assets/img/teaching/instructor-1x-v3.jpg" alt="">
            </div>
            <div class="col-sm col-right">
            <h1>Trở thành giảng viên</h1>
            <p>Các giảng viên từ khắp nơi trên thế giới giảng</br>
                    dạy cho hàng triệu sinh viên trên Udyme.</br>
                    Chúng tôi cung cấp các công cụ và kỹ năng </br>
                    để dạy những gì bạn yêu thích.
            </p>
            <button class="button-black-large">Bắt đầu dạy học ngay hôm nay</button>
            </div>
        </div>
    </div>
</section>