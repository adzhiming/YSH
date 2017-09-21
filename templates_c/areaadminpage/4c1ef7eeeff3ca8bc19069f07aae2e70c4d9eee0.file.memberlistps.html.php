<?php /* Smarty version Smarty-3.1.10, created on 2017-09-21 01:21:44
         compiled from "F:\www\YSH\templates\areaadminpage\psuser\memberlistps.html" */ ?>
<?php /*%%SmartyHeaderCode:2227459c2a3a89639b1-23136616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c1ef7eeeff3ca8bc19069f07aae2e70c4d9eee0' => 
    array (
      0 => 'F:\\www\\YSH\\templates\\areaadminpage\\psuser\\memberlistps.html',
      1 => 1483335496,
      2 => 'file',
    ),
    '608a39e6d4c869a650088e6affe011c71fddff7d' => 
    array (
      0 => 'F:\\www\\YSH\\templates\\areaadminpage\\public\\admin.html',
      1 => 1483416256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2227459c2a3a89639b1-23136616',
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
  'unifunc' => 'content_59c2a3a8ece907_76588855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2a3a8ece907_76588855')) {function content_59c2a3a8ece907_76588855($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include 'F:\\www\\YSH\\lib\\Smarty\\libs\\plugins\\function.load_data.php';
if (!is_callable('smarty_modifier_date_format')) include 'F:\\www\\YSH\\lib\\Smarty\\libs\\plugins\\modifier.date_format.php';
?> <html xmlns="http://www.w3.org/1999/xhtml"><head> 
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
 
   	 <div class="managShopCon">
	<div class="managShopBox">
		<div class="managShopMain">
			<div class="managShopClas">
				<ul>
					<li class="maShClaA"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/psuser/module/memberlistps"),$_smarty_tpl);?>
">配送员管理</a></li>
					<li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/psuser/module/addpsy"),$_smarty_tpl);?>
">添加配送员</a></li>
					<li><a target="_bank" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/psuser/module/psymap"),$_smarty_tpl);?>
">配送调度管理</a></li>
					<li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/psuser/module/psyyj"),$_smarty_tpl);?>
">配送员佣金统计</a></li>
				</ul>
			</div>
			<div class="managShopSeaBox">
				<div class="managShopSeaL">
				<form method="post" name="form1" action="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/psuser/module/memberlistps"),$_smarty_tpl);?>
">
					<ul>
 						<li><span>用户名：</span><input type="text"  name="username" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['username']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder=""></li>
 						<li><span>邮箱：</span><input type="text"  name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['email']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder=""></li>
						<li><span>手机：</span><input type="text" name="phone" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['phone']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="">
						<input type="submit" value="提交查询" class="managBut"></li>
					</ul>
					</form>
				</div>
			</div>
			<div class="managShopList">
				<table>
					<thead>
						<tr>
						 
							<td width="180">用户名称</td>
							<td width="206">登陆时间</td>
							<td width="206">创建时间</td>
  							<td width="99">操作</td>
						</tr>
					</thead>
					<tbody>
					 <?php echo smarty_function_load_data(array('assign'=>"list",'table'=>"member",'showpage'=>"true",'where'=>((string)$_smarty_tpl->tpl_vars['where']->value)),$_smarty_tpl);?>
 
                      <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?> 
						<tr>
							 
							<td><?php echo $_smarty_tpl->tpl_vars['items']->value['username'];?>
</td>
							<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['logintime'],"%Y-%m-%d %H:%M:%S");?>
</td>
							<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['creattime'],"%Y-%m-%d %H:%M:%S");?>
</td>
 
 							<td>
							<a class="icon_xg" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/member/module/addmember/id/".((string)$_smarty_tpl->tpl_vars['items']->value['uid'])),$_smarty_tpl);?>
"></a>
							<a class="icon_close01"  onclick="return remind(this);" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/member/module/delmember/id/".((string)$_smarty_tpl->tpl_vars['items']->value['uid'])."/datatype/json"),$_smarty_tpl);?>
" ></a></td>
						</tr>
					 <?php } ?> 	 
					 
					</tbody>
				</table>
			</div>
			<div class="pagingCon">
 				<ul>
					 <?php echo $_smarty_tpl->tpl_vars['list']->value['pagecontent'];?>

				</ul>
 			</div>
		</div>
	</div>
</div>


      

   	         
  
</body>
</html>





<?php }} ?>