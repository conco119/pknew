<?php
/* Smarty version 3.1.30, created on 2018-06-22 21:11:39
  from "/Users/mtd/Sites/htaccess/app/site/view/layouts/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b2d039bdada85_17659760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6add678f9f974d9113cab44417fe17c8c4154f1' => 
    array (
      0 => '/Users/mtd/Sites/htaccess/app/site/view/layouts/home.tpl',
      1 => 1529586639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/header.tpl' => 1,
    'file:includes/menu.tpl' => 1,
    'file:includes/sidebar.tpl' => 1,
    'file:includes/footer.tpl' => 1,
  ),
),false)) {
function content_5b2d039bdada85_17659760 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Thiết bị nhà thông minh</title>
        <base href="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
">
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['seo']->value['keyword'];?>
" />
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['seo']->value['description'];?>
" />
        <meta name="robots" content="noodp,index,follow" />
        <meta name='revisit-after' content='1 days' />
        <meta name="og:image" content="http://sanchoi.net/upload/log/sharingan.png"/>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="/dtc.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
css/style.css" >
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
css/mobile.css" >
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
js/font-awesome-4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
js/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
js/bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
js/jquery.bxslider/jquery.bxslider.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
css/hoverZoomEtalage.css" >
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
css/services.css">

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
js/jquery-2.1.3.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
js/jquery.bxslider/plugins/jquery.fitvids.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
js/jquery.bxslider/jquery.bxslider.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
js/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>


        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
js/main.js"><?php echo '</script'; ?>
>
    </head>
    <body>


        <?php $_smarty_tpl->_subTemplateRender("file:includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <?php $_smarty_tpl->_subTemplateRender("file:includes/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



		<div class="container">
	        <div class="row mar-btm">
	            <div class="col-md-3 col-sm-3 col-xs-12 hide-mobile">
	                 <?php $_smarty_tpl->_subTemplateRender("file:includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	             </div>
	             <div class="col-md-9 col-sm-9 col-xs-12">
	                 <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tpl_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	             </div>
	        </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<!-- Small message modal -->
		<div class="modal fade bs-example-modal-sm" id="MessageModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Message box</h4>
					</div>
					<div class="modal-body">
						<p></p>
					</div>
				</div>
			</div>
		</div>

    </body>
</html><?php }
}
