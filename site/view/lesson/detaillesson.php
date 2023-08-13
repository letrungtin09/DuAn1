<?php check_login(); ?>
<header>
    <nav class="navbar navbar-expand-lg nav_header nav_coursecontent">
        <div class="container_header">
            <a class="navbar-brand" href="<?=$SITE_URL?>">
                <img class="logo_img" src="<?=$IMAGE_DIR?>/logo-white.png" alt="">
            </a>
            <div class="nav-item dropdown kind_menu">
                <p class="nav-link" href="#" role="button">
                    <?=$courses['title']?>
                </p>
            </div>
        </div>
    </nav>
</header>
<div class="coursecontent_container row me-0">
    <div class="coursecontent_container-content col-8">
        <?php
        if(isset($detailchapet['document']) && $detailchapet['document'] != ''){?>
            <p class=""><?=$detailchapet['document']?></p>
        <?php
        }else{?>
            <iframe width="100%" height="600" src="<?php if(!isset($_GET['detailchapter'])) {echo 'https://www.youtube.com/embed/DHjqpvDnNGE';}else{echo $detailchapet['video'];} ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <?php   
        }
        ?>
        <div class="coursecontent_container-content-infor">
            <div class="detail__des">
                <h2>Mô tả</h2>
                <p id="coursecontent_container-content-text"><?=$courses['content']?></p>
                <div id="coursecontent_container-content-shadow"></div>
                <button id="coursecontent_container-content-button-text" onclick="hienthem()">Hiện thêm</button>
            </div>
            <div class="detail__teacher">
                <h2>Giảng viên</h2>
                <div class="detail__info">
                    <a href="#"><?=get_name_teacher($courses['userId'])?></a>
                    <p class="detail__career"><?=get_occupation_teacher($courses['userId'])?></p>
                    <div class="detail__avatar">
                        <a href="#" class="mb-0"><img class="img-fluid" src="<?=$IMAGE_DIR?>/users/teacher.jpg"
                                alt=""></a>
                        <ul>
                            <li>
                                <i class="fa-solid fa-star"></i>
                                <span>4,7 xếp hạng giảng viên</span>
                            </li>
                            <li>
                                <i class="fa fa-comment"></i>
                                <span>654817 đánh giá</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-user-group"></i>
                                <span>2157472 học viên</span>
                            </li>
                            <li>
                                <i class="fa-brands fa-youtube"></i>
                                <span>7 khóa học</span>
                            </li>
                        </ul>
                    </div>
                    <p><?=get_infor_user($courses['userId'])?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="coursecontent_container-menu col-4">
        <div class="detail__lesson">
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <?php
                $countAllDetailChapter = 0;
                require_once 'model/detailChapter.php';
                $chapter = get_chapter($_GET['course']);
                foreach ($chapter as $chap){
                    extract($chap);
                    $countSession = detailChapter_count_chapterId($chapterId);
                ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?=$numberOrder?>"
                                aria-expanded="false" aria-controls="panelsStayOpen-collapse<?=$numberOrder?>">
                                <span class="detail__title">
                                    <span class="title-chapter"><?=$title?></span>
                                    <span><?=$countSession?> bài giảng • <span>1 giờ 27 phút</span></span>
                                </span>
                            </button>
                        </h2>
                            <div id="panelsStayOpen-collapse<?=$numberOrder?>" class="accordion-collapse collapse">
                            <?php
                            $lesson = detailChapter_select_by_idchapter($chapterId);
                            foreach ($lesson as $les){
                                ?>
                                <div class="accordion-body">
                                    <div class="detail__source">    
                                        <div class="detail__doc">
                                            <i class="fa-brands fa-youtube"></i>
                                            <a href="<?=$SITE_URL?>?mod=lesson&act=lessonDetail&course=<?=$_GET['course']?>&detailchapter=<?=$les['detailChapterId']?>"><?=$les['title']?></a>
                                        </div>
                                        <span><?=$les['timeLesson']?></span>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>
                            </div>
                    </div>
                <?php
                }
                ?>
                
            </div>
        </div>
    </div>
</div>