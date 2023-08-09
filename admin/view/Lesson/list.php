<section class="content-qt content-qt-admin">
    <div class="container container-qt">
        <div class="row">
            <div class="col-sm col-1">
                <div class="col-1-left">
                    <h1>CHI TIẾT CHƯƠNG
                        <?php
                        $getTitle = chapter_select_by_id($_GET['chapterId']);
                        echo $getTitle['numberOrder'];
                        ?>
                        <br/>
                        "<?=$getTitle['title']?>"
                    </h1>
                </div>
                <div class="col-1-right">
                    <a href="<?= $ADMIN_URL ?>?mod=lesson&act=add&chapterId=<?= $_GET['chapterId'] ?>"
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
                                <th scope="col">MÃ CHƯƠNG</th>
                                <th scope="col">STT</th>
                                <th scope="col">TIÊU ĐỀ BÀI HỌC</th>
                                <th scope="col">VIDEO</th>
                                <th scope="col">TÀI LIỆU</th>
                                <th scope="col">THỜI GIAN</th>
                                <th scope="col">THAO TÁC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = lesson_count_chapter($_GET['chapterId']);
                            if ($count == 0) {
                                echo "<tr>
                                            <td colspan='9'>Chưa có bài học</td>
                                        </tr>";
                            } else {
                                foreach ($listLesson as $list) {
                                    extract($list);
                                    ?>
                                    <tr>
                                        <td scope="row" class="name-course line-height"><input type="checkbox"
                                                class="subCheckbox" value=""></td>

                                        <td class="line-height">
                                            <p>
                                                <?= $detailChapterId ?>
                                            </p>
                                        </td>
                                        <td class="so-luong line-height">
                                            <?= $chapterId ?>
                                        </td>
                                        <td class="so-luong line-height">
                                            <?= $numberOrderLesson ?>
                                        </td>
                                        <td class="line-height" style="width: 30%;">
                                            <p>
                                                <?= $title ?>
                                            </p>
                                        </td>
                                        <td class="so-luong line-height">
                                            <?php if ($video == null) {
                                                echo "";
                                            } else {
                                                echo $video;
                                            } ?>
                                        </td>
                                        <td class="so-luong line-height">
                                            <?php if ($document == null) {
                                                echo "";
                                            } else {
                                                echo $document;
                                            } ?>
                                        </td>
                                        <td class="so-luong line-height">
                                            <?= $timeLesson ?>
                                        </td>
                                        <td class="d-flex flex-column">
                                            <a href="<?= $ADMIN_URL ?>?mod=lesson&act=edit&chapterId=<?= $chapterId ?>&detailChapterId=<?=$detailChapterId?>&numberOrderLesson=<?=$numberOrderLesson?>&title=<?=$title?>&video=<?=$video?>&document=<?=$document?>&timeLesson=<?=$timeLesson?>"
                                                class="btn-edit-admin">Sửa</a>
                                            <a href="<?= $ADMIN_URL ?>?mod=lesson&act=list&btn_delete&chapterId=<?= $chapterId ?>&detailChapterId=<?=$detailChapterId?>"
                                                class="btn-delete-admin">Xóa</a>
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