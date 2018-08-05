<?php
/* Smarty version 3.1.30, created on 2018-07-03 19:34:37
  from "/Users/mtd/Sites/htaccess/app/site/view/layouts/includes/sidebar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b3b6d5d5c0551_34116762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36855f5da0ae07d5dbdabec8e3b1d2458843004d' => 
    array (
      0 => '/Users/mtd/Sites/htaccess/app/site/view/layouts/includes/sidebar.tpl',
      1 => 1530621187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3b6d5d5c0551_34116762 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="sidebar_title bg_34495e">
    <h3><i class="fa fa-tasks"></i> Danh Mục</h3>
</div>
<div class="category bg_white mar-btm">
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value, 'list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
?>
            <li><a href="./?mc=category&n=<?php echo $_smarty_tpl->tpl_vars['list']->value['menu_link'];?>
"> <?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
 <?php if ($_smarty_tpl->tpl_vars['list']->value['child_menu'] != NULL) {?><i class="fa fa-caret-right"></i><?php }?></a>
                <?php if ($_smarty_tpl->tpl_vars['list']->value['child_menu'] != NULL) {?>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value['child_menu'], 'subList');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subList']->value) {
?>
                            <li><a href="./?mc=category&n=<?php echo $_smarty_tpl->tpl_vars['subList']->value['menu_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['subList']->value['name'];?>
</a></li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>
                <?php }?>
            </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
</div>

<br>

<div class="bestseller bg_white mar-btm">
    <div class="sidebar_title bg_e84c3d">
        <h3><i class="fa fa-tasks"></i> Bán chạy nhất</h3>
    </div>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['best_seller']->value, 'list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
?>
            <li>
                <div class="col-md-4 col-sm-4 col-xs-12 col-df text-center">
                    <a href="./?mc=product&site=detail&n=<?php echo $_smarty_tpl->tpl_vars['list']->value['link_name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
"><img src="<?php echo base_url($_smarty_tpl->tpl_vars['list']->value['image_path']);?>
/<?php echo $_smarty_tpl->tpl_vars['list']->value['image_name'];?>
" width="100%;"></a>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12 col-df">
                    <div class="info_prd">
                        <a href="./?mc=product&site=detail&n=<?php echo $_smarty_tpl->tpl_vars['list']->value['link_name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</a>
                    </div>
                    <div class="price">
                        <?php if ($_smarty_tpl->tpl_vars['list']->value['is_discount'] == 1) {?>
                            <?php echo $_smarty_tpl->tpl_vars['list']->value['sale_price'];?>
đ
                            <span><?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
đ </span>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
đ
                        <?php }?>
                    </div>
                </div>
            </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </ul>
    <div class="clear"></div>
</div>


<div class="bestseller bg_white mar-btm">
    <div class="sidebar_title bg_e84c3d">
        <h3><i class="fa fa-tasks"></i> Sản phẩm khuyến mãi</h3>
    </div>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sale_products']->value, 'list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
?>
            <li>
                <div class="col-md-4 col-sm-4 col-xs-12 col-df text-center">
                    <a href="./?mc=product&site=detail&n=<?php echo $_smarty_tpl->tpl_vars['list']->value['link_name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
"><img src="<?php echo base_url($_smarty_tpl->tpl_vars['list']->value['image_path']);?>
/<?php echo $_smarty_tpl->tpl_vars['list']->value['image_name'];?>
" width="100%;"></a>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12 col-df">
                    <div class="info_prd">
                        <a href="./?mc=product&site=detail&n=<?php echo $_smarty_tpl->tpl_vars['list']->value['link_name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</a>
                    </div>
                    <div class="price">
                        <?php if ($_smarty_tpl->tpl_vars['list']->value['is_discount'] == 1) {?>
                            <?php echo $_smarty_tpl->tpl_vars['list']->value['sale_price'];?>
đ
                            <span><?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
đ </span>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
đ
                        <?php }?>
                    </div>
                </div>
            </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>

    <div class="clear"></div>
</div>




<?php }
}
