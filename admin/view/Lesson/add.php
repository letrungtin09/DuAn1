<section class="formInsertEdit">
                <div class="formInsertEdit__title">
                    <h1>THÊM BÀI HỌC</h1>
                </div>
                <div class="formInsertEdit__space"></div>
                <div class="formInsertEdit__content">
                    <form>
                        <div class="formInsertEdit__item">
                            <label class="formInsertEdit__label" for="detailChapterId">Mã bài học</label><br>
                            <input class="formInsertEdit__input input-readonly" type="text" name="detailChapterId" value="Auto number" readonly>
                        </div>
                        <div class="formInsertEdit__item">
                            <label class="formInsertEdit__label" for="chapterId">Mã chương học</label><br>
                            <input class="formInsertEdit__input input-readonly" type="text" name="chapterId" value="1 - Chương 1: Thiết kế web với HTML, CSS,..." readonly>
                        </div>
                        <div class="formInsertEdit__item">
                            <label class="formInsertEdit__label" for="numberOrderLesson">Số thứ tự bài học</label><br>
                            <input class="formInsertEdit__input" type="text" name="numberOrderLesson">
                        </div>
                        <div class="formInsertEdit__item">
                            <label class="formInsertEdit__label" for="timeLesson">Thời gian bài học</label><br>
                            <input class="formInsertEdit__input" type="text" name="timeLesson">
                        </div>
                        <div class="formInsertEdit__item">
                            <label class="formInsertEdit__label" for="video">Video bài học</label><br>
                            <input class="formInsertEdit__input" type="text" name="video">
                        </div>
                        <div class="formInsertEdit__item">
                            <label class="formInsertEdit__label" for="document">Tài liệu bài học</label><br>
                            <textarea class="formInsertEdit__textarea" name="description" id="document" cols="30" rows="5"></textarea>
                        </div>
                        <div class="formInsertEdit__item formInsertEdit__btn">
                            <button name="btn-insert" class="btn-insert">Thêm mới</button>
                            <button type="reset" class="btn-reset">Nhập lại</button>
                            <a href="#" class="btn-list">Danh sách</a>
                        </div>
                    </form>
                </div>
            </section>