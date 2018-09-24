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
            {foreach from=$calender item=item}
                <tr>
                    <td>{$item.room}</td>
                    <td>{$item.thu2}</td>
                    <td>{$item.thu3}</td>
                    <td>{$item.thu4}</td>
                    <td>{$item.thu5}</td>
                    <td>{$item.thu6}</td>
                    <td>{$item.thu7}</td>
                    <td>{$item.cn}</td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>
{literal}
<script>
    $(document).ready(function(){
        $("#banner li.active").attr('class', ' ');
        $("#calender").attr('class', 'active');
    })
</script>
{/literal}