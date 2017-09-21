<?php /* Smarty version Smarty-3.1.10, created on 2017-09-21 01:22:39
         compiled from "F:\www\YSH\templates\m7\shopcenter\shoporderlist.html" */ ?>
<?php /*%%SmartyHeaderCode:2829859c2a3df75dc51-76708033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb0018f17a42efca2965550d389c4e8433d4dd07' => 
    array (
      0 => 'F:\\www\\YSH\\templates\\m7\\shopcenter\\shoporderlist.html',
      1 => 1476339206,
      2 => 'file',
    ),
    '5cece2d36bc7421fffa87ec0ea408d10f00eba46' => 
    array (
      0 => 'F:\\www\\YSH\\templates\\m7\\public\\shopcenter.html',
      1 => 1483090790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2829859c2a3df75dc51-76708033',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tempdir' => 0,
    'sitename' => 0,
    'keywords' => 0,
    'description' => 0,
    'siteurl' => 0,
    'adminshopid' => 0,
    'shopinfo' => 0,
    'toplink' => 0,
    'items' => 0,
    'beian' => 0,
    'footerdata' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_59c2a3e12df371_39772250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2a3e12df371_39772250')) {function content_59c2a3e12df371_39772250($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include 'F:\\www\\YSH\\lib\\Smarty\\libs\\plugins\\function.load_data.php';
if (!is_callable('smarty_modifier_date_format')) include 'F:\\www\\YSH\\lib\\Smarty\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> 商家管理中心-<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
</title>
<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />  
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/css/commom.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/css/shangjiaAdmin.css" />

<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquerynew.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/allj.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/artDialog.js?skin=blue"></script>

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
  	var mynomenu='baseorder';
  	</script>
 
<script> 
	var siteurl = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
"; 
</script>
<!--[if lte IE 6]>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a');
        $('#footer').css('display','none');
    </script>
<![endif]--> 
</head>
<body> 
<?php echo smarty_function_load_data(array('assign'=>"shopinfo",'table'=>"shop",'where'=>"`id`=".((string)$_smarty_tpl->tpl_vars['adminshopid']->value),'type'=>"one"),$_smarty_tpl);?>
 
<div style="position: fixed;top: 0;left: 0;right: 0;bottom: 0;z-index: -1;background:url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/background.png);"></div>
<!---header start--->
	<div class="header">
    	<div class="top">
        	<div class="topLeft fl">
            	<ul class="fr">
                	<li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/useredit"),$_smarty_tpl);?>
">店铺管理</a></li> 
                    <li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shoporderlist"),$_smarty_tpl);?>
">订单管理</a></li>
                    <li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/fastfood"),$_smarty_tpl);?>
">快速下单</a></li>
                    <li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/draworderset"),$_smarty_tpl);?>
">退款订单管理</a></li>
 
                </ul>
                 <div class="cl"></div>
            </div>
            <div class="topRight fr">
            	
                    <span  style="color: #c7c7c7;font-size: 14px;padding: 5px;" onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/member/base"),$_smarty_tpl);?>
');" class="curbtn">会员中心 </span>
                    <span class="username curbtn" onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/member/loginout"),$_smarty_tpl);?>
');">退出<img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/usernameBg.png" /></span>
                 
                
            </div>
            <div class="cl"></div>
            
            
            <div class="shangjiaTop">
            	<div class="sjgl">
                	
                </div>
            	
            </div>
        </div>
    	
    </div>
    <!---header end--->
    <script>
	$(function(){
		var clientWidth = document.body.clientWidth;
		/*alert(clientWidth);*/
		if( clientWidth<=1347 ){
			
			$(".content").css("width","1240px");
			$(".conleft").removeClass("content_left");
			
		}
	});
</script>
 <!------以上是公共的头部部分------->
 
  <!---content start--->
	<div class="content">
   	 	<!---content left start--->
		<div class="conleft content_left fl" style="height:730px;">
        	<div class="nav" style="height:732px;">
            	<ul>
                	<li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/useredit"),$_smarty_tpl);?>
');" data="baseset"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/dpsz.png" /></div>
					<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/useredit"),$_smarty_tpl);?>
">店铺设置</a></li>
                    <li onclick="openlink('<?php if (empty($_smarty_tpl->tpl_vars['shopinfo']->value['shoptype'])){?><?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/goodslist"),$_smarty_tpl);?>
<?php }else{ ?><?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/marketgoodslist"),$_smarty_tpl);?>
<?php }?>');" data="basemenu"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/cdgl.png" /></div><a href="<?php if (empty($_smarty_tpl->tpl_vars['shopinfo']->value['shoptype'])){?><?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/goodslist"),$_smarty_tpl);?>
<?php }else{ ?><?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/marketgoodslist"),$_smarty_tpl);?>
<?php }?>">菜单管理</a></li>
                    <li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shoporderlist"),$_smarty_tpl);?>
');" data="baseorder"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/ddgl.png" /></div>
					<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shoporderlist"),$_smarty_tpl);?>
">订单管理</a></li>
                    <li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shoptotal"),$_smarty_tpl);?>
');" data="baseordertj"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/ddtj.png" /></div>
					<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shoptotal"),$_smarty_tpl);?>
">订单统计</a></li>
					
					<li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/setshophui"),$_smarty_tpl);?>
');" data="baseshorder">
					<div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/ddgl.png" /></div>
					<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/setshophui"),$_smarty_tpl);?>
">闪惠管理</a></li>
					
					
                    <li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/setshoparea"),$_smarty_tpl);?>
');" data="basearea"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/psqy.png" /></div>
					<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/setshoparea"),$_smarty_tpl);?>
