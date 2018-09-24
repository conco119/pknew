<?php
/* Smarty version 3.1.30, created on 2018-08-13 12:43:25
  from "/Users/mtd/Sites/pknew/app/site/view/layouts/includes/nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b711a7dadc934_59900962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e66fcdabbb12d8bd7650b990ae5c47f36c8321d' => 
    array (
      0 => '/Users/mtd/Sites/pknew/app/site/view/layouts/includes/nav.tpl',
      1 => 1534139003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b711a7dadc934_59900962 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <li class="active"><a href="./">Trang chủ</a></li>
                            <li class="" ><a href="#service">Dịch vụ</a></li>
                            <li class=""><a href="#about">Về chúng tôi</a></li>
                            <li class="" id='contact-menu'><a href="./?mc=contact">Liên hệ</a></li>
                            <li class="" id='tintuc-menu'><a href="./?mc=post">Tin tức</a></li>
                            <li class=""><a href="#contact">Lịch làm việc bác sĩ</a></li>
                            <?php if ($_smarty_tpl->tpl_vars['currentUser']->value['id'] != 0) {?>
                                <li class="" id='video-menu'><a href="./?mc=user&site=detail&id=<?php echo $_smarty_tpl->tpl_vars['currentUser']->value['id'];?>
">Video bệnh nhân</a></li>
                                <li class=""><a href="./?mc=user&site=logout">Đăng xuất</a></li>
                             <?php } else { ?>
                                <li class="" id='login-menu' ><a href="./?mc=user&site=get_login">Đăng nhập</a></li>
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
