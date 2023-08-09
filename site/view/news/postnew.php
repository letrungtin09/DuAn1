<section class="postDetail">
    <div class="postDetail__container">
        <div class="postDetail__info">
            <div class="postDetail__aside">
                <h4><?=get_name_teacher($postdetail['userId'])?></h4>   
                <p><?=get_occupation_teacher($postdetail['userId'])?></p>
                <div class="postDetail__cmt">
                    <a class="postDetail__link" data-bs-toggle="offcanvas" href="#offcanvasRight" role="button"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <i class="fa-regular fa-comment"></i>
                        <span><?=$countcomment?></span>
                    </a>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                        aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <h3><?=$countcomment?> bình luận</h3>
                            <form action="<?=$SITE_URL?>?mod=comment&act=addcomment&post=<?=$_GET['post']?>" method="post">
                                <div class="cmt-form">
                                    <div class="cmt-img">
                                        <img src="<?=$IMAGE_DIR?>/users/<?=$_SESSION['user']['avatar']?>" alt="">
                                    </div>
                                    <input class="cmt-input" type="text" name='content' placeholder="Viết bình luận của bạn...">
                                    <button class="cmt-btn" name='cmt-btn'>Bình luận</button>
                                </div>
                            </form>
                            <?php
                            foreach($allcomment as $comment){?>
                                <div class="show-cmt">
                                    <div class="show-avatar">
                                        <img src="<?=$IMAGE_DIR?>/users/<?=get_avatar_user($comment['userId'])?>" alt="">
                                    </div>
                                    <div class="show-content">
                                        <div class="show-text">
                                            <h3><?=get_name_teacher($comment['userId'])?></h3>
                                            <p><?=$comment['content']?></p>
                                        </div>
                                        <div class="show-date">
                                            <span>Đăng ngày <?=$comment['date']?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="postDetail__text">
            <div>
                <h1><?=$postdetail['title']?></h1>
                <div class="postDetail__account">
                    <div class="account-img">
                        <img class="img-fluid" src="<?=$IMAGE_DIR?>/users/<?=get_avatar_user($postdetail['userId'])?>" alt="">
                    </div>
                    <div class="account-info">
                        <h4><?=get_name_teacher($postdetail['userId'])?></h4>
                        <p>Đăng ngày <?=$postdetail['date']?></p>
                    </div>
                </div>
                <div class="postDetail__content">
                    <p><?=$postdetail['description']?></p>
                    <pre><?=$postdetail['content']?></pre>
                </div>
                <div class="postDetail__cmt">
                    <a class="postDetail__link" data-bs-toggle="offcanvas" href="#offcanvasRight" role="button"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <i class="fa-regular fa-comment"></i>
                        <span><?=$countcomment?></span>
                    </a>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                        aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <h3>3 bình luận</h3>
                        </div>
                    </div>
                </div>
                <div class="postDetail__sameUser">
                    <h3>Bài đăng cùng tác giả</h3>
                    <ul>
                        <?php
                        foreach($newsSameAuthor as $post){?>
                            <li>
                                <a href="<?=$SITE_URL?>?mod=news&act=newpost&post=<?=$post['newsId']?>"><?=$post['title']?></a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>