<section class="content-qt content-qt-admin">
                <div class="container container-qt">
                    <div class="row">
                        <div class="col-sm col-1">
                            <div class="col-1-left">
                                <h1>QUẢN LÝ BÀI VIẾT</h1>
                            </div>
                            <div class="col-1-right">
                                <a type="button" class="btn btn-success">+ Thêm bài viết</a>
                            </div>
                        </div>
                        <div class="col-sm col-2">
                            <form action="">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col"><input type="checkbox" id="masterCheckbox" value=""></th>
                                            <th scope="col">ID</th>
                                            <th scope="col">TIÊU ĐỀ</th>
                                            <th scope="col">HÌNH ẢNH</th>
                                            <th scope="col">MÔ TẢ</th>
                                            <th scope="col">NGÀY ĐĂNG</th>
                                            <th scope="col">NGƯỜI ĐĂNG</th>
                                            <th scope="col">THAO TÁC</th>
                                          
                                      

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach($list_news as $list){
                                                extract($list);
                                         
                                        ?>
                                        <tr>
                                            <td scope="row" class="name-course"><input type="checkbox"
                                                    class="subCheckbox" value=""></td>
                                            <td class="so-luong"><?= $newsId ?></td>
                                            <td class="tieu-de tieu-de-ac"> <p style="text-align: left; line-height: 30px; margin: 0;" > <?= $title ?></p> </td>
                                            <td class="image-course"><img style="width:100%" src="./img/courses/fe3.jpg" alt=""></td>
                                            <td style="width: 20%; text-align: left; line-height: 30px;"><p><?= $description ?></p></td>
                                            <td><p><?= $date ?></p></td>
                                            <td><p>
                                                <?php
                                                    $nameUser = user_select_by_id($userId);
                                                    echo $nameUser['fullName'];
                                                ?>
                                            </p></td>
                                           
                                            <td class="btn-thao-tac btn-thao-tac-column btn-thao-tac-column-2">
                                                <button type="button" class="btn btn-warning">Sửa</button>
                                                <button type="button" class="btn btn-danger">Xóa</button>
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