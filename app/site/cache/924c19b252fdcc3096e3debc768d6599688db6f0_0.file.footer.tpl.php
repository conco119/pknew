<?php
/* Smarty version 3.1.30, created on 2018-08-02 09:12:00
  from "/Users/mtd/Sites/pknew/app/site/view/layouts/includes/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b626870215e06_93157401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '924c19b252fdcc3096e3debc768d6599688db6f0' => 
    array (
      0 => '/Users/mtd/Sites/pknew/app/site/view/layouts/includes/footer.tpl',
      1 => 1530634464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b626870215e06_93157401 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row col-df footer">
    <div class="container-fluid">
        <div class="col-md-3 col-sm-3 col-xs-12">
            <h3>Thông tin liên hệ</h3>

            <ul class="full">
                <li><?php echo $_smarty_tpl->tpl_vars['info']->value['info']['name'];?>
</li>
                <li><?php echo $_smarty_tpl->tpl_vars['info']->value['info']['address'];?>
</li>
                <li>Call <?php echo $_smarty_tpl->tpl_vars['info']->value['info']['phone'];?>
</li>
                <li><?php echo $_smarty_tpl->tpl_vars['info']->value['info']['email'];?>
</li>
            </ul>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
            

            
        </div>
        
        <div class="col-md-3 col-sm-3 col-xs-12">
            <h3>Kết nối</h3>

            <ul class="full connect_footer">
                <li class="bg_3a599f">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['arg']->value['social']['facebook'];?>
" target="_blank">
                        <div class="fb_icon"><i class="fa fa-facebook"></i></div>
                    </a>
                </li>

                <li class="bg_3096f1">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['arg']->value['social']['twitter'];?>
" target="_blank">
                        <div class="fb_icon"><i class="fa fa-twitter"></i></div>
                    </a>
                </li>

                 <li class="bg_dd4e42">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['arg']->value['social']['google'];?>
" target="_blank">
                        <div class="fb_icon"><i class="fa fa-google-plus"></i></div>
                    </a>
                </li>

                <li class="bg_f2802c">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['arg']->value['social']['youtube'];?>
" target="_blank">
                        <div class="fb_icon"><i class="fa fa-youtube"></i></div>
                    </a>
                </li>

            </ul>

            <div class="mail_cont">
                <div class="form-group">
                    <input type="text" class="form-control" id="usr" placeholder="Email">
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-success">Subscribe</button>
                </div>
            </div>

        </div>
    </div>
</div>


<?php echo '<script'; ?>
 type="text/javascript">
(function(d,s,id){var z=d.createElement(s);z.type="text/javascript";z.id=id;z.async=true;z.src="//static.zotabox.com/7/e/7e6bd0dde9d6ef8fce0be070a1b9d6c5/widgets.js";var sz=d.getElementsByTagName(s)[0];sz.parentNode.insertBefore(z,sz)}(document,"script","zb-embed-code"));
<?php echo '</script'; ?>
>
<?php }
}
