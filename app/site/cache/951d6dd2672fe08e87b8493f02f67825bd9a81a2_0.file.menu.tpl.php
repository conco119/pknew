<?php
/* Smarty version 3.1.30, created on 2018-08-02 09:12:00
  from "/Users/mtd/Sites/pknew/app/site/view/layouts/includes/menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b62687005be66_01203909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '951d6dd2672fe08e87b8493f02f67825bd9a81a2' => 
    array (
      0 => '/Users/mtd/Sites/pknew/app/site/view/layouts/includes/menu.tpl',
      1 => 1528880480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b62687005be66_01203909 (Smarty_Internal_Template $_smarty_tpl) {
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