">配送区域</a></li>
                    <li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/cxrule"),$_smarty_tpl);?>
');"  data="basecx"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/xxgz.png" /></div>
					<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/cxrule"),$_smarty_tpl);?>
">促销规则</a></li>
                    <li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shopask"),$_smarty_tpl);?>
');" data="baseask"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/lygl.png" /></div>
					<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shopask"),$_smarty_tpl);?>
">留言评价</a></li>
                    
                    
                </ul>
               
            </div>
        </div>	
       <!---content left end---> 
       
       
       
       
       
           
 
 
  <!---content right start--->
  <div class="conWaiSet fr">
    <div class="shopSetTop"> <span>订单查询</span> </div>
    <div class="selOrder">
      <div class="autoRe" id="showztai" udata="<?php echo $_smarty_tpl->tpl_vars['hidecount']->value;?>
"  data="20" > 自动刷新倒计时<span>0</span>秒 </div>  
      <div class="refresh_set">
        <div  class="refset" onclick="refreshorder();"> <img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/sdsx.png" /><span>手动刷新</span> </div>
        <div class="refset"> <img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/lstx.png" /><span>铃声提醒</span> </div>
        <div class="refset" id="startwave" 	 > <img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/start.png"  /><span>开启</span> </div>
        <div class="refset"  id="closetwave"  > <img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/close.png"/><span>关闭</span> </div>
       
      </div>
      <div class="cl"></div>
    </div>
    <div class="cl"></div>
    <script>
                	
				$(function(){
					$(".waimaiset .jbset").click(function(){
						$(this).css('background','#ec7501').siblings().css('background','');
						
					});	
					
				});
                </script>
    <form action="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shoporderlist"),$_smarty_tpl);?>
" method="post">
      <div class="order_search" style="height:auto;">
        <label class="chaxun">查询：</label>
        <label>
          <input type="radio" value="1" name="orderSource" <?php if ($_smarty_tpl->tpl_vars['orderSource']->value==1){?>checked<?php }?>  />
          网站订单</label>
        <label>
          <input type="radio" value="2" name="orderSource" <?php if ($_smarty_tpl->tpl_vars['orderSource']->value==2){?>checked<?php }?>  />
          电话订单</label>
        <label>
          <input type="radio" value="3" name="orderSource" <?php if ($_smarty_tpl->tpl_vars['orderSource']->value==3){?>checked<?php }?>  />
          待确认订单</label>
        <label>
          <input type="radio" value="4" name="orderSource" <?php if ($_smarty_tpl->tpl_vars['orderSource']->value==4){?>checked<?php }?>   />
          待发货订单</label>
        <label>
          <input type="radio" value="5" name="orderSource" <?php if ($_smarty_tpl->tpl_vars['orderSource']->value==5){?>checked<?php }?>   />
          已发货订单</label>
		  <br />
		  <label style="margin-left:60px;">
          <input type="radio" value="6" name="orderSource" <?php if ($_smarty_tpl->tpl_vars['orderSource']->value==6){?>checked<?php }?>   />
          退款待处理</label>
		  
		    <label>
          <input type="radio" value="7" name="orderSource" <?php if ($_smarty_tpl->tpl_vars['orderSource']->value==7){?>checked<?php }?>   />
          已退款</label>
		  
		    <label >
          <input type="radio" value="8" name="orderSource" <?php if ($_smarty_tpl->tpl_vars['orderSource']->value==8){?>checked<?php }?>   />
          已拒绝退款订单</label>
        <label  style="margin-left:100px;">选择日期
          <input class="xzrq" type="text" name="starttime" id="starttime" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['starttime']->value,"%Y-%m-%d");?>
"  onFocus="WdatePicker({isShowClear:false,readOnly:true});" />
        </label>
        <input class="searchBg" style="top:40px;" type="submit" name="" value="" />
      </div>
    </form>
    <div class="orderList">
    	  
      <div class="orderspan"> 共计<span class="numOrder"><?php echo $_smarty_tpl->tpl_vars['tongji']->value['shuliang'];?>
</span>张订单，成功订单金额<span class="seccost"><?php echo $_smarty_tpl->tpl_vars['tongji']->value['allcost'];?>
</span>元 </div>
      
      <div id="all_area">
      	<!--订单循环-->
       <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?>  
      <div class="singleOrder" id="order_area_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
">
        <div class="singleOrder_title">
          <div class="orderNum"> <span><?php echo $_smarty_tpl->tpl_vars['items']->value['daycode'];?>
</span> </div>
          <div class="order_xx"> <span style=" margin-left:26px;"><span class="oxx">订单号</span>：<?php echo $_smarty_tpl->tpl_vars['items']->value['dno'];?>

		  			<?php if ($_smarty_tpl->tpl_vars['items']->value['is_goshop']==1){?> <font color=red>预订<?php if ($_smarty_tpl->tpl_vars['orderinfo']->value['allcost']==0){?>座位<?php }else{ ?>座位和菜品<?php }?></font> <?php }?>

		  </span> <span style=" margin-left:30px;"><span class="oxx">下单时间</span>：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['addtime'],"%Y-%m-%d %H:%M:%S");?>
