<section class="content-qt content-qt-admin">
                <div class="container container-qt">
                    <div class="row">
                        <div class="col-sm col-1">
                            <div class="col-1-left">
                                <h1>QUẢN LÝ BÌNH LUẬN</h1>
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
                                            <th scope="col">NGÀY BÌNH LUẬN</th>
                                            <th scope="col">BÀI VIẾT</th>
                                            <th scope="col">THAO TÁC</th>
                                        </tr>
                                    </thead>
                                    <tbody>   
                                        <?php 
                                            foreach($list_comment as $list){
                                                extract($list);
                                        ?>  
                                        <tr>
                                            <td scope="row" class="name-course"><input type="checkbox"
                                                    class="subCheckbox" value=""></td>
                                            <td class="so-luong">
                                            <?= $idComment; ?>
                                            </td>
                                            <td class="tieu-de tieu-de-ac" style="text-align: left;">
                                                <p> 
                                                    <?php 
                                                        $name_user = user_select_by_id($userId);
                                                        echo $name_user['fullName'];
                                                    ?>
                                                </p>
                                            </td>
                                            <td style="text-align: left; width: 20%; line-height: 30px;">
                                                <p>
                                                    <?= $content;?>                                                </p>
                                            </td>
                                            <td>
                                                <p><?= $date ?></p>
                                            </td>
                                            <td style="text-align: left; line-height: 30px; width: 25%">
                                                <p>
                                                     <?php
                                                      $name_news = news_select_by_id($newsId);
                                                      echo $name_news['title'];
                                                    ?>                                                   
                                                </p>
                                            </td>
                                    
                                            <td class="d-flex flex-column">
                                                <a href="" class="btn-edit-admin">Sửa</a>
                                                <a href="" class="btn-delete-admin">Xóa</a>
                                            </td>
                                        </tr> 
                                        <?php
                                            }
                                        ?>    
                                    </tbody>
                                </table>
                            </form>

                        </div>
                    </div>
                </div>
            </section>