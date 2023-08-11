<section class="manageNews td-container">
    <div class="manageNews__content">
        <div class="manageNews__top">
            <div class="manageNews__title">
                <h1>QUẢN LÝ BÀI VIẾT CỦA BẠN</h1>
            </div>
            <div class="manageNews__add">
                <a href="<?=$SITE_URL?>?mod=managenews&act=addNews&userId=<?=$_GET["userId"]?>" class="btn-add-admin">+ Thêm bài viết</a>
            </div>
        </div>
        <div class="manageNews__bottom">
            <form action="">
                <table>
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="masterCheckbox" value=""></th>
                            <th>ID</th>
                            <th>TIÊU ĐỀ</th>
                            <th>HÌNH ẢNH</th>
                            <th>NGÀY ĐĂNG</th>
                            <th>LƯỢT VIEW</th>
                            <th>THAO TÁC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($getNews as $news){
                            extract($news);
                        ?>
                            <tr>
                                <td><input type="checkbox" class="subCheckbox" value=""></td>
                                <td style="width: 7%;">
                                    <p><?=$newsId?></p>
                                </td>
                                <td style="text-align: left; width: 40%;">
                                    <p><?=$title?></p>
                                </td>
                                <td>
                                    <img src="<?=$IMAGE_DIR?>/post/<?=$image?>" alt="">
                                </td>
                                <td>
                                    <p><?=$date?></p>
                                </td>
                                <td>
                                    <p><?=$view?></p>
                                </td>
                                <td>
                                    <div class="d-flex flex-column align-items-center">
                                        <a href="<?=$SITE_URL?>?mod=managenews&act=editNews&userId=<?=$_GET["userId"]?>&newsId=<?=$newsId?>" class="btn-edit-admin">Sửa</a>
                                        <a href="<?=$SITE_URL?>?mod=managenews&act=listNews&btn_delete&userId=<?=$_GET["userId"]?>&newsId=<?=$newsId?>" class="btn-delete-admin">Xóa</a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</section>