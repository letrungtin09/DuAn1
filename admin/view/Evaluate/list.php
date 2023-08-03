<section class="content-qt content-qt-admin">
                <div class="container container-qt">
                    <div class="row">
                        <div class="col-sm col-1">
                            <div class="col-1-left">
                                <h1>QUẢN LÝ ĐÁNH GIÁ</h1>
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
                                            <th scope="col">NGƯỜI ĐĂNG</th>
                                            <th scope="col">NỘI DUNG</th>
                                            <th scope="col">ĐIỂM ĐÁNH GIÁ</th>
                                            <th scope="col">NGÀY ĐĂNG</th>
                                            <th scope="col">KHÓA HỌC</th>
                                            <th scope="col">THAO TÁC</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach($list_evaluete as $list){
                                                extract($list);
                                        ?>
                                        <tr>
                                            <td scope="row" class="name-course"><input type="checkbox"
                                                    class="subCheckbox" value=""></td>
                                            <td class="so-luong"><?= $evalueteId; ?></td>
                                            <td class="tieu-de tieu-de-ac">
                                                <p style="text-align: left;" >
                                                    <?php 
                                                        $name_user = user_select_by_id($userId);
                                                        echo $name_user['fullName'];
                                                    ?>
                                                </p>
                                            </td>
                                            <td style="width: 20%; text-align: left; line-height: 30px;">
                                                <p><?= $content ?></p>
                                            </td>
                                            <td><p><?= $evaluateRate ?></p></td>
                                            <td><p><?= $evaluateTime ?></p></td>
                                            <td style="width: 20%; text-align: left; line-height: 30px;">
                                                 <p>
                                                    <?php
                                                    $name_courses = course_select_by_id($courseId);
                                                    echo $name_courses['title'];
                                                    ?>
                                                 </p>
                                            </td>
                                            <td class="d-flex flex-column">
                                                <a href="" class="btn-edit-admin">Sửa</a>
                                                <a href="" class="btn-delete-admin">Xóa</a>
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