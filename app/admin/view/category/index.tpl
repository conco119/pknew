<div class="">
	<div class="row">
		<div class="col-md-12">
			<div class="x_panel">
				<div class="x_title">
		            <h2>Quản lý danh mục bài viết</h2>
		            <ul class="nav navbar-right panel_toolbox">
		                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
		                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
		            </ul>
		            <div class="clearfix"></div>
				</div>
				<div class="x_content">

					<div class="h_content">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#UpdateFrom"><i class="fa fa-pencil"></i> Thêm mới</button>
						<div class="clearfix"></div>
					</div>

					<!-- start project list -->
					<table class="table  projects">
						<thead>
							<tr>
								<th style="width: 25%">Danh mục</th>
								<th class="text-center">Trạng thái</th>
								<th style="width: 20%" class="text-right"></th>
							</tr>
						</thead>
						<tbody>
							{foreach from=$cats item=data}
							<tr>
								<td>
								<ol class="breadcrumb">{$data.name}</ol>
								</td>
								<td class="text-center">
	                                {if $data.status eq 1}
                                        <a href='./admin?mc=category&site=active_status&id={$data.id}' type="button" class="btn btn-success btn-xs btn-status"><i class="fa fa-check"></i></a>
                                    {else}
                                        <a href='./admin?mc=category&site=active_status&id={$data.id}' type="button" class="btn btn-danger btn-xs btn-status"><i class="fa fa-close"></i></a>
                                    {/if}
								</td>
								<td class="text-right">
									<button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#EditForm" onclick="LoadDataForForm({$data.id});"><i class="fa fa-pencil"></i></button>
									<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#DeleteForm" onclick="ConfirmDelete({$data.id});"><i class="fa fa-trash-o"></i></button>
								</td>
							</tr>
							{/foreach}
						</tbody>
					</table>
					<!-- end project list -->
					<div class="paging">{$paging.paging}</div>
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
				<h4 class="modal-title" id="myModalLabel">Xóa mục này</h4>
			</div>
			<div class="modal-body">Bạn chắc chắn rằng muốn xóa mục này chứ ?</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
				<a type="button" class="btn btn-danger" id="DeleteItem">Đồng ý</a>
			</div>
		</div>
	</div>
</div>

<!-- Modal UpdateFrom -->
<div class="modal fade" tabindex="-1" id="UpdateFrom">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h4 class="modal-title">Thêm danh mục bài viết</h4>
			</div>
			<form data-parsley-validate class="form-horizontal form-label-left" method="post" action="./admin?mc=category&site=create">
				<div class="modal-body">
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Tên danh mục</label>
						<div class="col-md-8 col-sm-8 col-xs-12">
							<input type="text" name="name" required="required" class="form-control" placeholder="Tên danh mục">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Danh mục cha</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control" name="parent_id">
								{foreach from=$cat_add_new item=item }
									<option value="0">Danh mục</option>
									<option value="{$item.id}">{$item.name}</option>
								{/foreach}
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" name="submit">Lưu lại</button>
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
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h4 class="modal-title" id="title"></h4>
			</div>
			<form data-parsley-validate class="form-horizontal form-label-left" method="post" action="./admin?mc=category&site=edit">
				<div class="modal-body">
					<div class="form-group">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="hidden" name="id">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Tên danh mục</label>
						<div class="col-md-8 col-sm-8 col-xs-12">
							<input type="text" name="name" required="required" class="form-control" placeholder="Tên...">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Danh mục cha</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control" name="parent_id"></select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" name="submit">Lưu lại</button>
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
	$("#DeleteItem").attr("href", "./admin?mc=category&site=delete&id=" + id);
}

function LoadDataForForm(id) {
	$.post("./admin?mc=category&site=ajax_load_category", {'id' : id}).done(function(data) {
		data = JSON.parse(data);
		console.log(data);
		$("#EditForm input[name=id]").val(data.id);
		$("#EditForm input[name=name]").val(data.name);
		$("#EditForm select[name=parent_id]").html(data.parent_option);
	});
}
</script>
{/literal}

 {* dành cho thông báo *}
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
