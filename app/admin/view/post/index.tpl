<div class="">
    <div class="row">
        <div class="col-xs-12">
            <div class="x_panel">
                <div class="x_title">
		            <h2>Quản lý bài viết</h2>
		            <ul class="nav navbar-right panel_toolbox">
		                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
		                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
		            </ul>
		            <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="h_content">
                        {* <div class="form-group form-inline">
                            <input type="search" class="left form-control" id="key" placeholder="Tiêu đề bài viết" value="{$out.key}">
                            <select class="left form-control" id="category"><option value="0">Danh mục</option>{$out.categories}</select>
                        </div>
                        <button id="search_btn" type="button" class="btn btn-primary left" onclick="filter();"><i class="fa fa-search"></i></button> *}

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#UpdateForm" onclick="LoadDataForForm(0);"><i class="fa fa-pencil"></i> Thêm mới</button>

                        <div class="clearfix"></div>
                    </div>
                    <!-- start project list -->
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Tiêu đề bài viết</th>
                                    <th>Hình ảnh</th>
                                    <th>Thuộc danh mục</th>
									<th class="text-right">Trạng thái</th>
                                    <th class="text-right"></th>
                                </tr>
                            </thead>
                            <tbody>
                                {foreach from=$posts item=data}
                                    <tr>
                                        <td>
											{$data.title}
                                        </td>
                                        <td>
                                            <img width='50px' src="{base_url($data.media.path)}/{$data.media.name}">
                                        </td>
                                        <td>{$data.category.name}</td>
                                        <td class="text-center">
                                            {if $data.status eq 1}
                                                <a href='./admin?mc=post&site=active_status&id={$data.id}' type="button" class="btn btn-success btn-xs btn-status"><i class="fa fa-check"></i></a>
                                            {else}
                                                <a href='./admin?mc=post&site=active_status&id={$data.id}' type="button" class="btn btn-danger btn-xs btn-status"><i class="fa fa-close"></i></a>
                                            {/if}
                                        </td>
                                        <td class="text-right" width="15%">
											<a href='./admin?mc=post&site=imagepost&id={$data.id}'><button type="button" class="btn btn-default btn-xs" title="Hình ảnh bài viết"><i class="fa fa-image"></i></button><a/>
                                            <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#EditForm" title="Sửa thông tin bài viết" onclick="LoadDataForForm({$data.id}, {$data.category_id});"><i class="fa fa-pencil"></i></button>
                                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#DeleteForm" title="Xóa bài viết" onclick="ConfirmDelete({$data.id});"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                {/foreach}
                            </tbody>
                        </table>
                    </div>
                    <!-- end project list -->
                    <div class="paging">{$paging.paging}</div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Delete All -->
<div class="modal fade" id="DeleteForm">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Xóa mục này</h4>
			</div>
			<div class="modal-body">Bạn chắc chắn muốn xóa mục này chứ?</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
				<a type="button" class="btn btn-danger" id="DeleteItem">Xóa</a>
			</div>
		</div>
	</div>
</div>


<!-- Modal UpdateFrom -->
<div class="modal fade" tabindex="-1" id="UpdateForm">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
                <h4 class="modal-title">Thêm bài viết mới</h4>
            </div>
            <form data-parsley-validate
                class="form-horizontal form-label-left" method="post" action="./admin?mc=post&site=add_post">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Danh mục bài viết</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" name="category_id">
                                {foreach from=$categories item=item key=key name=name}
                                    <option value="{$item.id}">{$item.name}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề bài viết</label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" name="title" required="required" class="form-control" placeholder="Tiêu đề bài viết...">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="submit_product" name="submit">Lưu lại</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Bỏ qua</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- Modal UpdateFrom -->
<div class="modal fade" tabindex="-1" id="EditForm">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
                <h4 class="modal-title">Chỉnh sửa bài viết</h4>
            </div>
            <form data-parsley-validate
                class="form-horizontal form-label-left" method="post" action="./admin?mc=post&site=edit_post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name='id'>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Danh mục bài viết</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" name="category_id">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề bài viết</label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" name="title" required="required" class="form-control" placeholder="Tiêu đề bài viết...">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="submit_product" name="submit">Lưu lại</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Bỏ qua</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



{literal}
<script>


function ConfirmDelete(id)
{
    $("#DeleteItem").attr('href', "./admin?mc=post&site=delete&id=" + id);
}

$(document).on('hidden.bs.modal', '.modal', function () {
	$('.modal:visible').length && $(document.body).addClass('modal-open');
});




$('#key, #category').keypress(function( event ){
      if ( event.which == 13 ) {
         $('#search_btn').trigger('click');
      }
});



function filter() {
    var key = $("#key").val();
    var category = $("#category").val();

    var url = "./admin?mc=product&site=index";
    url += "&category=" + category;
    url += "&key=" + key;
    window.location.href = url;
}

function LoadDataForForm(id, category_id) {
    console.log(id, category_id);
    $.post(`./admin?mc=post&site=ajax_load`, {'id': id, "category_id": category_id}).done(function (data) {
        var data = JSON.parse(data);
        console.log(data);
        $("#EditForm input[name=id]").val(data.id);
        $("#EditForm input[name=title]").val(data.title);
        $("#EditForm select[name=category_id]").html(data.category);
    });
}


</script>
{/literal}
<script>
$(document).ready(function() {
	if( "{$notification.status}" == "success" || "{$notification.status}" == "error")
	{
		var notice = new PNotify({
			title: "{$notification.title}",
			text: "{$notification.text}",
			type: "{$notification.status}",
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
</script>
