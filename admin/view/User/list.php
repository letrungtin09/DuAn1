<section class="content-qt content-qt-admin">
    <div class="container container-qt">
        <div class="row">
            <div class="col-sm col-1">
                <div class="col-1-left">
                    <h1>QUẢN LÝ TÀI KHOẢN</h1>
                </div>
                <div class="col-1-right">
                    <a href="<?= $ADMIN_URL ?>?mod=user&act=add" class="btn btn-success">+ Thêm tài khoản</a>
                </div>
            </div>
            <div class="col-sm col-2">
                <form action="">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col"><input type="checkbox" id="masterCheckbox" value=""></th>
                                <th scope="col">ID</th>
                                <th scope="col">HỌ VÀ TÊN</th>
                                <th scope="col">ẢNH ĐẠI DIỆN</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">SĐT</th>
                                <th scope="col">NGHỀ NGHIỆP</th>
                                <th scope="col">VAI TRÒ</th>
                                <th scope="col">THAO TÁC</th>



                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($list_user as $list) {
                                extract($list);
                                ?>
                                <tr>
                                    <td scope="row" class="name-course"><input type="checkbox" class="subCheckbox" value="">
                                    </td>
                                    <td class="so-luong">
                                        <?= $userId ?>
                                    </td>
                                    <td class="tieu-de tieu-de-ac">
                                        <p>
                                            <?= $fullName ?>
                                        </p>
                                    </td>
                                    <td class="image-course"><img style="width:75px; height:75px; object-fit:cover; object-position: 0px 0px;" src="<?=$IMAGE_DIR?>/users/<?= $avatar ?>"
                                            alt=""></td>
                                    <td>
                                        <p>
                                            <?= $email ?>
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            <?= $phoneNumber ?>
                                        </p>
                                    </td>
                                    <td style="width: 20%;">
                                        <p>
                                            <?= $career ?>
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            <?= $role ?>
                                        </p>
                                    </td>
                                    <td>                                       
                                        <div class="d-flex flex-column align-items-center">
                                        <?php if($role == "admin"){ ?>
                                            <a href="<?=$ADMIN_URL?>?mod=user&act=edit&btn_edit&userId=<?=$userId?>"class="btn-edit-admin">Sửa</a>
                                        <?php } else { ?>
                                            <a href="<?=$ADMIN_URL?>?mod=user&act=edit&btn_edit&userId=<?=$userId?>"class="btn-edit-admin">Sửa</a>
                                            <a href="<?=$ADMIN_URL?>?mod=user&act=list&btn_delete&userId=<?=$userId?>" class="btn-delete-admin">Xóa</a>
                                        <?php } ?>
                                        </div>                
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </form>

            </div>
        </div>
    </div>
</section>