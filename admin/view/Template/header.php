<div class="col-right">
            <!-- HEADER -->
            <header class="header-sideHead header-sideHead-admin">
                <nav class="navbar navbar-expand-lg nav-slidebar">
                    <div class="header_search">
                        <form class="d-flex" role="search">
                            <button class="btn btn-outline-success header_search_btn" type="submit">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                            <input class="header_search_input me-2" placeholder="Tìm kiếm nội dung bất kì">
                        </form>
                    </div>
                </nav>
                <nav class="navbar navbar-expand-lg nav_header">
                    <div class="container_header">
                        <button class="header_dark">
                            <i class="fa-regular fa-moon"></i>
                        </button>
                        <div class="dropdown dropdown_nav_user">
                            <!-- modal của admin -->
                    <?php if($_SESSION["user"]["role"] == "admin"){ ?>
                        <a class="btn btn-secondary dropdown-toggle dropdown_nav_user-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?=$IMAGE_DIR?>/users/<?=$_SESSION["user"]["avatar"]?>" alt="">
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-header">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="<?=$IMAGE_DIR?>/users/<?=$_SESSION["user"]["avatar"]?>" alt="">
                                </a>
                                <div>
                                    <h6><?=$_SESSION["user"]["fullName"]?></h6>
                                    <p><?=$_SESSION["user"]["email"]?></p>
                                </div>
                            </div>
                            <ul class="dropdown-menu-mid">
                                <li><a href="<?=$SITE_URL?>?mod=user&act=updateaccount" class="">Cập nhập tài khoản</a></li>
                                <li><a href="<?=$SITE_URL?>?mod=user&act=changepass" class="">Đổi mật khẩu</a></li>
                            </ul>
                            <div class="dropdown-menu-end">
                                <a href="<?=$SITE_URL?>?mod=user&act=logoff" class="">Đăng xuất</a>
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </div>
                        </div>
                        </div>
                    </div>
                    <?php } ?>
                </nav>
            </header>