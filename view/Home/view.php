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
                    require_once 'controller/kind/all-kind.php';
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
                        <h3>Expand your career opportunities with Python</h3>
                        <p>Take one of Udemy's range of Python courses and learn how to code using this incredibly
                            useful language. Its simple syntax and readability makes Python perfect for Flask,
                            Django, data science, and machine learning. You'll learn how to build everything from
                            games to sites to apps. Choose from a range of courses that will appeal to</p>
                        <button class="button-white-medium">Read more</button>
                    </div>
                    <div class="owl-carousel owl-theme courses__item">
                        <div class="card">
                            <a href="#"><img src="./img/courses/fe1.jpg" alt="..."></a>
                            <div class="card-body">
                                <a href="#">
                                    <h5 class="card-title">Tên khóa học FE</h5>
                                </a>
                                <p class="card-teacher">Giảng viên</p>
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
                                    <span>799,000<span class="vnd">đ</span></span>
                                    <span class="sale">2,990,000<span class="vnd">đ</span></span>
                                </div>
                                <span class="card-sell">Bán chạy nhất</span>
                            </div>
                            <div class="card-popover">
                                <a href="#">
                                    <h3>Tên khóa học</h3>
                                </a>
                                <div class="section-first">
                                    <span class="best-seller">Bán chạy nhất</span>
                                    <span>Đăng ngày <span class="date">11/07/2023</span></span>
                                </div>
                                <div class="section-second">
                                    <span>Tổng số 36 giờ</span>
                                    <span class="dot"></span>
                                    <span>Tất cả trình độ</span>
                                </div>
                                <p>React.JS là một thư viện, framework giúp xây dựng một website hiện đại, có tính
                                    mở rộng và hiệu năng cực lớn.</p>
                                <div class="card-btn row">
                                    <button class="add-cart col-9">Thêm vào giỏ hàng</button>
                                    <button class="add-like col-2">
                                        <i class="fa-regular fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <a href="#"><img src="./img/courses/be1.jpg" alt="..."></a>
                            <div class="card-body">
                                <a href="#">
                                    <h5 class="card-title">Tên khóa học BE</h5>
                                </a>
                                <p class="card-teacher">Giảng viên</p>
                                <div class="card-stars">
                                    <span class="card-rate">4.5</span>
                                    <span class="card-icon">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="card-total">(17.915)</span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <a href="#"><img src="./img/courses/java1.jpg" alt="..."></a>
                            <div class="card-body">
                                <a href="#">
                                    <h5 class="card-title">Tên khóa học Java</h5>
                                </a>
                                <p class="card-teacher">Giảng viên</p>
                                <div class="card-stars">
                                    <span class="card-rate">4.5</span>
                                    <span class="card-icon">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="card-total">(17.915)</span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <a href="#"><img src="./img/courses/mobile1.jpg" alt="..."></a>
                            <div class="card-body">
                                <a href="#">
                                    <h5 class="card-title">Tên khóa học Mobile</h5>
                                </a>
                                <p class="card-teacher">Giảng viên</p>
                                <div class="card-stars">
                                    <span class="card-rate">4.5</span>
                                    <span class="card-icon">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="card-total">(17.915)</span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <a href="#"><img src="./img/courses/python1.jpg" alt="..."></a>
                            <div class="card-body">
                                <a href="#">
                                    <h5 class="card-title">Tên khóa học Python</h5>
                                </a>
                                <p class="card-teacher">Giảng viên</p>
                                <div class="card-stars">
                                    <span class="card-rate">4.5</span>
                                    <span class="card-icon">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="card-total">(17.915)</span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <a href="#"><img src="./img/courses/sql1.jpg" alt="..."></a>
                            <div class="card-body">
                                <a href="#">
                                    <h5 class="card-title">Tên khóa học SQL</h5>
                                </a>
                                <p class="card-teacher">Giảng viên</p>
                                <div class="card-stars">
                                    <span class="card-rate">4.5</span>
                                    <span class="card-icon">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="card-total">(17.915)</span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <a href="#"><img src="./img/courses/php1.jpg" alt="..."></a>
                            <div class="card-body">
                                <a href="#">
                                    <h5 class="card-title">Tên khóa học PHP</h5>
                                </a>
                                <p class="card-teacher">Giảng viên</p>
                                <div class="card-stars">
                                    <span class="card-rate">4.5</span>
                                    <span class="card-icon">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="card-total">(17.915)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    require_once 'controller/kind/all-kind.php';
                    foreach ($allKind as $kh) {
                        extract($kh); 
                    ?>
                    <div class="tab-pane fade" id="<?=$nameCate?>-tab-pane" role="tabpanel" aria-labelledby="<?=$nameCate?>-tab" tabindex="0">
                        <div class="courses__des">
                            <h3>Expand your career opportunities with <?=$nameCate?></h3>
                            <p>Take one of Udemy's range of Python courses and learn how to code using this incredibly
                                useful language. Its simple syntax and readability makes Python perfect for Flask,
                                Django, data science, and machine learning. You'll learn how to build everything from
                                games to sites to apps. Choose from a range of courses that will appeal to</p>
                            <button class="btn btn-primary">Read more</button>
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
                                        <span><?=$price?><span class="vnd">đ</span></span>
                                        <span class="sale"><?=$sale?><span class="vnd">đ</span></span>
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