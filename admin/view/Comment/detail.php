<section class="formInsertEdit">
    <div class="formInsertEdit__title">
        <h1>CHI TIẾT BÌNH LUẬN</h1>
    </div>
    <div class="formInsertEdit__space"></div>
    <div class="formInsertEdit__content">
        <form method="post">
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="idComment">Mã bình luận</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="idComment" value="<?=$idComment?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="newsId">Bài viết</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="newsId" value="<?=$getNews['title']?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="userId">Người bình luận</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="userId" value="<?=$getUser['fullName']?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="date">Ngày bình luận</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="date" name="date" value="<?=$date?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="content">Nội dung bình luận</label><br>
                <textarea class="formInsertEdit__textarea input-readonly" name="content" id="content" cols="30" rows="7"
                    readonly><?=$content?></textarea>
            </div>
            <div class="formInsertEdit__item formInsertEdit__btn">
                <button name="btn_delete" class="btn-delete">Xóa</button>
                <a href="<?=$ADMIN_URL?>?mod=comment&act=list" class="btn-list">Danh sách</a>
            </div>
        </form>
    </div>
</section>