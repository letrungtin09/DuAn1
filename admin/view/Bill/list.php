<section class="content-qt content-qt-admin">
    <div class="container container-qt">
        <div class="row">
            <div class="col-sm col-1">
                <div class="col-1-left">
                    <h1>QUẢN LÝ ĐƠN HÀNG</h1>
                </div>
                <div class="col-1-right">

                </div>
            </div>
            <div class="col-sm col-2">
                <form action="">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col"><input type="checkbox" id="masterCheckbox" value=""></th>
                                <th scope="col">MÃ HĐ</th>
                                <th scope="col">NGƯỜI MUA</th>
                                <th scope="col">NGÀY MUA HÀNG</th>
                                <th scope="col">TỔNG TIỀN HĐ</th>
                                <th scope="col">TRẠNG THÁI HĐ</th>
                                <th scope="col">THAO TÁC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($list_bill as $list) {
                                extract($list);
                                ?>
                                <tr>
                                    <td scope="row" class="name-course"><input type="checkbox" class="subCheckbox" value="">
                                    </td>
                                    <td class="so-luong">
                                        <?= $idBill ?>
                                    </td>
                                    <td class="tieu-de tieu-de-ac">
                                        <p>
                                            <?php
                                            $nameUser = user_select_by_id($userId);
                                            echo $nameUser['fullName'];
                                            ?>
                                        </p>
                                    </td>
                                    <?php if ($statusBill == 0) { ?>
                                        <td>
                                            <p></p>
                                        </td>
                                        <td>
                                            <p></p>
                                        </td>
                                        <td>
                                            <p style='color: #cc301f; font-weight: 500;'>Chưa thanh toán</p>
                                        </td>
                                    <?php } else { 
                                        $getBill = select_info_purchase($idBill);
                                    ?>
                                        <td>
                                            <p><?=$getBill['date']?></p>
                                        </td>
                                        <td>
                                            <p><?=number_format($getBill['total_money'])?>đ</p>
                                        </td>
                                        <td>
                                            <p style='color: #177e5e; font-weight: 500;'>Đã thanh toán</p>
                                        </td>
                                    <?php } ?>
                                    <td>
                                        <div class="d-flex flex-column align-items-center">
                                            <a href="<?=$ADMIN_URL?>?mod=bill&act=detail&idBill=<?=$idBill?>&userId=<?=$userId?>" class="btn-detail-admin" class="btn-detail-admin">Chi tiết</a>
                                            <a href="<?=$ADMIN_URL?>?mod=bill&act=list&btn_delete&idBill=<?=$idBill?>" class="btn-delete-admin" class="btn-delete-admin">Xóa</a>
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