<?php
/* Smarty version 3.1.30, created on 2018-07-04 23:52:00
  from "/Users/mtd/Sites/htaccess/app/admin/view/pub/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b3cfb30cb60c1_54287696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3702bc02e56c12f444ec32b45b009b3c5ce0633e' => 
    array (
      0 => '/Users/mtd/Sites/htaccess/app/admin/view/pub/login.tpl',
      1 => 1530720987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3cfb30cb60c1_54287696 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="">
    <a class="hiddenanchor" id="toregister"></a> <a class="hiddenanchor" id="tologin"></a>
    <div id="wrapper">
        <div id="login" class="animate form">
            <section class="login_content">
                <form method="post" action="">
                    <h1>Đăng nhập</h1>
                    <div>
                        <input type="text" autofocus class="form-control text-center" name="username" placeholder="Tên đăng nhập" required value='admin'/>
                    </div>
                    <div>
                        <input type="password" class="form-control text-center" name="password" placeholder="Mật khẩu" required  value='12345'/>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-default submit" name="submit" value="Đăng nhập">
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">
                        <div class="clearfix"></div>
                        <br />
                        <div>
                        <?php if ($_smarty_tpl->tpl_vars['status']->value == 1) {?>
                            <p style='color: red'> Tài khoản bị vô hiệu hóa <p>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['wrong']->value == 1) {?>
                            <p style='color: red'> Tài khoản hoặc mật khẩu không chính xác <p>
                        <?php }?>
                            
                        </div>
                    </div>
                </form>
                <!-- form -->
            </section>
            <!-- content -->
        </div>

    </div>
</div>
<?php }
}
