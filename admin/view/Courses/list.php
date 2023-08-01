<section class="content-qt content-qt-admin">
    <div class="container container-qt">
        <div class="row">
            <div class="col-sm col-1">
                <div class="col-1-left">
                    <h1>QUẢN LÝ KHÓA HỌC</h1>
                </div>
                <div class="col-1-right">
                    <a type="button" class="btn btn-success">+ Thêm loại khóa học</a>
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
                                    <td class="tieu-de">
                                        <p>
                                            <?= $title ?>
                                        </p>
                                    </td>
                                    <td class="image-course"><img style="width:100%"
                                            src="<?=$IMAGE_DIR?>/courses/<?= $image ?>" alt=""></td>
                                    <td>
                                        <p>
                                            <?= $price ?>đ
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            <?php
                                            if ($sale == null) {
                                                echo 0;
                                            } else {
                                                echo $sale;
                                            }
                                            ?>%
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
                                    <td>
                                        <p>
                                            <?php
                                            $name_teacher = user_select_by_id($userId);
                                            echo $name_teacher['fullName'];
                                            ?>
                                        </p>
                                    </td>
                                    <td class="btn-thao-tac btn-thao-tac-column">
                                        <button type="button" class="btn btn-warning">Sửa</button>
                                        <button type="button" class="btn btn-danger">Xóa</button>
                                        <a href="<?=$ADMIN_URL?>?mod=chapter&act=list&courseId=<?=$courseId?>" class="btn btn-secondary">Chi tiết</a>
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