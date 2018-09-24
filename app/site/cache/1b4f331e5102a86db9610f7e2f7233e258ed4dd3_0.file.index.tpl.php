<?php
/* Smarty version 3.1.30, created on 2018-09-23 10:14:16
  from "/Users/mtd/Sites/pknew1/app/site/view/calender/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ba705083d8e58_05035838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b4f331e5102a86db9610f7e2f7233e258ed4dd3' => 
    array (
      0 => '/Users/mtd/Sites/pknew1/app/site/view/calender/index.tpl',
      1 => 1537672444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba705083d8e58_05035838 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container card text-center" style='margin-top:200px; margin-bottom:200px'>
    <h3><i class="fa fa-calendar" aria-hidden="true"></i> <span style="color:red">LỊCH BÁC SĨ SIÊU ÂM</span> </h3>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th class="text-center">Room</th>
                <th class="text-center">Thứ 2</th>
                <th class="text-center">Thứ 3</th>
                <th class="text-center">Thứ 4</th>
                <th class="text-center">Thứ 5</th>
                <th class="text-center">Thứ 6</th>
                <th class="text-center">Thứ 7</th>
                <th class="text-center">Chủ Nhật</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['calender']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['room'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['thu2'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['thu3'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['thu4'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['thu5'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['thu6'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['thu7'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['cn'];?>
</td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tbody>
    </table>
</div>

<?php echo '<script'; ?>
>
    $(document).ready(function(){
        $("#banner li.active").attr('class', ' ');
        $("#calender").attr('class', 'active');
    })
<?php echo '</script'; ?>
>
<?php }
}
