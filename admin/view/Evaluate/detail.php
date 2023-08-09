<section class="formInsertEdit">
    <div class="formInsertEdit__title">
        <h1>CHI TIẾT ĐÁNH GIÁ</h1>
    </div>
    <div class="formInsertEdit__space"></div>
    <div class="formInsertEdit__content">
        <form>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="evaluateId">Mã đánh giá</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="evaluateId" value="<?=$evaluateId?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="courseId">Khóa học</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="courseId" value="<?=$getCourse['title']?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="userId">Người đánh giá</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="userId" value="<?=$getUser['fullName']?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="evaluateTime">Ngày đánh giá</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="date" name="evaluateTime" value="<?=$evaluateTime?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="evaluateRate">Số điểm đánh giá</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="evaluateRate" value="<?=$evaluateRate?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="content">Nội dung</label><br>
                <textarea class="formInsertEdit__textarea input-readonly" name="content" id="content" cols="30" rows="7"
                    readonly><?=$content?></textarea>
            </div>
            <div class="formInsertEdit__item formInsertEdit__btn">
                <a href="<?= $ADMIN_URL ?>?mod=evaluate&act=list&btn_delete&evaluateId=<?= $evaluateId ?>" class="btn-delete-admin" style="border-radius:0px; margin-right:8px;">Xóa</a>
                <a href="<?=$ADMIN_URL?>?mod=evaluate&act=list" class="btn-list">Danh sách</a>
            </div>
        </form>
    </div>
</section>