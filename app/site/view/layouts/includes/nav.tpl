<!--banner-->
<section id="banner" class="banner">
    <div class="bg-color">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="col-md-12">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="{$arg.stylesheet}img/logo.png" class="img-responsive"
                                                              style="width: 140px; margin-top: -16px;"></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/">Trang chủ</a></li>
                            <li class="" ><a href="/">Dịch vụ</a></li>
                            <li id='aboutus'><a href="/ve-chung-toi">Về chúng tôi</a></li>
                            <li class="" id='contact-menu'><a href="/lien-he">Liên hệ</a></li>
                            <li class="" id='tintuc-menu'><a href="/tin-tuc">Tin tức</a></li>
                            <li id='calender'><a href="/lich-lam-viec">Lịch làm việc bác sĩ</a></li>
                            {if $currentUser.id neq 0 }
                                <li class="" id='video-menu'><a href="/?mc=user&site=detail&id={$currentUser.id}">Video bệnh nhân</a></li>
                                <li class=""><a href="/?mc=user&site=logout">Đăng xuất</a></li>
                             {else}
                                <li class="" id='login-menu' ><a href="/dang-nhap">Đăng nhập</a></li>
                            {/if}
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</section>
<!--/ banner-->