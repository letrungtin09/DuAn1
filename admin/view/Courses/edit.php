<section class="formInsertEdit">
    <div class="formInsertEdit__title">
        <h1>CHỈNH SỬA KHÓA HỌC</h1>
    </div>
    <div class="formInsertEdit__space">
        <h5 class="message">
            <span>*</span> <?= $MESSAGE ?>
        </h5>
    </div>
    <div class="formInsertEdit__content">
        <form method="POST" enctype="multipart/form-data">
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="courseId">Mã khóa học</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="courseId" value="<?=$courseId?>" readonly>
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
                    <input class="formInsertEdit__input formInsertEdit__file" type="file" name="upload_image"><span><?=$image?></span>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="price">Đơn giá</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="text" name="price" value="<?=$price?>">
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="sale">Mức giảm giá</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="text" name="sale" value="<?=$sale?>">
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="purchase">Lượt mua</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="purchase" value="<?=$purchase?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="date">Ngày đăng</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input formInsertEdit__date" type="date" name="date" value="<?=$date?>">
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="userId">Giảng viên</label><br>
                <select class="formInsertEdit__select" name="userId" id="userId">
                    <?php foreach ($getTeacher as $teacher) {
                    ?>
                        <?php if($userId == $teacher['userId']){ ?>
                            <option value="<?= $teacher['userId'] ?>" selected><?= $teacher['userId'] ?> - <?= $teacher['fullName'] ?></option>
                        <?php } else { ?>
                            <option value="<?= $teacher['userId'] ?>"><?= $teacher['userId'] ?> - <?= $teacher['fullName'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="level">Cấp độ</label><br>
                <select class="formInsertEdit__select" name="level" id="level">
                    <?php if($level == "Tất cả trình độ"){ ?>
                        <option value="Tất cả trình độ" selected>Tất cả trình độ</option>
                        <option value="Sơ cấp">Sơ cấp</option>
                        <option value="Trung cấp">Trung cấp</option>
                        <option value="Chuyên gia">Chuyên gia</option>
                    <?php } else if($level == "Sơ cấp"){ ?>
                        <option value="Tất cả trình độ">Tất cả trình độ</option>
                        <option value="Sơ cấp" selected>Sơ cấp</option>
                        <option value="Trung cấp">Trung cấp</option>
                        <option value="Chuyên gia">Chuyên gia</option>
                    <?php } else if($level == "Trung cấp"){ ?>
                        <option value="Tất cả trình độ">Tất cả trình độ</option>
                        <option value="Sơ cấp">Sơ cấp</option>
                        <option value="Trung cấp" selected>Trung cấp</option>
                        <option value="Chuyên gia">Chuyên gia</option>
                    <?php } else{ ?>
                        <option value="Tất cả trình độ">Tất cả trình độ</option>
                        <option value="Sơ cấp">Sơ cấp</option>
                        <option value="Trung cấp">Trung cấp</option>
                        <option value="Chuyên gia" selected>Chuyên gia</option>
                    <?php } ?>
                </select>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="cateId">Loại khóa học</label><br>
                <select class="formInsertEdit__select" name="cateId" id="cateId">
                    <?php foreach ($getCate as $cate) {
                    ?>
                        <?php if($cateId == $cate['cateId']){ ?>
                            <option value="<?= $cate['cateId'] ?>" selected><?= $cate['cateId'] ?> - <?= $cate['nameCate'] ?></option>
                        <?php } else { ?>
                            <option value="<?= $cate['cateId'] ?>"><?= $cate['cateId'] ?> - <?= $cate['nameCate'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="allTime">Tổng thời gian</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="text" name="allTime" value="<?=$allTime?>">
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="description">Mô tả</label><br>
                <textarea class="formInsertEdit__textarea" name="description" id="description" cols="30"
                    rows="5"><?=$description?></textarea>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="content">Nội dung</label><br>
                <textarea class="formInsertEdit__textarea" name="content" id="content" cols="30" rows="10"><?=$content?></textarea>
            </div>
            <div class="formInsertEdit__item formInsertEdit__btn">
                <button name="btn_update" class="btn-update">Cập nhật</button>
                <a href="<?= $ADMIN_URL ?>?mod=courses&act=add" class="btn-insert">Thêm mới</a>
                <button type="reset" class="btn-reset">Nhập lại</button>
                <a href="<?= $ADMIN_URL ?>?mod=courses&act=list" class="btn-list">Danh sách</a>
            </div>
        </form>
    </div>
</section>