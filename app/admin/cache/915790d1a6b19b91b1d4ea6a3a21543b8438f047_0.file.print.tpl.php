<?php
/* Smarty version 3.1.30, created on 2018-06-30 19:50:36
  from "/Users/mtd/Sites/htaccess/app/admin/view/layouts/print.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b377c9cde6254_45984410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '915790d1a6b19b91b1d4ea6a3a21543b8438f047' => 
    array (
      0 => '/Users/mtd/Sites/htaccess/app/admin/view/layouts/print.tpl',
      1 => 1530363031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b377c9cde6254_45984410 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>In hóa đơn</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <link href="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
css/bootstrap.min.css" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
              <?php echo '<script'; ?>
 src="http://html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
            <![endif]-->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        

    </head>
    <body onload="window.print()" onfocus="window.close()" style="background: #fff; font-size: 12px;">
    

        <div id="Print">
            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tpl_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        </div>

    </body>
</html>
<?php }
}
