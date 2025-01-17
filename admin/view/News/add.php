<section class="formInsertEdit">
    <div class="formInsertEdit__title">
        <h1>THÊM BÀI VIẾT</h1>
    </div>
    <div class="formInsertEdit__space">
        <h5 class="message">
            <span>*</span> <?= $MESSAGE ?>
        </h5>
    </div>
    <div class="formInsertEdit__content">
        <form method="post">
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="courseId">Mã bài viết</label><br>
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
                <label class="formInsertEdit__label" for="date">Ngày đăng</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="date" name="date" value="<?=date("Y-m-d")?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="userId">Người đăng</label><br>
                <select class="formInsertEdit__select" name="userId" id="userId">
                    <option value="0">Chọn người đăng</option>
                    <?php foreach ($getAllUser as $user) {
                        extract($user);
                        ?>
                        <option value="<?= $userId ?>"><?= $userId ?> - <?= $fullName ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="description">Mô tả ngắn</label><br>
                <textarea class="formInsertEdit__textarea" name="description" id="description" cols="30" rows="5"></textarea>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="content">Nội dung bài viết</label><br>
                <textarea class="formInsertEdit__textarea" name="content" id="content" cols="30" rows="10"></textarea>
            </div>
            <div class="formInsertEdit__item formInsertEdit__btn">
                <button name="btn_insert" class="btn-insert">Thêm mới</button>
                <button type="reset" class="btn-reset">Nhập lại</button>
                <a href="<?= $ADMIN_URL ?>?mod=news&act=list" class="btn-list">Danh sách</a>
            </div>
        </form>
    </div>
</section>