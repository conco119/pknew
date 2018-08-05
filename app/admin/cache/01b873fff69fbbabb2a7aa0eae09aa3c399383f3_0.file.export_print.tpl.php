<?php
/* Smarty version 3.1.30, created on 2018-07-01 00:20:12
  from "/Users/mtd/Sites/htaccess/app/admin/view/export/export_print.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b37bbcc2458c6_61558846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01b873fff69fbbabb2a7aa0eae09aa3c399383f3' => 
    array (
      0 => '/Users/mtd/Sites/htaccess/app/admin/view/export/export_print.tpl',
      1 => 1530379207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b37bbcc2458c6_61558846 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
css/print.css" rel="stylesheet">

<div class="container" id="print">
    <div class="row">
    	
    	<div class="col-md-9 col-sm-9 col-xs-9 ">
	        <h2><?php echo $_smarty_tpl->tpl_vars['arg']->value['setting']['info']['name'];?>
</h2>
	        <p><?php echo $_smarty_tpl->tpl_vars['arg']->value['setting']['info']['address'];?>
</p>
	        <h1>PHIẾU THANH TOÁN</h1>
	        <p>[<?php echo $_smarty_tpl->tpl_vars['export']->value['code'];?>
 - <?php echo $_smarty_tpl->tpl_vars['export']->value['date'];?>
]</p>
	        <p>Người lập phiếu: <?php echo $_smarty_tpl->tpl_vars['export']->value['creator']['name'];?>
</p>
	        <p>Khách hàng: <?php echo $_smarty_tpl->tpl_vars['export']->value['customer_id']['name'];?>
</p>
    	</div>
    </div>
    <?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
        <h3>Danh sách sản phẩm</h3>
        <table class="table table-bordered mar-top">
            <thead>
                <tr>
                    <th class="text-center">TT</th>
                    <th class="text-center">Sản phẩm</th>
                    <th class="text-center">Đơn vị</th>
                    <th class="text-center" style=""> Giá</th>
                    <th class="text-center" style="">SL</th>
                    <th class="text-center" style="">T.Tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php $_smarty_tpl->_assignInScope('i', 1);
?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['data']->value) {
?>
                    <tr>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                        <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</td>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['data']->value['unit_name'];?>
</td>
                        <td class="text-right"><?php echo number_format(($_smarty_tpl->tpl_vars['data']->value['price']));?>
 đ</td>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['data']->value['number_count'];?>
</td>
                        <td class="text-right"><?php echo number_format(($_smarty_tpl->tpl_vars['data']->value['number_count']*$_smarty_tpl->tpl_vars['data']->value['price']));?>
 đ</td>
                    </tr>
                    <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tbody>
        </table>
    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['services']->value)) {?>
        <h3>Danh sách dịch vụ</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">TT</th>
                    <th>Tên</th>
                    <th class="text-right">Chi phí</th>
                    <th class="text-center">SL</th>
                    <th class="text-right">T.Tiền</th>
                </tr>
            </thead>
            <tbody>
            	<?php $_smarty_tpl->_assignInScope('i', 1);
?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['data']->value) {
?>
                    <tr>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</td>
                        <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['data']->value['price']);?>
</td>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['data']->value['number_count'];?>
</td>
                        <td class="text-right"><?php echo number_format(($_smarty_tpl->tpl_vars['data']->value['number_count']*$_smarty_tpl->tpl_vars['data']->value['price']));?>
 đ</td>
                    </tr>
                	<?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


            </tbody>
        </table>
    <?php }?>


    <p class="text-right"><b>Thành tiền : &emsp; </b> <?php echo number_format($_smarty_tpl->tpl_vars['out']->value['total_money']);?>
 đ</p>
    <?php if ($_smarty_tpl->tpl_vars['out']->value['total_money'] > $_smarty_tpl->tpl_vars['out']->value['must_pay']) {?><p class="text-right"><b>Chiết khấu:&emsp;</b> <?php echo number_format(($_smarty_tpl->tpl_vars['out']->value['total_money']-$_smarty_tpl->tpl_vars['out']->value['must_pay']));?>
 đ<p><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['out']->value['must_pay'] != $_smarty_tpl->tpl_vars['out']->value['payment']) {?><p class="text-right"> <b>Ghi nợ&emsp;</b> <?php echo number_format(($_smarty_tpl->tpl_vars['out']->value['must_pay']-$_smarty_tpl->tpl_vars['out']->value['payment']));?>
 đ</p><?php }?>
    <p class="text-right"><b>Thanh toán: &emsp; </b> <?php echo number_format(($_smarty_tpl->tpl_vars['out']->value['payment']));?>
 đ</p>
    <hr class="line-dott">

    <div class="text-center">
        <p>TEL: <?php echo $_smarty_tpl->tpl_vars['arg']->value['setting']['info']['phone'];?>
</p>
        <p class="bold">Cảm ơn quý khách !</p>
        <p>Hẹn gặp lại !</p>
    </div>

</div>
<?php }
}
