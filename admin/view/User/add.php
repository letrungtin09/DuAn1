<section class="formInsertEdit">
                <div class="formInsertEdit__title">
                    <h1>THÊM TÀI KHOẢN</h1>
                </div>
                <div class="formInsertEdit__space"></div>
                <div class="formInsertEdit__content">
                    <form>
                        <div class="formInsertEdit__item">
                            <label class="formInsertEdit__label" for="userId">Mã tài khoản</label><br>
                            <input class="formInsertEdit__input input-readonly" type="text" name="userId" value="Auto number" readonly>
                        </div>
                        <div class="formInsertEdit__item">
                            <label class="formInsertEdit__label" for="fullName">Họ và tên</label><br>
                            <input class="formInsertEdit__input" type="text" name="fullName">
                        </div>
                        <div class="formInsertEdit__item">
                            <label class="formInsertEdit__label" for="avatar">Ảnh đại diện</label><br>
                            <input class="formInsertEdit__input" type="file" name="avatar">
                            <input type="hidden" name="image" value="">
                        </div>
                        <div class="formInsertEdit__item">
                            <label class="formInsertEdit__label" for="email">Email</label><br>
                            <input class="formInsertEdit__input" type="email" name="email">
                        </div>
                        <div class="formInsertEdit__item">
                            <label class="formInsertEdit__label" for="phoneNumber">Số điện thoại</label><br>
                            <input class="formInsertEdit__input" type="text" name="phoneNumber">
                        </div>
                        <div class="formInsertEdit__item">
                            <label class="formInsertEdit__label" for="password">Mật khẩu</label><br>
                            <input class="formInsertEdit__input" type="text" name="password">
                        </div>
                        <div class="formInsertEdit__item">
                            <label class="formInsertEdit__label" for="career">Nghề nghiệp</label><br>
                            <input class="formInsertEdit__input" type="text" name="career">
                        </div>
                        <div class="formInsertEdit__item">
                            <label class="formInsertEdit__label" for="role">Vai trò</label><br>
                            <select class="formInsertEdit__select" id="role">
                                <option value="0">Chọn vai trò</option>
                                <option value="student">Student</option>
                                <option value="teacher">Teacher</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="formInsertEdit__item">
                            <label class="formInsertEdit__label" for="information">Thông tin cá nhân</label><br>
                            <textarea class="formInsertEdit__textarea" name="information" id="description" cols="30" rows="5"></textarea>
                        </div>
                        <div class="formInsertEdit__item formInsertEdit__btn">
                            <button name="btn-insert" class="btn-insert">Thêm mới</button>
                            <button type="reset" class="btn-reset">Nhập lại</button>
                            <a href="#" class="btn-list">Danh sách</a>
                        </div>
                    </form>
                </div>
            </section>