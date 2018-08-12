<?php
/* Smarty version 3.1.30, created on 2018-08-12 10:43:00
  from "/Users/mtd/Sites/pknew/app/site/view/contact/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b6facc40ebe44_17532682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a5ca79c6c0c83afc38026d805db9c1d0aefeef0' => 
    array (
      0 => '/Users/mtd/Sites/pknew/app/site/view/contact/index.tpl',
      1 => 1534045285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6facc40ebe44_17532682 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <!--contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Liên hệ</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
            <div class="space"></div>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="./?mc=contact&site=create" method="post" role="form">
              <div class="form-group">
                <label> Tên của bạn </label>
                <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Tên của bạn" required/>
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <label> Số điện thoại </label>
                <input type="text" class="form-control br-radius-zero" name="phone" id="subject" placeholder="Số điện thoại" data-rule="minlen:10" data-msg="Số điện thoại phải lớn hơn 10 ký tự" required />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <label> Nội dung </label>
                <textarea class="form-control br-radius-zero" name="content" rows="5" data-rule="required" data-msg="Hãy ghi một điều gì đó" placeholder="Message" required></textarea>
                <div class="validation"></div>
              </div>
              <div class="form-action">
                <button type="submit" class="btn btn-form">Gửi thông tin liên hệ</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ contact-->
  <?php echo '<script'; ?>
>
      $(document).ready(function(){
          $("#banner li.active").attr('class', ' ');
          $("#contact-menu").attr('class', 'active');
      })
  <?php echo '</script'; ?>
>
<?php }
}
