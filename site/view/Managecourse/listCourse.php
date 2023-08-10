<section class="content-qt control-controlCourse">
    <div class="container container-qt">
        <div class="row">
            <div class="col-sm col-1">
                <div class="col-1-left">
                    <h1>QUẢN LÝ KHÓA HỌC CỦA BẠN</h1>
                    <form action="" class="form-search-ctr">
                        <input type="text" class="input-ctr-search" name="" placeholder="Tìm kiếm khóa học" id="">
                        <button type="submit"><img src="<?=$IMAGE_DIR?>/controlCourses/icon4.png" alt=""></button>
                    </form>
                    <form action="" class="form-filter-ctr">
                        <select>
                            <option>Mới nhất</option>
                            <option>Cũ nhất</option>
                            <option>Xem nhiều nhất</option>
                        </select>
                    </form>
                </div>
                <div class="col-1-right">
                    <a href="" class="btn btn-success">+ Thêm khóa học</a>
                </div>
            </div>
            <div class="col-sm col-2">

                <section class="header-infor td-container">
                    <div class="header-infor-cart">

                        <h2 class="cart-filters">Bạn đã đăng <span><?=$countCourse?></span> khóa học</h2>
                    </div>
                    <div class="all-body-cart">
                        <div class="body-info-cart">
                            <?php foreach ($getTeacherCourse as $getCourse){
                                extract($getCourse);
                            ?>
                                <div class="cart-info">
                                    <div class="cart-info-img">
                                        <img src="<?=$IMAGE_DIR?>/courses/<?=$image?>" alt="">
                                    </div>
                                    <div class="cart-info-details">
                                        <h1 class="cart-info-name"><?=$title?></h1>
                                        <p class="cart-info-author"><?=$getInfoTeacher['fullName']?></p>
                                        <div class="cart-info-rate">
                                            <!-- <span class="button-best-seller">Bán chạy nhất</span> -->
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
                                            <li class="course time">Tổng số <?=$allTime?></li>
                                            <li class="course lessons">12 bài giảng</li>
                                            <li class="course level"><?=$level?></li>
                                        </ul>
                                    </div>
                                    <div class="cart-info-price">
                                        <?php if($sale == null){

                                        ?>
                                            <span class="sale"><?=$price?> <span class="vnd">đ</span></span>
                                        <?php } else { ?>
                                            <span class="price"><?=$price?> <span class="vnd">đ</span></span>
                                            <span class="sale"><?=$price - (($sale/100)*$price)?> <span class="vnd">đ</span><i
                                                    class="fa-solid fa-tag"></i></span>
                                        <?php } ?>
                                        <span class="date"><?=$date?></span>
                                    </div>
                                    <div class="cart-info-control">
                                        <button type="button" class="btn-detail-admin">Chi tiết khóa học</button>
                                        <button type="button" class="btn-edit-admin">Sửa khóa học</button>
                                        <button type="button" class="btn-delete-admin">Xóa khóa học</button>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>

</div>
</div>