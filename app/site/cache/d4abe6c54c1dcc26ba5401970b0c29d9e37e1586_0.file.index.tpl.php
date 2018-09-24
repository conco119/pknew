<?php
/* Smarty version 3.1.30, created on 2018-09-22 16:39:54
  from "/Users/mtd/Sites/pknew1/app/site/view/post/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ba60deaa072a5_25140782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4abe6c54c1dcc26ba5401970b0c29d9e37e1586' => 
    array (
      0 => '/Users/mtd/Sites/pknew1/app/site/view/post/index.tpl',
      1 => 1537609194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba60deaa072a5_25140782 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--about-->
<section id="about" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8 col-xs-12">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                <div class="well">
                    <div class="media">
                        <a class="pull-left" href="/bai-viet/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
">
            <img class="media-object" src="<?php echo base_url($_smarty_tpl->tpl_vars['item']->value['path']);?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" width='200px'>
        </a>
                        <div class="media-body">
                            <a class="media-heading" href="/bai-viet/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>

                            <p><?php echo readMoreHelper($_smarty_tpl->tpl_vars['item']->value['content']);?>
</p>
                            <ul class="list-inline list-unstyled">
                                <li><span><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['created_at'];?>
 </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <div class="paging"><?php echo $_smarty_tpl->tpl_vars['paging']->value['paging'];?>
</div>
            </div>
            <div class='col-md-3'>
                <div class="wrapper-news-tab">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs news-tab" role="tablist">
                        <li role="presentation" class="active"><a href="#newNews" aria-controls="newNews" role="tab" data-toggle="tab">Nổi bật</a></li>
                        
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="newNews">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts1']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <div class="media new-item" style='padding-top:10px'>
                                <div class="media-left">
                                    <a href="/bai-viet/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
">

                <img class="media-object lazy" alt="Có nên thêm gia vị mặn khi chế biến đồ ăn cho trẻ?" src="<?php echo base_url($_smarty_tpl->tpl_vars['item']->value['path']);?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" width=70&amp;height=70&amp;type=1 style="display: block;">
            </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">
                <a href="/bai-viet/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
" class="title" title="Có nên thêm gia vị mặn khi chế biến đồ ăn cho trẻ?"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
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
                <div class="card my-4">
                    <h5 class="card-header">Danh mục bài viết</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="list-unstyled mb-0">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                                        <li>
                                            <a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                                        </li>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </ul>
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
$(document).ready(function() {
    $("#banner li.active").attr('class', ' ');
    $("#tintuc-menu").attr('class', 'active');
})
<?php echo '</script'; ?>
><?php }
}
