<?php
/* Smarty version 3.1.30, created on 2018-08-13 12:59:30
  from "/Users/mtd/Sites/pknew/app/site/view/post/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b711e42e75779_95185190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3f5d99e2b3f02162b2bfe37fb5ec7e2637756eb' => 
    array (
      0 => '/Users/mtd/Sites/pknew/app/site/view/post/index.tpl',
      1 => 1534139970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b711e42e75779_95185190 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--about-->
<section id="about" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div style="visibility: visible;" class="col-sm-9 more-features-box">
                    <div class="more-features-box-text">
                        <div class="more-features-box-text-icon">
                            
                            <img src="https://i.kym-cdn.com/photos/images/original/000/306/886/f02.jpg" width=70px>
                        </div>
                        <div class="more-features-box-text-description">
                            <h3>It's something important you want to know.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
                        </div>
                    </div>
                    <div class="more-features-box-text">
                        <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
                        <div class="more-features-box-text-description">
                            <h3>It's something important you want to know.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-3'>
                <div class="wrapper-news-tab">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs news-tab" role="tablist">
                        <li role="presentation" class="active"><a href="#newNews" aria-controls="newNews" role="tab" data-toggle="tab">Bài mới</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Nổi bật</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="newNews">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>

                            <div class="media new-item" style='padding-top:10px'>
                                <div class="media-left">
                                    <a href="/cham-soc-be-yeu/co-nen-them-gia-vi-man-khi-che-bien-do-an-cho-tre.html">

                <img class="media-object lazy" alt="Có nên thêm gia vị mặn khi chế biến đồ ăn cho trẻ?" src="http://localhost/pknew/upload/post/3_mtd1533477905.png" width=70&amp;height=70&amp;type=1 style="display: block;">
            </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">
                <a href="/cham-soc-be-yeu/co-nen-them-gia-vi-man-khi-che-bien-do-an-cho-tre.html" class="title" title="Có nên thêm gia vị mặn khi chế biến đồ ăn cho trẻ?">Có nên thêm gia vị mặn khi chế biến đồ ăn cho trẻ?</a>
            </h5>
                                    <ul class="option" style="padding-left: 0px; font-size: 12px">
                                        <li>
                                            <i class="fa fa-calendar-o"></i> 13/07/2018 02:48
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <div class="media new-item" style='padding-top:10px'>
                                <div class="media-left">
                                    <a href="/cac-benh-thuong-gap/phong-benh-gan-nhiem-mo-voi-che-do-an-uong.html">
                <img class="media-object lazy" alt="Có nên thêm gia vị mặn khi chế biến đồ ăn cho trẻ?" src="http://localhost/pknew/upload/post/3_mtd1533477905.png" width=70&amp;height=70&amp;type=1 style="display: block;">
            </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">
                <a href="/cac-benh-thuong-gap/phong-benh-gan-nhiem-mo-voi-che-do-an-uong.html" class="title" title="Phòng bệnh gan nhiễm mỡ với chế độ ăn uống">Phòng bệnh gan nhiễm mỡ với chế độ ăn uống</a>
            </h5>
                                    <ul class="option" style="padding-left: 0px">
                                        <li>
                                            <i class="fa fa-calendar-o"></i> 02/08/2018 05:11
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ about-->
<?php echo '<script'; ?>
>
    $(document).ready(function(){
        $("#banner li.active").attr('class', ' ');
        $("#tintuc-menu").attr('class', 'active');
    })
<?php echo '</script'; ?>
>
<?php }
}
