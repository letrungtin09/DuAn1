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
                                            <td class="tieu-de tieu-de-ac" style="text-align: center;">
                                                <p> 
                                                    <?php 
                                                        $name_user = user_select_by_id($userId);
                                                        echo $name_user['fullName'];
                                                    ?>
                                                </p>
                                            </td>
                                            <td>
                                                <p><?= $date ?></p>
                                            </td>
                                            <td style="text-align: center; line-height: 30px; width: 30%">
                                                <p>
                                                     <?php
                                                      $name_news = news_select_by_id($newsId);
                                                      echo $name_news['title'];
                                                    ?>                                                   
                                                </p>
                                            </td>
                                    
                                            <td>
                                                <div class="d-flex flex-column align-items-center">
                                                    <a href="<?= $ADMIN_URL ?>?mod=comment&act=detail&idComment=<?= $idComment ?>&userId=<?=$userId?>&newsId=<?=$newsId?>"
                                                    class="btn-detail-admin">Chi tiết</a>
                                                    <a href="<?=$ADMIN_URL?>?mod=comment&act=list&btn_delete&idComment=<?=$idComment?>"
                                                    class="btn-delete-admin">Xóa</a>
                                                </div>
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