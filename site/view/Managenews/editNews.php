<section class="formInsertEdit td-container">
    <div class="formInsertEdit__title">
        <h1>CHỈNH SỬA BÀI VIẾT</h1>
    </div>
    <div class="formInsertEdit__space" style="background-color: transparent;">
        <h5 class="message">
            <span>*</span> <?= $MESSAGE ?>
        </h5>
    </div>
    <div class="formInsertEdit__content" style="margin-bottom: 48px;">
        <form method="post" enctype="multipart/form-data">
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="newsId">Mã bài viết</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="newsId" value="<?=$newsId?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="title">Tiêu đề</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="text" name="title" value="<?=$title?>">
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="image">Hình ảnh</label><br>
                <input type="hidden" name="image" value="<?=$image?>">
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input formInsertEdit__file" type="file" name="upload_imgPost"><span style="color: black;"><?=$image?></span>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="date">Ngày chỉnh sửa</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="date" name="date" value="<?=date("Y-m-d")?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="userId">Người đăng</label><br>
                <?php $getUser = user_select_by_id($_GET['userId']); ?>
                <input type="hidden" name="userId" value="<?=$getUser['userId']?>">
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="nameUser" value="<?=$getUser['fullName']?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="view">Lượt xem</label><br>
                <input type="hidden" name="status" value="<?=$status?>">
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="view" value="<?=$view?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="description">Mô tả ngắn</label><br>
                <textarea class="formInsertEdit__textarea" name="description" cols="30" rows="5"><?=$description?></textarea>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="content">Nội dung bài viết</label><br>
                <textarea class="formInsertEdit__textarea" name="content" cols="30" rows="10"><?=$content?></textarea>
            </div>
            <div class="formInsertEdit__item formInsertEdit__btn">
                <button name="btn_update" class="btn-update">Cập nhật</button>
                <a href="<?=$SITE_URL?>?mod=managenews&act=addNews&userId=<?=$_GET["userId"]?>" class="btn-insert">Thêm mới</a>
                <button type="reset" class="btn-reset">Nhập lại</button>
                <a href="<?=$SITE_URL?>?mod=managenews&act=listNews&userId=<?=$_GET["userId"]?>" class="btn-list">Danh sách</a>
            </div>
        </form>
    </div>
</section>