</span><span style=" margin-left:30px;">
		  <span class="oxx">状态</span>：
             <?php if ($_smarty_tpl->tpl_vars['items']->value['is_goshop']==1){?>
					 <font color=red> 
					
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
								
								商家已取消订单

							<?php }?>
					</font>
			 <?php }else{ ?>
					<?php if ($_smarty_tpl->tpl_vars['items']->value['is_reback']==0){?>
						<?php if ($_smarty_tpl->tpl_vars['items']->value['paytype']==1){?>
						      <?php if ($_smarty_tpl->tpl_vars['items']->value['status']==0){?>
							     待平台审核-<?php echo $_smarty_tpl->tpl_vars['buyerstatus']->value[$_smarty_tpl->tpl_vars['items']->value['status']];?>

							  <?php }elseif($_smarty_tpl->tpl_vars['items']->value['status']==1){?> 
								<?php if ($_smarty_tpl->tpl_vars['items']->value['is_make']==0){?>
								   待确认制作 
							   <?php }elseif($_smarty_tpl->tpl_vars['items']->value['is_make']==1){?>
								 <?php echo $_smarty_tpl->tpl_vars['buyerstatus']->value[$_smarty_tpl->tpl_vars['items']->value['status']];?>

								<?php }else{ ?>
								   取消制作-<?php echo $_smarty_tpl->tpl_vars['buyerstatus']->value[$_smarty_tpl->tpl_vars['items']->value['status']];?>

								<?php }?>	
							  <?php }elseif($_smarty_tpl->tpl_vars['items']->value['status']==2){?>
							    已发货待用户确认  
							  <?php }elseif($_smarty_tpl->tpl_vars['items']->value['status']==3){?>
							    已完成 
							  <?php }else{ ?>
							  订单取消 
							  <?php }?>
						<?php }else{ ?> 
						   
						   <?php if ($_smarty_tpl->tpl_vars['items']->value['status']==0){?>
							     待平台审核-<?php echo $_smarty_tpl->tpl_vars['buyerstatus']->value[$_smarty_tpl->tpl_vars['items']->value['status']];?>

							  <?php }elseif($_smarty_tpl->tpl_vars['items']->value['status']==1){?> 
								<?php if ($_smarty_tpl->tpl_vars['items']->value['is_make']==0){?>
								   待确认制作 
							   <?php }elseif($_smarty_tpl->tpl_vars['items']->value['is_make']==1){?>
								 <?php echo $_smarty_tpl->tpl_vars['buyerstatus']->value[$_smarty_tpl->tpl_vars['items']->value['status']];?>

								<?php }else{ ?>
								   商家已取消制作
								<?php }?>	
							  <?php }elseif($_smarty_tpl->tpl_vars['items']->value['status']==2){?>
							    已发货待用户确认  
							  <?php }elseif($_smarty_tpl->tpl_vars['items']->value['status']==3){?>
							    已完成 
							  <?php }else{ ?>
							  订单取消 
							  <?php }?>
						   
						   
						   
						   
						   
						   
						   
						   
						<?php }?>
					<?php }else{ ?>
						<font color=red>
							<?php if ($_smarty_tpl->tpl_vars['items']->value['is_reback']==1){?>已申请退款等待平台处理<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['items']->value['is_reback']==2){?>已退款<?php }?>
						</font>
					<?php }?>
          	<?php }?>
          	
          	
          	</span> </div>
          <div class="showorderdet curbtn" onclick="showdet('<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
',this);">＋</div>
        </div>
        <div class="order_details" id="order_det<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
">
		
		
			
			<?php if (!empty($_smarty_tpl->tpl_vars['items']->value['drawbacklog'])){?>
			
					<div>
			
			<h3>退款申请信息</h3>
				    <table class="order_listli" style="font-size: 14px; margin-top: 5px; text-align: left; margin-left: 20px;" width="898" align="center" border="" cellpadding="0" cellspacing="0" bordercolor="#6596a9" >
			<tr>
              <td><div>申请时间: <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['drawbacklog']['addtime'],"%Y-%m-%d %H:%M:%S");?>
</span></div></td>
              <td><div>会员名: <span><?php echo $_smarty_tpl->tpl_vars['items']->value['drawbacklog']['username'];?>
</span></div></td>  
              <!--<td colspan="2"><div>退款状态: <span>-->

				<!--<?php if ($_smarty_tpl->tpl_vars['items']->value['drawbacklog']['type']==0){?>-->
					<!--<?php if ($_smarty_tpl->tpl_vars['items']->value['is_reback']==1){?>待处理<?php }?>-->
					<!--<?php if ($_smarty_tpl->tpl_vars['items']->value['is_reback']==2){?>商家未处理，管理员退款给用户<?php }?>-->
					<!--<?php if ($_smarty_tpl->tpl_vars['items']->value['is_reback']==3){?>商家未处理，管理员拒绝退款给用户<?php }?>-->
				<!--<?php }?>-->
				<!--<?php if ($_smarty_tpl->tpl_vars['items']->value['drawbacklog']['type']==1){?>-->
						<!--<?php if ($_smarty_tpl->tpl_vars['items']->value['is_reback']==1){?>-->
							<!--已同意退款,等待管理员处理-->
						<!--<?php }elseif($_smarty_tpl->tpl_vars['items']->value['is_reback']==2){?>-->
							<!--已同意退款,管理员已退款给用户-->
						<!--<?php }elseif($_smarty_tpl->tpl_vars['items']->value['is_reback']==3){?>-->
							<!--已同意退款,但管理员拒绝退款给用户-->
						<!--<?php }?>-->
					<!--<?php }?>-->
					<!--<?php if ($_smarty_tpl->tpl_vars['items']->value['drawbacklog']['type']==2){?>-->
						<!--<?php if ($_smarty_tpl->tpl_vars['items']->value['is_reback']==1){?>-->
							<!--已拒绝退款,等待管理员处理-->
						<!--<?php }elseif($_smarty_tpl->tpl_vars['items']->value['is_reback']==2){?>-->
							<!--已拒绝退款,但经管理员审核后符合退款条件且管理员已退款给用户-->
						<!--<?php }elseif($_smarty_tpl->tpl_vars['items']->value['is_reback']==3){?>-->
							<!--已拒绝退款,管理员同意拒绝退款给用户-->
						<!--<?php }?>-->
					<!--<?php }?>-->
			  <!--</span></div></td>-->
            </tr>           
		    
            <tr>
              <td><div>总金额: <span><?php echo $_smarty_tpl->tpl_vars['items']->value['drawbacklog']['cost'];?>
