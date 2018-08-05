<div class="left_col scroll-view">

	<div class="navbar nav_title" style="border: 0;">
		<a href="./admin" class="site_title"><i class="fa fa-laptop"></i><span> MTD - Quản lý bán hàng</span></a>
	</div>
	<div class="clearfix"></div>
	<br />

	<!-- sidebar menu -->
	<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

		<div class="menu_section">
			<h3>Chức năng chính</h3>

			<ul class="nav side-menu">
				<li><a href="{$arg.prefix_admin}mc=patient"><i class="fa fa-user"></i>Bệnh nhân</a></li>
				<li> <a href="{$arg.prefix_admin}mc=category&site=index"> <i style="width:26px;" class="glyphicon glyphicon-list-alt"></i>Danh mục bài viết</a></li>
				<li><a href="{$arg.prefix_admin}mc=post&site=index"><i style="width:26px;" class="glyphicon glyphicon-list-alt"></i>    Quản lý bài viết</a></li>
				<li><a href="{$arg.prefix_admin}mc=calender&site=index"><i class="fa fa-calendar" aria-hidden="true"></i>    Lịch bác sỹ</a></li>
				<li><a href="{$arg.prefix_admin}mc=report&site=performance"><i style="width:26px;" class="fa fa-bar-chart-o"></i>    Thống kê</a></li>
				<li><a href="{$arg.prefix_admin}mc=contact&site=index"><i class="fa fa-envelope-o" aria-hidden="true"></i>Liên hệ</a></li>
				<li><a href="{$arg.prefix_admin}mc=user&site=index"><i class="fa fa-user"></i> Quản lý người dùng</a></li>
			</ul>
		</div>
		<div class="menu_section">
				<h3>Cấu hình</h3>
				<ul class="nav side-menu">
					<li><a href="{$arg.prefix_admin}mc=setting&site=info"><i class="fa fa-info"></i>Thiết lập thông tin</a></li>
				</ul>
		</div>

	</div>
	<!-- /sidebar menu -->

	<!-- /menu footer buttons -->
	<div class="sidebar-footer hidden-small">
		{* <a data-toggle="tooltip" data-placement="top" title="Settings"> <span
			class="glyphicon glyphicon-cog"></span>
		</a> <a data-toggle="tooltip" data-placement="top" title="FullScreen">
			<span class="glyphicon glyphicon-fullscreen"></span>
		</a> *}
		<a href='{$arg.domain}' data-toggle="tooltip" data-placement="top" title="Trang bán hàng"> <span
			class="glyphicon glyphicon-shopping-cart"></span>
		</a>
		<a   href='./admin?mc=user&site=logout' data-toggle="tooltip" data-placement="top" title="Logout"> <span
			class="glyphicon glyphicon-off"></span>
		</a>
	</div>
	<!-- /menu footer buttons -->
</div>
<script>
if($("body.nav-sm").length){
	$(".sidebar-footer.hidden-small").hide();
}
</script>
