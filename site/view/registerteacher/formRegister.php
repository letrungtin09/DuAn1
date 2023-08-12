<section class="formInsertEdit td-container">
    <div class="formInsertEdit__title">
        <h1>ĐĂNG KÝ DẠY HỌC</h1>
    </div>
    <div class="formInsertEdit__space" style="background-color: transparent;">
        <h5 class="message">
            <span>*</span> <?= $MESSAGE ?>
        </h5>
    </div>
    <div class="formInsertEdit__content" style="margin-bottom: 64px;">
        <form method="POST">
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
                    <input class="formInsertEdit__input formInsertEdit__file" type="file" name="upload_avatar"><span style="color: black;"><?=$avatar?></span>
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
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="role" value="teacher" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="information">Thông tin cá nhân</label><br>
                <textarea class="formInsertEdit__textarea" name="information" id="information" cols="30"
                    rows="7"><?=$information?></textarea>
            </div>
            <div class="formInsertEdit__item formInsertEdit__btn">
                <button name="btn_update" class="btn-update" style="width: 100%; padding: 14px 0;">Đăng ký</button>
            </div>
        </form>
    </div>
</section>