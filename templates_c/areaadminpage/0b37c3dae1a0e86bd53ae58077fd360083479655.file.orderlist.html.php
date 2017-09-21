<?php /* Smarty version Smarty-3.1.10, created on 2017-09-21 01:21:39
         compiled from "F:\www\YSH\templates\areaadminpage\order\orderlist.html" */ ?>
<?php /*%%SmartyHeaderCode:3160759c2a3a361a928-97347005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b37c3dae1a0e86bd53ae58077fd360083479655' => 
    array (
      0 => 'F:\\www\\YSH\\templates\\areaadminpage\\order\\orderlist.html',
      1 => 1483088998,
      2 => 'file',
    ),
    '608a39e6d4c869a650088e6affe011c71fddff7d' => 
    array (
      0 => 'F:\\www\\YSH\\templates\\areaadminpage\\public\\admin.html',
      1 => 1483416256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3160759c2a3a361a928-97347005',
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
  'unifunc' => 'content_59c2a3a4efea02_09261492',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2a3a4efea02_09261492')) {function content_59c2a3a4efea02_09261492($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\www\\YSH\\lib\\Smarty\\libs\\plugins\\modifier.date_format.php';
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

<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquery.PrintArea.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/datepicker/WdatePicker.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/plugins/iframeTools.js" type="text/javascript" language="javascript"></script>

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
 
 
 <div class="managShopCon" style="margin-bottom:20px;">
	<div class="managShopBox">
		<div class="managShopMain">
			<div class="managShopClas">
				<ul>
					<li class="maShClaA"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/order/module/orderlist"),$_smarty_tpl);?>
">所有订单</a></li>
					<li><a target="_bank" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/order/module/ordertoday"),$_smarty_tpl);?>
">当天订单</a></li>
				</ul>
			</div>
			<div class="ordManagQuery">
			 <form method="post" name="form1" action="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/order/module/orderlist"),$_smarty_tpl);?>
">
				<ul>
					<li><span>查询类型：</span>
						<select  name="querytype">
							<option value="0">未选择</option>
							<option value="mb.username"  <?php if ($_smarty_tpl->tpl_vars['querytype']->value=='mb.username'){?>selected<?php }?>>会员名</option>
							<option value="ord.shopname"  <?php if ($_smarty_tpl->tpl_vars['querytype']->value=='ord.shopname'){?>selected<?php }?>>店铺名称</option>
							<option value="ord.buyername"  <?php if ($_smarty_tpl->tpl_vars['querytype']->value=='ord.buyername'){?>selected<?php }?>>买家联系人</option>
							<option value="ord.buyerphone"  <?php if ($_smarty_tpl->tpl_vars['querytype']->value=='ord.buyerphone'){?>selected<?php }?>>买家联系电话</option>
							<option value="ord.dno"  <?php if ($_smarty_tpl->tpl_vars['querytype']->value=='ord.dno'){?>selected<?php }?>>订单编号</option>
						</select>
					</li>
					<li><span>查询条件：</span><input type="text"  name="searchvalue" value="<?php echo $_smarty_tpl->tpl_vars['searchvalue']->value;?>
" class="searchvalue">
						<select name="orderstatus">
							<option value="all">选择订单状态</option>
							<option value="1" <?php if ($_smarty_tpl->tpl_vars['orderstatus']->value=='1'){?>selected<?php }?>>未处理</option>
							<option value="2" <?php if ($_smarty_tpl->tpl_vars['orderstatus']->value=='2'){?>selected<?php }?>>已审核订单</option>
							<option value="3" <?php if ($_smarty_tpl->tpl_vars['orderstatus']->value=='3'){?>selected<?php }?>>已发货</option>
							<option value="4" <?php if ($_smarty_tpl->tpl_vars['orderstatus']->value=='4'){?>selected<?php }?>>已完成</option>
							<option value="5" <?php if ($_smarty_tpl->tpl_vars['orderstatus']->value=='5'){?>selected<?php }?>>已关闭</option>
						</select>
					</li>
					<li>
						<span>从</span>
				 <input style="float:left;" class="Wdate datefmt searchvalue" type="text" name="starttime" id="starttime" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['starttime']->value,"%Y-%m-%d");?>
"  onFocus="WdatePicker({isShowClear:false,readOnly:true});" />  

						<span>到</span>
				 <input style="float:left;" class="Wdate datefmt searchvalue" type="text" name="endtime" id="endtime" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['endtime']->value,"%Y-%m-%d");?>
"  onFocus="WdatePicker({isShowClear:false,readOnly:true});" />                  

						<input type="submit" value="提交查询" class="searchBut">
					</li>
				</ul>
				</form>
			</div>
			<div class="ordManagCon">
				 
				<div id="tagscontent">

            <div id="con_one_1">

              <div class="table_td">

              <form method="post" action="" onsubmit="return remind();">
                <?php if (empty($_smarty_tpl->tpl_vars['list']->value)){?>
					<div style="font-size:16px; margin:20px 0px 0px 20px;">暂无数据</div>
                <?php }?>
                  <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?>  
			   		 
 <?php if (!empty($_smarty_tpl->tpl_vars['items']->value['shopid'])&&$_smarty_tpl->tpl_vars['items']->value['shoptype']!='100'){?>
					 
					 
			   		 <table class="table table-bordered" width=96% style="border-bottom: 1px solid #F8644B;	font-size:12px;margin-top:5px;text-align:left;margin-left:2%;" id="order_area_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"   onMouseover="colorred(this);" onMouseout="tcolorred(this);">
	<?php if ($_smarty_tpl->tpl_vars['items']->value['is_goshop']==1){?>
		             <tr>
		             	<td colspan="2" style="text-align:left;">单号：<?php echo $_smarty_tpl->tpl_vars['items']->value['dno'];?>
<font color=red>预订<?php if ($_smarty_tpl->tpl_vars['items']->value['allcost']==0){?>座位<?php }else{ ?>座位和菜品<?php }?></font></td>
		             	<td colspan="2" style="text-align:left;">创建时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['addtime'],"%Y-%m-%d %H:%M:%S");?>
</td>
		             	<td colspan="2" style="text-align:left;">订单状态: <font color=blue>
			
			<?php if ($_smarty_tpl->tpl_vars['items']->value['is_make']<2){?>
				<?php if ($_smarty_tpl->tpl_vars['items']->value['status']==1){?>
					等待用户到店消费
				<?php }elseif($_smarty_tpl->tpl_vars['items']->value['status']==0){?>
					等待处理	
				<?php }elseif($_smarty_tpl->tpl_vars['items']->value['status']==2||$_smarty_tpl->tpl_vars['items']->value['status']==3){?>
					已完成，用户已消费
				<?php }elseif($_smarty_tpl->tpl_vars['items']->value['status']==4){?>
					商家已取消订单
				<?php }elseif($_smarty_tpl->tpl_vars['items']->value['status']==5){?>
					管理员已取消订单
				<?php }?>
			<?php }else{ ?>
				
				卖家已取消订单

			<?php }?>
						</font></td>
		            </tr>
		             <tr style="height:20px;line-height:20px;">
		             	<td colspan="2" style="text-align:left;">店铺名称：<?php echo $_smarty_tpl->tpl_vars['items']->value['shopname'];?>
</td>
		             	<td colspan="2" style="text-align:left;">店铺地址：<?php echo $_smarty_tpl->tpl_vars['items']->value['shopaddress'];?>
</td>
		             	<td colspan="2" style="text-align:left;">店铺电话: <?php echo $_smarty_tpl->tpl_vars['items']->value['shopphone'];?>
</td> 
		            </tr>
		            <tr style="height:20px;line-height:20px;">
		             	<td colspan="2" style="text-align:left;">消费时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['posttime'],"%Y-%m-%d");?>
 <?php echo $_smarty_tpl->tpl_vars['items']->value['postdate'];?>
</td>
		             	<td colspan="2" style="text-align:left;">支付状态：<font color=red><?php echo (($tmp = @$_smarty_tpl->tpl_vars['paytypearr']->value[$_smarty_tpl->tpl_vars['items']->value['paytype']])===null||$tmp==='' ? '未定义' : $tmp);?>
</font><?php echo $_smarty_tpl->tpl_vars['payway']->value[$_smarty_tpl->tpl_vars['items']->value['paytype_name']];?>
，<?php if ($_smarty_tpl->tpl_vars['items']->value['paystatus']==1){?>已付<?php }else{ ?>未付<?php }?><font color=red><?php echo $_smarty_tpl->tpl_vars['backarray']->value[$_smarty_tpl->tpl_vars['items']->value['is_reback']];?>
</font></td>
		             	<td colspan="2" style="text-align:left;">下单来源: <?php echo $_smarty_tpl->tpl_vars['ordertypearr']->value[$_smarty_tpl->tpl_vars['items']->value['ordertype']];?>
<?php echo $_smarty_tpl->tpl_vars['items']->value['ipaddress'];?>
</td>
		            </tr>
		            <tr style="height:20px;line-height:20px;">
		             	<td colspan="2" style="text-align:left;">订单类型：预订</td>   
		             	<td colspan="2" style="text-align:left;">ip信息：<?php echo $_smarty_tpl->tpl_vars['items']->value['ipaddress'];?>
</td> 
		            </tr>
                <tr style="height:20px;line-height:20px;">
		             	<td colspan="2" style="text-align:left;">联系人：<?php echo $_smarty_tpl->tpl_vars['items']->value['buyername'];?>
[<?php if (empty($_smarty_tpl->tpl_vars['items']->value['acountname'])){?>游客<?php }else{ ?>帐号:<?php echo $_smarty_tpl->tpl_vars['items']->value['acountname'];?>
<?php }?>]</td>  
		             	<td colspan="2" style="text-align:left;">联系电话：<?php echo $_smarty_tpl->tpl_vars['items']->value['buyerphone'];?>
</td> 
		             	<td colspan="2" style="text-align:left;"> <?php $_smarty_tpl->tpl_vars['showother'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['items']->value['othertext']), null, 0);?>   
		            		 		  	 <?php  $_smarty_tpl->tpl_vars['itc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itc']->_loop = false;
 $_smarty_tpl->tpl_vars['mytest'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['showother']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itc']->key => $_smarty_tpl->tpl_vars['itc']->value){
$_smarty_tpl->tpl_vars['itc']->_loop = true;
 $_smarty_tpl->tpl_vars['mytest']->value = $_smarty_tpl->tpl_vars['itc']->key;
?>
		            		 		  	<font color=red> <?php echo $_smarty_tpl->tpl_vars['mytest']->value;?>
</blue>:<?php echo $_smarty_tpl->tpl_vars['itc']->value;?>
 </font>
		            		 		  	 <?php } ?></td>  
		            </tr>
	 <?php }else{ ?>
		             <tr>
		             	<td colspan="2" style="text-align:left;">单号：<?php echo $_smarty_tpl->tpl_vars['items']->value['dno'];?>
<font color=red><?php echo $_smarty_tpl->tpl_vars['shoptype']->value[$_smarty_tpl->tpl_vars['items']->value['shoptype']];?>
</font></td>
		             	<td colspan="2" style="text-align:left;">创建时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['addtime'],"%Y-%m-%d %H:%M:%S");?>
</td>
		             	<td colspan="2" style="text-align:left;">订单状态: <font color=blue><?php echo $_smarty_tpl->tpl_vars['buyerstatus']->value[$_smarty_tpl->tpl_vars['items']->value['status']];?>
</font></td>
		            </tr>
		             <tr style="height:20px;line-height:20px;">
		             	<td colspan="2" style="text-align:left;">店铺名称：<?php echo $_smarty_tpl->tpl_vars['items']->value['shopname'];?>
</td>
		             	<td colspan="2" style="text-align:left;">店铺地址：<?php echo $_smarty_tpl->tpl_vars['items']->value['shopaddress'];?>
</td>
		             	<td colspan="2" style="text-align:left;">店铺电话: <?php echo $_smarty_tpl->tpl_vars['items']->value['shopphone'];?>
</td> 
		            </tr>
		            <tr style="height:20px;line-height:20px;">
		             	<td colspan="2" style="text-align:left;">支付方式：<font color=red><?php echo (($tmp = @$_smarty_tpl->tpl_vars['paytypearr']->value[$_smarty_tpl->tpl_vars['items']->value['paytype']])===null||$tmp==='' ? '未定义' : $tmp);?>
<?php if (!empty($_smarty_tpl->tpl_vars['items']->value['paytype_name'])){?>(<?php echo $_smarty_tpl->tpl_vars['payway']->value[$_smarty_tpl->tpl_vars['items']->value['paytype_name']];?>
)<?php }?></font></td>
		             	<td colspan="2" style="text-align:left;">支付状态：<?php if ($_smarty_tpl->tpl_vars['items']->value['paystatus']==1){?>已付<?php }else{ ?>未付<?php }?><font color=red><?php echo $_smarty_tpl->tpl_vars['backarray']->value[$_smarty_tpl->tpl_vars['items']->value['is_reback']];?>
</font></td>
		             	<td colspan="2" style="text-align:left;">下单来源: <?php echo $_smarty_tpl->tpl_vars['ordertypearr']->value[$_smarty_tpl->tpl_vars['items']->value['ordertype']];?>
</td>
		            </tr>
		            <tr style="height:20px;line-height:20px;">
		             	<td colspan="2" style="text-align:left;">配送时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['posttime'],"%Y-%m-%d");?>
 <?php echo $_smarty_tpl->tpl_vars['items']->value['postdate'];?>
</td>
		             	<td colspan="2" style="text-align:left;">订单类型：<?php echo $_smarty_tpl->tpl_vars['shoptype']->value[$_smarty_tpl->tpl_vars['items']->value['shoptype']];?>
</td>   
		             	<td colspan="2" style="text-align:left;">ip信息：<?php echo $_smarty_tpl->tpl_vars['items']->value['ipaddress'];?>
</td> 
		            </tr>
                <tr style="height:20px;line-height:20px;">
		             	<td colspan="2" style="text-align:left;">联系人：<?php echo $_smarty_tpl->tpl_vars['items']->value['buyername'];?>
[<?php if (empty($_smarty_tpl->tpl_vars['items']->value['acountname'])){?>游客<?php }else{ ?>帐号:<?php echo $_smarty_tpl->tpl_vars['items']->value['acountname'];?>
<?php }?>]</td>
		             	<td colspan="2" style="text-align:left;">消费地址：<?php echo $_smarty_tpl->tpl_vars['items']->value['buyeraddress'];?>
</td>   
		             	<td colspan="2" style="text-align:left;">联系电话：<?php echo $_smarty_tpl->tpl_vars['items']->value['buyerphone'];?>
</td> 
		            </tr>
	 <?php }?>
		            <tr> 
		            </tr>
		            <?php if (!empty($_smarty_tpl->tpl_vars['items']->value['detlist'])){?>
		            <tr style="height:20px;line-height:20px;">
		            	<td colspan="3" width="50%" valign=top>
		            		<table style="margin:0px;padding:0px;font-size:12px;" width="100%">
		            			<tr style="height:20px;line-height:20px;">
		            				<td style="border:none;padding:0px;color:gray;text-align:left;" width="60%">名称</td>
		            				<td style="border:none;padding:0px;color:gray;" width="15%">价格</td>
		            				<td style="border:none;padding:0px;color:gray;">数量</td> 
		            			</tr>
		            			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value['detlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>  
		            			<tr style="height:20px;line-height:20px;"><td style="border:none;padding:0px;color:gray;text-align:left;"><?php echo $_smarty_tpl->tpl_vars['value']->value['goodsname'];?>
<?php if ($_smarty_tpl->tpl_vars['value']->value['is_send']==1){?><font color=red>[赠品]</font><?php }?></td>
		            				  <td style="border:none;padding:0px;color:gray;"><?php echo $_smarty_tpl->tpl_vars['value']->value['goodscost'];?>
元</td>
		            				  <td style="border:none;padding:0px;color:gray;"><?php echo $_smarty_tpl->tpl_vars['value']->value['goodscount'];?>
份</td>
		            				  </tr> 
		            				<?php } ?>  
		            				 
		            	    
		            		   
		            		 </table>
		            	</td>
		            	<td colspan="3" style="text-align:left;color:gray;" valign=top>
		            		 <table style="margin:0px;padding:0px;font-size:12px;text-align:left;" width="100%">
		            		    <?php if ($_smarty_tpl->tpl_vars['items']->value['shopcost']>0){?>
		            		   	<tr style="height:20px;line-height:20px;">
		            		 		  <td style="border:none;padding:0px;color:gray;" width="100px;">店铺商品总价</td>
		            		 		  <td style="border:none;padding:0px;color:gray;"><font color=red><?php echo $_smarty_tpl->tpl_vars['items']->value['shopcost'];?>
</font>元</td>
		            		 		   </tr>
		            		 		<?php }?>
		            		 		 <?php if ($_smarty_tpl->tpl_vars['items']->value['shopps']>0){?>
		            		   	<tr style="height:20px;line-height:20px;">
		            		 		  <td style="border:none;padding:0px;color:gray;" width="100px;">店铺配送费</td>
		            		 		  <td style="border:none;padding:0px;color:gray;"><font color=red><?php echo $_smarty_tpl->tpl_vars['items']->value['shopps'];?>
</font>元</td>
		            		 		   </tr>
		            		 		<?php }?>
		            		 	 
		            		 		<?php if ($_smarty_tpl->tpl_vars['items']->value['scoredown']>0){?>
		            		   	<tr style="height:20px;line-height:20px;">
		            		 		  <td style="border:none;padding:0px;color:gray;" width="100px;">积分低扣</td>
		            		 		  <td style="border:none;padding:0px;color:gray;"><font color=red>-<?php echo $_smarty_tpl->tpl_vars['items']->value['scoredown']/$_smarty_tpl->tpl_vars['scoretocost']->value;?>
</font>元,<?php echo $_smarty_tpl->tpl_vars['items']->value['scoredown'];?>
积分,比例：<?php echo $_smarty_tpl->tpl_vars['scoretocost']->value;?>
:1</td>
		            		 		   </tr>
		            		 		<?php }?>
		            		 		<?php if ($_smarty_tpl->tpl_vars['items']->value['yhjcost']>0){?>
		            		   	<tr style="height:20px;line-height:20px;">
		            		 		  <td style="border:none;padding:0px;color:gray;" width="100px;">优惠券低扣</td>
		            		 		  <td style="border:none;padding:0px;color:gray;"><font color=red>-<?php echo $_smarty_tpl->tpl_vars['items']->value['yhjcost'];?>
</font>元</td>
		            		 		   </tr>
		            		 		<?php }?>
		            		 		<?php if ($_smarty_tpl->tpl_vars['items']->value['cxcost']>0){?>
		            		   	<tr style="height:20px;line-height:20px;">
		            		 		  <td style="border:none;padding:0px;color:gray;" width="100px;">店铺促销减金额</td>
		            		 		  <td style="border:none;padding:0px;color:gray;"><font color=red>-<?php echo $_smarty_tpl->tpl_vars['items']->value['cxcost'];?>
</font>元</td>
		            		 		   </tr>
		            		 		<?php }?>
		            		 		<?php if ($_smarty_tpl->tpl_vars['items']->value['bagcost']>0){?>
		            		   	<tr style="height:20px;line-height:20px;">
		            		 		  <td style="border:none;padding:0px;color:gray;" width="100px;">打包费</td>
		            		 		  <td style="border:none;padding:0px;color:gray;"><font color=red><?php echo $_smarty_tpl->tpl_vars['items']->value['bagcost'];?>
</font>元</td>
		            		 		   </tr>
		            		 		   
		            		 		<?php }?>
		            		 		<tr style="height:20px;line-height:20px;">
		            		 		  <td style="border:none;padding:0px;color:gray;" width="100px;">应收</td>
		            		 		  <td style="border:none;padding:0px;color:gray;"><font color=red><?php echo $_smarty_tpl->tpl_vars['items']->value['allcost'];?>
</font>元 </td>
		            		 	   </tr>
		            		 	   <?php if (!empty($_smarty_tpl->tpl_vars['items']->value['content'])){?>
		            		 		<tr style="height:20px;line-height:20px;">
		            		 		  <td style="border:none;padding:0px;color:gray;" width="100px;">备注</td>
		            		 		  <td style="border:none;padding:0px;color:gray;"><?php echo $_smarty_tpl->tpl_vars['items']->value['content'];?>
</td>
		            		 	   </tr> 
		            		 	   <?php }?>
		            		 	   <?php if (!empty($_smarty_tpl->tpl_vars['items']->value['othertext'])){?>
		            		 		<tr style="height:20px;line-height:20px;" valign=top>
		            		 		  <td style="border:none;padding:0px;color:gray;" width="100px;">其他说明</td> 
		            		 		  <td style="border:none;padding:0px;color:gray;">
		            		 		  	<?php $_smarty_tpl->tpl_vars['showother'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['items']->value['othertext']), null, 0);?>   
		            		 		  	 <?php  $_smarty_tpl->tpl_vars['itc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itc']->_loop = false;
 $_smarty_tpl->tpl_vars['mytest'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['showother']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itc']->key => $_smarty_tpl->tpl_vars['itc']->value){
$_smarty_tpl->tpl_vars['itc']->_loop = true;
 $_smarty_tpl->tpl_vars['mytest']->value = $_smarty_tpl->tpl_vars['itc']->key;
?>
		            		 		  	  <?php echo $_smarty_tpl->tpl_vars['mytest']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['itc']->value;?>
，
		            		 		  	 <?php } ?>
		            		 		  	</td>
		            		 	   </tr> 
		            		 	   <?php }?>
		            		 </table> 
		            		 
		            		</td>
		            </tr>
		             <?php }?>
		            <tr >
		              <td colspan="6" style="text-align:left;" class="order_control"> 
		              	<?php if ($_smarty_tpl->tpl_vars['items']->value['status']==0){?> 
		              	<a onclick="unorder(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['items']->value['dno'];?>
);" href="#">关闭订单</a>    
		              	  <?php if ($_smarty_tpl->tpl_vars['items']->value['paytype']=='0'){?><a onclick="return remind(this);" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/order/module/ordercontrol/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])."/type/pass/datatype/json"),$_smarty_tpl);?>
">通过审核</a>     <?php }?>
		              	<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['items']->value['is_goshop']!=1){?>
		              	<?php if ($_smarty_tpl->tpl_vars['items']->value['status']==1){?>
		              	 	<a onclick="unorder(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['items']->value['dno'];?>
);" href="javascript:void(0);">关闭订单</a>  
		              	    <a onclick="return remind(this);" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/order/module/ordercontrol/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])."/type/send/datatype/json"),$_smarty_tpl);?>
">配送发货</a>     
		              	<?php }?>
		              	<?php if ($_smarty_tpl->tpl_vars['items']->value['status']==2){?>
		              	  	<a onclick="unorder(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['items']->value['dno'];?>
);" href="javascript:void(0);">关闭订单</a>  
		              	    <a onclick="return remind(this);" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/order/module/ordercontrol/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])."/type/over/datatype/json"),$_smarty_tpl);?>
">完成订单</a>     
		              	<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['items']->value['status']==3){?>
								<font color=#FBA101><?php if ($_smarty_tpl->tpl_vars['items']->value['is_acceptorder']==1){?>用户已确认收货<?php }else{ ?>用户未确认收货<?php }?></font>
						<?php }?>
			<?php }else{ ?>
				<?php if ($_smarty_tpl->tpl_vars['items']->value['is_make']<2){?>
			
					<?php if ($_smarty_tpl->tpl_vars['items']->value['status']==1||$_smarty_tpl->tpl_vars['items']->value['status']==2){?>
								<a onclick="unorder(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['items']->value['dno'];?>
);" href="javascript:void(0);">关闭订单</a>  
								<a onclick="return remind(this);" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/order/module/ordercontrol/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])."/type/over/datatype/json"),$_smarty_tpl);?>
">完成订单</a> 
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['items']->value['status']==3){?>
								<font color=#FBA101><?php if ($_smarty_tpl->tpl_vars['items']->value['is_acceptorder']==1){?>用户已确认收货<?php }else{ ?>用户未确认收货<?php }?></font>
					 <?php }?>
					
					
				<?php }else{ ?>
					<a onclick="return remind(this);" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/order/module/ordercontrol/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])."/type/del/datatype/json"),$_smarty_tpl);?>
">删除</a>  

				<?php }?>
			
			
			<?php }?>
		              	<?php if ($_smarty_tpl->tpl_vars['items']->value['status']==4||$_smarty_tpl->tpl_vars['items']->value['status']==5){?>
		              	 <a onclick="return remind(this);" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/order/module/ordercontrol/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])."/type/del/datatype/json"),$_smarty_tpl);?>
">删除</a>  
		              	<?php }?>
		              	<a href="javascript:void(0);"  onclick="printorder(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
,0);">A4打印订单</a>	
							<a href="javascript:void(0);"  onclick="printorder(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
,1);">小票打印订单</a>	
		              	<?php if ($_smarty_tpl->tpl_vars['items']->value['wxstatus']==1){?>
		              	商家已确认订单
		              	<?php }elseif($_smarty_tpl->tpl_vars['items']->value['wxstatus']==2){?>
		              	商家需要取消此订单
		              	<?php }?>
		              	<?php if ($_smarty_tpl->tpl_vars['items']->value['shoptype']==100){?>
								<?php if (!empty($_smarty_tpl->tpl_vars['items']->value['psusername'])){?><?php echo $_smarty_tpl->tpl_vars['items']->value['psusername'];?>
<?php }else{ ?><a onclick="psorder(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['items']->value['dno'];?>
)" href="javascript:void(0);">选择配送员</a>   <?php }?>
		              	<?php }?>
		              	   下单IP：<?php echo $_smarty_tpl->tpl_vars['items']->value['ipaddress'];?>
  <?php if ($_smarty_tpl->tpl_vars['items']->value['is_print']==1){?>店铺已打印<?php }?>  <?php if (empty($_smarty_tpl->tpl_vars['items']->value['is_make'])){?>商家未确认是否制作<?php }elseif($_smarty_tpl->tpl_vars['items']->value['is_make']==1){?>商家确认制作<?php }else{ ?>商家不制作，请取消此订单<?php }?>
		              

					  
	<?php if ($_smarty_tpl->tpl_vars['items']->value['is_reback']==2){?><font color=blue>已退款成功 <input type="button" onclick="showqzdrawbutton(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);" value="查看退款记录" class="button"></font><?php }?>						  
	<?php if ($_smarty_tpl->tpl_vars['items']->value['is_reback']==3){?><font color=blue>拒绝退款 <input type="button" onclick="showqzdrawbutton(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);" value="查看退款记录" class="button"> </font><?php }?>						  
 


					  </td>
		            </tr>     
		            </table> 
					
					<?php }else{ ?>
						
	 <table class="table table-bordered" width=96% style="border-bottom: 1px solid #F8644B;font-size:12px;margin-top:5px;text-align:left;margin-left:2%;" id="order_area_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" onMouseover="colorred(this);" onMouseout="tcolorred(this);">					
					
		  <tr>
		             	<td colspan="2" style="text-align:left;">单号：<?php echo $_smarty_tpl->tpl_vars['items']->value['dno'];?>
<font color=red>跑腿<?php if ($_smarty_tpl->tpl_vars['items']->value['pttype']==1){?>【帮我送】<?php }?><?php if ($_smarty_tpl->tpl_vars['items']->value['pttype']==2){?>【帮我买】<?php }?></font></td>
		             	<td colspan="2" style="text-align:left;">创建时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['addtime'],"%Y-%m-%d %H:%M:%S");?>
</td>
		             	<td colspan="2" style="text-align:left;">订单状态: <font color=blue> <font color=blue><?php echo $_smarty_tpl->tpl_vars['buyerstatus']->value[$_smarty_tpl->tpl_vars['items']->value['status']];?>
</font>
                    
						</font></td>
		            </tr>
				 
		             <tr style="height:20px;line-height:20px;">
					 <td colspan="2" style="text-align:left;"><?php if ($_smarty_tpl->tpl_vars['items']->value['pttype']==1){?>取货时间<?php }?><?php if ($_smarty_tpl->tpl_vars['items']->value['pttype']==2){?>收货时间<?php }?>：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['posttime'],"%Y-%m-%d");?>
 <?php echo $_smarty_tpl->tpl_vars['items']->value['postdate'];?>
</td>
		             	<td colspan="2" style="text-align:left;">支付方式：<font color=red><?php echo (($tmp = @$_smarty_tpl->tpl_vars['paytypearr']->value[$_smarty_tpl->tpl_vars['items']->value['paytype']])===null||$tmp==='' ? '未定义' : $tmp);?>
<?php if (!empty($_smarty_tpl->tpl_vars['items']->value['paytype_name'])){?>(<?php echo $_smarty_tpl->tpl_vars['payway']->value[$_smarty_tpl->tpl_vars['items']->value['paytype_name']];?>
)<?php }?></font></td>
		             	<td colspan="2" style="text-align:left;">支付状态：<?php if ($_smarty_tpl->tpl_vars['items']->value['paystatus']==1){?>已付<?php }else{ ?>未付<?php }?><font color=red><?php echo $_smarty_tpl->tpl_vars['backarray']->value[$_smarty_tpl->tpl_vars['items']->value['is_reback']];?>
</font></td>
		            </tr>
		              <tr style="height:20px;line-height:20px;">
		             	<td colspan="2" style="text-align:left;">取货地址：<?php echo $_smarty_tpl->tpl_vars['items']->value['shopaddress'];?>
</td>
		             	<td colspan="2" style="text-align:left;">收货地址：<?php echo $_smarty_tpl->tpl_vars['items']->value['buyeraddress'];?>
</td>
		             	
		            </tr>
				<tr style="height:20px;line-height:20px;">
		             <?php if ($_smarty_tpl->tpl_vars['items']->value['pttype']==1){?>	<td colspan="2" style="text-align:left;">取货电话: <?php echo $_smarty_tpl->tpl_vars['items']->value['shopphone'];?>
</td> <?php }?>
		             	<td colspan="2" style="text-align:left;">收货电话: <?php echo $_smarty_tpl->tpl_vars['items']->value['buyerphone'];?>
</td> 
		             	<td colspan="2" style="text-align:left;">联系人: <?php echo $_smarty_tpl->tpl_vars['items']->value['buyername'];?>
</td> 
		            </tr>
					 
					  <tr style="height:20px;line-height:20px;">
		             	<td colspan="2" style="text-align:left;">总重量：<?php echo $_smarty_tpl->tpl_vars['items']->value['ptkg'];?>
公斤</td>
		             	<td colspan="2" style="text-align:left;">距离: <?php echo $_smarty_tpl->tpl_vars['items']->value['ptkm'];?>
千米</td> 
		            </tr>
					 	 
				<tr style="height:20px;line-height:20px;">
						<td colspan="2" style="text-align:left;">公斤金额：<?php echo $_smarty_tpl->tpl_vars['items']->value['allkgcost'];?>
元</td>
						<td colspan="2" style="text-align:left;">千米金额: <?php echo $_smarty_tpl->tpl_vars['items']->value['allkmcost'];?>
元</td>
						<?php if ($_smarty_tpl->tpl_vars['items']->value['farecost']!=0){?><td colspan="2" style="text-align:left;color:red;">小费: <?php echo $_smarty_tpl->tpl_vars['items']->value['farecost'];?>
元</td><?php }?>
 		             	<td colspan="2" style="text-align:left;">里程总金额：<?php echo $_smarty_tpl->tpl_vars['items']->value['allcost'];?>
元</td>
 		            </tr>
					 
		            <tr style="height:20px;line-height:20px;">
		             	   	<td colspan="2" style="text-align:left;">下单来源: <?php echo $_smarty_tpl->tpl_vars['ordertypearr']->value[$_smarty_tpl->tpl_vars['items']->value['ordertype']];?>
</td>
		             	<td colspan="2" style="text-align:left;">订单类型：跑腿<?php if ($_smarty_tpl->tpl_vars['items']->value['pttype']==1){?>【帮我送】<?php }?><?php if ($_smarty_tpl->tpl_vars['items']->value['pttype']==2){?>【帮我买】<?php }?></td>   
		             	<td colspan="2" style="text-align:left;">ip信息：<?php echo $_smarty_tpl->tpl_vars['items']->value['ipaddress'];?>
</td> 
		            </tr>
                <tr style="height:20px;line-height:20px;">
		              
		             	<td colspan="6" style="text-align:left;">跑腿需求：<?php echo $_smarty_tpl->tpl_vars['items']->value['content'];?>
</td> 
		            </tr>
	 
		     <tr >
		              <td colspan="6" style="text-align:left;" class="order_control"> 
		            
					
						<?php if ($_smarty_tpl->tpl_vars['items']->value['status']==0){?> 
		              	<a onclick="unorder(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['items']->value['dno'];?>
);" href="#">关闭订单</a>    
		              	  <?php if ($_smarty_tpl->tpl_vars['items']->value['paytype']=='0'){?><a onclick="return remind(this);" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/order/module/ordercontrol/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])."/type/pass/datatype/json"),$_smarty_tpl);?>
">通过审核</a>     <?php }?>
		              	<?php }?>
		              	<?php if ($_smarty_tpl->tpl_vars['items']->value['status']==1){?>
		              	 	<a onclick="unorder(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['items']->value['dno'];?>
);" href="javascript:void(0);">关闭订单</a>  
		              	    <a onclick="return remind(this);" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/order/module/ordercontrol/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])."/type/send/datatype/json"),$_smarty_tpl);?>
">配送发货</a>     
		              	<?php }?>
		              	<?php if ($_smarty_tpl->tpl_vars['items']->value['status']==2){?>
		              	  	<a onclick="unorder(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['items']->value['dno'];?>
);" href="javascript:void(0);">关闭订单</a>  
		              	    <a onclick="return remind(this);" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/order/module/ordercontrol/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])."/type/over/datatype/json"),$_smarty_tpl);?>
">完成订单</a>     
		              	<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['items']->value['status']==3){?>
								<font color=#FBA101><?php if ($_smarty_tpl->tpl_vars['items']->value['is_acceptorder']==1){?>用户已确认收货<?php }else{ ?>用户未确认收货<?php }?></font>
						<?php }?>
		              	<?php if ($_smarty_tpl->tpl_vars['items']->value['status']==4||$_smarty_tpl->tpl_vars['items']->value['status']==5){?>
		              	 <a onclick="return remind(this);" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/order/module/ordercontrol/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])."/type/del/datatype/json"),$_smarty_tpl);?>
">删除</a>  
		              	<?php }?>
					
						
							     	<a href="javascript:void(0);"  onclick="paotuiprintorder(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
,0);">A4打印订单</a>	
							<a href="javascript:void(0);"  onclick="paotuiprintorder(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
,1);">小票打印订单</a>


	<?php if ($_smarty_tpl->tpl_vars['items']->value['shoptype']==100){?>
								<?php if (!empty($_smarty_tpl->tpl_vars['items']->value['psusername'])){?><?php echo $_smarty_tpl->tpl_vars['items']->value['psusername'];?>
<?php }else{ ?><a onclick="psorder(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['items']->value['dno'];?>
)" href="javascript:void(0);">选择配送员</a>   <?php }?>
		              	<?php }?>
		              	   下单IP：<?php echo $_smarty_tpl->tpl_vars['items']->value['ipaddress'];?>
  						

					</td>
		            </tr> 
	 
	 
	 </table>
		<?php }?>
		          <?php } ?>
		          
		       
                </form>
 
                <div class="blank20"></div>

              </div>

            </div>

          </div>
				
				
				
				
				
			</div>
			<div class="pagingCon">
 				<ul>
					<?php echo $_smarty_tpl->tpl_vars['pagecontent']->value;?>

				</ul>
 			</div>
		</div>
	</div>
</div>
   
  <div id="print_area" style="display:none;font-size:40px;"></div>
  <style>
 #tagscontent td{line-height: 35px;
    font-size: 14px;
    color: #333333;
    white-space: nowrap;
    text-overflow: ellipsis;
     border-bottom: 1px dashed #cccccc;
    overflow: hidden;}
 </style>
<script type="text/javascript">
   function colorred(obj){
   	$(obj).css('background','#f3fbff'); 
   }
   function tcolorred(obj){
   	$(obj).css('background','');
   }
    function closeddraw(){
   
	   window.location.reload();
   
   }
   function unorder(orderid,dno)
	 { 
	 	   var dialog =  art.dialog({
	 	   	id:'coslid',
        title:'取消订单'+dno,
           content: '<div>关闭订单理由</div> <div><textarea name="reason" id="reason" style="height:40px;"></textarea></div><div class="btn_wuxiao hc_listfoods_menus_foods hcl_food_lists_cont_div_order2 hcl_food_lists_cont_div_order4 hc_listfoods_menus_foods2" style="width:65px;float:left;" onclick="sureclose('+orderid+');">提交关闭</div>'
        });
	 }
	 
	 function sureclose(orderid)
	 {
	 	  var reasons = $('#reason').val();
	 	  if(reasons == undefined || reasons == '')
	 	  {
	 	  	alert('关闭理由不能为空');
	 	  }else{ //{'orderid':orderid,'reason':reasons}
	 	    var url = siteurl+'/index.php?ctrl=areaadminpage&action=order&module=ordercontrol&type=un&id='+orderid+'&reasons='+reasons+'&datatype=json&random=@random@';
	 	    $.ajax({
     type: 'get',
     async:false, 
     url: url.replace('@random@', 1+Math.round(Math.random()*1000)), 
     dataType: 'json',success: function(content) {  
     	if(content.error == false){
     		diasucces('操作成功','');
     	}else{
     		if(content.error == true)
     		{
     			diaerror(content.msg); 
     		}else{
     			diaerror(content); 
     		}
     	} 
		},
    error: function(content) { 
    	diaerror('数据获取失败'); 
	  }
   });   
	 	 }
	 }
	 function selectdo(msg){
		diasucces(msg,'');
}
function openlink(newlinkes){
					window.location.href=newlinkes;
}
function dofirch(obj){
	gorefresh(); 
}
  function printorder(orderid,printtype)   //正常订单
	{
	    if(printtype == 1){//小票打印
			mydialog = art.dialog.open(siteurl+'/index.php?ctrl=areaadminpage&action=order&module=orderprint&orderid='+orderid+'&printtype='+printtype,{height:'600px',width:'400px'},false); 
		 }else{
		   mydialog = art.dialog.open(siteurl+'/index.php?ctrl=areaadminpage&action=order&module=orderprint&orderid='+orderid+'&printtype='+printtype,{height:'690px',width:'794px'},false);  
		 }
	   /*
		$('#print_area').html('');
	 $('#order_area_'+orderid).clone().appendTo($('#print_area'));
	 $("#print_area").find('.order_control').remove();
	  $("#print_area").printArea();  */ 
  }
  
 function paotuiprintorder(orderid,printtype)		// 跑腿
	{
	    if(printtype == 1){//小票打印
			mydialog = art.dialog.open(siteurl+'/index.php?ctrl=areaadminpage&action=order&module=paotuiorderprint&orderid='+orderid+'&printtype='+printtype,{height:'600px',width:'400px'},false); 
		 }else{
		   mydialog = art.dialog.open(siteurl+'/index.php?ctrl=areaadminpage&action=order&module=paotuiorderprint&orderid='+orderid+'&printtype='+printtype,{height:'690px',width:'794px'},false);  
		 }
	   /*
		$('#print_area').html('');
	 $('#order_area_'+orderid).clone().appendTo($('#print_area'));
	 $("#print_area").find('.order_control').remove();
	  $("#print_area").printArea();  */ 
  }  
  
 

 function showqzdrawbutton(orderid)		// 查看退款记录
	{
	  
			mydialog = art.dialog.open(siteurl+'/index.php?ctrl=areaadminpage&action=order&module=showdraworderlog&orderid='+orderid,{height:'400px',width:'600px'},false); 
		 
  }  
  
  function print_all_area()
  {
  	$('#print_area').html($('#all_area').html());
	  $("#print_area").find('.order_control').remove();
	  $("#print_area").printArea();
  }
  function doautodel(){
  	 if(confirm('确认手动操作?\n 操作后将删除待审核和已关闭订单,\n 也将根据设置的自动发货天数自动发货和完成')){
  	 	var dourl = '<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/order/module/autodel"),$_smarty_tpl);?>
';
  	 	window.location.href= dourl;
  	 	
  	} 
  }
   var mydialog;
	 function psorder(orderid,dno){
	   //审核订单
	   mydialog = art.dialog.open(siteurl+'/index.php?ctrl=areaadminpage&action=psuser&module=selectps&orderid='+orderid,{height:'550px',width:'850px'},false); 
	 	 mydialog.title('设置配送员'); 
	 	  
	 }
 </script>

   	         
  
</body>
</html>





<?php }} ?>