<section class="formInsertEdit">
    <div class="formInsertEdit__title">
        <h1>THÊM BÀI VIẾT</h1>
    </div>
    <div class="formInsertEdit__space"></div>
    <div class="formInsertEdit__content">
        <form>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="courseId">Mã bài viết</label><br>
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
                <input type="hidden" name="image" value="">
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="date">Ngày đăng</label><br>
                <input class="formInsertEdit__input input-readonly" type="date" name="date" readonly>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="userId">Người đăng</label><br>
                <input class="formInsertEdit__input input-readonly" type="text" name="userId" value="Trung Tín"
                    readonly>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="description">Mô tả ngắn</label><br>
                <textarea class="formInsertEdit__textarea" name="description" id="description" cols="30"
                    rows="5"></textarea>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="content">Nội dung bài viết</label><br>
                <textarea class="formInsertEdit__textarea" name="content" id="content" cols="30" rows="10"></textarea>
            </div>
            <div class="formInsertEdit__item formInsertEdit__btn">
                <button name="btn-insert" class="btn-insert">Thêm mới</button>
                <button type="reset" class="btn-reset">Nhập lại</button>
                <a href="#" class="btn-list">Danh sách</a>
            </div>
        </form>
    </div>
</section>