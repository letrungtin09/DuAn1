<section class="content-qt content-qt-admin">
    <div class="container container-qt">
        <div class="row">
            <div class="col-sm col-1">
                <div class="col-1-left">
                    <h1>CHI TIẾT KHÓA HỌC <br>"
                        <?php
                        $name = course_select_by_id($_GET['courseId']);
                        echo $name['title'];
                        ?>"
                    </h1>
                </div>
                <div class="col-1-right">
                    <a href="<?= $ADMIN_URL ?>?mod=chapter&act=add&courseId=<?= $_GET['courseId'] ?>"
                        class="btn btn-success">+ Thêm chương</a>
                </div>
            </div>
            <div class="col-sm col-2">
                <form action="">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col"><input type="checkbox" id="masterCheckbox" value=""></th>
                                <th scope="col">ID</th>
                                <th scope="col">SỐ THỨ TỰ CHƯƠNG</th>
                                <th scope="col">TIÊU ĐỀ CHƯƠNG</th>
                                <th scope="col">THAO TÁC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = chapter_count_course($_GET['courseId']);
                            if ($count == 0) {
                                echo "<tr>
                                            <td colspan='5'>Chưa có chương học</td>
                                        </tr>";
                            } else {
                                foreach ($listChapter as $list) {
                                    extract($list);
                                    ?>
                                    <tr>
                                        <td scope="row" class="name-course line-height"><input type="checkbox"
                                                class="subCheckbox" value=""></td>
                                        <td class="so-luong line-height">
                                            <?= $chapterId ?>
                                        </td>
                                        <td class="line-height">
                                            <p>
                                                <?= $numberOrder ?>
                                            </p>
                                        </td>
                                        <td class="tieu-de line-height" style="width: 30%;">
                                            <p>
                                                <?= $title ?>
                                            </p>
                                        </td>
                                        <td class="d-flex flex-column">
                                            <a href="<?= $ADMIN_URL ?>?mod=chapter&act=edit&courseId=<?= $_GET['courseId'] ?>&chapterId=<?= $chapterId ?>&numberOrder=<?= $numberOrder ?>&title=<?= $title ?>"
                                                class="btn-edit-admin">Sửa</a>
                                            <a href="<?= $ADMIN_URL ?>?mod=chapter&act=list&btn_delete&courseId=<?= $_GET['courseId'] ?>&chapterId=<?= $chapterId ?>"
                                                class="btn-delete-admin">Xóa</a>
                                            <a href="<?= $ADMIN_URL ?>?mod=lesson&act=list&chapterId=<?= $chapterId ?>"
                                                class="btn-detail-admin">Chi tiết</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </form>

            </div>
        </div>
    </div>
</section>