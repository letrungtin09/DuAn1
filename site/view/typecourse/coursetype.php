<div class="coursekind_container">
    <h1 class="coursekind_container_title">Khóa học <?=$catecourse['nameCate']?></h1>
    <div class="coursekind_container-header">
        <h2 class="coursekind_container-header-title">Các khóa học để bạn bắt đầu</h2>
        <div class="courses__list">
            <ul class="nav nav-tabs" id="tdTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane"
                        type="button" role="tab" aria-controls="all-tab-pane" aria-selected="true">Mới cập nhập</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="fe-tab" data-bs-toggle="tab" data-bs-target="#fe-tab-pane"
                        type="button" role="tab" aria-controls="fe-tab-pane"
                        aria-selected="false">Được mua nhiều nhất</button>
                </li>
            </ul>
            <div class="tab-content" id="tdTabContent">
                <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab"
                    tabindex="0">
                    <div class="owl-carousel owl-theme courses__item">
                        <?php
                        foreach($allcourseBycateArrangeDate as $coursebycate){?>
                            <div class="card">
                                <a href="#"><img src="<?=$IMAGE_DIR?>/courses/<?=$coursebycate['image']?>" alt="..."></a>
                                <div class="card-body">
                                    <a href="#">
                                        <h5 class="card-title"><?=$coursebycate['title']?></h5>
                                    </a>
                                    <p class="card-teacher"><?=get_name_teacher($coursebycate['userId'])?></p>
                                    <div class="card-stars">
                                        <span class="card-rate"><?=EluavateRate($coursebycate['userId'])?></span>
                                        <span class="card-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                        <span class="card-total">(<?=eluavate_count($coursebycate['courseId'])?>)</span>
                                    </div>
                                    <div class="card-price">
                                        <span><?=number_format($coursebycate['price'])?><span class="vnd">đ</span></span>
                                        <span class="sale"><?=number_format(math_sale($coursebycate['price'], $coursebycate['sale']))?><span class="vnd">đ</span></span>
                                    </div>
                                    <span class="card-sell">Bán chạy nhất</span>
                                </div>
                                <div class="card-popover">
                                    <a href="#">
                                        <h3><?=$coursebycate['title']?></h3>
                                    </a>
                                    <div class="section-first">
                                        <span class="best-seller">Bán chạy nhất</span>
                                        <span>Cập nhập <span class="date"><?=$coursebycate['date']?></span></span>
                                    </div>
                                    <div class="section-second">
                                        <span>Tổng số <?=$coursebycate['allTime']?></span>
                                        <span class="dot"></span>
                                        <span><?=$coursebycate['level']?></span>
                                    </div>
                                    <p><?=$coursebycate['description']?></p>
                                    <div class="card-btn row">
                                        <a href="<?=$SITE_URL?>?mod=bill&act=addBill&course=<?=$coursebycate['courseId']?>" class="add-cart col-9">Thêm vào giỏ hàng</a>
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
                <div class="tab-pane fade" id="fe-tab-pane" role="tabpanel" aria-labelledby="fe-tab" tabindex="0">
                    <div class="owl-carousel owl-theme courses__item">
                    <?php
                        foreach($allcourseBycateArrangePurchase as $coursebycate){?>
                            <div class="card">
                                <a href="#"><img src="<?=$IMAGE_DIR?>/courses/<?=$coursebycate['image']?>" alt="..."></a>
                                <div class="card-body">
                                    <a href="#">
                                        <h5 class="card-title"><?=$coursebycate['title']?></h5>
                                    </a>
                                    <p class="card-teacher"><?=get_name_teacher($coursebycate['userId'])?></p>
                                    <div class="card-stars">
                                        <span class="card-rate"><?=EluavateRate($coursebycate['userId'])?></span>
                                        <span class="card-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                        <span class="card-total">(<?=eluavate_count($coursebycate['courseId'])?>)</span>
                                    </div>
                                    <div class="card-price">
                                        <span><?=number_format($coursebycate['price'])?><span class="vnd">đ</span></span>
                                        <span class="sale"><?=number_format(math_sale($coursebycate['price'], $coursebycate['sale']))?><span class="vnd">đ</span></span>
                                    </div>
                                    <span class="card-sell">Bán chạy nhất</span>
                                </div>
                                <div class="card-popover">
                                    <a href="#">
                                        <h3><?=$coursebycate['title']?></h3>
                                    </a>
                                    <div class="section-first">
                                        <span class="best-seller">Bán chạy nhất</span>
                                        <span>Cập nhập <span class="date"><?=$coursebycate['date']?></span></span>
                                    </div>
                                    <div class="section-second">
                                        <span>Tổng số <?=$coursebycate['allTime']?></span>
                                        <span class="dot"></span>
                                        <span><?=$coursebycate['level']?></span>
                                    </div>
                                    <p><?=$coursebycate['description']?></p>
                                    <div class="card-btn row">
                                        <a href="<?=$SITE_URL?>?mod=bill&act=addBill&course=<?=$coursebycate['courseId']?>" class="add-cart col-9">Thêm vào giỏ hàng</a>
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
            </div>
        </div>
    </div>
    <div class="searchCourse_content row">
        <div class="searchCourse_content-product">
            <h2 style="margin-bottom: 20px;"><?=$total_records?> kết quả</h2>
            <?php
            foreach($limitCourde  as $course){
                $nameUserSearch = user_select_by_id($course['userId']);
            ?>
                <div class="searchCourse_content-product-div card">
                    <a href="<?=$SITE_URL?>?mod=detailcourse&act=showCourse&course=<?=$course['courseId']?>" class="searchCourse_content-product-cart card-body">
                        <img src="<?=$IMAGE_DIR?>/courses/<?=$course["image"]?>" alt="" class="">
                        <div class="searchCourse_content-product-cart-infor">
                            <h3 class=""><?=$course['title']?></h3>
                            <p class=""><?=$course['description']?></p>
                            <div class="searchCourse_content-product-cart-infor-nameuser"><?=$nameUserSearch['fullName']?></div>
                            <div class="searchCourse_content-product-cart-infor-rate">
                                <span class="searchCourse_content-product-cart-infor-point"><?=EluavateRate($course['courseId'])?></span>
                                <div class="classification">
                                    <div class="cover">
                                        <img src="<?=$IMAGE_DIR?>/courses/eluavation/cEQfe.png" alt="" class="">
                                    </div>
                                    <div class="progress" style="width: <?=EluavateRate($row['courseId'])*20 ?>%;">
                                        <img src="<?=$IMAGE_DIR?>/courses/eluavation/â.png" alt="" class="">
                                    </div>
                                </div>
                                <span class="searchCourse_content-product-cart-infor-quantity">(42)</span>
                            </div>
                            <div class="searchCourse_content-product-cart-infor-lever">
                                <ul class="">
                                    <span>Tổng số giờ <?=$course['allTime']?></span>
                                    <li class=""><?=chapterSearch($course['courseId'])?> bài giảng</li>
                                    <li class=""><?=$course['level']?></li>
                                </ul>
                            </div>
                        </div>
                        <span class="searchCourse_content-product-cart-infor-price">
                            &#8363;
                            <span class="searchCourse_content-product-cart-infor-d"><?=number_format($course['price'])?></span>
                        </span>
                    </a>
                    <div class="card-popover" style=z-index:200>
                        <a href="#">
                            <h3>Những kiến thức bạn sẽ học</h3>
                            
                        </a>
                        <p><?=$course['description']?></p>
                        <div class="card-btn row">
                            <a href="<?=$SITE_URL?>?mod=bill&act=addBill&course=<?=$course['courseId']?>    " class="add-cart col-9">Thêm vào giỏ hàng</a>
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
        <nav style="display: flex;align-items: center;justify-content: center;" aria-label="...">
            <ul class="pagination pagination-lg">
                <?php
                if ($current_page > 1 && $total_page > 1){
                    echo '<li class="page-item">
                            <a href="'.$SITE_URL.'?mod=typecourse&act=typecourses&cate='.$cateId.'&page='.($current_page-1).'" class="page-link">Previous</a>
                        </li>';
                }
                for ($i = 1; $i <= $total_page; $i++){
                    // Nếu là trang hiện tại thì hiển thị thẻ span
                    // ngược lại hiển thị thẻ a
                    if ($i == $current_page){
                        echo '<li class="page-item active"><a class="page-link">'.$i.'</a></li>';
                    }
                    else{
                        echo '<li class="page-item">
                                <a class="page-link" href="'.$SITE_URL.'?mod=typecourse&act=typecourses&cate='.$cateId.'&page='.$i.'">'.$i.'</a>
                            </li>';
                    }
                }
                if ($current_page < $total_page && $total_page > 1){
                    echo'<li class="page-item">
                            <a class="page-link" href="'.$SITE_URL.'?mod=typecourse&act=typecourses&cate='.$cateId.'&page='.($current_page+1).'">Next</a>
                        </li>';
                }
                ?>
            </ul>
        </nav>
    </div>
</div>