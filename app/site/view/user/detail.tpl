

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
                                    </tr>
                                {/foreach}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>




{literal}
    <script>

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
    <script>
      $(document).ready(function(){
          $("#banner li.active").attr('class', ' ');
          $("#video-menu").attr('class', 'active');
      })
    </script>
{/literal}
