<section class="formInsertEdit">
    <div class="formInsertEdit__title">
        <h1>THÊM CHƯƠNG HỌC</h1>
    </div>
    <div class="formInsertEdit__space"></div>
    <div class="formInsertEdit__content">
        <form>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="chapterId">Mã chương học</label><br>
                <input class="formInsertEdit__input input-readonly" type="text" name="chapterId" value="Auto number"
                    readonly>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="courseId">Mã khóa học</label><br>
                <input class="formInsertEdit__input input-readonly" type="text" name="courseId"
                    value="1 - Thiết kế web với HTML, CSS,..." readonly>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="numberOrder">Số thứ tự chương</label><br>
                <input class="formInsertEdit__input" type="text" name="numberOrder">
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="title">Tiêu đề chương</label><br>
                <input class="formInsertEdit__input" type="text" name="title">
            </div>
            <div class="formInsertEdit__item formInsertEdit__btn">
                <button name="btn-insert" class="btn-insert">Thêm mới</button>
                <button type="reset" class="btn-reset">Nhập lại</button>
                <a href="#" class="btn-list">Danh sách</a>
            </div>
        </form>
    </div>
</section>