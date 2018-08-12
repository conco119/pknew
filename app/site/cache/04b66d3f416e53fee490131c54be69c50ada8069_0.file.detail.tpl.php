<?php
/* Smarty version 3.1.30, created on 2018-08-12 12:57:12
  from "/Users/mtd/Sites/pknew/app/site/view/user/detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b6fcc38bb6136_71700745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04b66d3f416e53fee490131c54be69c50ada8069' => 
    array (
      0 => '/Users/mtd/Sites/pknew/app/site/view/user/detail.tpl',
      1 => 1534053413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6fcc38bb6136_71700745 (Smarty_Internal_Template $_smarty_tpl) {
?>


        <div class="x_panel">
            <div class="x_content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Thông tin bệnh nhân</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class=" col-md-12 col-lg-12 ">
                                                    <table class="table table-user-information">
                                                        <tbody>
                                                        <tr>
                                                            <td>Họ Tên:</td>
                                                            <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['patient']->value['name'], 'UTF-8');?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tuổi:</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['patient']->value['age'];?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Giới tính: </td>
                                                            <td>
                                                                <?php if ($_smarty_tpl->tpl_vars['patient']->value['gender'] == 1) {?> Nam <?php } else { ?> Nữ <?php }?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                        <tr>
                                                            <td>Địa chỉ: </td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['patient']->value['address'];?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email: </td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['patient']->value['email'];?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Điện thoại</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['patient']->value['phone'];?>
</td>
                                                        </tr>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class='col-md-12'>
                        <div class=row>
                            <div class="col-md-offset-1" id='parent-player'>
                                <video controls='controls' id='player' >
                                    <source src="">
                                </video>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-offset-2">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Ngày khám</th>
                                    <th>Video</th>
                                    <td>Nội dung</td>
                                    <th>Đang phát</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['media_patient']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</td>
                                        <td>
                                            <a id="link-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                                               style="cursor: pointer;"
                                               data-link="<?php echo base_url($_smarty_tpl->tpl_vars['item']->value['media']['path']);?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['media']['name'];?>
"
                                               onclick="change_video(<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
)"
                                            >Video <?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</a>
                                        </td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</td>
                                        <td >
                                            <i id="i-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="<?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?> fa fa-play blink <?php } else { ?> '' <?php }?>"></i>
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
                    </div>
                </div>
            </div>
        </div>





    <?php echo '<script'; ?>
>

        function change_video(key)
        {
            var link  = $(`#link-${key}`).attr("data-link")
            $('#player').remove()
            $('#parent-player').append(`
          <video  controls='controls' id='player'>
            <source src='${link}'>
          </video>
        `)

            var alli = $("i.fa-play");
            alli.attr('class', '');

            $(`#i-${key}`).attr('class', 'fa fa-play blink');
        }

        $(document).ready(function() {

            // load video onload
            var link  = $('#link-0').attr("data-link")
            $('#player').remove()
            $('#parent-player').append(`
          <video  controls='controls' id='player'>
            <source src='${link}'>
          </video>
        `)

        });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      $(document).ready(function(){
          $("#banner li.active").attr('class', ' ');
          $("#video-menu").attr('class', 'active');
      })
    <?php echo '</script'; ?>
>

<?php }
}
