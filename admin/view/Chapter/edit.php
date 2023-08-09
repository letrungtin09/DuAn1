<section class="formInsertEdit">
    <div class="formInsertEdit__title">
        <h1>CHỈNH SỬA CHƯƠNG <?=$numberOrder?> CỦA KHÓA HỌC<br/><?=$nameCourse['title']?></h1>
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
                    <input class="formInsertEdit__input" type="text" name="chapterId" value="<?=$chapterId?>" readonly>
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
                    <input class="formInsertEdit__input" type="text" name="numberOrder" value="<?=$numberOrder?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="title">Tiêu đề chương</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="text" name="title" value="<?=$title?>">
                </div>
            </div>
            <div class="formInsertEdit__item formInsertEdit__btn">
                <button name="btn_update" class="btn-update">Cập nhật</button>
                <a href="<?=$ADMIN_URL?>?mod=chapter&act=add&courseId=<?=$_GET['courseId']?>" class="btn-insert">Thêm mới</a>
                <button type="reset" class="btn-reset">Nhập lại</button>
                <a href="<?=$ADMIN_URL?>?mod=chapter&act=list&courseId=<?=$_GET['courseId']?>" class="btn-list">Danh sách</a>
            </div>
        </form>
    </div>
</section>