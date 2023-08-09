<section class="content-qt content-qt-admin">
    <div class="accordion accordion-admin-statistic" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <h1>THỐNG KÊ THU NHẬP</h1>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="container container-qt">
                        <div class="row">
                            <div class="col-sm col-1">
                                <div class="col-1-left">
                                    <!-- <h1>THỐNG KÊ KHÓA HỌC</h1> -->
                                </div>

                            </div>
                            <div class="col-sm col-2">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">LOẠI KHÓA HỌC</th>
                                            <th scope="col">SL KHÓA HỌC</th>
                                            <th scope="col">SỐ LƯỢT MUA</th>
                                            <th scope="col">THU VỀ</th>
                                            <th scope="col">CHIẾC KHẤU (70%)</th>
                                            <th scope="col">DOANH THU</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listStatistic as $list) {
                                            extract($list);
                                            ?>
                                            <tr>
                                                <td scope="row" class="name-course">
                                                    <?= $nameCate ?>
                                                </td>
                                                <td class="so-luong">
                                                    <?= $quantity ?>
                                                </td>
                                                <td>
                                                    <?= number_format($price_sum) ?>
                                                </td>

                                                <?php
                                                $list_buy = statistic_all_buy_courses($cateId);
                                                foreach ($list_buy as $buy_list) {
                                                    ?>
                                                    <td>
                                                        <?= number_format($buy_list['sum_buy']); ?>đ
                                                    </td>
                                                    <td>
                                                        <?= number_format($buy_list['discount']); ?>đ
                                                    </td>
                                                    <td>
                                                        <?= number_format($buy_list['revenue']); ?>đ
                                                    </td>
                                                <?php } ?>

                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td style="font-weight:bold">TỔNG: </td>
                                            <?php
                                            $list_all = statistic_all_courses();
                                            foreach ($list_all as $all_list) {
                                                ?>
                                                <td style="font-weight:bold">
                                                    <?= number_format($all_list['sum_kh']) ?>
                                                </td>
                                                <td style="font-weight:bold">
                                                    <?= number_format($all_list['sum_lm']) ?>
                                                </td>
                                                <td style="font-weight:bold">
                                                    <?= number_format($all_list['sum_sum_buy']) ?>
                                                </td>
                                                <td style="font-weight:bold">
                                                    <?= number_format($all_list['sum_discount']) ?>
                                                </td>
                                                <td style="font-weight:bold">
                                                    <?= number_format($all_list['sum_revenue']) ?>
                                                </td>
                                            <?php } ?>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h1>THU NHẬP GIẢNG VIÊN</h1>
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="container container-qt">
                        <div class="row">
                            <div class="col-sm col-1">
                                <div class="col-1-left">
                                    <!-- <h1>THỐNG KÊ KHÓA HỌC</h1> -->
                                </div>

                            </div>
                            <div class="col-sm col-2">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">MÃ GIẢNG VIÊN</th>
                                            <th scope="col">TÊN GIẢNG VIÊN</th>
                                            <th scope="col">SỐ LƯỢNG KHÓA HỌC</th>
                                            <th scope="col">SỐ LƯỢT MUA</th>
                                            <th scope="col">THU NHẬP</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $list_teaching = statistic_select_all_teaching();
                                        foreach ($list_teaching as $tea_list) {
                                            extract($tea_list);
                                            ?>
                                            <tr>
                                                <td scope="row" class="name-course">
                                                    <?= $userId ?>
                                                </td>
                                                <td scope="row" class="name-course">
                                                    <?= $fullName ?>
                                                </td>
                                                <td class="so-luong">
                                                    <?php
                                                    $count_course = statistic_course_count_userId($userId);
                                                    echo $count_course;
                                                    ?>
                                                </td>
                                                <td>
                                                    <?= number_format($price_min) ?>đ
                                                </td>
                                                <td>
                                                    <?= number_format($price_max) ?>đ
                                                </td>
                                                <td>
                                                    <?= number_format($price_avg) ?>đ
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h1>THỐNG KÊ NGƯỜI DÙNG</h1>
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="container container-qt">
                        <div class="row">
                            <div class="col-sm col-1">
                                <div class="col-1-left">
                                    <!-- <h1>THỐNG KÊ KHÓA HỌC</h1> -->
                                </div>

                            </div>
                            <div class="col-sm col-2">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">LOẠI KHÓA HỌC</th>
                                            <th scope="col">SỐ LƯỢNG KHÓA HỌC</th>
                                            <th scope="col">SỐ LƯỢNG ĐƠN</th>
                                            <th scope="col">CHIẾC KHẤU</th>
                                            <th scope="col">DOANH THU</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listStatistic as $list) {
                                            extract($list);
                                            ?>
                                            <tr>
                                                <td scope="row" class="name-course">
                                                    <?= $nameCate ?>
                                                </td>
                                                <td class="so-luong">
                                                    <?= $quantity ?>
                                                </td>
                                                <td>
                                                    <?= number_format($price_min) ?>đ
                                                </td>
                                                <td>
                                                    <?= number_format($price_max) ?>đ
                                                </td>
                                                <td>
                                                    <?= number_format($price_avg) ?>đ
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="chart-admin-Sta">
    <canvas id="myChart"></canvas>
</section>