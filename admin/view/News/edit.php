<section class="formInsertEdit">
    <div class="formInsertEdit__title">
        <h1>KIỂM DUYỆT BÀI VIẾT</h1>
    </div>
    <div class="formInsertEdit__space">
        <h5 class="message">
            <span>*</span> <?= $MESSAGE ?>
        </h5>
    </div>
    <div class="formInsertEdit__content">
        <form method="post">
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="newsId">Mã bài viết</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="newsId" value="<?=$newsId?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="title">Tiêu đề</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="title" value="<?=$title?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="image">Hình ảnh</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input formInsertEdit__file" type="file" name="image" value="<?=$image?>"><span style="color: black;"></span><?=$image?></span>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="date">Ngày đăng</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="date" name="date" value="<?=$date?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="userId">Người đăng</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <?php $getUser = user_select_by_id($userId); ?>
                    <input class="formInsertEdit__input" type="text" name="userId" value="<?=$getUser['fullName']?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="description">Mô tả ngắn</label><br>
                <textarea class="formInsertEdit__textarea input-readonly" name="description" id="description" cols="30"
                    rows="5" readonly><?=$description?></textarea>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="content">Nội dung bài viết</label><br>
                <textarea class="formInsertEdit__textarea input-readonly" name="content" id="content" cols="30" rows="10" readonly><?=$content?></textarea>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="status">Trạng thái</label><br>
                <div class="formInsertEdit__control" style="padding: 8px;">
                    <?php
                        if($status == 1){
                    ?>
                        <input class="formInsertEdit__radio" type="radio" name="status" value="0"><span style="margin: 0 24px 0 8px; color: #cc301f; font-weight: 500;">Chưa duyệt</span>
                        <input class="formInsertEdit__radio" type="radio" name="status" value="1" checked><span style="margin-left: 8px; color: #177e5e; font-weight: 500;">Đã duyệt</span>
                    <?php } else{ ?>
                        <input class="formInsertEdit__radio" type="radio" name="status" value="0" checked><span style="margin: 0 24px 0 8px; color: #cc301f; font-weight: 500;">Chưa duyệt</span>
                        <input class="formInsertEdit__radio" type="radio" name="status" value="1"><span style="margin-left: 8px; color: #177e5e; font-weight: 500;">Đã duyệt</span>
                    <?php } ?>
                </div>
            </div>
            <div class="formInsertEdit__item formInsertEdit__btn">
                <button name="btn_update" class="btn-update">Cập nhật</button>
                <a href="<?= $ADMIN_URL ?>?mod=news&act=list" class="btn-list">Danh sách</a>
            </div>
        </form>
    </div>
</section>