<?php
/* Smarty version 3.1.30, created on 2018-06-19 18:21:01
  from "/Users/mtd/Sites/htaccess/app/admin/view/home/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b28e71dd41814_62009799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce94301b42003c4402cace75a69bdd1373d157e8' => 
    array (
      0 => '/Users/mtd/Sites/htaccess/app/admin/view/home/index.tpl',
      1 => 1528730553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b28e71dd41814_62009799 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/Users/mtd/Sites/htaccess/library/smarty/plugins/modifier.date_format.php';
?>
<div class="">
    <div class="top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon">
                    <i class="fa fa-file blue"></i>
                </div>
                <div class="count"><?php echo $_smarty_tpl->tpl_vars['statis_1']->value['exports'];?>
</div>
                <h3>Hóa đơn bán</h3>
                <p>Tổng số hóa đơn bán hàng trong tháng.</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon">
                    <i class="fa fa-users green"></i>
                </div>
                <div class="count"><?php echo $_smarty_tpl->tpl_vars['statis_1']->value['customers'];?>
</div>
                <h3>Khách hàng</h3>
                <p>Tổng số khách hàng được quản lý.</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon">
                    <i class="fa fa-user-md green"></i>
                </div>
                <div class="count"><?php echo $_smarty_tpl->tpl_vars['statis_1']->value['suppliers'];?>
</div>
                <h3>Nhà cung cấp</h3>
                <p>Tổng số nhà cung cấp.</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon">
                    <i class="fa fa-warning red"></i>
                </div>
                <div class="count"><?php echo $_smarty_tpl->tpl_vars['statis_1']->value['products'];?>
</div>
                <h3>Sản phẩm đã hết và sắp hết</h3>
                <p>Số sản phẩm cảnh báo hết cần nhập thêm.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                
                <div class="x_content">
                    <div class="col-md-9 col-sm-12 col-xs-12" style='display:none'>
                        <div class="demo-container" style="height: 360px">
                            <div id="placeholder33x" class="demo-placeholder"></div>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div>
                            <div class="x_title">
                                <h2>Hóa đơn bán hàng mới</h2>
                                <div class="clearfix"></div>
                            </div>
                            <ul class="list-unstyled top_profiles scroll-view">
                            	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statis_2']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                <li class="media event">
                                	<a class="pull-left border-aero profile_thumb"> <i class="fa fa-user aero"></i></a>
                                    <div class="media-body">
                                        <a class="title"><?php echo $_smarty_tpl->tpl_vars['data']->value['code'];?>
</a>
                                        <p ><strong style='color:red'><?php echo number_format($_smarty_tpl->tpl_vars['data']->value['must_pay']);?>
đ </strong> <small><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['created_at'],"%d-%m-%Y");?>
</small></p>
                                        <p><small><?php echo $_smarty_tpl->tpl_vars['data']->value['customer_name'];?>
</small></p>
                                    </div>
                                </li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </ul>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div>
                            <div class="x_title">
                                <h2>Hóa đơn nhập hàng mới</h2>
                                <div class="clearfix"></div>
                            </div>
                            <ul class="list-unstyled top_profiles scroll-view">
                            	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statis_3']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                <li class="media event">
                                	<a class="pull-left border-aero profile_thumb"> <i class="fa fa-user aero"></i></a>
                                    <div class="media-body">
                                        <a class="title"><?php echo $_smarty_tpl->tpl_vars['data']->value['code'];?>
</a>
                                        <p><strong  style='color:red'><?php echo number_format($_smarty_tpl->tpl_vars['data']->value['must_pay']);?>
đ </strong> <small><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['created_at'],"%d-%m-%Y");?>
</small></p>
                                        <p><small><?php echo $_smarty_tpl->tpl_vars['data']->value['supplier_name'];?>
</small></p>
                                    </div>
                                </li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- flot js -->
<!--[if lte IE 8]><?php echo '<script'; ?>
 type="text/javascript" src="js/excanvas.min.js"><?php echo '</script'; ?>
><![endif]-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
js/flot/jquery.flot.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
js/flot/jquery.flot.pie.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
js/flot/jquery.flot.orderBars.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
js/flot/jquery.flot.time.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
js/flot/date.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
js/flot/jquery.flot.spline.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
js/flot/jquery.flot.stack.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
js/flot/curvedLines.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
js/flot/jquery.flot.resize.js"><?php echo '</script'; ?>
>
<!-- pace -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['arg']->value['stylesheet'];?>
js/pace/pace.min.js"><?php echo '</script'; ?>
>
<!-- flot -->
<?php echo '<script'; ?>
 type="text/javascript">
	//define chart clolors ( you maybe add more colors if you want or flot will add it automatic )
	var chartColours = [ '#96CA59', '#3F97EB', '#72c380', '#6f7a8a', '#f7cb38', '#5a8022', '#2c7282' ];

	//generate random number for charts
	randNum = function() {
		return (Math.floor(Math.random() * (1 + 40 - 20))) + 20;
	}

	$(function() {
		/* var d1 = [];
		for (var i = 0; i < 30; i++) {
			d1.push([ new Date(Date.today().add(i).days()).getTime(), randNum() + i + i + 10 ]);
		}
		var chartMinDate = d1[0][0]; //first day
		var chartMaxDate = d1[20][0]; //last day
		console.log(d1); */

		var chartMinDate = '<?php echo $_smarty_tpl->tpl_vars['statis2']->value['minday'];?>
';
		var chartMaxDate = '<?php echo $_smarty_tpl->tpl_vars['statis2']->value['maxday'];?>
';
		var d1 = [];
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statis2']->value['data'], 'data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['data']->value) {
?>
		d1.push([<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['data']->value;?>
]);
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


		var tickSize = [ 1, "day" ];
		var tformat = "%d/%m/%y";

		//graph options
		var options = {
			grid : {
				show : true,
				aboveData : true,
				color : "#3f3f3f",
				labelMargin : 10,
				axisMargin : 0,
				borderWidth : 0,
				borderColor : null,
				minBorderMargin : 5,
				clickable : true,
				hoverable : true,
				autoHighlight : true,
				mouseActiveRadius : 100
			},
			series : {
				lines : {
					show : true,
					fill : true,
					lineWidth : 2,
					steps : false
				},
				points : {
					show : true,
					radius : 4.5,
					symbol : "circle",
					lineWidth : 3.0
				}
			},
			legend : {
				position : "ne",
				margin : [ 0, -25 ],
				noColumns : 0,
				labelBoxBorderColor : null,
				labelFormatter : function(label, series) {
					// just add some space to labes
					return label + '&nbsp;&nbsp;';
				},
				width : 40,
				height : 1
			},
			colors : chartColours,
			shadowSize : 0,
			tooltip : true, //activate tooltip
			tooltipOpts : {
				content : "%s: %y.0",
				xDateFormat : "%d/%m",
				shifts : {
					x : -30,
					y : -50
				},
				defaultTheme : false
			},
			yaxis : {
				min : 0
			},
			xaxis : {
				mode : "time",
				minTickSize : tickSize,
				timeformat : tformat,
				min : chartMinDate,
				max : chartMaxDate
			}
		};
		var plot = $.plot($("#placeholder33x"), [ {
			label : " Doanh thu",
			data : d1,
			lines : {
				fillColor : "rgba(150, 202, 89, 0.12)"
			}, //#96CA59 rgba(150, 202, 89, 0.42)
			points : {
				fillColor : "#fff"
			}
		} ], options);
	});
<?php echo '</script'; ?>
>
<!-- /flot -->
<?php }
}