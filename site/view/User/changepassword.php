<div class="passchanges_container">
        <form action="<?=$SITE_URL?>?mod=user&act=changepass" method="post">
            <div class="passchanges_content">
                <h3 class="passchanges_content-title">Đổi mật khẩu</h3>
                <div class="passchanges_content-login">
                    <p>Email</p>
                    <input type="email" name='email' style="background-color: #efeded;" value="<?=$_SESSION['user']['email']?>" placeholder="email" readonly>
                    <p>Mật khẩu hiện tại</p>
                    <input type="password" name='passnow' placeholder="Mật khẩu hiện tại">
                    <p>Mật khẩu mới</p>
                    <input type="password" name='passnew1' placeholder="Mật khẩu mới">
                    <p>Xác nhận mật khẩu mới</p>
                    <input type="password" name='passnew2' placeholder="Xác nhận mật khẩu mới">
                </div>
                <div class="passchanges_content-submit">
                    <button name='btn_change'>Đổi mật khẩu</button>
                </div>
                <h5 class='login_content-error'><?=$MESSAGE?></h5>
            </div>
        </form>
    </div>