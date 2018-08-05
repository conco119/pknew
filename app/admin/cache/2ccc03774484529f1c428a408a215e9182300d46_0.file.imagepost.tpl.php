<?php
/* Smarty version 3.1.30, created on 2018-08-02 09:09:49
  from "/Users/mtd/Sites/pknew/app/admin/view/product/imagepost.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b6267edaeeae5_11947025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ccc03774484529f1c428a408a215e9182300d46' => 
    array (
      0 => '/Users/mtd/Sites/pknew/app/admin/view/product/imagepost.tpl',
      1 => 1530621187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6267edaeeae5_11947025 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div>
    <div class="x_panel">
        <div class="x_title">
            <h2>Quản lý hình ảnh sản phẩm: <?php echo $_smarty_tpl->tpl_vars['product_info']->value['name'];?>
 [<?php echo $_smarty_tpl->tpl_vars['product_info']->value['code'];?>
]</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content x_content_custom">
            <div class="h_content">
                <a href="./admin?mc=product&site=index" class="btn btn-primary left"><i
                            class="fa fa-bars"></i> Quản lý sản phẩm</a>
                <div class="clearfix"></div>
            </div>
            </tbody>
            </table>
        </div>
    </div>
</div>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#product-image">Hình ảnh sản phẩm</a></li>
    <li><a class="data-toggle=" data-toggle="tab" href="#product-post">Bài viết sản phẩm</a></li>
</ul>
<div class='tab-content' style='margin-top:20px'>
    <div id='product-image' class='tab-pane fade in active'>
        <div class="avatar-view" title="Thêm mới hình ảnh">
            <img id="avatar_cur" src="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
images/product_take.gif" alt="Avatar">
        </div>
        <!-- Cropping modal -->
        <div class="modal fade" id="avatar-modal">
            <div class="modal-dialog modal-lg">
                <div id="avatar_change" class="modal-content">
                    <form class="avatar-form" enctype="multipart/form-data" method="post">
                        <div class="modal-header">
                            <button class="close" data-dismiss="modal" type="button">&times;</button>
                            <h4 class="modal-title" id="avatar-modal-label">Hình ảnh sản phẩm</h4>
                        </div>
                        <div class="modal-body" style="background-color: #F7F7F7;">
                            <div class="avatar-body">
                                <!-- Upload image and data -->
                                <!-- Crop and preview -->
                                <div class="row">
                                    <div style="padding-left: 0;" id="avatar_wrap" class="col-md-7 col-sm-7 col-xs-12">
                                        <div style="position: relative; width: 100%; margin-top: 0;" id="avatar_wrap_child" class="avatar-wrapper">
                                            <img id="avatar_image" style="max-width: 100%" src="">
                                        </div>
                                    </div>
                                    <div style="padding-right: 0;" class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="form-group">
                                            <label for="avatarInput" class="col-md-3 col-sm-12 col-xs-12 control-label" style="padding-left: 0; margin-top: 3px;">Tải lên</label>
                                            <div class="col-md-9 col-sm-12 col-xs-12" style="padding: 0; margin-bottom: 10px;">
                                                <input class="avatar-input" id="avatarInput" name="avatar_file" type="file" onchange="readURL(this);" style="width: 100%;">
                                            </div>
                                        </div>
                                        <div style="display: block;">
                                            <label style="padding-top: 25px; margin-bottom: 0; display: block;" class="control-label">Xem trước</label>
                                            <div style="display: inline-block; width: 214px; height: 214px; border: 1px solid #aaa; margin-top: 10px;" class="avatar-preview preview-lg"></div>
                                            <div style="display: inline-block; width: 56px; height: 56px; border: 1px solid #aaa; border-radius: 28px;" class="avatar-preview preview-sm"></div>
                                        </div>
                                        <br>
                                        <input name="avatar_x" type="hidden">
                                        <input name="avatar_y" type="hidden">
                                        <input name="avatar_width" type="hidden">
                                        <input name="avatar_height" type="hidden">
                                        <div class="text-right" style="margin-top: 10px; display: block;">
                                            <button class="btn btn-default" data-dismiss="modal" type="button">Hủy bỏ</button>
                                            <button class="btn btn-primary avatar-save" name="avatar_change" type="submit">Lưu lại</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="modal-footer">
                                                </div> -->
                    </form>
                </div>
            </div>
        </div>
        <!-- /.modal -->
        <div class="container gallery-container" style='margin-top:2px'>
            <h1>Hình ảnh <?php echo $_smarty_tpl->tpl_vars['product_info']->value['name'];?>
</h1>
            <p class="page-description text-center"><?php echo $_smarty_tpl->tpl_vars['product_info']->value['code'];?>
</p>
            <div class="tz-gallery">
                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                    <div class="col-sm-6 col-md-4 image-container">
                        <a class="lightbox" href="<?php echo base_url($_smarty_tpl->tpl_vars['image']->value['path']);?>
/<?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
">
                            <img  src="<?php echo base_url($_smarty_tpl->tpl_vars['image']->value['path']);?>
/<?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
" alt="Park">
                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['image']->value['is_showed'] == 1) {?>
                            <button class="edit btn btn-success" ><i class='fa fa-check'></i>Đại diện</button>
                        <?php } else { ?>
                            <button class="edit btn btn-success" onclick='SetMainAvatar(<?php echo $_smarty_tpl->tpl_vars['product_info']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['image']->value['media_id'];?>
)'><i class='fa fa-pencil'></i></button>
                        <?php }?>

                        <button  data-toggle="modal" data-target="#DeleteForm" onclick='DeleteConfirm(<?php echo $_smarty_tpl->tpl_vars['product_info']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['image']->value['media_id'];?>
)' class="delete btn btn-danger"><i class='fa fa-trash-o'></i></button>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>
        </div>
    </div>
    <div id='product-post' class='tab-pane fade'>

    <form method="post">
        <textarea  id="ckeditor" name='content'><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</textarea>
        <br>
            <button class='btn btn-default' name='editor' type='submit'><i class='far fa-save>'></i>Lưu</button>
    </form>
    </div>
</div>

<div class="modal fade" id="DeleteForm">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Xóa hình ảnh</h4>
			</div>
			<div class="modal-body">Bạn chắc chắn muốn xóa hình ảnh này?</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
				<button type="button" class="btn btn-danger" onclick="DeleteImage();" id="DeleteItem">Xóa</button>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
/ckeditor/ckeditor.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
js/cropping/cropper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
js/image.product.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
js/product/baguetteBox.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
CKEDITOR.replace('ckeditor',{
    filebrowserBrowseUrl : 'app/webroot/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
    filebrowserUploadUrl : 'app/webroot/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
    filebrowserImageBrowseUrl : 'app/webroot/filemanager/dialog.php?type=1&editor=ckeditor&fldr=',
    height: 500
});
baguetteBox.run('.tz-gallery');
function SetMainAvatar(product_id, media_id)
{
    var data = {
        "product_id": product_id,
        "media_id": media_id
    }
    $.post("./admin?mc=product&site=set_main_avatar", data).done(function(result) {
        result = JSON.parse(result);
        let append = '';
        $.each(result, function(key, image){

             append += `
                    <div class="col-sm-6 col-md-4 image-container">
                        <a class="lightbox" href="${image.link}/${image.name}">
                            <img  src="${image.link}/${image.name}" alt="Park">
                        </a>
                        `;
                        if(image.is_showed == 1)
                        {
                            append += `<button class="edit btn btn-success" ><i class='fa fa-check'></i>Đại diện</button>`;
                        }
                        if(image.is_showed == 0)
                        {
                            append += `<button class="edit btn btn-success" onclick='SetMainAvatar(${image.product_id}, ${image.media_id})'><i class='fa fa-pencil'></i></button>`;
                        }



                    append += `
                        <button  data-toggle="modal" data-target="#DeleteForm" onclick='DeleteConfirm(${image.product_id}, ${image.id}, ${image.media_id})' class="delete btn btn-danger" href="/jane/"><i class='fa fa-trash-o'></i></button>
                    </div>`;
        })
        $(".tz-gallery .row").html(append);
    })
}
function DeleteConfirm(product_id, media_product_id, media_id)
{
    PNotify.removeAll();
    $("#DeleteItem").attr("onclick", `DeleteImage(${product_id}, ${media_product_id}, ${media_id})`);
}
function DeleteImage(product_id, media_product_id, media_id)
{
    var data = {
        "product_id" : product_id,
        "media_product_id": media_product_id,
        "media_id": media_id
    }
    $.post("./admin?mc=product&site=ajax_delete_image", data).done(function(result) {
        result = JSON.parse(result);
        $('#DeleteForm').modal('hide');
        var append = '';
        $.each(result, function(key, image){
                append += `
                    <div class="col-sm-6 col-md-4 image-container">
                        <a class="lightbox" href="${image.link}/${image.name}">
                            <img  src="${image.link}/${image.name}" alt="Park">
                        </a>
                        `;
                        if(image.is_showed == 1)
                        {
                            append += `<button class="edit btn btn-success" ><i class='fa fa-check'></i>Đại diện</button>`;
                        }
                        if(image.is_showed == 0)
                        {
                            append += `<button class="edit btn btn-success" onclick='SetMainAvatar(${image.product_id}, ${image.media_id})'><i class='fa fa-pencil'></i></button>`;
                        }

                    append += `
                        <button  data-toggle="modal" data-target="#DeleteForm" onclick='DeleteConfirm(${image.product_id}, ${image.id}, ${image.media_id})' class="delete btn btn-danger" href="/jane/"><i class='fa fa-trash-o'></i></button>
                    </div>`;
        })
        $(".tz-gallery .row").html(append);
    })
}
<?php echo '</script'; ?>
>
<?php }
}