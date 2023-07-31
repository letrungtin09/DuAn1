<div class="register_container">
        <form action="<?=$SITE_URL?>?mod=user&act=signup" method="post">
            <div class="register_content">
                <h3 class="register_content-title">ĐĂNG KÝ VÀ BẮT ĐẦU HỌC</h3>
                <div class="register_content-login">
                    <input type="text" placeholder="Họ và tên" name="nameuser">
                    <input type="email" placeholder="email" name="email">
                    <input type="password" placeholder="Mật khẩu" name="password">
                </div>
                <div class="register_content-submit">
                    <button name="btn_register">Đăng ký</button>
                </div>
                <div class="register_content-agree-rules">
                    bạn đồng ý với<a href="" class="">Điều khỏan sử dụng</a> và <a href="" class="">Chính sách về quyền riêng tư</a>
                </div>
                <div class="register_content-move-register">
                    Bạn đã có tài khoản? <a href="<?=$SITE_URL?>?mod=user&act=login" class="">Đăng nhập</a>
                </div>
            </div>
            <h5 class='login_content-error'><?=$MESSAGE?></h5>
        </form>
    </div>