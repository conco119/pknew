<?php
/* Smarty version 3.1.30, created on 2018-09-23 10:14:16
  from "/Users/mtd/Sites/pknew1/app/site/view/layouts/includes/nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ba705083a3b53_65993076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89a33a3929da8dae9826a79a3a18d1408e35741c' => 
    array (
      0 => '/Users/mtd/Sites/pknew1/app/site/view/layouts/includes/nav.tpl',
      1 => 1537672429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba705083a3b53_65993076 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
                        <a class="navbar-brand" href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
img/logo.png" class="img-responsive"
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
                            <?php if ($_smarty_tpl->tpl_vars['currentUser']->value['id'] != 0) {?>
                                <li class="" id='video-menu'><a href="/?mc=user&site=detail&id=<?php echo $_smarty_tpl->tpl_vars['currentUser']->value['id'];?>
">Video bệnh nhân</a></li>
                                <li class=""><a href="/?mc=user&site=logout">Đăng xuất</a></li>
                             <?php } else { ?>
                                <li class="" id='login-menu' ><a href="/dang-nhap">Đăng nhập</a></li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</section>
<!--/ banner--><?php }
}
