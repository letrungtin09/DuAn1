<section class="content-qt content-qt-admin">
    <div class="container container-qt">
        <div class="row">
            <div class="col-sm col-1">
                <div class="col-1-left">
                    <h1>QUẢN LÝ KHÓA HỌC</h1>
                </div>
                <div class="col-1-right">
                    <a href="<?=$ADMIN_URL?>?mod=courses&act=add" class="btn btn-success">+ Thêm khóa học</a>
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
                                <th scope="col">ĐƠN GIÁ</th>
                                <th scope="col">GIẢM GIÁ</th>
                                <th scope="col">LƯỢT MUA</th>
                                <th scope="col">NGÀY ĐĂNG</th>
                                <th scope="col">CẤP ĐỘ</th>
                                <th scope="col">LOẠI</th>
                                <th scope="col">GIẢNG VIÊN</th>
                                <th scope="col">THAO TÁC</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($list_courses as $list) {
                                extract($list);
                                ?>
                                <tr>
                                    <td scope="row" class="name-course"><input type="checkbox" class="subCheckbox" value="">
                                    </td>
                                    <td class="so-luong">
                                        <?= $courseId ?>
                                    </td>
                                    <td style="line-height: 25px; width: 15%; padding: 0 10px; text-align: left;">
                                        <p>
                                            <?=$title?>
                                        </p>
                                    </td>
                                    <td class="image-course"><img style="width:100%"
                                            src="<?=$IMAGE_DIR?>/courses/<?= $image ?>" alt=""></td>
                                    <td>
                                        <p>
                                            <?= number_format($price) ?>đ
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            <?php
                                            if ($sale == null || $sale == 0) {
                                                echo "";
                                            } else {
                                                echo $sale."%";
                                            }
                                            ?>
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            <?= $purchase ?>
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            <?= $date ?>
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            <?= $level ?>
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            <?php
                                            $name_cate = category_select_by_id($cateId);
                                            echo $name_cate['nameCate'];
                                            ?>
                                        </p>
                                    </td>
                                    <td style="width: 10%;">
                                        <p>
                                            <?php
                                            $name_teacher = user_select_by_id($userId);
                                            echo $name_teacher['fullName'];
                                            ?>
                                        </p>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column align-items-center">
                                            <a href="<?=$ADMIN_URL?>?mod=courses&act=edit&btn_edit&courseId=<?=$courseId?>"class="btn-edit-admin">Sửa</a>
                                            <a href="<?=$ADMIN_URL?>?mod=courses&act=list&btn_delete&courseId=<?=$courseId?>" class="btn-delete-admin">Xóa</a>
                                            <a href="<?=$ADMIN_URL?>?mod=chapter&act=list&courseId=<?=$courseId?>" class="btn-detail-admin">Chi tiết</a>
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