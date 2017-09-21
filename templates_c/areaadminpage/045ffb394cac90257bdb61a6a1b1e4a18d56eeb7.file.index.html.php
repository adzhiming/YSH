<?php /* Smarty version Smarty-3.1.10, created on 2017-09-21 01:21:11
         compiled from "F:\www\YSH\templates\areaadminpage\system\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1730159c2a3872393f9-75869278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '045ffb394cac90257bdb61a6a1b1e4a18d56eeb7' => 
    array (
      0 => 'F:\\www\\YSH\\templates\\areaadminpage\\system\\index.html',
      1 => 1483089118,
      2 => 'file',
    ),
    '608a39e6d4c869a650088e6affe011c71fddff7d' => 
    array (
      0 => 'F:\\www\\YSH\\templates\\areaadminpage\\public\\admin.html',
      1 => 1483416256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1730159c2a3872393f9-75869278',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tempdir' => 0,
    'siteurl' => 0,
    'is_static' => 0,
    'controlname' => 0,
    'Taction' => 0,
    'tmodule' => 0,
    'sitelogo' => 0,
    'admininfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_59c2a38786c995_26088338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2a38786c995_26088338')) {function content_59c2a38786c995_26088338($_smarty_tpl) {?> <html xmlns="http://www.w3.org/1999/xhtml"><head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<meta http-equiv="Content-Language" content="zh-CN"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta content="all" name="robots"> 
<meta name="description" content=""> 
<meta content="" name="keywords"> 
<title>分站管理系统</title>  
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/admin1.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/index.css"> 
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquery.js" type="text/javascript" language="javascript"></script>
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/public.js" type="text/javascript" language="javascript"></script>
 <script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/artDialog.js?skin=wmrPopup"></script>
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/template.min.js" type="text/javascript" language="javascript"></script>

 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/js/kindeditor/kindeditor.js" type="text/javascript" language="javascript"></script>
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/datepicker/WdatePicker.js" type="text/javascript" language="javascript"></script> 
 
 <script>
	var menu = null;
	var siteurl = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
";
	var is_static ="<?php echo $_smarty_tpl->tpl_vars['is_static']->value;?>
";
	var ctrl ="<?php echo $_smarty_tpl->tpl_vars['controlname']->value;?>
";
	var action ="<?php echo $_smarty_tpl->tpl_vars['Taction']->value;?>
";
	var module ="<?php echo $_smarty_tpl->tpl_vars['tmodule']->value;?>
";
	if(screen.width > 1359){
		
		$('.newtop').css('width',screen.width);
		$('.newmain').css('width',screen.width);
		$('.newfoot').css('width',screen.width);
	}   
$(".managShopCon .managShopBox .managShopMain .managShopList table .managShopChek input").click(function(){
		var x = $(".managShopCon .managShopBox .managShopMain .managShopList table .managShopChek input").index(this);
		$(".managShopCon .managShopBox .managShopMain .managShopList table .managShopChek i").eq(x).toggleClass("icon_checkbox02")
		})
	$(".managShopCon .managShopBox .managShopMain .managShopList table tbody tr td .managShopChek input").click(function(){
		var x = $(".managShopCon .managShopBox .managShopMain .managShopList table tbody tr td .managShopChek input").index(this);
		$(".managShopCon .managShopBox .managShopMain .managShopList table tbody tr").eq(x).toggleClass("mangSoLisBg")
		})

	$(".popLayDiseRspe ul li input").click(function(){
		var x = $(".popLayDiseRspe ul li input").index(this)
		$(".popLayDiseRspe ul li i").eq(x).toggleClass("popDisChe")
		})
</script> 
</head> 
<body style="background:#f5f5f5;"> 
<div id="cat_zhe" class="cart_zhe" style="display:none;"></div>
<div id="cat_tj" class="cart_out_cat" style="display:none;"> 数据提交中..</div>
 	 
   

<!--------------------------------------------------------------头部开始-------------------------------------------------------------->
<div class="topCon">
	<div class="topBox">
		<div class="topLeft">
			<div class="topLogo"><h1><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/system/module/index"),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['sitelogo']->value;?>
" alt="Logo"></a></h1></div>
			<div class="topName"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/system/module/index"),$_smarty_tpl);?>
"><h2>分站管理系统</h2></a></div>
		</div>
		<div class="topRight">
			<div class="topBut">
				<ul>
					<li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/order/module/adminfastfoods"),$_smarty_tpl);?>
"  ><i class="icon_daike"></i><span>代客下单系统</span></a></li>
					<li><a href="javascript:;"  ><i class="icon_yhm"></i><span><?php echo $_smarty_tpl->tpl_vars['admininfo']->value['username'];?>
</span></a></li>
					<li><a href="javascript:;" onclick="modifypwd();" title="修改密码"><i class="icon_user"></i><span>修改密码</span></a></li>
					<li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/agentadminloginout"),$_smarty_tpl);?>
" title="退出"><i class="icon_signout"></i><span>退出</span></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--------------------------------------------------------------头部结束-------------------------------------------------------------->

<!--------------------------------------------------------------首页开始-------------------------------------------------------------->
<!---------------------------功能分类--------------------------->
<div class="homePageCon">
	<div class="homePageBox">
		<div class="homePageNav">
			<ul>				
				<li class="home_bg00"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/area/module/adminpsset"),$_smarty_tpl);?>
" title="平台配送设置"><i class="icon_dpgl"></i><span>配送设置</span></a></li>
				<li class="home_bg02"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/shop/module/adminshoplist"),$_smarty_tpl);?>
" title="店铺管理"><i class="icon_dpgl"></i><span>店铺管理</span></a></li>
				<li class="home_bg03"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/order/module/orderlist"),$_smarty_tpl);?>
" title="订单管理"><i class="icon_ddgl"></i><span>订单管理</span></a></li>
				<li class="home_bg04"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/psuser/module/memberlistps"),$_smarty_tpl);?>
" title="配送管理"><i class="icon_psgl"></i><span>配送管理</span></a></li>
				<li class="home_bg05"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/member/module/memberlistshop"),$_smarty_tpl);?>
" title="用户管理"><i class="icon_yhgl"></i><span>用户管理</span></a></li>
				<li class="home_bg06"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/order/module/ordertotal"),$_smarty_tpl);?>
" title="数据统计"><i class="icon_sjtj"></i><span>数据统计</span></a></li>
				<li class="home_bg01"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/shop/module/cateset"),$_smarty_tpl);?>
" title="其它设置"><i class="icon_tjdp"></i><span>其它设置</span></a></li>
			</ul>
		</div>
	</div>
</div>
  
<div style="clear:both;"></div>
 	
<script>
$(function(){ 
 $('.show_page a').wrap('<li></li>');
 $('.show_page').find('.current').eq(0).parent().css({'background':'#f60'}); 
}); 
</script>
<style>
 .search{width:1160px;margin:0 auto;}
.tags{width:1160px;margin:0 auto;}

</style>
  
  
<div class="homePageMainCon">
	<div class="homePageMainBox">
		<div class="homePageMain">
			<div class="homePageMainTop dlsxx_head_bg">
				<h2>分站信息</h2>
				<span>AGENT INFORMATION</span>
			</div>
			<div class="homePageMainBot">
 				<div class="homePageMainInfo" style="padding-top:40px;border:none;">
					<h3><?php echo $_smarty_tpl->tpl_vars['admininfo']->value['stationname'];?>
</h3>
					<ul>
						<li>城市：<?php echo $_smarty_tpl->tpl_vars['admininfo']->value['cityname'];?>
 </li>
 						<li>负责人：<?php echo $_smarty_tpl->tpl_vars['admininfo']->value['stationusername'];?>
 </li>
						<li>电话：<?php echo $_smarty_tpl->tpl_vars['admininfo']->value['stationphone'];?>
 </li>
						<li>地址：<?php echo $_smarty_tpl->tpl_vars['admininfo']->value['stationaddress'];?>
 </li>
						<li>状态：<?php if ($_smarty_tpl->tpl_vars['admininfo']->value['stationis_open']==0){?>开启中<?php }elseif($_smarty_tpl->tpl_vars['admininfo']->value['stationis_open']==1){?>关闭中<?php }else{ ?>未知<?php }?> </li>
 					</ul>
				</div>
			</div> 
		</div>
		<div class="homePageMain">
			<div class="homePageMainTop sjtj_head_bg">
				<h2>数据统计</h2>
				<span>DATA STATISTICS</span>
			</div>
			<div class="homePageMainBot">
				<div class="homePageMainOrd">
					<ul>
						<li><b class="fonCol_hoOr"><?php echo $_smarty_tpl->tpl_vars['tjdata']->value['dayallorder'];?>
</b><span>今日总订单</span></li>
						<li><b><?php echo $_smarty_tpl->tpl_vars['tjdata']->value['monthallorder'];?>
</b><span>本月已完成订单</span></li>
						<li><b><?php echo $_smarty_tpl->tpl_vars['tjdata']->value['allorder'];?>
</b><span>已完成订单总量</span></li>
						<li><b><?php echo $_smarty_tpl->tpl_vars['tjdata']->value['onlineshop'];?>
</b><span>分站商家</span></li>
						<li><b><?php echo $_smarty_tpl->tpl_vars['tjdata']->value['psymember'];?>
</b><span>配送员数量</span></li>
						<li><b><?php echo $_smarty_tpl->tpl_vars['tjdata']->value['marketg'];?>
</b><span>商品数量</span></li>
					</ul>
				</div>
			</div> 
		</div>
	</div>
</div>  
 
   	         
  
</body>
</html>





<?php }} ?>