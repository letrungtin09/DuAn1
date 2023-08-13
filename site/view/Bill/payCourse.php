<?php check_login(); ?>
<section class="payCourse">
    <div class="payCourse__container">
        <div class="payCourse__left">
            <div class="payCourse__content">
                <h1>Thanh toán</h1>
                <div class="payCourse__infoUser">
                    <h2>Thông tin khách hàng</h2>
                    <form>
                        <label for="fullName">Full name <span>*</span></label><br>
                        <input type="text" name="fullName" value="<?=$_SESSION['user']['fullName']?>" readonly><br>
                        <label for="mail">Email <span>*</span></label><br>
                        <input type="text" name="mail" value="<?=$_SESSION['user']['email']?>" readonly>
                    </form>
                </div>
                <div class="payCourse__methodPay">
                    <h2>Chọn Phương Thức Thanh Toán</h2>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button id="btn-1" onclick="checkedInput1()" class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                        <form class="accordion-form">
                                            <input id="check-1" type="radio" name="checkpay">
                                            <span class="form-info">
                                                <div class="form-card">
                                                    <img src="https://www.udemy.com/staticx/udemy/images/v9/card-default.svg" alt="">
                                                    <span>Thanh Toán Bằng VNPay</span>
                                                </div>
                                                <span class="form-img">
                                                    <img src="https://vivnpay.vn/assets/media/logo/logo-52.svg" alt="">
                                                   
                                                </span>
                                            </span>
                                        </form>
                                </button>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="payCourse__infoBill">
                    <h2>Thông tin đặt hàng</h2>
                    <ul>
                        <?php
                        $sumPrice = 0;
                        $sumSale = 0;
                        $CourseInBill = get_detail_onBill($_GET['payBill']);
                        foreach($CourseInBill as $coursein){
                            $courseIndetail = get_course_ondetailBill($coursein['courseId']);
                            $sumPrice += $courseIndetail['price'];
                            $sumSale += ($courseIndetail['price'] * $courseIndetail['sale'])/100;
                        ?>
                            <li>
                                <div class="payCourse__title">
                                    <img src="<?=$IMAGE_DIR?>/courses/<?=$courseIndetail['image']?>" alt="">
                                    <p><?=$courseIndetail['title']?></p>
                                </div>
                                <div class="payCourse__price">
                                    <div class="price">
                                        <span><?=number_format($courseIndetail['price'])?> <span class="vnd">đ</span></span>
                                    </div>
                                    <div class="discount">
                                        <span><?=number_format($courseIndetail['price'] - ($courseIndetail['price'] *($courseIndetail['sale']/100)))?><span class="vnd">đ</span></span>
                                    </div>
                                </div>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="payCourse__right">
            <div class="payCourse__summary">
                <div class="payCourse__total">
                    <h2>Tóm tắt</h2>
                    <div class="price-total">
                        <span>Giá gốc:</span>
                        <span><?=number_format($sumPrice)?> <span class="vnd">đ</span></span>
                    </div>
                    <div class="discount-total">
                        <span>Mức chiết khấu:</span>
                        <span>- <?=number_format($sumSale)?> <span class="vnd">đ</span></span>
                    </div>
                    <div class="line"></div>
                    <?php $sumAll = $sumPrice - $sumSale?>
                    <div class="money-total">
                        <span>Tổng:</span>
                        <span><?=number_format($sumAll)?> <span class="vnd">đ</span></span>
                    </div>
                </div>
                <div class="payCourse__checkout">
                    <p class="p-first">Bằng việc hoàn tất giao dịch mua, bạn đồng ý với <a href="#">Điều khoản dịch vụ</a> này.</p>
                    <a href='<?=$SITE_URL?>?checkVNPay&payBill=<?=$_GET['payBill']?>&total=<?=$sumAll?>' style="text-decoration: none;display: block;width: 100%;text-align: center;background-color: #538c53;color: white;line-height: 50px; margin-bottom: 10px;cursor: pointer;">Thanh toán</a>
                    <p class="p-last">Đảm bảo hoàn tiền trong 30 ngày</p>
                </div>
            </div>
        </div>
    </div>
</section>