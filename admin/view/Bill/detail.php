<section class="formInsertEdit">
    <div class="formInsertEdit__title">
        <h1>CHI TIẾT HÓA ĐƠN</h1>
    </div>
    <div class="formInsertEdit__space"></div>
    <div class="formInsertEdit__content">
        <form>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="idBill">Mã hóa đơn</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="idBill" value="<?=$getBill['idBill']?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="userId">Người mua</label><br>
                <?php $nameUser = user_select_by_id($userId); ?>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="userId" value="<?=$nameUser['fullName']?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="quanlity">Số lượng khóa học</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="text" name="quanlity" value="<?=$countCourse?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="date">Ngày mua hàng</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <input class="formInsertEdit__input" type="date" name="date" value="<?=$getInfo['date']?>" readonly>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="total_money">Tổng tiền hóa đơn</label><br>
                <div class="formInsertEdit__control input-readonly">
                    <?php if($getBill['statusBill'] == 0){ ?>
                        <input class="formInsertEdit__input" type="text" name="total_money" value="" readonly>
                    <?php } else { ?>
                        <input class="formInsertEdit__input" type="text" name="total_money" value="<?=number_format($getInfo['total_money'])?>đ" readonly>                       
                    <?php } ?>
                </div>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="statusBill">Trạng thái hóa đơn</label><br>
                <div class="formInsertEdit__check input-readonly">
                    <?php if($getBill['statusBill'] == 0){ ?>
                        <input class="formInsertEdit__input formInsertEdit__radio" type="radio" name="statusBill" checked> <span
                            class="unpaid">Chưa thanh toán</span>
                        <input class="formInsertEdit__input formInsertEdit__radio" type="radio" name="statusBill"> <span
                            class="paid">Đã thanh toán</span>
                    <?php } else { ?>
                        <input class="formInsertEdit__input formInsertEdit__radio" type="radio" name="statusBill"> <span
                        class="unpaid">Chưa thanh toán</span>
                        <input class="formInsertEdit__input formInsertEdit__radio" type="radio" name="statusBill" checked> <span
                        class="paid">Đã thanh toán</span>
                    <?php } ?>
                </div>
            </div>
            <div class="formInsertEdit__item formInsertEdit__btn">
                <a href="<?= $ADMIN_URL ?>?mod=bill&act=list&btn_delete&idBill=<?= $idBill ?>" class="btn-delete-admin" style="border-radius:0px; margin-right:8px;">Xóa</a>
                <a href="<?=$ADMIN_URL?>?mod=bill&act=list" class="btn-list">Danh sách</a>
            </div>
        </form>
    </div>
</section>