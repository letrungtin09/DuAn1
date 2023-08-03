<div class="updateaccount_container">
    <div class="updateaccount_container-img">
        <img src="<?=$IMAGE_DIR?>/users/<?=$userAcc['avatar']?>" alt="" class="">
    </div>
    <form action="<?=$SITE_URL?>?mod=user&act=updateaccount" method="post">
        <h3 class="updateaccount_content-title">Cập nhập thông tin tài khoản</h3>
        <div class="updateaccount_content">
            <div class="updateaccount_content-login">
                <p>Email</p>
                <input type="email" value='<?=$userAcc['email']?>' name="email" placeholder="email" readonly>
                <p>Họ và tên</p>
                <input type="text" value='<?=$userAcc['fullName']?>' name="nameuser" placeholder="Họ và tên">
                <p>Số điện thoại</p>
                <input type="text" value='<?=$userAcc['phoneNumber']?>' name="phonenumber" placeholder="Số điện thoại">
                <p>Nghề nghiệp</p>
                <input type="text" value='<?=$userAcc['career']?>' name="career" placeholder="Nghề nghiệp">
            </div>
            <div class="updateaccount_content-login">
                <p>Ảnh đại diện</p>
                <div><input type="file" name="image"></div>
                <p>Thông tin cá nhân</p>
                <textarea name="infor" id="" cols="30" rows="10">
                    <?=$userAcc['information']?>
                </textarea>
            </div>
        </div>
        <button name='btn_update_account'>Cập nhập tài khoản</button>
        <h5 class='login_content-error'><?=$MESSAGE?></h5>
    </form>
</div>