<section class="formInsertEdit">
    <div class="formInsertEdit__title">
        <h1>SỬA ĐƠN HÀNG</h1>
    </div>
    <div class="formInsertEdit__space"></div>
    <div class="formInsertEdit__content">
        <form>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="idBill">Mã đơn hàng</label><br>
                <input class="formInsertEdit__input input-readonly" type="text" name="idBill" value="Auto number"
                    readonly>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="userId">Người mua</label><br>
                <input class="formInsertEdit__input input-readonly" type="text" name="userId" readonly>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="quanlity">Số lượng khóa học</label><br>
                <input class="formInsertEdit__input input-readonly" type="text" name="quanlity" readonly>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="total">Tổng tiền đơn hàng</label><br>
                <input class="formInsertEdit__input input-readonly" type="text" name="total" readonly>
            </div>
            <div class="formInsertEdit__item">
                <label class="formInsertEdit__label" for="statusBill">Trạng thái đơn hàng</label><br>
                <div class="formInsertEdit__check">
                    <input class="formInsertEdit__input formInsertEdit__radio" type="radio" name="statusBill"> <span
                        class="unpaid">Chưa thanh toán</span>
                    <input class="formInsertEdit__input formInsertEdit__radio" type="radio" name="statusBill"> <span
                        class="paid">Đã thanh toán</span>
                </div>
            </div>
            <div class="formInsertEdit__item formInsertEdit__btn">
                <button name="btn-update" class="btn-update">Cập nhật</button>
                <a href="#" class="btn-list">Danh sách</a>
            </div>
        </form>
    </div>
</section>