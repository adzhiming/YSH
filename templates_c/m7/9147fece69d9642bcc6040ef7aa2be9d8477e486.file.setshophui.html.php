<?php /* Smarty version Smarty-3.1.10, created on 2017-09-21 01:23:07
         compiled from "F:\www\YSH\templates\m7\shopcenter\setshophui.html" */ ?>
<?php /*%%SmartyHeaderCode:543459c2a3fb5dc2e7-28414161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9147fece69d9642bcc6040ef7aa2be9d8477e486' => 
    array (
      0 => 'F:\\www\\YSH\\templates\\m7\\shopcenter\\setshophui.html',
      1 => 1483090802,
      2 => 'file',
    ),
    '5cece2d36bc7421fffa87ec0ea408d10f00eba46' => 
    array (
      0 => 'F:\\www\\YSH\\templates\\m7\\public\\shopcenter.html',
      1 => 1483090790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '543459c2a3fb5dc2e7-28414161',
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
  'unifunc' => 'content_59c2a3fd97faa1_63422126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2a3fd97faa1_63422126')) {function content_59c2a3fd97faa1_63422126($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include 'F:\\www\\YSH\\lib\\Smarty\\libs\\plugins\\function.load_data.php';
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

 <script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/plugins/iframeTools.js"></script> 
 <script>
  	  var mynomenu='setshophui';
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
        
            <div class="shopSetTop">
            	<span>闪惠设置（只能开启一个规则使用）<?php if ($_smarty_tpl->tpl_vars['shopdata']->value['is_hui']==0){?><font color=red size="1">(注意：您还未开启闪惠功能，暂时无法使用，如需开启，请联系管理员)</font><?php }?></span>
				
				                  <span style=" float:right; margin-right:10px;"><a style="color:lime; font-weight:bold;" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shophuitotal"),$_smarty_tpl);?>
">闪惠订单统计</a></span>
				                  <span style=" float:right; margin-right:5px;"><a style="color:lime; font-weight:bold;" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shophuiorder"),$_smarty_tpl);?>
">闪惠订单</a></span>

            </div>
              
			 
 <?php if ($_smarty_tpl->tpl_vars['shopdata']->value['is_hui']==1&&$_smarty_tpl->tpl_vars['shopdata']->value['is_shophui']==1){?>
   <div class="cxruleset"  style="height:310px;padding-top:10px; ">
   <div style=" height:310px;width:220px; margin:0px auto; background-color:#ffffff;">
	   <div style="padding-left:10px;padding-top:10px;">
		<div  id="shopcode"  >
				<img src="" style="width:160px;height:160px;margin-left:15px;display:none;"></img> 
		</div>
		<div style="width:200px;text-align:center;line-height:30px;height:30px;" id="weixinstr">微信闪惠店铺关注二维码</div>
		<div style="width:200px;text-align:center;line-height:30px;height:30px;color:red; font-size:12px;"  >制作二维码链接</div>
		<div style="width:200px;text-align:center;line-height:30px;height:30px;"  ><input type="text" name="dolinkes" id="dolinkes" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shopinfo']->value['wxhui_ewmurl'])===null||$tmp==='' ? '' : $tmp);?>
"></div>
		</div>
	</div>
	</div>
	 
<?php }?>				
			
            <div class="cxruleset" style="height:170px;">
				<div class="cxrule_btn" onclick="setshophuiinfo(1);">                 
						<div style="width:124px; height:38px; line-height:38px; text-align:center; <?php if ($_smarty_tpl->tpl_vars['shopdata']->value['is_shophui']==1){?>background:#EC7501;<?php }else{ ?>background:#BFB6A5; <?php }?> cursor:pointer;color:#fff;">开启闪惠</div>
				 </div>	
				<div class="cxrule_btn" style="left:200px;" onclick="setshophuiinfo(0);">                 
					<div style="width:124px; height:38px; line-height:38px; text-align:center; <?php if ($_smarty_tpl->tpl_vars['shopdata']->value['is_shophui']==1){?>background:#BFB6A5;<?php }else{ ?>background:#EC7501; <?php }?>  cursor:pointer;color:#fff;">关闭闪惠</div>
                </div>
            	<div class="" style="right:50px; position:absolute;top:25px;right:50px;">
                 
                    <div class="cxruleButton" onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/addshophui"),$_smarty_tpl);?>
');"></div>
                </div>
                
                  <div class="cl"></div>
				  
				  
		<?php if ($_smarty_tpl->tpl_vars['adminuid']->value>0){?>		  
				<div class="shgiftset">
                    	<div class="shgift_left">
                        	<span>消费送积分设置</span>
                        </div>
                        <div class="shgift_right">
                           <input type="radio" name="is_shgift" value="1" <?php if ($_smarty_tpl->tpl_vars['shopdata']->value['is_shgift']==1){?> checked <?php }?> >开启 
                           <input type="radio" name="is_shgift" value="0" <?php if ($_smarty_tpl->tpl_vars['shopdata']->value['is_shgift']==0){?> checked <?php }?> >关闭
                        </div>
						 <div class="shgift_end">
                           <input style="width:50px;"  type="text" name="sendgift" value="<?php if ($_smarty_tpl->tpl_vars['shopdata']->value['sendgift']!=0){?><?php echo $_smarty_tpl->tpl_vars['shopdata']->value['sendgift'];?>
<?php }?>" checked=""> 元赠送1积分
                        </div>
						 <div class="shgift_but">
                           <span>保存</span>
                        </div>
                        <div class="cl"></div>
                    </div>
				  <style>
				  .shgiftset{ position:absolute; top:100px; left:50px; color:#ffffff; height: 38px; line-height: 38px; }
				  .shgiftset .shgift_left{ float:left; height: 38px;  padding:0px 10px;  line-height: 38px;    text-align: center;  margin-right:10px;  background: #EC7501;}
				  .shgiftset .shgift_right{ float:left;margin-right:20px; }
				  .shgiftset .shgift_end{ float:left;margin-right:20px; }
				  .shgiftset .shgift_but{ float:left; height: 38px; cursor:pointer;  padding:0px 20px;  line-height: 38px;    text-align: center;  margin-right:10px;  background: #27a9e3;}
				  </style>
				  
	<?php }?>			  
				  
				  
            </div>
             <div class="cl"></div>
                       
                <form action="" method="post">
                 <div class="caidanSet">
        			
                    
                
                	<div class="div_orderList">
                    	
                        <div class="cxrule_show">
                    
                        <div class="cxrule_show_goodli">
                            <div class="cxrule_goodname">
                                <span>闪惠名称</span>
                            </div>
                            <div class="cxrule_shuoming">
                                 <span>规则说明</span>
                            </div>
                            <div class="cxrule_pri">
                                 <span>开始时间</span>
                            </div>
                            <div class="cxrule_d">
                                 <span>结束时间</span>
                            </div>
                            <div class="cxrule_day_num">
                                 <span>状态</span>
                            </div>
                             <div class="cxrule_cz">
                                 <span>操作</span>
                            </div>
                        </div>
                        
                        <div class="cl"></div>
                        
                        
                    	<div class="cxrule_list	">
                       		 
                          	 <?php echo smarty_function_load_data(array('assign'=>"list",'table'=>"shophui",'fileds'=>"*",'limit'=>"100",'where'=>"shopid = ".((string)$_smarty_tpl->tpl_vars['shopinfo']->value['id'])),$_smarty_tpl);?>
 
                <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?>  
                          
                          <div class="cxrule_goodlist">
                            <div class="cxrule_name">
                                <span><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</span>
                            </div>
                            <div class="cxrule_sm">
                                 <span style="font-size:12px; line-height:25px;" id="showrule_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" data=""></span>
                            </div>
                            <div class="cxrule_price">
                                 <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['starttime'],"%Y-%m-%d");?>
</span>
                            </div>
                            <div class="cxrule_dbf">
                                 <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['endtime'],"%Y-%m-%d");?>
</span>
                            </div>
                            <div class="cxrule_dayNum">
                                 <span> <?php if ($_smarty_tpl->tpl_vars['items']->value['status']==1){?><font color=red>开启中</font><?php }else{ ?>未开启<?php }?></span>
                            </div>
                             <div class="cxrule_caozuo">
                                 <span style=" background:#27a9e3; padding:8px; color:#fff;"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/addshophui/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
">编辑</a></span>
                                  <span style=" background:#ec7501; padding:8px; color:#fff;"><a onclick="return remind(this);"href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/delshophui/cxid/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])."/datatype/json"),$_smarty_tpl);?>
"> 删除</a></span>
                            </div>
                          </div>
                    
                        
                        
                     <?php } ?> 
                      
                      
                    </div>
                        <div class="cl"></div>
                        
                        
                    </div>
                    	
                        
                        
                        
                    </div>
                    
       			 </div>
                 
                 
              </form>  
                
                
        </div>
        <div class="cl"></div>
        
        
       
        
        
        <!---content right end---> 
 
 
 

 
 <script>
  <?php if ($_smarty_tpl->tpl_vars['shopdata']->value['is_hui']==1&&$_smarty_tpl->tpl_vars['shopdata']->value['is_shophui']==1){?>
  
  <?php if (empty($_smarty_tpl->tpl_vars['shopinfo']->value['wxhui_ewmurl'])){?>
 $(function(){
     $('#weixinstr').text('生成店铺二维码中..');
	 $.ajax({
		type: 'post',
		async:true,
		data:{shopid:<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['id'];?>
},
		url: '<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/makeerwei/datatype/json"),$_smarty_tpl);?>
', 
		dataType: 'json',success: function(content) {   
     	if(content.error == false){ 
$('#shopcode').find('img').eq(0).show();
 $('#shopcode').find('img').eq(0).attr('src',siteurl+"/plug/pay/weixin/qrcode.php?data="+content.msg);//.hide(); 				
     	}else{
     		
     		if(content.error == true)
     		{
     			$('#weixinstr').text(content.msg); 
     		}else{
     			$('#weixinstr').text(content); 
				$('#dolinkes').val(content);
     		}
     	} 
		},
		error: function(content) { 
    	 $('#weixinstr').text('生成二维码数据失败');  
	  }
	});   
 });
 <?php }else{ ?>
  $(function(){
 $('#shopcode').find('img').eq(0).show();
 $('#shopcode').find('img').eq(0).attr('src',siteurl+"/plug/pay/weixin/qrcode.php?data=<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['wxhui_ewmurl'];?>
");//.hide(); 
 });
<?php }?>	
 
 
 <?php }?>	
 </script>
 
  
<script>
$('.shgift_but').click(function(){   
  	    var is_shgift = $("input[name='is_shgift']:checked").val();
  	    var sendgift = $("input[name='sendgift']").val();
		
  	    var info = {'is_shgift':is_shgift,'sendgift':sendgift}; 
		    var url =  siteurl+'/index.php?ctrl=shopcenter&action=saveshanhuigift&datatype=json&random=@random@';  
		     $.ajax({ 
             url: url.replace('@random@', 1+Math.round(Math.random()*1000)), 
            dataType: "json", 
            data:info, 
            success:function(content) { 

            	   if(content.error ==  false){
            	   	alert('操作成功');
            	   	location.reload();  
            	   }else{
            	   	alert(content.msg);
            	   }

            },

            error:function(){

            	

            }

         });  
	 });
function setshophuiinfo(is_shophui){
		 
		url = siteurl+'/index.php?ctrl=shopcenter&action=saveshanhui&datatype=json&random=@random@';
     	  url = url.replace('@random@', 1+Math.round(Math.random()*1000));
        $.ajax({         //script定义
                 url: url.replace('@random@', 1+Math.round(Math.random()*1000)),
                 dataType: "json",
                 async:true,
                 data:{'is_shophui':is_shophui},
                 success:function(content) { 
                 	if(content.error ==  false){
					
						window.location.reload();
					
						
							
                 	}else{
                 		alert(content.msg);
                 	}
                  	$('#loading').toggle();
                 
                 },
                 error:function(){
                  $('#loading').toggle();
                 }
        }); 
}

	var alllist = <?php echo json_encode($_smarty_tpl->tpl_vars['list']->value['list']);?>
;
$(function(){  
	$.each(alllist,function(i,field){ 
		var showcontent = '';
		
		if(field.limitcontent > 0){
			showcontent += '订单总价大于'+field.limitcontent+'元';
		}else{
			showcontent +='所有订单';
		} 
		if(field.limittype ==  2){
			showcontent ='每周(星期'+field.limitweek+'),每在天('+field.limittimes+')时间段,'+showcontent;
		} 
		if(field.limittype == 3){
		   showcontent ='每周(星期'+field.limitweek+'),每在天('+field.limittimes+')时间段,'+showcontent;
		//	showcontent ='每天在'+field.limittimes+'时间段，'+showcontent;
		}
		
		if(field.controltype ==  2){
			showcontent +='每满'+field.mjlimitcost+'元减'+field.controlcontent+'元';
		}
		if(field.controltype ==  3){
			var times = field.controlcontent*0.1;
			showcontent +='满'+field.limitzhekoucost+'元打'+times+'折';
		}
		
		 
		
		 $('#showrule_'+field.id).text(showcontent);
	});
	
});
	
	
	
	
	
	
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