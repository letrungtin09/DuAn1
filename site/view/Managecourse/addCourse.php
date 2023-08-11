<section class="formInsertEdit" style="margin-bottom: 48px;">
    <div class="formInsertEdit__title">
        <h1>THÊM KHÓA HỌC CỦA BẠN</h1>
    </div>
    <div class="formInsertEdit__space">
        <h5 class="message">
            <span>*</span> <?= $MESSAGE ?>
        </h5>
    </div>
    <div class="formInsertEdit__content">
        <form method="POST">
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="courseId">Mã khóa học</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="courseId" value="Auto number" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="title">Tiêu đề</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="text" name="title">
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="image">Hình ảnh</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="file" name="image">
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="price">Đơn giá</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="text" name="price">
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="sale">Mức giảm giá</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="text" name="sale">
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="purchase">Lượt mua</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="purchase" value="0" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="date">Ngày đăng</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="date" name="date" value="<?=date("Y-m-d")?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="userId">Giảng viên</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="userId" name="date" value="<?=$getTeacher['fullName']?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="level">Cấp độ</label><br>
                <select class="formInsertEdit__select" name="level" id="level">
                    <option value="0">Chọn cấp độ</option>
                    <option value="Tất cả trình độ">Tất cả trình độ</option>
                    <option value="Sơ cấp">Sơ cấp</option>
                    <option value="Trung cấp">Trung cấp</option>
                    <option value="Chuyên gia">Chuyên gia</option>
                </select>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="cateId">Loại khóa học</label><br>
                <select class="formInsertEdit__select" name="cateId" id="cateId">
                    <option value="0">Chọn loại khóa học</option>
                    <?php foreach ($getAllCate as $cate) {
                        extract($cate);
                        ?>
                        <option value="<?= $cateId ?>"><?= $cateId ?> - <?= $nameCate ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="allTime">Tổng thời gian</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="text" name="allTime">
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="description">Mô tả</label><br>
                <textarea class="formInsertEdit__textarea" name="description" id="description" cols="30"
                    rows="5"></textarea>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="content">Nội dung</label><br>
                <textarea class="formInsertEdit__textarea" name="content" id="content" cols="30" rows="10"></textarea>
            </div>
            <div class="formInsertEdit__item formInsertEdit__btn">
                <button name="btn_insert" class="btn-insert">Thêm mới</button>
                <button type="reset" class="btn-reset">Nhập lại</button>
                <a href="<?= $SITE_URL ?>?mod=managecourse&act=listCourse&userId=<?=$_GET['userId']?>" class="btn-list">Danh sách</a>
            </div>
        </form>
    </div>
</section>
</div>
</div>