<!--about-->
<section id="about" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8 col-xs-12">
            {foreach from=$posts item=item}
                <div class="well">
                    <div class="media">
                        <a class="pull-left" href="/bai-viet/{$item.slug}">
            <img class="media-object" src="{base_url($item.path)}/{$item.name}" width='200px'>
        </a>
                        <div class="media-body">
                            <a class="media-heading" href="/bai-viet/{$item.slug}">{$item.title}</a>

                            <p>{readMoreHelper($item.content)}</p>
                            <ul class="list-inline list-unstyled">
                                <li><span><i class="fa fa-calendar" aria-hidden="true"></i>{$item.created_at} </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            {/foreach}
            <div class="paging">{$paging.paging}</div>
            </div>
            <div class='col-md-3'>
                <div class="wrapper-news-tab">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs news-tab" role="tablist">
                        <li role="presentation" class="active"><a href="#newNews" aria-controls="newNews" role="tab" data-toggle="tab">Nổi bật</a></li>
                        {*
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Nổi bật</a></li> *}
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="newNews">
                            {foreach from=$posts1 item=item}
                            <div class="media new-item" style='padding-top:10px'>
                                <div class="media-left">
                                    <a href="/bai-viet/{$item.slug}">

                <img class="media-object lazy" alt="Có nên thêm gia vị mặn khi chế biến đồ ăn cho trẻ?" src="{base_url($item.path)}/{$item.name}" width=70&amp;height=70&amp;type=1 style="display: block;">
            </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">
                <a href="/bai-viet/{$item.slug}" class="title" title="Có nên thêm gia vị mặn khi chế biến đồ ăn cho trẻ?">{$item.title}</a>
            </h5>
                                    <ul class="option" style="padding-left: 0px; font-size: 12px">
                                        <li>
                                            <i class="fa fa-calendar-o"></i> 13/07/2018 02:48
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {/foreach}
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <div class="media new-item" style='padding-top:10px'>
                                <div class="media-left">
                                    <a href="/cac-benh-thuong-gap/phong-benh-gan-nhiem-mo-voi-che-do-an-uong.html">
                <img class="media-object lazy" alt="Có nên thêm gia vị mặn khi chế biến đồ ăn cho trẻ?" src="http://localhost/pknew/upload/post/3_mtd1533477905.png" width=70&amp;height=70&amp;type=1 style="display: block;">
            </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">
                <a href="/cac-benh-thuong-gap/phong-benh-gan-nhiem-mo-voi-che-do-an-uong.html" class="title" title="Phòng bệnh gan nhiễm mỡ với chế độ ăn uống">Phòng bệnh gan nhiễm mỡ với chế độ ăn uống</a>
            </h5>
                                    <ul class="option" style="padding-left: 0px">
                                        <li>
                                            <i class="fa fa-calendar-o"></i> 02/08/2018 05:11
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card my-4">
                    <h5 class="card-header">Danh mục bài viết</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="list-unstyled mb-0">
                                    {foreach from=$categories item=item}
                                        <li>
                                            <a href="#">{$item.name}</a>
                                        </li>
                                    {/foreach}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ about-->
<script>
$(document).ready(function() {
    $("#banner li.active").attr('class', ' ');
    $("#tintuc-menu").attr('class', 'active');
})
</script>