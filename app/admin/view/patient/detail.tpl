<div class="">
    <div class="row">
        <div class="x_panel">
            <div class="x_title">
                <h2>Bệnh nhân: {$patient.name|upper} </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="h_content">
                    <a href="{$arg.prefix_admin}mc=patient" class="btn btn-primary left"><i
                                class="fa fa-arrow-left"></i> Quản lý bệnh nhân</a>
                    <div class="clearfix"></div>
                </div>
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
                                                                <td>{$patient.name|upper}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tuổi:</td>
                                                                <td>{$patient.age}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Giới tính: </td>
                                                                <td>
                                                                    {if $patient.gender eq 1} Nam {else} Nữ {/if}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <tr>
                                                                    <td>Địa chỉ: </td>
                                                                    <td>{$patient.address}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Email: </td>
                                                                    <td>{$patient.email}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Điện thoại</td>
                                                                    <td>{$patient.phone}</td>
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
                        <div class="row container">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Ngày khám</th>
                                        <th>Video</th>
                                        <td>Nội dung</td>
                                        <th>Đang phát</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {foreach from=$media_patient item=item key=key}
                                        <tr>
                                            <td>{$item.date}</td>
                                            <td>
                                                <a id="link-{$key}"
                                                   style="cursor: pointer;"
                                                   data-link="{base_url($item.media.path)}/{$item.media.name}"
                                                   onclick="change_video({$key})"
                                                >Video {$key+1}</a>
                                            </td>
                                            <td>{$item.content}</td>
                                            <td >
                                                <i id="i-{$key}" class="{if $key eq 0} fa fa-play blink {else} '' {/if}"></i>
                                            </td>
                                            <td><button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#DeleteForm" onclick="delete_video({$item.id})"><i class="fa fa-trash-o"></i></button></td>
                                        </tr>
                                    {/foreach}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="DeleteForm">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Xóa mục này</h4>
      </div>
      <div class="modal-body">Bạn chắc chắn muốn xóa video này chứ?</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
        <a type="button" class="btn btn-danger" id="DeleteItem">Xóa</a>
      </div>
    </div>
  </div>
</div>


{literal}
<script>

function delete_video(key)
{
    $("#DeleteItem").attr("href", "./admin?mc=patient&site=delete_video&id=" + key);
}
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
</script>
{/literal}