元</span></div></td>
              <td><div>支付方式: <span>
						<?php if ($_smarty_tpl->tpl_vars['items']->value['paytype_name']=='open_acout'){?>余额支付<?php }?> 
						<?php if ($_smarty_tpl->tpl_vars['items']->value['paytype_name']=='weixin'){?>微信支付<?php }?> 
						<?php if ($_smarty_tpl->tpl_vars['items']->value['paytype_name']=='alipay'){?>支付宝支付<?php }?> 
						<?php if ($_smarty_tpl->tpl_vars['items']->value['paytype_name']=='alimobile'){?>手机支付宝支付<?php }?>
			  </span></div></td>  
			  <?php if ($_smarty_tpl->tpl_vars['items']->value['paytype_name']=='weixin'||$_smarty_tpl->tpl_vars['items']->value['paytype_name']=='alipay'||$_smarty_tpl->tpl_vars['items']->value['paytype_name']=='alimobile'){?>
			                <td colspan="2"><div>交易号: <span> <font color=red><?php echo $_smarty_tpl->tpl_vars['items']->value['trade_no'];?>
</font></span></div></td>
						<?php }?>
            </tr>
  
            <tr>
              <td  colspan="4"><div>退款原因: <span> <?php echo $_smarty_tpl->tpl_vars['items']->value['drawbacklog']['reason'];?>
 </span></div></td>             
            </tr> 
			<tr>
              <td  colspan="4"><div>退款详细说明: <span> <?php echo $_smarty_tpl->tpl_vars['items']->value['drawbacklog']['content'];?>
 </span></div></td>             
            </tr>
		 
			<tr>
              <!--<td  colspan="4"><div> <span>-->
			  <!--<?php if ($_smarty_tpl->tpl_vars['items']->value['is_reback']==1&&$_smarty_tpl->tpl_vars['items']->value['drawbacklog']['type']==0){?>-->
				      <!--<span style="padding: 6px 10px; background: #EC7501; margin-left:300px;" onclick="rebackclick(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);" class="curbtn">同意退款</span>-->
					  <!--<span style="padding: 6px 10px; background: #EC7501; margin-left:30px;" onclick="unrebackclick(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);" class="curbtn">拒绝退款</span>-->
				<!--<?php }else{ ?>-->
					<!--<span style="padding: 6px 10px; background: #EC7501; margin-left:300px;"   class="curbtn">-->
					<!--<?php if ($_smarty_tpl->tpl_vars['items']->value['drawbacklog']['type']==0){?>-->
						<!--<?php if ($_smarty_tpl->tpl_vars['items']->value['is_reback']==1){?>待处理<?php }?>-->
						<!--<?php if ($_smarty_tpl->tpl_vars['items']->value['is_reback']==2){?>商家未处理，管理员退款给用户<?php }?>-->
						<!--<?php if ($_smarty_tpl->tpl_vars['items']->value['is_reback']==3){?>商家未处理，管理员拒绝退款给用户<?php }?>-->
					<!--<?php }?>-->
					<!--<?php if ($_smarty_tpl->tpl_vars['items']->value['drawbacklog']['type']==1){?>-->
						<!--<?php if ($_smarty_tpl->tpl_vars['items']->value['is_reback']==1){?>-->
							<!--已同意退款,等待管理员处理-->
						<!--<?php }elseif($_smarty_tpl->tpl_vars['items']->value['is_reback']==2){?>-->
							<!--已同意退款,管理员已退款给用户-->
						<!--<?php }elseif($_smarty_tpl->tpl_vars['items']->value['is_reback']==3){?>-->
							<!--已同意退款,但管理员拒绝退款给用户-->
						<!--<?php }?>-->
					<!--<?php }?>-->
					<!--<?php if ($_smarty_tpl->tpl_vars['items']->value['drawbacklog']['type']==2){?>-->
						<!--<?php if ($_smarty_tpl->tpl_vars['items']->value['is_reback']==1){?>-->
							<!--已拒绝退款,等待管理员处理-->
						<!--<?php }elseif($_smarty_tpl->tpl_vars['items']->value['is_reback']==2){?>-->
							<!--拒绝,但经管理员审核后符合退款条件,已退款-->
						<!--<?php }elseif($_smarty_tpl->tpl_vars['items']->value['is_reback']==3){?>-->
							<!--已拒绝退款,管理员同意拒绝退款给用户-->
						<!--<?php }?>-->
					<!--<?php }?>-->
					<!--</span>-->
				<!--<?php }?>-->
				 <!--</span></div></td>-->
            </tr>
				<tr>
              <!--<td  colspan="4"><div>注意事项: <span>同意退款后网站管理员会把款退还给用户的对应账户中，如果不同意如有用户有意见，请等待管理员审核处理</span></div></td>-->
            </tr>
          </table>
			</div>
				<h3>订单详情</h3>
			<?php }?>
			
			
			
		
		
		
		
		
          <table class="order_listli" style="font-size: 14px; margin-top: 5px; text-align: left; margin-left: 20px;" width="898" align="center" border="" cellpadding="0" cellspacing="0" bordercolor="#6596a9" >
            <tr>
              <td><div>支付方式: <span><?php echo $_smarty_tpl->tpl_vars['paytypearr']->value[$_smarty_tpl->tpl_vars['items']->value['paytype']];?>
