<section class="formInsertEdit" style="margin-bottom: 24px;">
    <div class="formInsertEdit__title">
        <h1>THÊM BÀI HỌC CHO CHƯƠNG <?=$nameChapter['numberOrder']?><br/><?=$nameChapter['title']?></h1>
    </div>
    <div class="formInsertEdit__space">
        <h5 class="message">
            <span>*</span> <?= $MESSAGE ?>
        </h5>
    </div>
    <div class="formInsertEdit__content">
        <form method="post">
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="detailChapterId">Mã bài học</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="detailChapterId" value="Auto number" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="chapterId">Mã chương học</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="chapterId" value="<?=$nameChapter['chapterId']?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="numberOrderLesson">Số thứ tự bài học</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="numberOrderLesson" value="<?=$newNumberOrder + 1?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="title">Tiêu đề bài học</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="text" name="title">
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="timeLesson">Thời gian bài học</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="text" name="timeLesson">
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="video">Video bài học</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="text" name="video">
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="document">Tài liệu bài học</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="text" name="document">
                </div>
            </div>
            <div class="formInsertEdit__item formInsertEdit__btn">
                <button name="btn_insert" class="btn-insert">Thêm mới</button>
                <button type="reset" class="btn-reset">Nhập lại</button>
                <a href="<?= $SITE_URL ?>?mod=managelesson&act=listLesson&userId=<?=$_GET['userId']?>&chapterId=<?= $chapterId ?>" class="btn-list">Danh sách</a>
            </div>
        </form>
    </div>
</section>

</div>
</div>