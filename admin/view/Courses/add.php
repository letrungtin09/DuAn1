<section class="formInsertEdit">
    <div class="formInsertEdit__title">
        <h1>THÊM KHÓA HỌC</h1>
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
                <input class="formInsertEdit__input input-readonly" type="text" name="courseId" value="Auto number"
                    readonly>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="title">Tiêu đề</label><br>
                <input class="formInsertEdit__input" type="text" name="title">
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="image">Hình ảnh</label><br>
                <input class="formInsertEdit__input" type="file" name="image">
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="price">Đơn giá</label><br>
                <input class="formInsertEdit__input" type="text" name="price">
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="sale">Mức giảm giá</label><br>
                <input class="formInsertEdit__input" type="text" name="sale">
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="purchase">Lượt mua</label><br>
                <input class="formInsertEdit__input input-readonly" type="text" name="purchase" value="0" readonly>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="date">Ngày đăng</label><br>
                <input class="formInsertEdit__input input-readonly" type="date" name="date" value="<?=date("Y-m-d")?>" readonly>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="userId">Giảng viên</label><br>
                <select class="formInsertEdit__select" name="userId" id="userId">
                    <option value="0">Chọn giảng viên</option>
                    <?php foreach ($getAllTeacher as $teacher) {
                        extract($teacher);
                        ?>
                        <option value="<?= $userId ?>"><?= $userId ?> - <?= $fullName ?></option>
                    <?php } ?>
                </select>
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
                <input class="formInsertEdit__input" type="text" name="allTime">
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
                <a href="<?= $ADMIN_URL ?>?mod=courses&act=list" class="btn-list">Danh sách</a>
            </div>
        </form>
    </div>
</section>