<section class="detail">
    <div class="detail__content">
        <div class="detail__sidebar detail-container">
            <div class="detail__sidebarMain">
                <div class="detail__sidebarContent">
                    <div class="detail__sidebarImg">
                        <img class="img-fluid" src="./assets/img/courses/<?=$courseSlectbyid['image']?>" alt="">
                    </div>
                    <div class="detail__sidebarInfo">
                        <div class="info-price">
                        <?php if($courseSlectbyid['sale'] == null){ ?>
                            <div class="price-sale">
                                <span class="sale-detail" style="margin-bottom: 12px;"><?=number_format($courseSlectbyid['price'])?> <span class="cur-vnd">đ</span></span>               
                            </div>
                        <?php } else { ?>
                            <div class="price-sale">
                                <span class="sale-detail"><?=number_format($courseSlectbyid['price'] - ($courseSlectbyid['price'] *($courseSlectbyid['sale']/100)))?> <span class="cur-vnd">đ</span></span>
                                <span class="price-detail"><?=number_format($courseSlectbyid['price'])?> <span class="cur-vnd">đ</span></span>
                            </div>
                            <p class="sale-rating">Giảm <?=$courseSlectbyid['sale']?>%</p>
                        <?php } ?>
                        </div>
                        <div class="info-btn">
                            
                            <a href="<?=$base_url?>?mod=detailcourse&act=addBill&course=<?=$courseSlectbyid['courseId']?>" class="add-to-cart">Thêm vào giỏ hàng</a>
                            <button class="add-wishlist"><i class="fa-regular fa-heart"></i></button>
                        </div>
                        <div class="btn-buyNow">
                            <button class="buy-now">Mua ngay</button>
                        </div>
                        <div class="info-detail">
                            <h3>Khóa học này bao gồm:</h3>
                            <ul>
                                <li><i class="fa-brands fa-youtube"></i> <span>65,5 giờ video theo yêu cầu</span></li>
                                <li><i class="fa-solid fa-file"></i> <span>73 bài viết</span></li>
                                <li><i class="fa-solid fa-mobile"></i> <span>Truy cập trên thiết bị di động và PC</span></li>
                                <li><i class="fa-solid fa-infinity"></i> <span>Quyền truy cập đầy đủ suốt đời</span></li>
                                <li><i class="fa-solid fa-trophy"></i> <span>Giấy chứng nhận hoàn thành</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail__top">
            <div class="detail__text detail-container">
                <div class="detail__main">
                    <div class="detail__cate">
                        <a href="#"><?=$cate['nameCate']?></a>
                    </div>
                    <h1><?=$courseSlectbyid['title']?></h1>
                    <h3><?=$courseSlectbyid['description']?></h3>
                    <div class="detail__sub">
                        <span class="button-best-seller">Bán chạy nhất</span>
                        <span class="detail__rate">5,0</span>
                        <span class="detail__icon">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </span>
                        <span class="detail__total"><a href="#">(17915 đánh giá)</a></span>
                        <span class="detail__student">20.000 học viên</span>
                    </div>
                    <p>Được tạo bởi <a href="#teacher"><?=$user['fullName']?></a></p>
                    <div class="detail__date">
                        <i class="fa-solid fa-square-pen"></i>
                        <span>Khóa học đăng ngày <?=$courseSlectbyid['date']?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail__bottom detail-container">
            <div class="detail__bottom-content">
                <div class="detai__companies">
                    <h5>Các công ty hàng đầu cung cấp khóa học này cho nhân viên</h5>
                    <p>Chúng tôi lựa chọn khóa học này cho tuyển tập khóa học đầu bảng được các doanh nghiệp tin
                        dùng.</p>
                    <div class="detail__img">
                        <img src="./assets/img/companies/img1.svg" alt="company 1">
                        <img src="./assets/img/companies/img2.svg" alt="company 2">
                        <img src="./assets/img/companies/img3.svg" alt="company 3">
                        <img src="./assets/img/companies/img4.svg" alt="company 4">
                        <img src="./assets/img/companies/img5.svg" alt="company 5">
                    </div>
                </div>
                <div class="detail__chapter">
                    <h2>Nội dung khóa học</h2>
                    <div class="detail__statistic">
                        <span><?=$countChapter?> chương</span>
                        <span> • </span>
                        <span><?=$countAllDetailChapter?> bài giảng</span>
                        <span> • </span>
                        <span>9 giờ 30 phút tổng thời lượng</span>
                    </div>
                    <div class="detail__lesson">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <?php
                            $countAllDetailChapter = 0;
                            foreach ($chapter as $chap){
                                extract($chap);
                                $countSession = detailChapter_count_chapterId($chapterId);
                            ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?=$numberOrder?>"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapse<?=$numberOrder?>">
                                            <span class="detail__title">
                                                <span class="title-chapter"><?=$title?></span>
                                                <span><?=$countSession?> bài giảng • <span>1 giờ 27 phút</span></span>
                                            </span>
                                        </button>
                                    </h2>
                                        <div id="panelsStayOpen-collapse<?=$numberOrder?>" class="accordion-collapse collapse">
                                        <?php
                                        $lesson = detailChapter_select_by_idchapter($chapterId);
                                        foreach ($lesson as $les){
                                            extract($les);?>
                                            <div class="accordion-body">
                                                <div class="detail__source">    
                                                    <div class="detail__doc">
                                                        <i class="fa-brands fa-youtube"></i>
                                                        <a href="#"><?=$title?></a>
                                                    </div>
                                                    <span><?=$timeLesson?></span>
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
                <div class="detail__des">
                    <h2>Mô tả</h2>
                    <pre><?=$courseSlectbyid['content']?>
                    </pre>
                </div>
                <div class="detail__kind">
                    <h2>Khóa học cùng loại</h2>
                    <div class="detail__sameKind">
                        <?php foreach($fiveCourseSameType as $CourseSameType){?>
                            <div class="detail__item">
                                <div class="kind-img">
                                    <img src="./assets/img/courses/<?=$CourseSameType['image']?>" alt="">
                                </div>
                                <div class="kind-content">
                                    <a href="<?=$base_url?>?mod=detailcourse&act=showCourse&course=<?=$CourseSameType['courseId']?>"><?=$courseSlectbyid['title']?></a>
                                    <div class="kind-bottom">
                                        <span class="kind-time">Tổng số <?=$CourseSameType['allTime']?></span>
                                        <span>•</span>
                                        <span>Cập nhật <?=$CourseSameType['date']?></span>
                                    </div>
                                </div>
                                <div class="kind-number">
                                    <span class="kind-rate">
                                        <span>4,7</span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                    </span>
                                    <span class="kind-total">
                                        <span><i class="fa-solid fa-user-group"></i></span>
                                        <span>1.000.230</span>
                                    </span>
                                    <div class="kind-price">
                                        <p><?=number_format($CourseSameType['price'] - ($CourseSameType['price'] *($CourseSameType['sale']/100)))?> <span>đ</span></p>
                                        <p class="kind-sale"><?=number_format($CourseSameType['price'])?> <span>đ</span></p>
                                    </div>
                                </div>
                                <div class="kind-button">
                                    <button><i class="fa-regular fa-heart"></i></button>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        
                    </div>
                </div>
                <div class="detail__teacher">
                    <h2>Giảng viên</h2>
                    <div class="detail__info" id="teacher">
                        <a href="#"><?=$user['fullName']?></a>
                        <p class="detail__career"><?=$user['career']?></p>
                        <div class="detail__avatar">
                            <a href="#" class="mb-0"><img class="img-fluid" src="./assets/img/users/<?=$user['avatar']?>"
                                    alt=""></a>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                    <span>4,7 xếp hạng giảng viên</span>
                                </li>
                                <li>
                                    <i class="fa fa-comment"></i>
                                    <span>654817 đánh giá</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-user-group"></i>
                                    <span>2157472 học viên</span>
                                </li>
                                <li>
                                    <i class="fa-brands fa-youtube"></i>
                                    <span><?=$countCourseByTeacher?> khóa học</span>
                                </li>
                            </ul>
                        </div>
                        <pre><?=$user['information']?></pre>
                    </div>
                </div>
                <div class="detail__evaluate">
                    <h2><i class="fa-solid fa-star"></i> 4,7 xếp hạng khóa học • 654,817 đánh giá</h2>
                    <div class="detail__allEvaluate">
                        <?php 
                        foreach($eluavateSelectByIdcourse as $eluavate){
                            $userEluavate = user_select_by_id($eluavate['userId']);
                            ?>
                            <div class="detail__itemEvaluate item-odd">
                                <div class="detail__user">
                                    <img class="img-fluid" src="./assets/img/users/<?=$userEluavate['avatar']?>" alt="">
                                    <div class="detail__name">
                                        <p><?=$userEluavate['fullName']?></p>
                                        <div class="detail__stars">
                                            <span class="stars-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                            <span class="date-rating"><?=$eluavate['evaluateTime']?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail__contentEvaluate">
                                    <p><?=$eluavate['content']?></p>
                                </div>
                                <div class="detail__review">
                                    <span>Bạn thấy hữu ích?</span>
                                    <i class="fa-regular fa-thumbs-up up"></i>
                                    <i class="fa-solid fa-thumbs-up up d-none"></i>
                                    <i class="fa-regular fa-thumbs-down down"></i>
                                    <i class="fa-solid fa-thumbs-down down d-none"></i>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        
                    </div>
                </div>
                <div class="detail__courseTeacher">
                    <h2>Các khóa học khác của <a href="#"><?=$user['fullName']?></a></h2>
                    <div class="detail__allCourse">
                        <?php
                        foreach($courseSelectByTeacher as $courseSameTeacher){?>
                            <div class="card">
                                <a href="<?=$base_url?>?mod=detailcourse&act=showCourse&course=<?=$courseSameTeacher['courseId']?>"><img src="./assets/img/courses/<?=$courseSameTeacher['image']?>" alt="..."></a>
                                <div class="card-body">
                                    <a href="<?=$base_url?>?mod=detailcourse&act=showCourse&course=<?=$courseSameTeacher['courseId']?>">
                                        <h5 class="card-title"><?=$courseSameTeacher['title']?></h5>
                                    </a>
                                    <?php $user = user_select_by_id($courseSameTeacher['userId']); ?>
                                    <p class="card-teacher"><?=$user['fullName']?></p>
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
                                    <div class="card-time">
                                        <span>Tổng số <?=$courseSameTeacher['allTime']?></span>
                                        <span class="card-dot">•</span>
                                        <span><?=$courseSameTeacher['level']?></span>
                                    </div>
                                    <div class="card-price">
                                        <span><?=number_format($courseSameTeacher['price'] - ($courseSameTeacher['price'] *($courseSameTeacher['sale']/100)))?><span class="vnd">đ</span></span>
                                        <span class="sale"><?=number_format($courseSameTeacher['price'])?><span class="vnd">đ</span></span>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>