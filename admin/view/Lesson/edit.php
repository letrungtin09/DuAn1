<section class="formInsertEdit">
    <div class="formInsertEdit__title">
        <h1>CHỈNH SỬA BÀI HỌC <?=$numberOrderLesson?> CỦA CHƯƠNG <?=$nameChapter['numberOrder']?>
            <br/>"<?=$nameChapter['title']?>"
        </h1>
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
                    <input class="formInsertEdit__input" type="text" name="detailChapterId" value="<?=$detailChapterId?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="chapterId">Mã chương học</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="chapterId" value="<?=$chapterId?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="numberOrderLesson">Số thứ tự bài học</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="numberOrderLesson" value="<?=$numberOrderLesson?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="title">Tiêu đề bài học</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="text" name="title" value="<?=$title?>">
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="timeLesson">Thời gian bài học</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="text" name="timeLesson" value="<?=$timeLesson?>">
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="video">Video bài học</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="text" name="video" value="<?=$video?>">
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="document">Tài liệu bài học</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="text" name="document" value="<?=$document?>">
                </div>
            </div>
            <div class="formInsertEdit__item formInsertEdit__btn">
                <button name="btn_update" class="btn-update">Cập nhật</button>
                <a href="<?= $ADMIN_URL ?>?mod=lesson&act=add&chapterId=<?= $chapterId ?>" class="btn-insert">Thêm mới</a>
                <button type="reset" class="btn-reset">Nhập lại</button>
                <a href="<?= $ADMIN_URL ?>?mod=lesson&act=list&chapterId=<?= $chapterId ?>" class="btn-list">Danh sách</a>
            </div>
        </form>
    </div>
</section>