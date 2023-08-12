<section class="formInsertEdit" style="margin-bottom: 24px;">
    <div class="formInsertEdit__title">
        <h1>THÊM CHƯƠNG HỌC CHO KHÓA HỌC<br/><?=$nameCourse['title']?></h1>
    </div>
    <div class="formInsertEdit__space">
        <h5 class="message">
            <span>*</span> <?= $MESSAGE ?>
        </h5>
    </div>
    <div class="formInsertEdit__content">
        <form method="POST">
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="chapterId">Mã chương học</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="chapterId" value="Auto number" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="courseId">Mã khóa học</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="courseId" value="<?=$nameCourse['courseId']?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="numberOrder">Số thứ tự chương</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="numberOrder" value="<?=$newNumberOrder + 1?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="title">Tiêu đề chương</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="text" name="title">
                </div>
            </div>
            <div class="formInsertEdit__item formInsertEdit__btn">
                <button name="btn_insert" class="btn-insert">Thêm mới</button>
                <button type="reset" class="btn-reset">Nhập lại</button>
                <a href="<?=$SITE_URL?>?mod=managechapter&act=listChapter&userId=<?=$_GET['userId']?>&courseId=<?=$_GET['courseId']?>" class="btn-list">Danh sách</a>
            </div>
        </form>
    </div>
</section>
</div>
</div>