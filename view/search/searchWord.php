<div class="searchCourse_container">
    <div class="searchCourse_header">
        <h2 class="searchCourse_header-title"><?=$quantityCountSearch?> kết quả cho "<?=$_GET['search']?>"</h2>
        <div class="searchCourse_header-infor">
            <div class="searchCourse_header-infor-team">
                <button class="searchCourse_header-infor-filter" onclick="anhien()">
                    <i class="fa-solid fa-filter"></i>
                    Bộ lọc
                </button>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Liên quan nhất</option>
                    <option value="1">Có nhiều đánh giá nhất</option>
                    <option value="2">Nhiều người mua nhất</option>
                    <option value="3">Cập nhập mới nhất</option>
                </select>
            </div>
            <span class="searchCourse_header-infor-quantity"><p class=""><?=$quantityCountSearch?> kết quả</p></span>
        </div>
    </div>
    <div class="searchCourse_content row">
        <div id="searchCourse_content-filter-id" class="searchCourse_content-filter col-3">
            <div class="searchCourse_content-filter-item">
                <form action="">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                <h3 class="">Xếp hạng</h3>
                            </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <ul>
                                <li class="">
                                    <input type="radio" id="searchCourse_content-filter-radio-id4" name="searchCourse_content-filter-radio">
                                    <label for="searchCourse_content-filter-radio-id4">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span class="searchCourse_content-filter-star">Từ 4.0 trở lên</span><span class="searchCourse_content-filter-quantity">(2600)</span>
                                    </label>
                                </li>
                                <li class="">
                                    <input type="radio" id="searchCourse_content-filter-radio-id3" name="searchCourse_content-filter-radio">
                                    <label for="searchCourse_content-filter-radio-id3">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span class="searchCourse_content-filter-star">Từ 3.0 trở lên</span><span class="searchCourse_content-filter-quantity">(2600)</span>
                                    </label>
                                </li>
                                <li class="">
                                    <input type="radio" id="searchCourse_content-filter-radio-id2" name="searchCourse_content-filter-radio">
                                    <label for="searchCourse_content-filter-radio-id2">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span class="searchCourse_content-filter-star">Từ 2.0 trở lên</span><span class="searchCourse_content-filter-quantity">(2600)</span>
                                    </label>
                                </li>
                                <li class="">
                                    <input type="radio" id="searchCourse_content-filter-radio-id1" name="searchCourse_content-filter-radio">
                                    <label for="searchCourse_content-filter-radio-id1">
                                        <i class="fa-solid fa-star"></i><span class="searchCourse_content-filter-star">Từ 1.0 trở lên</span><span class="searchCourse_content-filter-quantity">(2600)</span>
                                    </label>
                                </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    <h3 class="">Cấp độ</h3>
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <ul>
                                        <li class="">
                                            <input type="radio" id="searchCourse_content-filter-radio-id5" name="searchCourse_content-filter-radio">
                                            <label for="searchCourse_content-filter-radio-id5">
                                                <span class="searchCourse_content-filter-star">Tất cả trình độ</span><span class="searchCourse_content-filter-quantity">(2600)</span>
                                            </label>
                                        </li>
                                        <li class="">
                                            <input type="radio" id="searchCourse_content-filter-radio-id6" name="searchCourse_content-filter-radio">
                                            <label for="searchCourse_content-filter-radio-id6">
                                                <span class="searchCourse_content-filter-star">Sơ cấp</span><span class="searchCourse_content-filter-quantity">(2600)</span>
                                            </label>
                                        </li>
                                        <li class="">
                                            <input type="radio" id="searchCourse_content-filter-radio-id7" name="searchCourse_content-filter-radio">
                                            <label for="searchCourse_content-filter-radio-id7">
                                            <span class="searchCourse_content-filter-star">Trung cấp</span><span class="searchCourse_content-filter-quantity">(2600)</span>
                                            </label>
                                        </li>
                                        <li class="">
                                            <input type="radio" id="searchCourse_content-filter-radio-id8" name="searchCourse_content-filter-radio">
                                            <label for="searchCourse_content-filter-radio-id8">
                                                <span class="searchCourse_content-filter-star">Chuyên gia</span><span class="searchCourse_content-filter-quantity">(2600)</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="searchCourse_content-product">
            <?php foreach($resultKeyWord as $resultShowKeyWord){?>
                <div class="searchCourse_content-product-div card">
                    <a href="#" class="searchCourse_content-product-cart card-body">
                        <img src="./assets/img/courses/<?=$resultShowKeyWord['image']?>" alt="" class="">
                        <div class="searchCourse_content-product-cart-infor">
                            <h3 class=""><?=$resultShowKeyWord['title']?></h3>
                            <p class=""><?=$resultShowKeyWord['description']?></p>
                            <?php
                            $nameUserSearch = user_select_by_id($resultShowKeyWord['userId']);
                            ?>
                            <div class="searchCourse_content-product-cart-infor-nameuser"><?=$nameUserSearch['fullName']?></div>
                            <div class="searchCourse_content-product-cart-infor-rate">
                                <span class="searchCourse_content-product-cart-infor-point">4.9</span>
                                <div class="classification">
                                    <div class="cover">
                                        <img src="./assets/img/courses/eluavation/cEQfe.png" alt="" class="">
                                    </div>
                                    <div class="progress" style="width: 50%;">
                                        <img src="./assets/img/courses/eluavation/â.png" alt="" class="">
                                    </div>
                                </div>
                                <span class="searchCourse_content-product-cart-infor-quantity">(42)</span>
                            </div>
                            <div class="searchCourse_content-product-cart-infor-lever">
                                <ul class="">
                                    <span>Tổng số giờ</span>
                                    <?php
                                    require_once 'model/chapter.php';
                                    require_once 'model/detailChapter.php';
                                    $chaptersearch = chapter_select_idcourse($resultShowKeyWord['courseId']);
                                    $countAllDetailsearch = 0;
                                    foreach($chaptersearch as $chap){
                                        $countSession = detailChapter_count_chapterId($chap['chapterId']);
                                        $countAllDetailsearch += $countSession;
                                    }
                                    ?>
                                    <li class=""><?=$countAllDetailsearch?> bài giảng</li>
                                    <li class=""><?=$resultShowKeyWord['level']?></li>
                                </ul>
                            </div>
                        </div>
                        <span class="searchCourse_content-product-cart-infor-price">
                            &#8363;
                            <spa class="searchCourse_content-product-cart-infor-d"n><?=number_format($resultShowKeyWord['price'])?></spa>
                        </span>
                    </a>
                    <div class="card-popover" style='z-index:200'>
                            <a href="#">
                                <h3>Những kiến thức bạn sẽ học</h3>
                            </a>
                            <p><?=$resultShowKeyWord['description']?></p>
                            <div class="card-btn row">
                                <a href="<?=$base_url?>?mod=bill&act=addBill&course=<?=$resultShowKeyWord['courseId']?>" class="add-cart col-9">Thêm vào giỏ hàng</a>
                                <button class="add-like col-2">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                            </div>
                        </div>
                </div>
                <?php
                } ?>
                
            </div>
    </div>
    
</div>