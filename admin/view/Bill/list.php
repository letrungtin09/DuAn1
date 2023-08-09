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
                                <th scope="col">ID</th>
                                <th scope="col">NGƯỜI MUA</th>
                                <th scope="col">SỐ LƯỢNG</th>
                                <th scope="col">TỔNG TIỀN</th>
                                <th scope="col">TRẠNG THÁI</th>
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
                                <td>
                                    <p></p>
                                </td>
                                <td>
                                    <p>
                                        <?= $total ?>
                                    </p>
                                </td>
                                <td>
                                    <?php
                                        if ($statusBill == 0) {
                                            echo "<p style='color: #cc301f; font-weight: 500;'>Chưa thanh toán</p>";
                                        } else {
                                            echo "<p style='color: #177e5e; font-weight: 500;'>Đã thanh toán</p>";
                                        }
                                        ?>
                                </td>
                                <td>
                                    <div class="d-flex flex-column align-items-center">
                                        <a type="button" class="btn-edit-admin">Sửa</a>
                                        <a type="button" class="btn-delete-admin">Xóa</a>
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