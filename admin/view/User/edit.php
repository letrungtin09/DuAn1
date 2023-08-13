<section class="formInsertEdit">
    <div class="formInsertEdit__title">
        <h1>CHỈNH SỬA TÀI KHOẢN</h1>
    </div>
    <div class="formInsertEdit__space">
        <h5 class="message">
            <span>*</span> <?= $MESSAGE ?>
        </h5>
    </div>
    <div class="formInsertEdit__content">
        <form method="POST" enctype="multipart/form-data">
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="userId">Mã tài khoản</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="userId" value="<?=$userId?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="fullName">Họ và tên</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="fullName" value="<?=$fullName?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="avatar">Ảnh đại diện</label><br>
                <input type="hidden" name="avatar" value="<?=$avatar?>">
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input formInsertEdit__file" type="file" name="upload_avatar"><span><?=$avatar?></span>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="email">Email</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="email" name="email" value="<?=$email?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="phoneNumber">Số điện thoại</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="phoneNumber" value="<?=$phoneNumber?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="password">Mật khẩu</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="password" name="password" value="<?=$password?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="career">Nghề nghiệp</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="text" name="career" value="<?=$career?>">
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="role">Vai trò</label><br>
                <select class="formInsertEdit__select" id="role" name="role">
                <?php if($role == "student"){ ?>
                        <option value="student" selected>student</option>
                        <option value="teacher">teacher</option>
                        <option value="admin">admin</option>
                    <?php } else if($role == "teacher"){ ?>
                        <option value="student">student</option>
                        <option value="teacher" selected>teacher</option>
                        <option value="admin">admin</option>
                    <?php } else { ?>
                        <option value="student">student</option>
                        <option value="teacher">teacher</option>
                        <option value="admin" selected>admin</option>
                    <?php } ?>
                </select>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="information">Thông tin cá nhân</label><br>
                <textarea class="formInsertEdit__textarea" name="information" id="information" cols="30"
                    rows="7"><?=$information?></textarea>
            </div>
            <div class="formInsertEdit__item formInsertEdit__btn">
                <button name="btn_update" class="btn-update">Cập nhật</button>
                <a href="<?= $ADMIN_URL ?>?mod=user&act=add" class="btn-insert">Thêm mới</a>
                <button type="reset" class="btn-reset">Nhập lại</button>
                <a href="<?= $ADMIN_URL ?>?mod=user&act=list" class="btn-list">Danh sách</a>
            </div>
        </form>
    </div>
</section>