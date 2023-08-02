<section class="content-qt content-qt-admin">
                <div class="container container-qt">
                    <div class="row">
                        <div class="col-sm col-1">
                            <div class="col-1-left">
                                <h1>QUẢN LÝ TÀI KHOẢN</h1>
                            </div>
                            <div class="col-1-right">
                                <a type="button" class="btn btn-success">+ Thêm tài khoản</a>
                            </div>
                        </div>
                        <div class="col-sm col-2">
                            <form action="">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col"><input type="checkbox" id="masterCheckbox" value=""></th>
                                            <th scope="col">ID</th>
                                            <th scope="col">HỌ VÀ TÊN</th>
                                            <th scope="col">ẢNH ĐẠI DIỆN</th>
                                            <th scope="col">EMAIL</th>
                                            <th scope="col">SĐT</th>
                                            <th scope="col">NGHỀ NGHIỆP</th>
                                            <th scope="col">VAI TRÒ</th>
                                            <th scope="col">THAO TÁC</th>
                                          
                                      

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach($list_user as $list){
                                                 extract($list);
                                        ?>
                                        <tr>
                                            <td scope="row" class="name-course"><input type="checkbox"
                                                    class="subCheckbox" value=""></td>
                                            <td class="so-luong"><?= $userId ?></td>
                                            <td class="tieu-de tieu-de-ac"> <p><?= $fullName ?></p> </td>
                                            <td class="image-course"><img style="width:100%" src="../../../assets/img/users/Tin.jpg" alt=""></td>
                                            <td><p><?= $email ?></p></td>
                                            <td><p><?= $phoneNumber ?></p></td>
                                            <td style="width: 25%;"><p><?= $career ?></p></td>
                                            <td><p><?= $role ?></p></td>
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