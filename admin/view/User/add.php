<section class="formInsertEdit">
    <div class="formInsertEdit__title">
        <h1>THÊM TÀI KHOẢN</h1>
    </div>
    <div class="formInsertEdit__space">
        <h5 class="message">
            <span>*</span> <?= $MESSAGE ?>
        </h5>
    </div>
    <div class="formInsertEdit__content">
        <form method="POST">
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="userId">Mã tài khoản</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="userId" value="Auto number" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="fullName">Họ và tên</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="text" name="fullName">
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="avatar">Ảnh đại diện</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="file" name="avatar">
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="email">Email</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="email" name="email">
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="phoneNumber">Số điện thoại</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="text" name="phoneNumber">
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="password">Mật khẩu</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="password" name="password">
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="career">Nghề nghiệp</label><br>
                <div class="formInsertEdit__control">
                    <input class="formInsertEdit__input" type="text" name="career">
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="role">Vai trò</label><br>
                <select class="formInsertEdit__select" id="role" name="role">
                    <option value="0">Chọn vai trò</option>
                    <option value="student">student</option>
                    <option value="teacher">teacher</option>
                    <option value="admin">admin</option>
                </select>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="information">Thông tin cá nhân</label><br>
                <textarea class="formInsertEdit__textarea" name="information" id="information" cols="30"
                    rows="7"></textarea>
            </div>
            <div class="formInsertEdit__item formInsertEdit__btn">
                <button name="btn_insert" class="btn-insert">Thêm mới</button>
                <button type="reset" class="btn-reset">Nhập lại</button>
                <a href="<?= $ADMIN_URL ?>?mod=user&act=list" class="btn-list">Danh sách</a>
            </div>
        </form>
    </div>
</section>