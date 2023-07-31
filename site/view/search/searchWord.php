<div class="searchCourse_container">
    <div class="searchCourse_header">
        <h2 class="searchCourse_header-title">kết quả cho "<?=$_GET['search']?>"</h2>
        <div class="searchCourse_header-infor">
            <div class="searchCourse_header-infor-team">
                <button class="searchCourse_header-infor-filter" onclick="anhien()">
                    <i class="fa-solid fa-filter"></i>
                    Bộ lọc
                </button>
                <select class="form-select select_fillter_controller" id='select_fillter_controller' aria-label="Default select example">
                    <option value="0">-- Tất cả khóa học --</option>    
                    <option value="1">Lượt mua nhiều nhất</option>    
                    <option value="2">Giá thấp nhất</option>
                    <option value="3">Cập nhập mới nhất</option>
                    <option value="4">Số giờ học nhiều nhất</option>
                </select>
            </div>
            <span class="searchCourse_header-infor-quantity"><p class=""> kết quả</p></span>
        </div>
    </div>
    <div class="searchCourse_content row">
        <div id="searchCourse_content-filter-id" class="searchCourse_content-filter col-3">
            <div class="searchCourse_content-filter-item">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h3>Giá</h3>
                        <input type="hidden" id="hidden_minimum_price" value="0" />
                        <input type="hidden" id="hidden_maximum_price" value="65000" />
                        <p id="price_show">0 - <?=number_format(5000000)?>đ</p>
                        <div id="price_range"></div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                <h3 class="">Loại Khóa Học</h3>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <ul>
                                    <?php
                                    foreach($allIdcate as $kind){
                                        $namekind = nameKind($kind['cateId']);
                                    ?>
                                        <li class="">
                                            <input type="checkbox" value="<?=$kind['cateId']?>" class='common_selector searchCourse_content-filter-checkbox_class_type' id="searchCourse_content-filter-checkbox-<?=$kind['cateId']?>" name="searchCourse_content-filter-checkbox[]">
                                            <label for="searchCourse_content-filter-checkbox-<?=$kind['cateId']?>">
                                                <span class="searchCourse_content-filter-star"><?=$namekind['nameCate']?></span><span class="searchCourse_content-filter-quantity"></span>
                                            </label>
                                        </li>
                                    <?php
                                    }
                                    ?>
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
                                    <?php
                                    foreach($allLevel as $level){?>
                                        <li class="">
                                            <input type="checkbox" class='common_selector searchCourse_content-filter-checkbox_class_level' value="<?=$level['level']?>" id="searchCourse_content-filter-checkbox-level<?=$level['level']?>" name="searchCourse_content-filter-checkbox">
                                            <label for="searchCourse_content-filter-checkbox-level<?=$level['level']?>">
                                                <span class="searchCourse_content-filter-star"><?=$level['level']?></span><span class="searchCourse_content-filter-quantity"></span>
                                            </label>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                <h3 class="">Giảng viên</h3>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul>
                                    <?php
                                    foreach($allTeacher as $teacher){
                                        $nameTeacher = nameTeacher($teacher['userId']);
                                    ?>
                                        <li class="">
                                            <input type="checkbox" class='common_selector searchCourse_content-filter-checkbox_class_teacher' value="<?=$teacher['userId']?>" id="searchCourse_content-filter-checkbox-teacher<?=$teacher['userId']?>" name="searchCourse_content-filter-checkbox">
                                            <label for="searchCourse_content-filter-checkbox-teacher<?=$teacher['userId']?>">
                                                <span class="searchCourse_content-filter-star"><?=$nameTeacher['fullName']?></span><span class="searchCourse_content-filter-quantity"></span>
                                            </label>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="searchCourse_content-product" class="filter_data col-9">

        </div>
    </div>
</div>