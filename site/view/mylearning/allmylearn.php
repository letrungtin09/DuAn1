<section class="myLearning">
    <div class="myLearning__title td-container">
        <h1>Quá trình học tập của tôi</h1>
    </div>
    <div class="myLearning__detail">
        <ul class="nav nav-tabs td-container myLearning__tab" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                    type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Tất cả khóa
                    học</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                    type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Danh sách yêu
                    thích</button>
            </li>
        </ul>
        <div class="tab-content myLearning__content" id="myTabContent">
            <div class="tab-pane fade active show  td-container" id="home-tab-pane" role="tabpanel"
                aria-labelledby="home-tab" tabindex="0">
                <div class="myLearning__courses">
                    <?php 
                    foreach( $studentinCourse as $student){
                        $courseinfo = course_select_by_id($student['courseId']);?>
                        <div class="card">
                            <div class="overlay">
                                <div class="overlay__delete">
                                    <a href="#"><i class="fa-solid fa-xmark"></i></a>
                                </div>
                                <div class="overlay__play">
                                    <a href="<?=$SITE_URL?>?mod=lesson&act=lessonDetail&course=<?=$student['courseId']?>"><i class="fa-solid fa-play"></i></a>
                                </div>
                            </div>
                            <a href="#"><img src="<?=$IMAGE_DIR?>/courses/<?=$courseinfo['image']?>" alt="..."></a>
                            <div class="card-body">
                                <a href="#">
                                    <h5 class="card-title"><?=$courseinfo['title']?></h5>
                                </a>
                                <p class="card-teacher"><?=get_name_teacher($courseinfo['userId'])?></p>
                                <div class="card-time">
                                    <span>Tổng số <?=$courseinfo['allTime']?></span>
                                    <span class="card-dot">•</span>
                                    <span><?=chapterSearch($student['courseId'])?> bài giảng</span>
                                </div>
                                <div class="card-result">
                                    <?php
                                    if($student['status'] == 1){?>
                                    <span class="complete">Hoàn thành <i class="fa-solid fa-trophy"></i></span>
                                    <?php
                                    }else{?>
                                    <span class="learning">Đang học <i class="fa-solid fa-book"></i></span>
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
            <div class="tab-pane fade td-container " id="profile-tab-pane" role="tabpanel"
                aria-labelledby="profile-tab" tabindex="0">
                <div class="myLearning__liked">
                    <?php
                    foreach($studentlikeinCourse as $studentlike){
                        $courseinfolike = course_select_by_id($studentlike['courseId']);?>
                        <div class="card">
                            <a href="<?=$SITE_URL?>?mod=detailcourse&act=showCourse&course=<?=$studentlike['courseId']?>"><img src="<?=$IMAGE_DIR?>/courses/<?=$courseinfolike['image']?>" alt="..."></a>
                            <div class="card-body">
                                <a href="<?=$SITE_URL?>?mod=detailcourse&act=showCourse&course=<?=$studentlike['courseId']?>">
                                    <h5 class="card-title"><?=$courseinfolike['title']?></h5>
                                </a>
                                <p class="card-teacher"><?=get_name_teacher($courseinfolike['userId'])?></p>
                                <div class="card-stars">
                                    <span class="card-rate"><?=EluavateRate($studentlike['courseId'])?></span>
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
                                    <span>Tổng số <?=$courseinfolike['allTime']?></span>
                                    <span class="card-dot">•</span>
                                    <span><?=$courseinfolike['level']?></span>
                                </div>
                                <div class="card-price">
                                    <span><?=number_format($courseinfolike['price'])?><span class="vnd">đ</span></span>
                                    <span class="sale"><?=number_format(math_sale($courseinfolike['price'], $courseinfolike['sale']))?><span class="vnd">đ</span></span>
                                </div>
                                <div class="card-bottom">
                                    <span class="button-best-seller">Bán chạy nhất</span>
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
</section>