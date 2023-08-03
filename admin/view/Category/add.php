<section class="formInsertEdit">
    <div class="formInsertEdit__title">
        <h1>THÊM LOẠI KHÓA HỌC</h1>
    </div>
    <div class="formInsertEdit__space"><h5 class="message"><span>*</span> <?=$MESSAGE?></h5></div>
    <div class="formInsertEdit__content">
        <form method="POST">
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="cateId">Mã loại khóa học</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="cateId" value="Auto number" readonly>
                </div> 
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="nameCate">Tên loại khóa học</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="text" name="nameCate">
                </div>
            </div>
            <div class="formInsertEdit__item formInsertEdit__btn">
                <button name="btn_insert" class="btn-insert">Thêm mới</button>
                <button type="reset" class="btn-reset">Nhập lại</button>
                <a href="<?= $ADMIN_URL ?>?mod=category&act=list" class="btn-list">Danh sách</a>
            </div>
        </form>
    </div>
</section>