(<?php if (!empty($_smarty_tpl->tpl_vars['items']->value['paytype_name'])){?><?php echo $_smarty_tpl->tpl_vars['payway']->value[$_smarty_tpl->tpl_vars['items']->value['paytype_name']];?>
，<?php }?><?php if ($_smarty_tpl->tpl_vars['items']->value['paystatus']==1){?>已付<?php }else{ ?>未付<?php }?>) </span></div></td>
              <td><div>订单状态: <span> 
			 
			  <?php if ($_smarty_tpl->tpl_vars['items']->value['is_goshop']!=1){?> 
				<?php echo $_smarty_tpl->tpl_vars['buyerstatus']->value[$_smarty_tpl->tpl_vars['items']->value['status']];?>
　
			  <?php }else{ ?>			
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
				
				商家已取消订单

			<?php }?>
			  <?php }?></span></div></td>
              <td><div> <?php if ($_smarty_tpl->tpl_vars['items']->value['is_goshop']!=1){?> 配送时间:<?php }else{ ?> 消费时间： <?php }?> <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['posttime'],"%Y-%m-%d");?>
 <?php echo $_smarty_tpl->tpl_vars['items']->value['postdate'];?>
</span></div></td>
           <?php if ($_smarty_tpl->tpl_vars['items']->value['is_goshop']!=1){?>    <td><div>配送: <span><?php if ($_smarty_tpl->tpl_vars['items']->value['pstype']==1){?>店铺<?php }else{ ?>网站<?php }?></span></div></td>   <?php }?>
            </tr>
            <tr>
              <td><div>顾客电话: <span><?php echo $_smarty_tpl->tpl_vars['items']->value['buyerphone'];?>
</span></div></td>
              <?php if ($_smarty_tpl->tpl_vars['items']->value['is_goshop']!=1){?>   <td><div>顾客地址: <span><?php echo $_smarty_tpl->tpl_vars['items']->value['buyeraddress'];?>
</span></div></td>  <?php }?>
              <td colspan="2"><div>联系人: <span><?php echo $_smarty_tpl->tpl_vars['items']->value['buyername'];?>
</span></div></td>
            </tr>
            <tr>
              <td colspan="4"><div>订单备注: <span><?php echo $_smarty_tpl->tpl_vars['items']->value['content'];?>
</span><?php $_smarty_tpl->tpl_vars['showother'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['items']->value['othertext']), null, 0);?>   
		            		 		  	 <?php  $_smarty_tpl->tpl_vars['itc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itc']->_loop = false;
 $_smarty_tpl->tpl_vars['mytest'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['showother']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itc']->key => $_smarty_tpl->tpl_vars['itc']->value){
$_smarty_tpl->tpl_vars['itc']->_loop = true;
 $_smarty_tpl->tpl_vars['mytest']->value = $_smarty_tpl->tpl_vars['itc']->key;
?>
										<?php if ($_smarty_tpl->tpl_vars['mytest']->value!=0){?>
		            		 		  	<font color=red> <?php echo $_smarty_tpl->tpl_vars['mytest']->value;?>
</blue>:<?php echo $_smarty_tpl->tpl_vars['itc']->value;?>
 </font>
										<?php }else{ ?>
										无
										<?php }?>
		            		 		  	 <?php } ?></div></td>
            </tr>
            <tr>
              <td  colspan="1"><div>审核参考: <span> <?php if (empty($_smarty_tpl->tpl_vars['items']->value['buyeruid'])){?>游客<?php }else{ ?>成交次数:<?php echo $_smarty_tpl->tpl_vars['items']->value['maijiagoumaishu'];?>
<?php }?></span></div></td>
              <td colspan="3"><div>下单IP: <span><?php echo $_smarty_tpl->tpl_vars['items']->value['ipaddress'];?>
