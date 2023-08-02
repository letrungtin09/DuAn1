<section class="content-qt content-qt-admin">
    <div class="container container-qt">
        <div class="row">
            <div class="col-sm col-1">
                <div class="col-1-left">
                    <h1>CHI TIẾT KHÓA HỌC "Thiết kế Web với HTML, CSS..."</h1>
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
                                <th scope="col">STT</th>
                                <th scope="col">TIÊU ĐỀ CHƯƠNG</th>
                                <th scope="col">THAO TÁC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listChapter as $list){
                                extract($list);
                            ?>
                            <tr>
                                <td scope="row" class="name-course line-height"><input type="checkbox"
                                        class="subCheckbox" value=""></td>
                                <td class="so-luong line-height"><?=$chapterId?></td>
                                <td class="line-height">
                                    <p><?=$numberOrder?></p>
                                </td>
                                <td class="tieu-de line-height" style="width: 30%;">
                                    <p><?=$title?></p>
                                </td>
                                <td class="line-height btn-thao-tac btn-thao-tac-column btn-thao-tac-column-type">
                                    <button type="button" class="btn btn-warning">Sửa</button>
                                    <button type="button" class="btn btn-danger">Xóa</button>
                                    <a href="<?=$ADMIN_URL?>?mod=lesson&act=list&chapterId=<?=$chapterId?>" class="btn btn-secondary">Chi tiết</a>
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