<?php /* Smarty version Smarty-3.1.10, created on 2017-09-21 01:21:23
         compiled from "F:\www\YSH\templates\areaadminpage\shop\adminshoplist.html" */ ?>
<?php /*%%SmartyHeaderCode:2360859c2a393f3de97-83007443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6cbe5c0d44bec95b22007fe6f8801e6eb72adfb' => 
    array (
      0 => 'F:\\www\\YSH\\templates\\areaadminpage\\shop\\adminshoplist.html',
      1 => 1483335036,
      2 => 'file',
    ),
    '608a39e6d4c869a650088e6affe011c71fddff7d' => 
    array (
      0 => 'F:\\www\\YSH\\templates\\areaadminpage\\public\\admin.html',
      1 => 1483416256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2360859c2a393f3de97-83007443',
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
  'unifunc' => 'content_59c2a3946e9142_37937917',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2a3946e9142_37937917')) {function content_59c2a3946e9142_37937917($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include 'F:\\www\\YSH\\lib\\Smarty\\libs\\plugins\\function.load_data.php';
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

<script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/plugins/iframeTools.js"></script>
 
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
					<li class="maShClaA"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/shop/module/adminshoplist"),$_smarty_tpl);?>
">店铺列表</a></li>
					<li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/shop/module/addshop"),$_smarty_tpl);?>
">添加店铺</a></li>
					<li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/shop/module/adoptshop"),$_smarty_tpl);?>
">待审核店铺</a></li>
				</ul>
			</div>
			<div class="managShopSeaBox">
				<form method="get" name="form1" action="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/shop/module/adminshoplist"),$_smarty_tpl);?>
">
					<div class="managShopSeaL">
						<input type="hidden" name="ctrl" value="areaadminpage">
					   <input type="hidden" name="action" value="shop">
					   <input type="hidden" name="module" value="adminshoplist">
						<ul>
							<li><span>店铺名：</span><input type="text" name="shopname" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shopname']->value)===null||$tmp==='' ? '' : $tmp);?>
"> </li>
							<li><span>用户名：</span><input type="text" name="username" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['username']->value)===null||$tmp==='' ? '' : $tmp);?>
"> </li>
							<li><span>手机：</span><input type="text" name="phone" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['phone']->value)===null||$tmp==='' ? '' : $tmp);?>
">
							<input type="submit" value="提交查询" class="managBut"></li>
						</ul>
					</div>
				</form>
			</div>
			<div class="managShopList">
			 <form method="post" action="" onsubmit="return remind();"  id="delform">
				<table>
					<thead>
						<tr>
							<td width="36">
								<div class="managShopChek">
									<input type="checkbox" id="chkall" name="chkall" onclick="checkall()">
								</div>
							</td>
							<td width="190">店铺名称</td>
							<td width="104">入驻资料</td>
							<td width="104">会员名称</td>
							<td width="146">设置店铺标签</td>
							<td width="42">营业</td>
							<td width="168">佣金/结算额</td>
							<td width="54">排序</td>
							<td width="80">有效时间</td>
							<td width="96">配送设置</td>
							<td width="136">操作</td>
						</tr>
					</thead>
					<tbody>
					
					<?php echo smarty_function_load_data(array('assign'=>"list",'table'=>"shop",'showpage'=>"true",'where'=>"is_pass='1' ".((string)$_smarty_tpl->tpl_vars['where']->value),'orderby'=>" sort asc "),$_smarty_tpl);?>

					<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?> 
						<tr  onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
							<td>
								<div class="managShopChek">
									<input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"> 
								</div>
							</td>
							<td><?php echo $_smarty_tpl->tpl_vars['items']->value['shopname'];?>
[<span><?php echo $_smarty_tpl->tpl_vars['shoptype']->value[$_smarty_tpl->tpl_vars['items']->value['shoptype']];?>
</span>]</td>
							<td><a  onclick="showshopdetail('<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['items']->value['shopname'];?>
');"  href="javascript:;">查看详情</a></td>
							<td><?php echo smarty_function_load_data(array('assign'=>"userinfo",'table'=>"member",'type'=>"one",'where'=>"uid='".((string)$_smarty_tpl->tpl_vars['items']->value['uid'])."'",'fileds'=>"username,shopcost,backacount"),$_smarty_tpl);?>
 
                          	<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['username'];?>
 </td>
							<td><a class="manMargR"  onclick="starttask('<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['items']->value['shopname'];?>
');"  href="javascript:;">设置</a>
							<a  onclick="setps('<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['items']->value['shopname'];?>
');" href="javascript:;">订单通知</a></td>
							<td><?php if ($_smarty_tpl->tpl_vars['items']->value['is_open']==1){?>是<?php }else{ ?>否<?php }?></td>
							<td><a href="#" onclick="addcost(<?php echo $_smarty_tpl->tpl_vars['items']->value['uid'];?>
);">增</a><?php if ($_smarty_tpl->tpl_vars['items']->value['yjin']=='0'){?>默认<?php echo $_smarty_tpl->tpl_vars['yjin']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['items']->value['yjin'];?>
<?php }?>/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['userinfo']->value['shopcost'])===null||$tmp==='' ? '0' : $tmp);?>

							<a class="manMargL" onclick="setyjin('<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['items']->value['shopname'];?>
','<?php echo $_smarty_tpl->tpl_vars['items']->value['yjin'];?>
','<?php echo $_smarty_tpl->tpl_vars['yjin']->value;?>
','<?php echo (($tmp = @$_smarty_tpl->tpl_vars['userinfo']->value['backacount'])===null||$tmp==='' ? '' : $tmp);?>
');" href="#">设置</a></td>
 							<td><input  name="pxinput" data="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['sort'];?>
"  type="text" value="1" class="managShopInp"></td>
							<td><a href="#" onclick="doshow('<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
','<?php echo intval(($_smarty_tpl->tpl_vars['items']->value['endtime']-time())/86400);?>
');"> <?php if ($_smarty_tpl->tpl_vars['items']->value['endtime']>0){?>    <?php echo intval(($_smarty_tpl->tpl_vars['items']->value['endtime']-time())/86400);?>
    <?php }else{ ?>设置 <?php }?></a></td>
							<td><a onclick="psset('<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['items']->value['shopname'];?>
');" href="javascript:;">配送设置</a></td>
							<td><a class="getInto"  target="_blank" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/shop/module/resetdefualt/shopid/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
">进入商家后台</a></td>
						</tr>
						<?php } ?>  
						 
						 
					</tbody>
				</table>
				
				</form>
			
			</div>
			<div class="pagingCon">
 				<ul>
					<?php echo $_smarty_tpl->tpl_vars['list']->value['pagecontent'];?>

				</ul>
 			</div>
		</div>
	</div>
</div>
 
 
 
<script>
	 	var dialogs ;
	 function starttask(shopid,shopname)
	 {
	 	 dialogs = art.dialog.open(siteurl+'/index.php?ctrl=areaadminpage&action=shop&module=shopbiaoqian&id='+shopid,{height:'380px',width:'500px'},false); 
		 dialogs.title('设置');
	 }
	  function showshopdetail(shopid,shopname)
	 {
	 	 dialogs = art.dialog.open(siteurl+'/index.php?ctrl=areaadminpage&action=shop&module=showshopdetail&id='+shopid,{height:'402px',width:'480px'},false);
	 	 dialogs.title('查看【'+shopname+'】入驻资料'); 
	 }
function uploadsucess(linkurl){
 	dialogs.close(); 
 	window.location.reload(); 
}
function uploaderror(msg){
	 alert(msg); 
}
function addcost(uid){
	 
	  var	htmls = '<form method="post" id="subyjxx" action="#" > ';
	    htmls += ' <div class="popLayCon"> ';
		htmls += '	<div class="popLayBox">';
		htmls += '		<div class="popLayOrdCon">';
		htmls += '			<div class="popLayIncr">';
		htmls += '				<ul>';
		htmls += '					<li><span>充值金额：</span><input name="cost" type="text" value="" class="w98"><b>元</b></li>';
		htmls += '				</ul>';
		htmls += '			</div>';
		htmls += '<input type="hidden" value="'+uid+'" name="uid"> ';
		htmls += '			<div class="popLayOrdBut"><input type="button" id="buttonsubyjcc"  value="保存设置"></div>';
		htmls += '		</div>';
		htmls += '	</div>';
		htmls += ' </div>'; 
		htmls += '</form>';
	  art.dialog({
		id: 'testID4',
		title:'为店铺充值',
		content: htmls
	  });
}
$('#buttonsubyjcc').live('click',function(){ 
	$.post('<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/order/module/adminpay/datatype/json"),$_smarty_tpl);?>
', $('#subyjxx').serialize() ,function (data, textStatus){  
			if(data.error == false){
     	  	diasucces('操作成功','');
     	}else{
     		if(data.error == true)
     		{
     			diaerror(data.msg); 
     		}else{
     			diaerror(data); 
     		}
     	} 
	 }, 'json'); 
});

function setyjin(shopid,shopname,myongjin,defaultyj,yinhang)
{
	var mytj = myongjin==0?defaultyj:myongjin;
  var	htmls = '<form method="post" id="subyj" action="#">';
		htmls += '  <div class="popLayCon  ">';
		htmls += '	<div class="popLayBox">';
		htmls += '		<div class="popLayOrdCon">';
		htmls += '			<div class="popLayIncr">';
		htmls += '				<ul>';
		htmls += '					<li><span>佣金比例：</span><input type="text"  name="yjin" value="'+mytj+'" class="w78"></li>';
		htmls += '					<li><span>提现账号：</span><input type="text"  name="backacount" value="'+yinhang+'" class="w178"></li>';
		htmls += '				</ul>';
		htmls += '			</div>';
		htmls += '			<div class="popLayOrdBut"><input type="button" id="buttonsubyj" value="保存设置"></div>';
		htmls += '		</div>';
		htmls += '	</div>';
		htmls += '</div>';
 
	htmls += '<input type="hidden" value="'+shopid+'" name="shopid"> ';
	htmls += '</form>';
  art.dialog({
    id: 'testID4',
    title:'设置'+shopname+'佣金',
    content: htmls
  });
} 
$('#buttonsubyj').live('click',function(){ 
	$.post('<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/shop/module/savesetshopyjin/datatype/json"),$_smarty_tpl);?>
', $('#subyj').serialize() ,function (data, textStatus){  
			if(data.error == false){
     	  	diasucces('操作成功','');
     	}else{
     		if(data.error == true)
     		{
     			diaerror(data.msg); 
     		}else{
     			diaerror(data); 
     		}
     	} 
	 }, 'json'); 
});
$("input[name='pxinput']").live("change", function() {   
	$.post('<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/shop/module/adminshoppx/datatype/json"),$_smarty_tpl);?>
', {'id':$(this).attr('data'),'pxid':$(this).val()},function (data, textStatus){  
			if(data.error == false){
     		diasucces("保存成功！");
     	}else{
     		if(data.error == true)
     		{
     			diaerror(data.msg); 
     		}else{
     			diaerror(data); 
     		}
     	} 
	 }, 'json'); 
});
function doshow(shopid,shoptian){
var	htmls = '<form method="post" id="doshwoform" action="#" >';
	htmls += '	<div class="popLayCon">			 ';
	htmls += '		<div class="popLayBox">';
	htmls += '			<div class="popLayOrdCon">';
	htmls += '				<div class="popLayIncr">';
	htmls += '					<ul>';
	htmls += '						<li><span>有效天数：</span><input type="text"  name="mysetclosetime" value="'+shoptian+'"  class="w98"><b>天</b></li>';
	htmls += '					</ul>';
	htmls += '				</div>';
	htmls += '				<div class="popLayOrdBut"><input type="button"  id="dosetclosetime" value="保存设置"></div>';
	htmls += '			</div>';
	htmls += '		</div>';
	htmls += '	</div>';
  htmls += '<input type="hidden" value="'+shopid+'" name="shopid"> ';
	htmls += '</form>';
  art.dialog({
    id: 'testID3',
    title:'设置开店有效时间',
    content: htmls
  });
}
$('#dosetclosetime').live('click',function(){ 
	$.post('<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/shop/module/shopactivetime/datatype/json"),$_smarty_tpl);?>
', $('#doshwoform').serialize() ,function (data, textStatus){  
			if(data.error == false){
     		diasucces(data.msg,'');
     	}else{
     		if(data.error == true)
     		{
     			diaerror(data.msg); 
     		}else{
     			diaerror(data); 
     		}
     	} 
	 }, 'json'); 
});
function setps(shopid,shopname)
{
	 	 dialogs = art.dialog.open(siteurl+'/index.php?ctrl=areaadminpage&action=shop&module=setnotice&shopid='+shopid,{height:'280px',width:'420px'},false);
		 dialogs.title('订单通知');		 
} 	
function psset(shopid,shopname){
	 dialogs = art.dialog.open(siteurl+'/index.php?ctrl=areaadminpage&action=area&module=setps&shopid='+shopid,{height:'450px',width:'600px'},false); 
	 dialogs.title('配送设置');		
} 
</script>
<!--newmain 结束-->

   	         
  
</body>
</html>





<?php }} ?>