<div class="login_container">
        <form action="<?=$SITE_URL?>?mod=user&act=login" method="post">
            <div class="login_content">
                <h3 class="login_content-title">ĐĂNG NHẬP VÀO T-DEMY</h3>
                <div class="login_content-login">
                    <input type="email" name="email" placeholder="email">
                    <input type="password"  name="password" placeholder="Mật khẩu">
                </div>
                <div class="login_content-remember">
                    <input type="checkbox" name="remember_me" id="ckeckpass">
                    <label for="ckeckpass">Ghi nhớ tài khoản</label>
                </div>
                <div class="login_content-submit">
                    <button name='btn_login'>Đăng nhập</button>
                </div>
                <div class="login_content-forgot-pass">
                    hoặc <a href="" class="">Quên mật khẩu</a>
                </div>
                <div class="login_content-move-register">
                    Không có tài khoản? <a href="<?=$SITE_URL?>?mod=user&act=signup" class="">Đăng ký</a>
                </div>
            </div>
            <h5 class='login_content-error'><?=$MESSAGE?></h5>
        </form>
    </div>