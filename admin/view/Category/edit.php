<section class="formInsertEdit">
    <div class="formInsertEdit__title">
        <h1>SỬA LOẠI KHÓA HỌC</h1>
    </div>
    <div class="formInsertEdit__space">
        <h5 class="message"><span>*</span> <?=$MESSAGE?></h5>
    </div>
    <!-- <div class="addMessage">
        <h5 class="message"><?=$MESSAGE?></h5>
    </div> -->
    <div class="formInsertEdit__content">
        <form method="POST">
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="cateId">Mã loại khóa học</label><br>
                <input class="formInsertEdit__input input-readonly" type="text" name="cateId" value="<?=$cateId?>"
                    readonly>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="nameCate">Tên loại khóa học</label><br>
                <input class="formInsertEdit__input" type="text" name="nameCate" value="<?=$nameCate?>">
            </div>
            <div class="formInsertEdit__item formInsertEdit__btn">
                <button name="btn_update" class="btn-update">Cập nhật</button>
                <a href="<?= $ADMIN_URL ?>?mod=category&act=add" class="btn-insert">Thêm mới</a>
                <button type="reset" class="btn-reset">Nhập lại</button>
                <a href="<?= $ADMIN_URL ?>?mod=category&act=list" class="btn-list">Danh sách</a>
            </div>
        </form>
    </div>
</section>