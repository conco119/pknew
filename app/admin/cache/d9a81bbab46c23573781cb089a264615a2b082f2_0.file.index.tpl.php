<?php
/* Smarty version 3.1.30, created on 2018-09-25 00:18:45
  from "/Users/mtd/Sites/pknew1/app/admin/view/patient_trash/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ba91c75552c36_26434450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9a81bbab46c23573781cb089a264615a2b082f2' => 
    array (
      0 => '/Users/mtd/Sites/pknew1/app/admin/view/patient_trash/index.tpl',
      1 => 1537809523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba91c75552c36_26434450 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="">
  <div class="row">
    <div class="col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>BỆNH NHÂN ĐÃ XÓA</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <div class="h_content">
            <!-- <div class="form-group form-inline">
              <input class="left form-control">
              <select class="left form-control"><option>Select</option></select>
            </div> -->

            <div class="form-group form-inline">
              <input type="search" class="left form-control" id="key" placeholder="Tên bệnh nhân hoặc SDT" value="<?php echo $_smarty_tpl->tpl_vars['out']->value['key'];?>
">
            </div>
            <button id="search_btn" type="button" class="btn btn-primary left" onclick="filter();"><i class="fa fa-search"></i></button>

            <div class="clearfix"></div>
          </div>

          <!-- start project list -->
          <div class="table-responsive">
              <table class="table table-striped table-hover projects">
                <thead>
                  <tr>
                    
                    <!-- <th>Avatar</th> -->
                    <th>Mã bệnh nhân</th>
                    <th>Họ Tên</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th class="text-right"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                  <tr id="field<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['code'];?>
</td>
                    <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</a> <br /> <small>Tuổi: <?php echo $_smarty_tpl->tpl_vars['data']->value['age'];?>
</small></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['address'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['phone'];?>
</td>
                    <td class="text-right">
                      <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#RestoreModal" onclick="LoadRestoreModal(<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
);"><i class="fa fa-undo"></i></button>
                      <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#DeleteForm" onclick="LoadModalDelete(<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
);"><i class="fa fa-trash-o"></i></button>
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
          <!-- end project list -->

          <div class="paging"><?php echo $_smarty_tpl->tpl_vars['paging']->value['paging'];?>
</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="DeleteForm">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Xóa vĩnh viễn bệnh nhân</h4>
      </div>
      <div class="modal-body">Bạn chắc chắn muốn xóa vĩnh viễn bệnh nhân này?</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
        <a type="button" class="btn btn-danger" id="DeleteItem">Xóa</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal Restore -->
<div class="modal fade" id="RestoreModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        <h4 class="modal-title">Khôi phục bệnh nhân</h4>
      </div>
      <div class="modal-body">Bạn chắc chắn muốn khôi phục bệnh nhân này?</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
        <a type="button" class="btn btn-success" id="RestoreItem">Khôi phục</a>
      </div>
    </div>
  </div>
</div>




<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
js/jquery-ui.min.js"><?php echo '</script'; ?>
>




<?php echo '<script'; ?>
>



function LoadModalDelete(id)
{
  $("#DeleteItem").attr("href", "./admin?mc=patient&site=delete_permanently&id=" + id);
}
function LoadRestoreModal(id)
{
  $("#RestoreItem").attr("href", "./admin?mc=patient_trash&site=restore&id=" + id);
}









function filter()
{
    var key = $("#key").val();
    var day = $("#day").val();
    var url = "./admin?mc=patient_trash";
    url += "&key=" + key;
    url += "&day=" + day;
    window.location.href = url;
}


$('#key').keypress(function( event ){
      if ( event.which == 13 ) {
         $('#search_btn').trigger('click');
      }
});

<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
$(document).ready(function(){
  if( "<?php echo $_smarty_tpl->tpl_vars['notification']->value['status'];?>
" == "success" || "<?php echo $_smarty_tpl->tpl_vars['notification']->value['status'];?>
" == "error")
  {
    var notice = new PNotify({
      title: "<?php echo $_smarty_tpl->tpl_vars['notification']->value['title'];?>
",
      text: "<?php echo $_smarty_tpl->tpl_vars['notification']->value['text'];?>
",
      type: "<?php echo $_smarty_tpl->tpl_vars['notification']->value['status'];?>
",
      mouse_reset: false,
      buttons: {
        sticker: false,
    }
    });
    notice.get().click(function () {
      notice.remove();
    });
  }

})
<?php echo '</script'; ?>
>

<?php }
}
