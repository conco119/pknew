<?php
/* Smarty version 3.1.30, created on 2018-09-22 16:37:23
  from "/Users/mtd/Sites/pknew1/app/site/view/post/detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ba60d53ea0635_55713156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b3d4d2221866e2114c3f077914548f3fbf3fdbe' => 
    array (
      0 => '/Users/mtd/Sites/pknew1/app/site/view/post/detail.tpl',
      1 => 1537609043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba60d53ea0635_55713156 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class='col-md-8'>
        <div class="well">
            <div class="row">
                <div class="col-md-12">
                    <div class="row hidden-md hidden-lg"><h1 class="text-center" ><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</h1></div>

                    <div class="pull-left col-md-4 col-xs-12 thumb-contenido"><img class="center-block img-responsive" src="<?php echo base_url($_smarty_tpl->tpl_vars['post']->value['path']);?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
" /></div>
                    <div class="">
                        <h1  class="hidden-xs hidden-sm"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</h1>
                        <hr>
                        <small><?php echo $_smarty_tpl->tpl_vars['post']->value['category_name'];?>
</small><br>
                        <small><?php echo $_smarty_tpl->tpl_vars['post']->value['created_at'];?>
</small><br>
                        <hr>
                        <p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='col-md-4'>
        <div class="card my-4">
            <h5 class="card-header">Danh mục</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                          <li>
                              <a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                          </li>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                  </ul>
                </div>
              </div>
            </div>
          </div>

    </div>
</div><?php }
}
