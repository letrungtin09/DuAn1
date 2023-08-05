<section class="content-qt content-qt-admin">
    <div class="container container-qt">
        <div class="row">
            <div class="col-sm col-1">
                <div class="col-1-left">
                    <h1>QUẢN LÝ BÀI VIẾT</h1>
                </div>
                <div class="col-1-right">
                    <a href="<?= $ADMIN_URL ?>?mod=news&act=add" class="btn btn-success">+ Thêm bài viết</a>
                </div>
            </div>
            <div class="col-sm col-2">
                <form action="">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col"><input type="checkbox" id="masterCheckbox" value=""></th>
                                <th scope="col">ID</th>
                                <th scope="col">TIÊU ĐỀ</th>
                                <th scope="col">HÌNH ẢNH</th>
                                <th scope="col">MÔ TẢ</th>
                                <th scope="col">NGÀY ĐĂNG</th>
                                <th scope="col">NGƯỜI ĐĂNG</th>
                                <th scope="col">THAO TÁC</th>



                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($list_news as $list) {
                                extract($list);

                                ?>
                                <tr>
                                    <td scope="row" class="name-course"><input type="checkbox" class="subCheckbox" value="">
                                    </td>
                                    <td class="so-luong">
                                        <?= $newsId ?>
                                    </td>
                                    <td class="tieu-de tieu-de-ac">
                                        <p style="text-align: left; line-height: 30px; margin: 0;">
                                            <?= $title ?>
                                        </p>
                                    </td>
                                    <td class="image-course"><img style="width:100%"
                                            src="<?= $IMAGE_DIR ?>/post/<?= $image ?>" alt=""></td>
                                    <td class="description" style="width: 20%; text-align: left; line-height: 30px;">
                                        <p>
                                            <?= $description ?>
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            <?= $date ?>
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            <?php
                                            $nameUser = user_select_by_id($userId);
                                            echo $nameUser['fullName'];
                                            ?>
                                        </p>
                                    </td>

                                    <td class="d-flex flex-column">
                                        <a href="<?= $ADMIN_URL ?>?mod=news&act=edit&btn_edit&newsId=<?=$newsId?>" class="btn-edit-admin">Sửa</a>
                                        <a href="<?= $ADMIN_URL ?>?mod=news&act=list&btn_delete&&newsId=<?=$newsId?>" class="btn-delete-admin">Xóa</a>
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