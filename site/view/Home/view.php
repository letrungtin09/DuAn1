<section class="carousel">
    <div id="carouselTdemy" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel__text">
                    <h1>Xây dựng các đội nhóm luôn sẵn sàng</h1>
                    <p>Xem lý do các tổ chức hàng đầu chọn học với T-Demy.</p>
                    <button class="button-black-large">Xem các khóa học trên T-Demy</button>
                </div>
                <img src="<?=$IMAGE_DIR?>/s2.jpg" class="d-block w-100" alt="slide 1">
            </div>
            <div class="carousel-item">
                <div class="carousel__text">
                    <h1>Xây dựng các đội nhóm luôn sẵn sàng</h1>
                    <p>Xem lý do các tổ chức hàng đầu chọn học với T-Demy.</p>
                    <button class="button-black-large">Xem các khóa học trên T-Demy</button>
                </div>
                <img src="<?=$IMAGE_DIR?>/s1.jpg" class="d-block w-100" alt="slide 2">
            </div>
            <div class="carousel-item">
                <div class="carousel__text">
                    <h1>Xây dựng các đội nhóm luôn sẵn sàng</h1>
                    <p>Xem lý do các tổ chức hàng đầu chọn học với T-Demy.</p>
                    <button class="button-black-large">Xem các khóa học trên T-Demy</button>
                </div>
                <img src="<?=$IMAGE_DIR?>/s3.png" class="d-block w-100" alt="slide 3">
            </div>
            <div class="carousel-item">
                <div class="carousel__text">
                    <h1>Xây dựng các đội nhóm luôn sẵn sàng</h1>
                    <p>Xem lý do các tổ chức hàng đầu chọn học với T-Demy.</p>
                    <button class="button-black-large">Xem các khóa học trên T-Demy</button>
                </div>
                <img src="<?=$IMAGE_DIR?>/s4.jpg" class="d-block w-100" alt="slide 4">
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
            <h2>Nhiều sự lựa chọn cho các khóa học</h2>
            <p>Chọn từ hơn 200 khóa học video trực tuyến với các bổ sung mới được xuất bản hàng tháng</p>
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
                        <p>Thế giới phát triển web rộng lớn như chính internet. Phần lớn đời sống xã hội và nghề nghiệp của chúng ta diễn ra trên internet, điều này thúc đẩy các ngành công nghiệp mới nhằm tạo, quản lý và gỡ lỗi các trang web và ứng dụng mà chúng ta ngày càng phụ thuộc vào.</p>
                    </div>
                    <div class="owl-carousel owl-theme courses__item">
                    <?php
                    if(isset($_SESSION['user'])){
                        if(bill_exist($_SESSION['user']['userId'])){
                            $billByUserId = bill_select_by_userId($_SESSION['user']['userId']);
                            $detailBillByIdBill = detailBill_select_by_idBill($billByUserId['idBill']);
                        }
                    }
                        foreach ($Courses as $courseal){
                        ?>
                        <div class="card">
                            <a href="<?=$SITE_URL?>?mod=detailcourse&act=showCourse&course=<?=$courseal['courseId']?>"><img src="<?=$IMAGE_DIR?>/courses/<?=$courseal['image']?>" alt="..."></a>
                            <div class="card-body">
                                <a href="<?=$SITE_URL?>?mod=detailcourse&act=showCourse&course=<?=$courseal['courseId']?>">
                                    <h5 class="card-title"><?=$courseal['title']?></h5>
                                </a>
                                <p class="card-teacher"><?=get_name_teacher($courseal['userId'])?></p>
                                <div class="card-stars">
                                    <span class="card-rate"><?=EluavateRate($courseal['userId'])?></span>
                                    <span class="card-icon">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="card-total">(<?=eluavate_count($courseal['courseId'])?>)</span>
                                </div>
                                <div class="card-price">
                                    <?php if($courseal['sale'] == null){ ?>
                                        <span><?=number_format($courseal['price'])?><span class="vnd">đ</span></span>
                                    <?php } else { ?>
                                        <span><?=number_format($courseal['price'] - ($courseal['price'] * ($courseal['sale']/100)))?><span class="vnd">đ</span></span>
                                        <span class="sale"><?=number_format($courseal['price'])?><span class="vnd">đ</span></span>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="card-popover">
                                <a href="#">
                                    <h3 class="popover-title"><?=$courseal['title']?></h3>
                                </a>
                                <div class="section-first">
                                    <span class="best-seller">Bán chạy nhất</span>
                                    <span>Đăng ngày <span class="date"><?=$courseal['date']?></span></span>
                                </div>
                                <div class="section-second">
                                    <span>Tổng số <?=$courseal['allTime']?></span>
                                    <span class="dot"></span>
                                    <span><?=$courseal['level']?></span>
                                </div>
                                <p class="description-text"><?=$courseal['description']?></p>
                                <div class="card-btn row">
                                    <?php
                                    $checkBuy = "";
                                    $checkRegister = "";
                                    if(isset($courseRegisted)){
                                        foreach($courseRegisted as $courseRegis){
                                            if($courseRegis['courseId'] == $courseal['courseId']){
                                                $checkRegister = 1;
                                                break;
                                            }
                                        }
                                    }
                                    if(isset($detailBillByIdBill)){
                                        foreach($detailBillByIdBill as $coursebuied){
                                            if($coursebuied['courseId'] == $courseal['courseId']){
                                                $checkBuy = 1;
                                                break;
                                            }
                                        }
                                    }
                                    if(isset($_SESSION['user'])){
                                        if($checkRegister == 1){?>
                                            <a id="" class="add-cart col-9" style="background-color:black;"><i class="fa-solid fa-check"></i> Đang học</a>
                                            <?php
                                                if(get_course_favourite($_SESSION['user']['userId'], $courseal['courseId']) == 0){?>
                                                    <a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn&course=<?=$courseal['courseId']?>" class="add-like col-2">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </a>
                                                <?php
                                                }else{?>
                                                    <a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn&delcourse=<?=$courseal['courseId']?>" class="add-like col-2">
                                                        <i class="fa-solid fa-heart" style="color: #e00b27;"></i>
                                                    </a>
                                                    
                                                <?php
                                                }
                                            ?>
                                        <?php
                                        } else{
                                            if($checkBuy == 1){?>
                                                <a href="<?=$SITE_URL?>?mod=bill&act=cartBill" class="add-cart col-9 card-btn_addbill"><i class="fa-solid fa-check"></i> Đã thêm vào giỏ hàng</a>
                                                <?php
                                                    if(get_course_favourite($_SESSION['user']['userId'], $courseal['courseId']) == 0){?>
                                                        <a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn&course=<?=$courseal['courseId']?>" class="add-like col-2">
                                                            <i class="fa-regular fa-heart"></i>
                                                        </a>
                                                    <?php
                                                    }else{?>
                                                        <a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn&delcourse=<?=$courseal['courseId']?>" class="add-like col-2">
                                                            <i class="fa-solid fa-heart" style="color: #e00b27;"></i>
                                                        </a>
                                                        
                                                    <?php
                                                    }
                                                ?>
                                            <?php
                                            } else{?>
                                                <a href="<?=$SITE_URL?>?mod=bill&act=addBill&course=<?=$courseal['courseId']?>" class="add-cart col-9 card-btn_addbill">Thêm vào giỏ hàng</a>
                                                <?php
                                                    if(get_course_favourite($_SESSION['user']['userId'], $courseal['courseId']) == 0){?>
                                                        <a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn&course=<?=$courseal['courseId']?>" class="add-like col-2">
                                                            <i class="fa-regular fa-heart"></i>
                                                        </a>
                                                    <?php
                                                    }else{?>
                                                        <a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn&delcourse=<?=$courseal['courseId']?>" class="add-like col-2">
                                                            <i class="fa-solid fa-heart" style="color: #e00b27;"></i>
                                                        </a>
                                                        
                                                    <?php
                                                    }
                                                ?>
                                            <?php
                                            }
                                        }
                                    }else{?>
                                    <a href="<?=$SITE_URL?>?mod=user&act=login" class="add-cart col-9">Thêm vào giỏ hàng</a>
                                    <?php
                                        if(get_course_favourite($_SESSION['user']['userId'], $courseal['courseId']) == 0){?>
                                            <a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn&course=<?=$courseal['courseId']?>" class="add-like col-2">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        <?php
                                        }else{?>
                                            <a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn&delcourse=<?=$courseal['courseId']?>" class="add-like col-2">
                                                <i class="fa-solid fa-heart" style="color: #e00b27;"></i>
                                            </a>
                                            
                                        <?php
                                        }
                                    ?>
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
                <?php
                    foreach ($allKind as $khal) {
                    ?>
                    <div class="tab-pane fade" id="<?=$khal['nameCate']?>-tab-pane" role="tabpanel" aria-labelledby="<?=$khal['nameCate']?>-tab" tabindex="0">
                        <div class="courses__des">
                            <h3>Khóa học <?=$khal['nameCate']?></h3>
                            <p>Thế giới phát triển web rộng lớn như chính internet. Phần lớn đời sống xã hội và nghề nghiệp của chúng ta diễn ra trên internet, điều này thúc đẩy các ngành công nghiệp mới nhằm tạo, quản lý và gỡ lỗi các trang web và ứng dụng mà chúng ta ngày càng phụ thuộc vào.</p>
                        </div>
                        <div class="owl-carousel owl-theme courses__item">
                            <?php 
                            $allCourses = course_select_idcate($khal['cateId']);
                            foreach ($allCourses as $courseall){
                            ?>
                            <div class="card">
                                <a href="<?=$SITE_URL?>?mod=detailcourse&act=showCourse&course=<?=$courseall['courseId']?>"><img src="<?=$IMAGE_DIR?>/courses/<?=$courseall['image']?>" alt="..."></a>
                                <div class="card-body">
                                    <a href="<?=$SITE_URL?>?mod=detailcourse&act=showCourse&course=<?=$courseall['courseId']?>">
                                        <h5 class="card-title"><?=$courseall['title']?></h5>
                                    </a>
                                    <p class="card-teacher"><?=get_name_teacher($courseall['userId'])?></p>
                                    <div class="card-stars">
                                        <span class="card-rate"><?=EluavateRate($courseall['userId'])?></span>
                                        <span class="card-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                        <span class="card-total">(<?=eluavate_count($courseal['courseId'])?>)</span>
                                    </div>
                                    <div class="card-price">
                                        <?php if($courseall['sale'] == null){ ?>
                                            <span><?=number_format($courseall['price'])?><span class="vnd">đ</span></span>
                                        <?php } else { ?>
                                            <span><?=number_format($courseall['price'] - ($courseall['price'] * ($courseall['sale']/100)))?><span class="vnd">đ</span></span>
                                            <span class="sale"><?=number_format($courseall['price'])?><span class="vnd">đ</span></span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="card-popover">
                                    <a href="#">
                                        <h3 class="popover-title"><?=$courseall['title']?></h3>
                                    </a>
                                    <div class="section-first">
                                        <span class="best-seller">Bán chạy nhất</span>
                                        <span>Đăng ngày <span class="date"><?=$courseall['date']?></span></span>
                                    </div>
                                    <div class="section-second">
                                        <span>Tổng số <?=$courseall['allTime']?></span>
                                        <span class="dot"></span>
                                        <span><?=$courseall['level']?></span>
                                    </div>
                                    <p class="description-text"><?=$courseall['description']?></p>
                                    <div class="card-btn row">
                                        <a href="<?=$SITE_URL?>?mod=bill&act=addBill&course=<?=$courseall['courseId']?>" class="add-cart col-9">Thêm vào giỏ hàng</a>
                                        <?php
                                            if(get_course_favourite($_SESSION['user']['userId'], $courseal['courseId']) == 0){?>
                                                <a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn&course=<?=$courseal['courseId']?>" class="add-like col-2">
                                                    <i class="fa-regular fa-heart"></i>
                                                </a>
                                            <?php
                                            }else{?>
                                                <a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn&delcourse=<?=$courseal['courseId']?>" class="add-like col-2">
                                                    <i class="fa-solid fa-heart" style="color: #e00b27;"></i>
                                                </a>
                                                
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
                ?>
                <div class="feedback_carousel-list">
                    <div class="feedback_carousel-list-head">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <div class="feedback_carousel-list-text">
                        <p><?=$evaluate['content']?></p>
                    </div>
                    <div class="feedback_carousel-list-user">
                        <?php
                        $userid = user_select_by_id($evaluate['userId']);
                        ?>
                        <img src="<?=$IMAGE_DIR?>/users/<?=$userid['avatar']?>" alt="" class="">
                        <p><?=$userid['fullName']?></p>
                    </div>
                    <div class="feedback_carousel-list-end">
                        <?php
                        $coursefeedback = course_select_by_id($evaluate['courseId']);
                        ?>
                        <a href="" class=""><?=$coursefeedback['title']?> </a>
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
             if(isset($_SESSION['user'])){
                 if(bill_exist($_SESSION['user']['userId'])){
                     $billByUserId = bill_select_by_userId($_SESSION['user']['userId']);
                     $detailBillByIdBilltop10 = detailBill_select_by_idBill($billByUserId['idBill']);
                 }
             }
                foreach ($allCourseTop10 as $courseTop10) {
                ?>
                <div class="card">
                    <a href="<?=$SITE_URL?>?mod=detailcourse&act=showCourse&course=<?=$courseTop10['courseId']?>"><img src="<?=$IMAGE_DIR?>/courses/<?=$courseTop10['image']?>" alt="..."></a>
                    <div class="card-body">
                        <a href="<?=$SITE_URL?>?mod=detailcourse&act=showCourse&course=<?=$courseTop10['courseId']?>">
                            <h5 class="card-title"><?=$courseTop10['title']?></h5>
                        </a>
                        <p class="card-teacher"><?=get_name_teacher($courseTop10['userId'])?></p>
                        <div class="card-stars">
                            <span class="card-rate"><?=EluavateRate($courseTop10['userId'])?></span>
                            <span class="card-icon">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <span class="card-total">(<?=eluavate_count($courseTop10['courseId'])?>)</span>
                        </div>
                        <div class="card-price">
                            <?php if($courseTop10['sale'] == null){ ?>
                                <span><?=number_format($courseTop10['price'])?><span class="vnd">đ</span></span>
                            <?php } else { ?>
                                <span><?=number_format($courseTop10['price'] - ($courseTop10['price'] * ($courseTop10['sale']/100)))?><span class="vnd">đ</span></span>
                                <span class="sale"><?=number_format($courseTop10['price'])?><span class="vnd">đ</span></span>
                            <?php } ?>
                        </div>
                        <span class="card-sell">Bán chạy nhất</span>
                    </div>
                    <div class="card-popover">
                        <a href="#">
                            <h3 class="popover-title"><?=$courseTop10['title']?></h3>
                        </a>
                        <div class="section-first">
                            <span class="best-seller">Bán chạy nhất</span>
                            <span>Đăng ngày <span class="date"><?=$courseTop10['date']?></span></span>
                        </div>
                        <div class="section-second">
                            <span>Tổng số <?=$courseTop10['allTime']?></span>
                            <span class="dot"></span>
                            <span><?=$courseTop10['level']?></span>
                        </div>
                        <p class="description-text"><?=$courseTop10['description']?></p>
                        <div class="card-btn row">
                        <?php
                            $checkBuytop10 = "";
                            $checkRegistertop10 = "";
                            if(isset($courseRegisted)){
                                foreach($courseRegisted as $courseRegis){
                                    if($courseRegis['courseId'] == $courseTop10['courseId']){
                                        $checkRegistertop10 = 1;
                                        break;
                                    }
                                }
                            }
                            if(isset($detailBillByIdBilltop10)){
                                foreach($detailBillByIdBilltop10 as $coursebuied){
                                    if($coursebuied['courseId'] == $courseTop10['courseId']){
                                        $checkBuytop10 = 1;
                                        break;
                                    }
                                }
                            }
                            if(isset($_SESSION['user'])){
                                if($checkRegistertop10 == 1){?>
                                    <a id="" class="add-cart col-9" style="background-color: black;"><i class="fa-solid fa-check"></i> Đang học</a>
                                    <?php
                                                if(get_course_favourite($_SESSION['user']['userId'], $courseTop10['courseId']) == 0){?>
                                                    <a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn&course=<?=$courseTop10['courseId']?>" class="add-like col-2">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </a>
                                                <?php
                                                }else{?>
                                                    <a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn&delcourse=<?=$courseTop10['courseId']?>" class="add-like col-2">
                                                        <i class="fa-solid fa-heart" style="color: #e00b27;"></i>
                                                    </a>
                                                    
                                                <?php
                                                }
                                    ?>
                                <?php
                                } else{
                                    if($checkBuytop10 == 1){?>
                                        <a href="<?=$SITE_URL?>?mod=bill&act=cartBill" id="" class="add-cart col-9"style=""><i class="fa-solid fa-check"></i> Đã thêm vào giỏ hàng</a>
                                        <?php
                                                    if(get_course_favourite($_SESSION['user']['userId'], $courseTop10['courseId']) == 0){?>
                                                        <a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn&course=<?=$courseTop10['courseId']?>" class="add-like col-2">
                                                            <i class="fa-regular fa-heart"></i>
                                                        </a>
                                                    <?php
                                                    }else{?>
                                                        <a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn&delcourse=<?=$courseTop10['courseId']?>" class="add-like col-2">
                                                            <i class="fa-solid fa-heart" style="color: #e00b27;"></i>
                                                        </a>
                                                        
                                                    <?php
                                                    }
                                        ?>
                                    <?php
                                    } else{?>
                                        <a href="<?=$SITE_URL?>?mod=bill&act=addBill&course=<?=$courseTop10['courseId']?>" class="add-cart col-9">Thêm vào giỏ hàng</a>
                                        <?php
                                                    if(get_course_favourite($_SESSION['user']['userId'], $courseTop10['courseId']) == 0){?>
                                                        <a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn&course=<?=$courseTop10['courseId']?>" class="add-like col-2">
                                                            <i class="fa-regular fa-heart"></i>
                                                        </a>
                                                    <?php
                                                    }else{?>
                                                        <a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn&delcourse=<?=$courseTop10['courseId']?>" class="add-like col-2">
                                                            <i class="fa-solid fa-heart" style="color: #e00b27;"></i>
                                                        </a>
                                                        
                                                    <?php
                                                    }
                                        ?>
                                    <?php
                                    }
                                }
                            }else{?>
                                <a href="<?=$SITE_URL?>?mod=user&act=login" class="add-cart col-9">Thêm vào giỏ hàng</a>
                                <?php
                                                    if(get_course_favourite($_SESSION['user']['userId'], $courseTop10['courseId']) == 0){?>
                                                        <a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn&course=<?=$courseTop10['courseId']?>" class="add-like col-2">
                                                            <i class="fa-regular fa-heart"></i>
                                                        </a>
                                                    <?php
                                                    }else{?>
                                                        <a href="<?=$SITE_URL?>?mod=mylearning&act=mylearn&delcourse=<?=$courseTop10['courseId']?>" class="add-like col-2">
                                                            <i class="fa-solid fa-heart" style="color: #e00b27;"></i>
                                                        </a>
                                                        
                                                    <?php
                                                    }
                                ?>
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
<!-- CATEGORIES -->
<section class="categories">
    <div class="categories_content td-container">
        <h2>Thể loại khóa học</h2>
        <div class="row justify-content-flex-start">
            <?php
            foreach ($allKind as $khall) {
            ?>
                <div class="col-3">
                    <div class="card">
                        <div class="card-img">
                            <a href="<?=$SITE_URL?>?mod=typecourse&act=typecourses&cate=<?=$khall['cateId']?>"><img src="<?=$IMAGE_DIR?>/categories/<?=$khall['nameCate']?>.jpg" class="card-img-top" alt="..."> </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><?=$khall['nameCate']?></h3>
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
                ?>
                    <li class="posts_content-item col-3">
                        <a href="<?=$SITE_URL?>?mod=news&act=newpost&post=<?=$new['newsId']?>" class="posts_content-link">
                            <div class="posts_content-link-img">
                                <img src="<?=$IMAGE_DIR?>/post/<?=$new['image']?>" alt="" class="">
                            </div>
                            <div class="posts_content-link-title">
                                <p><?=$new['title']?></p>
                            </div>
                            <div class="posts_content-link-user">
                                <?php
                                $usernew = user_select_by_id($new['userId']);
                                ?>
                                <p href=""><?=$usernew['fullName']?></p>
                                <p><?=$new['date']?></p>
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
                <img src="<?=$IMAGE_DIR?>/companies/img1.svg" alt="">
                <img src="<?=$IMAGE_DIR?>/companies/img2.svg" alt="">
                <img src="<?=$IMAGE_DIR?>/companies/img3.svg" alt="">
                <img src="<?=$IMAGE_DIR?>/companies/img4.svg" alt="">
                <img src="<?=$IMAGE_DIR?>/companies/img5.svg" alt="">
                <img src="<?=$IMAGE_DIR?>/companies/img6.svg" alt="">
            </div>

        </div>
    </div>
</section>
<!-- TEACHING -->
<section class="teaching">
    <div class="teaching_container td-container">
        <div class="row">
            <div class="col-sm col-left">
            <img src="<?=$IMAGE_DIR?>/teaching/instructor-1x-v3.jpg" alt="">
            </div>
            <div class="col-sm col-right">
            <h1>Trở thành giảng viên</h1>
            <p>Các giảng viên từ khắp nơi trên thế giới giảng</br>
                    dạy cho hàng triệu sinh viên trên Udyme.</br>
                    Chúng tôi cung cấp các công cụ và kỹ năng </br>
                    để dạy những gì bạn yêu thích.
            </p>
            <a class="button-black-large" style="display: inline-block; text-decoration: none; margin-top: 10px;" href="<?=$SITE_URL?>?mod=registerteacher&act=register">Bắt đầu dạy học ngay hôm nay</a>
            </div>
        </div>
    </div>
</section>