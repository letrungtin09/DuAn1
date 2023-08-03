<section class="content-qt content-qt-admin">
    <div class="container container-qt">
        <div class="row">
            <div class="col-sm col-1">
                <div class="col-1-left">
                    <h1>QUẢN LÝ LOẠI KHÓA HỌC</h1>
                </div>
                <div class="col-1-right">
                    <a href="<?=$ADMIN_URL?>?mod=category&act=add" class="btn btn-success">+ Thêm loại khóa học</a>
                </div>
            </div>
            <div class="col-sm col-2">
                <form action="">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col"><input type="checkbox" id="masterCheckbox" value=""></th>
                                <th scope="col">ID</th>
                                <th scope="col">TÊN LOẠI KHÓA HỌC</th>
                                <th scope="col">THAO TÁC</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($listCate as $list){
                                            extract($list);
                                        ?>
                            <tr>
                                <td scope="row" class="name-course"><input type="checkbox" class="subCheckbox" value="">
                                </td>
                                <td class="so-luong"><?=$cateId?></td>
                                <td><?=$nameCate?></td>
                                <td class="btn-thao-tac">
                                    <a href="<?=$ADMIN_URL?>?mod=category&act=edit&btn_edit&cateId=<?=$cateId?>"class="btn btn-warning">Sửa</a>
                                    <a href="<?=$ADMIN_URL?>?mod=category&act=list&btn_delete&cateId=<?=$cateId?>" class="btn btn-danger">Xóa</a>
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