</span></div></td>
            </tr>
          </table>
          <div class="order_alllist">
            <table style="font-size: 14px; margin-top: 5px; text-align: left; margin-left: 20px;" width="898" align="center" border="1" cellpadding="0" cellspacing="0" bordercolor="#6596a9" >
              <tr>
                  <td style=" font-weight:bold;" width="55%">美食篮子</td>
                  <td style=" font-size:14px; color:#ffffff; font-weight:bold; font-family:"微软雅黑";"  align="center">单价</td>
                  <td style=" font-size:14px; color:#ffffff; font-weight:bold; font-family:"微软雅黑";"  align="center" align="center"> 数量 </td>
                  <td style=" font-size:14px; color:#ffffff; font-weight:bold; font-family:"微软雅黑";"  align="center" align="center">总价  </td>
              </tr> 
               <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value['detlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>  
              <tr>
                <td style=" font-weight:bold;"  width="55%"><?php echo $_smarty_tpl->tpl_vars['value']->value['goodsname'];?>
<?php if ($_smarty_tpl->tpl_vars['value']->value['is_send']==1){?><font color=red>[赠品]</font><?php }?><?php if ($_smarty_tpl->tpl_vars['value']->value['shopid']==0){?><font color=blue>[商城]</font><?php }?></td>
                <td style=" font-size:14px; color:#ffffff; font-weight:bold; font-family:"微软雅黑";"  align="center"><?php echo $_smarty_tpl->tpl_vars['value']->value['goodscost'];?>
</td>
                  <td style=" font-size:14px; color:#ffffff; font-weight:bold; font-family:"微软雅黑";"  align="center" align="center"><?php echo $_smarty_tpl->tpl_vars['value']->value['goodscount'];?>
</td>
                  <td style=" font-size:14px; color:#ffffff; font-weight:bold; font-family:"微软雅黑";"  align="center" align="center"><?php echo $_smarty_tpl->tpl_vars['value']->value['goodscount']*$_smarty_tpl->tpl_vars['value']->value['goodscost'];?>
  </td>
              </tr>
               <?php } ?>   
              <tr>
                <td style=" font-weight:bold;" colspan="4">
                	<?php if ($_smarty_tpl->tpl_vars['items']->value['scoredown']>0){?> <span class="info_name">积分：<font color=red><?php echo $_smarty_tpl->tpl_vars['items']->value['scoredown'];?>
</font>个</span><?php }?>
                                 <?php if ($_smarty_tpl->tpl_vars['items']->value['is_goshop']!=1){?>	  <span class="info_name">配送费：<font color=red><?php echo $_smarty_tpl->tpl_vars['items']->value['shopps'];?>
</font>元</span>   <?php }?>
                               	 <?php if ($_smarty_tpl->tpl_vars['items']->value['yhjcost']>0){?><span class="info_name ml20">优惠券金额：<font color=red><?php echo $_smarty_tpl->tpl_vars['items']->value['yhjcost'];?>
</font>元</span><?php }?>
                               	<?php if ($_smarty_tpl->tpl_vars['items']->value['cxcost']>0){?> <span class="info_name ml20">促销优惠：<font color=red><?php echo $_smarty_tpl->tpl_vars['items']->value['cxcost'];?>
</font>元</span><?php }?>
                               	 <?php if ($_smarty_tpl->tpl_vars['items']->value['bagcost']>0){?><span class="info_name ml20">打包费：<font color=red><?php echo $_smarty_tpl->tpl_vars['items']->value['bagcost'];?>
</font>元</span><?php }?>
                               	 <span class="info_name ml20">应收金额：<font color=red><?php echo $_smarty_tpl->tpl_vars['items']->value['allcost'];?>
</font>元</span>
                </td> 
              </tr>
            </table>
            <div class="order_bottom"  id="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
">
            		<?php if ($_smarty_tpl->tpl_vars['items']->value['status']==1){?>
							 <?php if ($_smarty_tpl->tpl_vars['items']->value['is_goshop']!=1){?>
									   <?php if ($_smarty_tpl->tpl_vars['items']->value['is_make']==0){?>
				<?php if (empty($_smarty_tpl->tpl_vars['items']->value['drawbacklog'])){?>
											<span onclick="unmakeorder(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);" class="curbtn"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/buzhizuo.png" /></span> 
						
										<span  onclick="makeorder(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);" class="curbtn"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/zhizuodingdan.png" /></span>
									<?php }?>
										 	 <?php }elseif($_smarty_tpl->tpl_vars['items']->value['is_make']==1){?>
											 <?php if ($_smarty_tpl->tpl_vars['items']->value['is_goshop']!=1){?>
												<span onclick="sendorder(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);" class="curbtn"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/peisongfahuo.png" /></span> 
											<?php }else{ ?>
												 <span class="curbtn" onclick="wancheng(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);"  ><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/wanchengdingdan.png" /></span> 

											<?php }?>
									   <?php }elseif($_smarty_tpl->tpl_vars['items']->value['is_make']==2){?>
										   订单取消制作
									   <?php }?>
									   
							<?php }else{ ?>
						
									<?php if ($_smarty_tpl->tpl_vars['items']->value['is_make']<2){?>
							
								<span onclick="unyudingorder(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);" class="curbtn">取消订单</span> 

								<span class="curbtn" onclick="wancheng(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);"  ><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/wanchengdingdan.png" /></span> 
									<?php }elseif($_smarty_tpl->tpl_vars['items']->value['is_make']==2){?>
										   已取消此预定订单
									   <?php }?>
							<?php }?>
       		      <?php }?>
    
					<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/index.php?ctrl=shopcenter&action=orderprint&orderid=<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
&printtype=0" target="_blank"> <img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/dayindingdan.png" /></a> 
            	    <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/index.php?ctrl=shopcenter&action=orderprint&orderid=<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
&printtype=1" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/xiaopiaodayin.png" /></a> 
				
            	<?php if ($_smarty_tpl->tpl_vars['items']->value['status']==2){?>
            	   <span class="curbtn" onclick="wancheng(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);"  ><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/wanchengdingdan.png" /></span> 
            	<?php }?>
				 
				   <?php if ($_smarty_tpl->tpl_vars['items']->value['psuid']>0){?>	
				   <?php if ($_smarty_tpl->tpl_vars['items']->value['status']>0&&$_smarty_tpl->tpl_vars['items']->value['status']<3){?>
            	<span onclick="pickorder(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);" class="curbtn">通知取单</span> 
				   <?php }?>
				<?php }?>

				<?php if (!empty($_smarty_tpl->tpl_vars['items']->value['drawbacklog'])){?>
				<span style="padding: 4px 8px; position:relative;top:-6px;background: #EC7501;curosr:text;"class="curbtn" >

					<?php if ($_smarty_tpl->tpl_vars['items']->value['is_reback']==1){?>已申请退款等待平台处理<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['items']->value['is_reback']==2){?>管理员已退款给用户<?php }?>

				</span>
				<?php }?>
				 
            </div> 
			
		
			
			
          </div>
        </div>
      </div>
      <?php } ?>
       
      <!---订单循环-->
    </div>
     
    </div>
  </div>
  <div class="cl"></div>
  
  <!---content right end---> 
 
 
  




