<section class="content-qt content-qt-admin">
                <div class="container container-qt">
                    <div class="row">
                        <div class="col-sm col-1">
                            <div class="col-1-left">
                                <h1>THỐNG KÊ KHÓA HỌC</h1>
                            </div>

                        </div>
                        <div class="col-sm col-2">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">LOẠI KHÓA HỌC</th>
                                        <th scope="col">SỐ LƯỢNG KHÓA HỌC</th>
                                        <th scope="col">GIÁ THẤP NHẤT</th>
                                        <th scope="col">GIÁ CAO NHẤT</th>
                                        <th scope="col">GIÁ TRUNG BÌNH</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listStatistic as $list) {
                                        extract($list);
                                     ?>
                                    <tr>
                                        <td scope="row" class="name-course"><?=$nameCate?></td>
                                        <td class="so-luong"><?=$quantity?></td>
                                        <td><?=number_format($price_min)?>đ</td>
                                        <td><?=number_format($price_max)?>đ</td>
                                        <td><?=number_format($price_avg)?>đ</td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <section class="chart-admin-Sta">
                <canvas id="myChart"></canvas>
            </section>