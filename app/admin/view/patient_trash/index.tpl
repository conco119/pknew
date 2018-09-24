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
              <input type="search" class="left form-control" id="key" placeholder="Tên bệnh nhân hoặc SDT" value="{$out.key}">
            </div>
            <button id="search_btn" type="button" class="btn btn-primary left" onclick="filter();"><i class="fa fa-search"></i></button>

            <div class="clearfix"></div>
          </div>

          <!-- start project list -->
          <div class="table-responsive">
              <table class="table table-striped table-hover projects">
                <thead>
                  <tr>
                    {* <th style="width: 1%"><input type="checkbox"></th> *}
                    <!-- <th>Avatar</th> -->
                    <th>Mã bệnh nhân</th>
                    <th>Họ Tên</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th class="text-right"></th>
                  </tr>
                </thead>
                <tbody>
                  {foreach from=$users item=data}
                  <tr id="field{$data.id}">
                    <td>{$data.code}</td>
                    <td><a href="#">{$data.name}</a> <br /> <small>Tuổi: {$data.age}</small></td>
                    <td>{$data.address}</td>
                    <td>{$data.phone}</td>
                    <td class="text-right">
                      <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#RestoreModal" onclick="LoadRestoreModal({$data.id});"><i class="fa fa-undo"></i></button>
                      <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#DeleteForm" onclick="LoadModalDelete({$data.id});"><i class="fa fa-trash-o"></i></button>
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




<script src="{$arg.stylesheet}js/jquery-ui.min.js"></script>



{literal}
<script>



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

</script>
{/literal}

<script>
$(document).ready(function(){
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

