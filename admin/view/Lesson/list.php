<section class="content-qt content-qt-admin">
    <div class="container container-qt">
        <div class="row">
            <div class="col-sm col-1">
                <div class="col-1-left">
                    <h1>CHI TIẾT CHƯƠNG
                        "<?php 
                            echo $chapterId;
                        ?>"
                    </h1>
                </div>
                <div class="col-1-right">
                    <a type="button" class="btn btn-success">+ Thêm chương</a>
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
                                foreach($listLesson as $list){
                                    extract($list);
                             
                            ?>
                            <tr>
                                <td scope="row" class="name-course line-height"><input type="checkbox"
                                        class="subCheckbox" value=""></td>

                                <td class="line-height">
                                    <p><?= $detailChapterId ?></p>
                                </td>
                                <td class="so-luong line-height"><?= $chapterId ?></td>
                                <td class="so-luong line-height"><?= $numberOrderLesson ?></td>
                                <td class="tieu-de line-height tieu-de-limited" style="width: 30%;">
                                    <p><?= $title ?></p>
                                </td>
                                <td class="so-luong line-height"><?= $video ?></td>
                                <td class="so-luong line-height"><?= $document ?></td>
                                <td class="so-luong line-height"><?= $timeLesson ?></td>
                                <td class="d-flex flex-column">
                                    <a href="" class="btn-edit-admin">Sửa</a>
                                    <a href="" class="btn-delete-admin">Xóa</a>
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