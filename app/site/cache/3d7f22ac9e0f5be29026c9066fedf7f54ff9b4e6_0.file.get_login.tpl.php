<?php
/* Smarty version 3.1.30, created on 2018-08-12 16:17:11
  from "/Users/mtd/Sites/pknew/app/site/view/user/get_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b6ffb17c5c0e0_38146792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d7f22ac9e0f5be29026c9066fedf7f54ff9b4e6' => 
    array (
      0 => '/Users/mtd/Sites/pknew/app/site/view/user/get_login.tpl',
      1 => 1534065422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6ffb17c5c0e0_38146792 (Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">

        <div class="col-md-offset-3 col-sm-8 marb20">
          <div class="contact-info">
            
            <div class="space"></div>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="./?mc=user&site=post_login" method="post" role="form">
              <div class="form-group">
                <label> Mã bệnh nhân</label>
                <input type="text" name="code" class="form-control br-radius-zero" placeholder="Mã bệnh nhân" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <label> Số điện thoại</label>
                <input type="number" class="form-control br-radius-zero" name="phone" placeholder="Số điện thoại" data-rule="minlen:10" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-action">
                <button type="submit" class="btn btn-form text-center">Đăng nhập</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php echo '<script'; ?>
>
      $(document).ready(function(){
          $("#banner li.active").attr('class', ' ');
          $("#login-menu").attr('class', 'active');
      })
  <?php echo '</script'; ?>
>
  <!--/ contact-->
  <?php echo '<script'; ?>
>
$(document).ready(function() {

	if( "<?php echo $_smarty_tpl->tpl_vars['notification']->value['status'];?>
" == "success" || "<?php echo $_smarty_tpl->tpl_vars['notification']->value['status'];?>
" == "error")
	{
    alert("Tài khoản hoặc mật khẩu không đúng");
	}
})
<?php echo '</script'; ?>
><?php }
}
