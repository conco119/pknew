<?php
/* Smarty version 3.1.30, created on 2018-09-23 10:13:00
  from "/Users/mtd/Sites/pknew1/app/site/view/home/about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ba704bc778b56_66625492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b6e2c2ab2f677a7ea1f6e8d184fa7b5602226c2' => 
    array (
      0 => '/Users/mtd/Sites/pknew1/app/site/view/home/about.tpl',
      1 => 1537672377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba704bc778b56_66625492 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="about-section paddingTB60 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-6">
                <div class="about-title clearfix">
                    <h1>About <span>Appmom</span></h1>
                    <h3>Lorem ipsum dolor sit amet </h3>
                    <p class="about-paddingB">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet dolor libero, eget venenatis mauris finibus dictum. Vestibulum quis elit eget neque porttitor congue non sit amet dolor. Proin pretium purus a lorem ornare </p>
                    <p>sed lobortis pulvinar. Integer laoreet mi id eros porta euismod. Suspendisse potenti. Nulla eros mauris, convallis et sem tempus, viverra hendrerit sapien</p>
                    <div class="about-icons">
                        <ul>
                            <li><a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a> </li>
                            <li><a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a> </li>
                            <li> <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a> </li>
                            <li> <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-6">
                <div class="about-img">
                    <img src="https://devitems.com/preview/appmom/img/mobile/2.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    $(document).ready(function(){
        $("#banner li.active").attr('class', ' ');
        $("#aboutus").attr('class', 'active');
    })
<?php echo '</script'; ?>
>
<?php }
}
