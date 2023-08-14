<section class="content-qt content-qt-admin">
    <div class="accordion accordion-admin-statistic" id="accordionExample">
    <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <h1>THU NHẬP NGÀY</h1>
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
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
                                            <th scope="col">MÃ LOẠI</th>
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
                                                    <?= $cateId ?>
                                                </td>
                                                <td scope="row" class="name-course">
                                                    <?= $nameCate ?>
                                                </td>
                                                <td class="so-luong">
                                                    <?= $quantity ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $statistic_buy_admin = statistic_buy_admin_date($cateId);
                                                    foreach ($statistic_buy_admin as $list_statistic_buy_admin) {
                                                        echo number_format($list_statistic_buy_admin['sl_ad_d']);
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $statistic_income_date_admin = statistic_income_admin_date($cateId);
                                                    foreach ($statistic_income_date_admin as $list_statistic_income_date_admin) {
                                                        echo number_format($list_statistic_income_date_admin['buy_ad_d']);
                                                    }
                                                    ?>đ
                                                </td>
                                                <td>
                                                    <?php
                                                    $statistic_income_date_admin = statistic_income_admin_date($cateId);
                                                    foreach ($statistic_income_date_admin as $list_statistic_income_date_admin) {
                                                        $list_statistic_income_date_admin['buy_ad_d'] = $list_statistic_income_date_admin['buy_ad_d'] * 0.7;
                                                        echo number_format($list_statistic_income_date_admin['buy_ad_d']);
                                                    }
                                                    ?>đ
                                                </td>
                                                <td>
                                                    <?php
                                                    $statistic_income_date_admin = statistic_income_admin_date($cateId);
                                                    foreach ($statistic_income_date_admin as $list_statistic_income_date_admin) {
                                                        $list_statistic_income_date_admin['buy_ad_d'] = $list_statistic_income_date_admin['buy_ad_d'] - ($list_statistic_income_date_admin['buy_ad_d'] * 0.7);
                                                        echo number_format($list_statistic_income_date_admin['buy_ad_d']);
                                                    }
                                                    ?>đ
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
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <h1>THU NHẬP THÁNG</h1>
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
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
                                            <th scope="col">MÃ LOẠI</th>
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
                                                    <?= $cateId ?>
                                                </td>
                                                <td scope="row" class="name-course">
                                                    <?= $nameCate ?>
                                                </td>
                                                <td class="so-luong">
                                                    <?= $quantity ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $statistic_buy_month_admin = statistic_buy_admin_month($cateId);
                                                    foreach ($statistic_buy_month_admin as $list_statistic_buy_month_admin) {
                                                        echo number_format($list_statistic_buy_month_admin['sl_ad_m']);
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $statistic_income_month_admin = statistic_income_admin_month($cateId);
                                                    foreach ($statistic_income_month_admin as $list_statistic_income_month_admin) {
                                                        echo number_format($list_statistic_income_month_admin['buy_ad_m']);
                                                    }
                                                    ?>đ
                                                </td>
                                                <td>
                                                    <?php
                                                    $statistic_income_month_admin = statistic_income_admin_month($cateId);
                                                    foreach ($statistic_income_month_admin as $list_statistic_income_month_admin) {
                                                        $list_statistic_income_month_admin['buy_ad_m'] = $list_statistic_income_month_admin['buy_ad_m'] * 0.7;
                                                        echo number_format($list_statistic_income_month_admin['buy_ad_m']);
                                                    }
                                                    ?>đ
                                                </td>
                                                <td>
                                                    <?php
                                                    $statistic_income_month_admin = statistic_income_admin_month($cateId);
                                                    foreach ($statistic_income_month_admin as $list_statistic_income_month_admin) {
                                                        $list_statistic_income_month_admin['buy_ad_m'] = $list_statistic_income_month_admin['buy_ad_m'] - ($list_statistic_income_month_admin['buy_ad_m'] * 0.7);
                                                        echo number_format($list_statistic_income_month_admin['buy_ad_m']);
                                                    }
                                                    ?>đ
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
            <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <h1>THU NHẬP NĂM</h1>
                </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
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
                                            <th scope="col">MÃ LOẠI</th>
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
                                                    <?= $cateId ?>
                                                </td>
                                                <td scope="row" class="name-course">
                                                    <?= $nameCate ?>
                                                </td>
                                                <td class="so-luong">
                                                    <?= $quantity ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $statistic_buy_year_admin = statistic_buy_admin_year($cateId);
                                                    foreach ($statistic_buy_year_admin as $list_statistic_buy_year_admin) {
                                                        echo number_format($list_statistic_buy_year_admin['sl_ad_y']);
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $statistic_income_year_admin = statistic_income_admin_year($cateId);
                                                    foreach ($statistic_income_year_admin as $list_statistic_income_year_admin) {
                                                        echo number_format($list_statistic_income_year_admin['buy_ad_y']);
                                                    }
                                                    ?>đ
                                                </td>
                                                <td>
                                                    <?php
                                                    $statistic_income_year_admin = statistic_income_admin_year($cateId);
                                                    foreach ($statistic_income_year_admin as $list_statistic_income_year_admin) {
                                                        $list_statistic_income_year_admin['buy_ad_y'] = $list_statistic_income_year_admin['buy_ad_y'] * 0.7;
                                                        echo number_format($list_statistic_income_year_admin['buy_ad_y']);
                                                    }
                                                    ?>đ
                                                </td>
                                                <td>
                                                    <?php
                                                    $statistic_income_year_admin = statistic_income_admin_year($cateId);
                                                    foreach ($statistic_income_year_admin as $list_statistic_income_year_admin) {
                                                        $list_statistic_income_year_admin['buy_ad_y'] = $list_statistic_income_year_admin['buy_ad_y'] - ($list_statistic_income_year_admin['buy_ad_y'] * 0.7);
                                                        echo number_format($list_statistic_income_year_admin['buy_ad_y']);
                                                    }
                                                    ?>đ
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
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <h1>THU NHẬP LOẠI KHÓA HỌC</h1>
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
                                            <th scope="col">THU NHẬP NGÀY</th>
                                            <th scope="col">THU NHẬP THÁNG</th>
                                            <th scope="col">THU NHẬP NĂM</th>
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
                                                    <?php
                                                    $sum_buy_course = statistic_buy_all_course_userId($userId);
                                                    echo $sum_buy_course;
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $income_buy_date = statistic_income_date_user($userId);
                                                    foreach ($income_buy_date as $list_buy_date) {
                                                        $list_buy_date['income_date'] = $list_buy_date['income_date'] - ($list_buy_date['income_date'] * 0.3);
                                                        echo number_format($list_buy_date['income_date']);
                                                    }
                                                    ?>đ
                                                </td>
                                                <td>
                                                    <?php
                                                    $income_buy_month = statistic_income_month_user($userId);
                                                    foreach ($income_buy_month as $list_buy_month) {
                                                        $list_buy_month['income_month'] = $list_buy_month['income_month'] - ($list_buy_month['income_month'] * 0.3);
                                                        echo number_format($list_buy_month['income_month']);
                                                    }
                                                    ?>đ
                                                </td>
                                                <td>
                                                    <?php
                                                    $income_buy_year = statistic_income_year_user($userId);
                                                    foreach ($income_buy_year as $list_buy_year) {
                                                        $list_buy_year['income_year'] = $list_buy_year['income_year'] - ($list_buy_year['income_year'] * 0.3);
                                                        echo number_format($list_buy_year['income_year']);
                                                    }
                                                    ?>đ
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
                                            <th scope="col">ID</th>
                                            <th scope="col">TÊN NGƯỜI DÙNG</th>
                                            <th scope="col">SL KHÓA HỌC ĐÃ MUA</th>
                                            <th scope="col">CT TRONG NGÀY</th>
                                            <th scope="col">CT TRONG THÁNG</th>
                                            <th scope="col">CT TRONG NĂM</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $list_users = statistic_select_all_user();
                                        foreach ($list_users as $users_list) {
                                            extract($users_list);
                                            ?>
                                            <tr>
                                                <td scope="row" class="name-course">
                                                    <?= $userId ?>
                                                </td>
                                                <td class="so-luong">
                                                    <?= $fullName ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $list_courses_users = statistic_all_courses_users($userId);
                                                    foreach ($list_courses_users as $list) {
                                                        echo $list['sl_kh'];
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $spending_buy_date = statistic_spending_date_user($userId);
                                                    foreach ($spending_buy_date as $list_spen_date) {
                                                        echo number_format($list_spen_date['sum_spen']);
                                                    }
                                                    ?>đ
                                                </td>
                                                <td>
                                                    <?php
                                                    $spending_buy_month = statistic_spending_month_user($userId);
                                                    foreach ($spending_buy_month as $list_spen_month) {
                                                        echo number_format($list_spen_month['sum_spen_month']);
                                                    }
                                                    ?>đ
                                                </td>
                                                <td>
                                                    <?php
                                                    $spending_buy_year = statistic_spending_year_user($userId);
                                                    foreach ($spending_buy_year as $list_spen_year) {
                                                        echo number_format($list_spen_year['sum_spen_year']);
                                                    }
                                                    ?>đ
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