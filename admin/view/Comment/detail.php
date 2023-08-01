<section class="formInsertEdit">
                <div class="formInsertEdit__title">
                    <h1>CHI TIẾT BÌNH LUẬN</h1>
                </div>
                <div class="formInsertEdit__space"></div>
                <div class="formInsertEdit__content">
                    <form>
                        <div class="formInsertEdit__item">
                            <label class="formInsertEdit__label" for="idComment">Mã bình luận</label><br>
                            <input class="formInsertEdit__input input-readonly" type="text" name="idComment" value="Auto number" readonly>
                        </div>
                        <div class="formInsertEdit__item">
                            <label class="formInsertEdit__label" for="newsId">Bài viết</label><br>
                            <input class="formInsertEdit__input input-readonly" type="text" name="newsId" readonly>
                        </div>
                        <div class="formInsertEdit__item">
                            <label class="formInsertEdit__label" for="userId">Người bình luận</label><br>
                            <input class="formInsertEdit__input input-readonly" type="text" name="userId" readonly>
                        </div>
                        <div class="formInsertEdit__item">
                            <label class="formInsertEdit__label" for="date">Ngày bình luận</label><br>
                            <input class="formInsertEdit__input input-readonly" type="date" name="date" readonly>
                        </div>
                        <div class="formInsertEdit__item">
                            <label class="formInsertEdit__label" for="content">Nội dung bình luận</label><br>
                            <textarea class="formInsertEdit__textarea input-readonly" name="content" id="content" cols="30" rows="7" readonly></textarea>
                        </div>
                        <div class="formInsertEdit__item formInsertEdit__btn">
                            <button name="btn-delete" class="btn-delete">Xóa</button>
                            <a href="#" class="btn-list">Danh sách</a>
                        </div>
                    </form>
                </div>
            </section>