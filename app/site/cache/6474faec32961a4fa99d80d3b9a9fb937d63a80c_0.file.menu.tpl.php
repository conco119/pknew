<?php
/* Smarty version 3.1.30, created on 2018-06-19 18:20:56
  from "/Users/mtd/Sites/htaccess/app/site/view/layouts/includes/menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b28e7184b8205_02502728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6474faec32961a4fa99d80d3b9a9fb937d63a80c' => 
    array (
      0 => '/Users/mtd/Sites/htaccess/app/site/view/layouts/includes/menu.tpl',
      1 => 1528880480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b28e7184b8205_02502728 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container mar-btm">
	<div class="menu">
		<div class="col-md-12 col-sm-12 col-xs-12 col-df left">
			<ul>
				<div class="col-md-2 col-sm-2 col-xs-12 col-df">
					<li class="" style="background:green;"><i class="fa fa-home"></i>
						<a href="<?php echo $_smarty_tpl->tpl_vars['arg']->value['domain'];?>
" title="Trang chủ">Trang chủ
							<p><?php echo $_smarty_tpl->tpl_vars['list']->value['description'];?>
</p>
					</a></li>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 col-df">
					<li class="" style="background: rgb(129, 142, 181);"><i class="fa fa-cc-paypal"></i>
						<a href="./?site=intro" title="Giới thiệu">Giới thiệu
							<p></p>
					</a></li>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 col-df">
					<li class="" style="background: rgb(245, 121, 31);"><i class="fa fa-camera-retro"></i>
						<a href="./?mc=product" title="Sản phẩm">Sản phẩm
							<p>Phân phối linh kiện</p>
					</a></li>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 col-df">
					<li class="" style="background:rgb(31, 57, 245);"><i class="fa fa-camera-retro"></i>
						<a href="./?mc=servicee" title="Sản phẩm">Dịch vụ
					</a></li>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 col-df">
					<li class="" style="background: rgb(53, 152, 219);"><i class="fa fa-cc-paypal"></i>
						<a href="./?site=payment" title="Giới thiệu">Thanh Toán
							<p>Hướng dẫn thanh toán</p>
					</a></li>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 col-df">
					<li class="" style="background: rgb(154, 89, 181);"><i class="fa fa-cc-paypal"></i>
						<a href="./?site=contact" title="Liên hệ">Liên hệ
							<p> Liên hệ </p>
					</a></li>
				</div>
			</ul>
		</div>

	</div>
</div>
<?php }
}