<div id="print_area" style="display:none;"></div>
<div id="palywave" style="display:none;"></div>
 <script>     
 	<?php if ($_smarty_tpl->tpl_vars['playwave']->value!=2){?> 
 	var playwave = true;  	
 	<?php }else{ ?>
 		var playwave = false;  	
 	<?php }?>
				$(function(){
					 if(playwave == true){
					 	$('#startwave').css('background','#ec7501');
					}else{
						$('#closetwave').css('background','#ec7501');
					}
					$("#startwave").click(function(){
						$(this).css('background','#ec7501');//.siblings().css('background','');
						$('#closetwave').css('background','');
						playwave =   true;
						ajaxback('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/wavecontrol/type/openwave/datatype/json"),$_smarty_tpl);?>
',''); 
					});	
					$("#closetwave").click(function(){
						$(this).css('background','#ec7501');//.siblings().css('background','');
							$('#startwave').css('background','');
								playwave = false;
					    	ajaxback('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/wavecontrol/type/closewave/datatype/json"),$_smarty_tpl);?>
',''); 
						
					});	
					
				});
function refreshorder(){
	window.location.reload();
}
</script> 
<script type="text/javascript">
	 function showdet(order,obj){
	 	var checkobj = $('#order_det'+order).is(":hidden");
	 	if(checkobj ==  false){
	 		 $(obj).text('＋');
	 		 $('#order_det'+order).hide();
	 	}else{
	 		$(obj).text('－');
	 		$('#order_det'+order).show();
	 	}
	 	 
	}
	 function unorder(orderid,dno)
	 {
	 	   var dialog =  art.dialog({
	 	   	id:'coslid',
        title:'取消订单'+dno,
           content: '<div>关闭订单理由</div><div><textarea name="reason" id="reason" style="height:40px;"></textarea></div><div class="btn_wuxiao hc_listfoods_menus_foods hcl_food_lists_cont_div_order2 hcl_food_lists_cont_div_order4 hc_listfoods_menus_foods2" style="width:65px;float:left;" onclick="sureclose('+orderid+');">提交关闭</div>'
        });
	 }
	 function sureclose(orderid)
	 {
	 	  var reasons = $('#reason').val();
	 	  if(reasons == undefined || reasons == '')
	 	  {
	 	  	alert('关闭理由不能为空');
	 	  }else{ 
	 	    myajax('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shopcontrol/controlname/unorder/datatype/json"),$_smarty_tpl);?>
',{'orderid':orderid,'reason':reasons}); 
	 	 }
	 }
	 function makeorder(orderid){
	 	
	 	  if(confirm('订单已审核通过，确认制作吗？')){
		        myajax('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shopcontrol/controlname/makeorder/datatype/json"),$_smarty_tpl);?>
',{'orderid':orderid});
		  }
	 	
	 	
	 	
	 }
	 function pickorder(orderid){
	 	 if(confirm('确认通知配送员取单吗？')){
		        myajax('<?php echo FUNC_function(array('type'=>'url','link'=>"/app/txingorder/datatype/json"),$_smarty_tpl);?>
',{'orderid':orderid});
		  } 
	}
	function wancheng(orderid){
		if(confirm('订单操作确认完成该订单吗？')){
		        myajax('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shopcontrol/controlname/wancheng/datatype/json"),$_smarty_tpl);?>
',{'orderid':orderid});
		  }
	}
	 function unmakeorder(orderid){
	 	
	 	  if(confirm('订单已审核通过，取消不制作吗？')){
		       myajax('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shopcontrol/controlname/unmakeorder/datatype/json"),$_smarty_tpl);?>
',{'orderid':orderid});
		  }
	 	
	 }
	 
	  function unyudingorder(orderid){
	 	
	 	  if(confirm('订单已审核通过，取消此预定订单吗？')){
		       myajax('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shopcontrol/controlname/unmakeorder/datatype/json"),$_smarty_tpl);?>
',{'orderid':orderid});
		  }
	 	
	 }
	 
	 function sendorder(orderid)
	{
		if(confirm('订单已审核通过，确认发货吗？')){
		   myajax('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shopcontrol/controlname/sendorder/datatype/json"),$_smarty_tpl);?>
',{'orderid':orderid});
		}
	}
	function shenhe(orderid)
	{
		if(confirm('通过审核，此订单将生效吗？')){
		   myajax('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shopcontrol/controlname/shenhe/datatype/json"),$_smarty_tpl);?>
',{'orderid':orderid});
		}
	}
	function delorder(orderid)
	{
		if(confirm('彻底删除订单吗？')){
		   myajax('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shopcontrol/controlname/delorder/datatype/json"),$_smarty_tpl);?>
',{'orderid':orderid});
		}
	}
	//退款
	 function rebackclick(orderid){
			if(confirm('确定同意退款吗，同意后管理员会把钱退还给用户？')){
		        myajax('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shopcontrol/controlname/reback/datatype/json"),$_smarty_tpl);?>
',{'orderid':orderid});
		  }
	 }
	 //取消退款
	 function unrebackclick(orderid){
			if(confirm('确定拒绝退款，拒绝后如用户有意见，请等待管理员审核处理？')){
		        myajax('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shopcontrol/controlname/unreback/datatype/json"),$_smarty_tpl);?>
',{'orderid':orderid});
		  }
	 }
	  var mydialog;
	function printorder(orderid,printtype)
	{
		if(printtype == 1){
			window.open(siteurl+'/index.php?ctrl=shopcenter&action=orderprint&orderid='+orderid+'&printtype='+printtype,"窗口名称","窗口外观设定");
			return;
			   mydialog = art.dialog.open(siteurl+'/index.php?ctrl=shopcenter&action=orderprint&orderid='+orderid+'&printtype='+printtype,{height:'600px',width:'400px'},false);  //小票打印
		}else{
			window.open(siteurl+'/index.php?ctrl=shopcenter&action=orderprint&orderid='+orderid+'&printtype='+printtype,"窗口名称","窗口外观设定");
			return;
			   mydialog = art.dialog.open(siteurl+'/index.php?ctrl=shopcenter&action=orderprint&orderid='+orderid+'&printtype='+printtype,{height:'690px',width:'794px'},false);  //打印A4 
		}
	}
  function print_all_area()
  {
  	$('#print_area').html($('#all_area').html());
	  $("#print_area").find('.order_bottom').remove();
	  $("#print_area").printArea();
  }
</script>
<script>
	 
$(function(){
	setTimeout("get_status()",1000); 		
}); 
function get_status(){//<span id="timeshow" data="20" style="color:#666;"></div>
	//alert('xxx');
	var timeaction =  $('#showztai').attr('data');
	 
 
	if(timeaction == 0){
	$('#showztai').text('检测订单..'); 
	 var url = siteurl+'/index.php?ctrl=shopcenter&action=ajaxcheckshoporder&datatype=json&random=@random@';
	 $.ajax({
       type: 'POST',
       async:false,
       url: url.replace('@random@', 1+Math.round(Math.random()*1000)),
       data: {},
      dataType: 'json',success: function(content) { 
      	if(content.error == true)
      	{
      		$('#showztai').text('未获取到新订单');
      		$('#showztai').attr('data','20');
 	       
      		setTimeout("get_status()",1000); 	
      	}else if(content.error == false)
      	{
      		  var checkNum = Number($('#showztai').attr('udata'));
      		  var ccNumber = Number(content.msg);
      		  if(ccNumber > checkNum){
      		  	palywav();
      		  }else{
      		  	 $('#showztai').text('未获取到新订单');
      	     	$('#showztai').attr('data','20');
 	       
      	      	setTimeout("get_status()",1000); 	
      		  }
      	 
      	}else{
      	 $('#showztai').text('未获取到新订单');
      		$('#showztai').attr('data','20');
 	       
      		setTimeout("get_status()",1000); 	
      	}
      	
		  },
      error: function(content) { 
      $('#showztai').text('未获取到新订单');
      		$('#showztai').attr('data','20');
 	       
      		setTimeout("get_status()",1000); 	
	   }
   }); 
 }else{
 	var nowtime = Number(timeaction)-1;
 	$('#showztai').attr('data',nowtime);
 	$('#showztai').html('自动刷新倒计时<span>'+nowtime+'</span>秒');
 	setTimeout("get_status()",1000); 	
 	
 }
 
}
function palywav(){
	if(playwave == true){
				if(navigator.userAgent.indexOf("Chrome") > -1){  
				$('#palywave').html('<audio src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/wave.mp3" type="audio/mp3" autoplay=”autoplay” hidden="true"></audio>');
				}else if(navigator.userAgent.indexOf("Firefox")!=-1){  
				$('#palywave').html('<embed src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/wave.mp3" type="audio/mp3" hidden="true" loop="false" mastersound></embed>');
				}else if(navigator.appName.indexOf("Microsoft Internet Explorer")!=-1 && document.all){ 
				$('#palywave').html('<object classid="clsid:22D6F312-B0F6-11D0-94AB-0080C74C7E95"><param name="AutoStart" value="1" /><param name="Src" value="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/wave.mp3" /></object>');
				}else if(navigator.appName.indexOf("Opera")!=-1){ 
				$('#palywave').html('<embed src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/wave.mp3" type="audio/mpeg" loop="false"></embed>');
				}else{ 
				$('#palywave').html('<embed src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/wave.mp3" type="audio/mp3" hidden="true" loop="false" mastersound></embed>'); 
				} 


				  // $('#palywave').html('<embed id=cct src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/wave.wav" loop="0" autostart="true" hidden="true"></embed>'); 
				   setTimeout("playon()",3000); 	
   }
}
function playon(){
	//$('#cct').load("<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/wave.mp3");
	 
 	location.reload();  
}
</script>
  
       
       
       
       
       
       
       
       </div>
    



<!------以下是公共的底部部分------->

    <div class="footer">
    	<div class="foot1">
        <center>
        	<div class="db">
        	   <?php if (!empty($_smarty_tpl->tpl_vars['toplink']->value)){?>
	 	      <?php $_smarty_tpl->tpl_vars['toplink'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['toplink']->value), null, 0);?>
		  	  <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['toplink']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?> 
			         <a href="<?php echo $_smarty_tpl->tpl_vars['items']->value['typeurl'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value['typename'];?>
</a> | 
			    <?php } ?>
			<?php }?> 
         
            </div></center>
            <div class="cl"></div>
        </div>
        <div class="foot2">
        	<p>@2008-2012 <?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['beian']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['footerdata']->value);?>
</p>
        </div>
    </div>
 
 <script>
                	
				$(function(){
					 
			  	if("undefined" != typeof mynomenu){
					   var allobj = $('.nav').find('li');
					  $.each(allobj, function(i, newobj) {
					  	if($(this).attr('data') == mynomenu){
					  	   $(this).addClass('on');
					  	 }
					  	//alert($(this).attr('data'));
					   	  
					  });
				 	}
					$(".nav ul li").click(function(){
					    	$(this).addClass('on').siblings().removeClass('on');
						
					});	 
				});
				function openlink(newlinkes){
					window.location.href=newlinkes;
				}
</script> 
  
</body>
</html><?php }} ?>