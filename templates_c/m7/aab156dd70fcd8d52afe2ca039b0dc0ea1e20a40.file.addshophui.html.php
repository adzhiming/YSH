<?php /* Smarty version Smarty-3.1.10, created on 2017-09-21 01:23:16
         compiled from "F:\www\YSH\templates\m7\shopcenter\addshophui.html" */ ?>
<?php /*%%SmartyHeaderCode:1686559c2a40485c2d3-11271788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aab156dd70fcd8d52afe2ca039b0dc0ea1e20a40' => 
    array (
      0 => 'F:\\www\\YSH\\templates\\m7\\shopcenter\\addshophui.html',
      1 => 1483090794,
      2 => 'file',
    ),
    '5cece2d36bc7421fffa87ec0ea408d10f00eba46' => 
    array (
      0 => 'F:\\www\\YSH\\templates\\m7\\public\\shopcenter.html',
      1 => 1483090790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1686559c2a40485c2d3-11271788',
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
  'unifunc' => 'content_59c2a405248326_32267899',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2a405248326_32267899')) {function content_59c2a405248326_32267899($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include 'F:\\www\\YSH\\lib\\Smarty\\libs\\plugins\\function.load_data.php';
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
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/datepicker/WdatePicker.js" type="text/javascript" language="javascript"></script>
<script>
  	  var mynomenu='addshophui';
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
            	<span><?php if (empty($_smarty_tpl->tpl_vars['cxinfo']->value)){?>添加<?php }else{ ?>编辑<?php }?>闪惠规则列表</span>
            </div>
           <form id="loginForm" method="post" action="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/saveshophui/datatype/json"),$_smarty_tpl);?>
" >
                 <div class="jutiSet">
        		     	 
                    
                    
                    <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>闪惠标题：</span>
                        </div>
                        <div class="xuanze_right">
                        	<input type="text" style="width:300px;margin-top:5px;height:30px;line-height:30px;" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['cxinfo']->value['name'];?>
">
                            
                        </div>
                        <div class="cl"></div>
                    </div>
          
					
					     <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>闪惠类型：</span>
                        </div>
                        <div class="xuanze_right">
                        	<select name="controltype" id="controltype" onchange="changetxt(this)" style="margin-top:10px;">
                        	                        <option value="2" data1="减费用" data=""  <?php if ($_smarty_tpl->tpl_vars['cxinfo']->value['controltype']==2){?>selected<?php }?>>每满多少减多少</option>
                        	                        <option value="3" data1="折扣" data="假如9折请录入90" <?php if ($_smarty_tpl->tpl_vars['cxinfo']->value['controltype']==3){?>selected<?php }?>>折扣</option>
                                                    <option value="4" <?php if ($_smarty_tpl->tpl_vars['cxinfo']->value['controltype']==4){?>selected<?php }?>>无优惠</option>
                        	                    </select>
                        </div>
                        <div class="cl"></div>
                    </div>
                      
					
					
                     
                    <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>具体时间：</span>
                        </div>
                        <div class="xuanze_right">
                        		<input type="radio" name="limittype" value="1" checked>不限制<?php echo $_smarty_tpl->tpl_vars['cxinfo']->value['limittype'];?>

                        	<input type="radio" name="limittype" value="2" <?php if ($_smarty_tpl->tpl_vars['cxinfo']->value['limittype']==2){?>checked<?php }?>>每周星期以及每天时间段
                         
                            
                        </div>
                        <div class="cl"></div>
                    </div>
                    
                     <div class="serxuanze" id="limittime1" style="display:none;">
                    	<div class="xuanze_left">
                        	<span>选择星期：</span>
                        </div>
                        <div class="xuanze_right">
                        	<?php $_smarty_tpl->tpl_vars['mysign'] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['cxinfo']->value['limitweek']), null, 0);?>  
                        	<?php $_smarty_tpl->tpl_vars['signshu'] = new Smarty_variable("1", null, 0);?> 
                          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=7) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?> 
                  	          <input type="checkbox" name="limittime1[]" value="<?php echo $_smarty_tpl->tpl_vars['signshu']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['signshu']->value,$_smarty_tpl->tpl_vars['mysign']->value)){?>checked<?php }?>> 星期<?php if ($_smarty_tpl->tpl_vars['signshu']->value==7){?>天<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['signshu']->value;?>
<?php }?>  
                  	          <?php $_smarty_tpl->tpl_vars['signshu'] = new Smarty_variable($_smarty_tpl->tpl_vars['signshu']->value+1, null, 0);?> 
                         <?php endfor; endif; ?> 
                        </div>
                        <div class="cl"></div>
                    </div>
                    
                    <div id="limittime2">
                    	
                    	 
                    	<?php $_smarty_tpl->tpl_vars['mysign'] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['cxinfo']->value['limittimes']), null, 0);?>  
                        	  	<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mysign']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
                        	  	   
                        	  	    <?php $_smarty_tpl->tpl_vars['dotime'] = new Smarty_variable(explode("-",$_smarty_tpl->tpl_vars['items']->value), null, 0);?>  
                        	  	    <?php if (count($_smarty_tpl->tpl_vars['dotime']->value)>1){?>
                        	  	     <div class="serxuanze">
                    	  <div class="xuanze_left">
                        	<span>时间段：</span>
                        </div> 
                        <div class="xuanze_right"> 
                        	  	    从<input  name="limittime2[]" value="<?php echo $_smarty_tpl->tpl_vars['dotime']->value[0];?>
" class="ttext" type="text" style=" background:#e0f5ff;width:55px; height:20px;">
                        	  	    至<input  name="limittime22[]" value="<?php echo $_smarty_tpl->tpl_vars['dotime']->value[1];?>
" class="ttext" type="text" style=" background:#e0f5ff;width:55px; height:20px;"><a href="#" onclick="removetime2(this);" style="color:#0989d8;">移除</a> 
                        	  	    </div>  
                         <div class="cl"></div>
                      </div>
                        	  	    <?php }?>
                        	  	  
                        	  	 <?php } ?>
                    	
                       <div class="serxuanze">
                    	  <div class="xuanze_left">
                        	<span>时间段：</span>
                        </div> 
                        <div class="xuanze_right"> 
                        	  	    从<input  name="limittime2[]" value="" class="ttext" type="text" style=" background:#e0f5ff;width:55px; height:20px;">
                        	  	    至<input  name="limittime22[]" value="" class="ttext" type="text" style=" background:#e0f5ff;width:55px; height:20px;"><a href="#" onclick="removetime2(this);" style="color:#0989d8;">移除</a> 
                        	  	    </div>  
                         <div class="cl"></div>
                      </div>
                      					  

                      
                    	<div class="serxuanze" id="addduan">
                    	  <div class="xuanze_left">
                        	<span></span>
                        </div> 
                        <div class="xuanze_right">
                        	  例如：从08:00至11:00   <a href="#" style="color:#0989d8;" onclick="addtimedo(this)">增加时间段</a>
                        </div>  
                         <div class="cl"></div>
                      </div>
                    	
                    </div>
                    
                 
                   
                       
					   
					<div class="serxuanze" id="manjianset">
                    	<div class="xuanze_left">
                        	<span>每满费用金额：</span>
                        </div>
                        <div class="xuanze_right"  >
                        	<input type="text" style=" width:100px;margin-top:5px;height:30px;line-height:30px;" id="mjlimitcost" name="mjlimitcost" value="<?php echo $_smarty_tpl->tpl_vars['cxinfo']->value['mjlimitcost'];?>
" >元
                        </div>
                        <div class="cl"></div>
                    </div>	
					<div class="serxuanze" id="zhekouset">
                    	<div class="xuanze_left">
                        	<span>折扣限制金额：</span>
                        </div>
                        <div class="xuanze_right"  >
                        	<input type="text" style=" width:100px;margin-top:5px;height:30px;line-height:30px;" id="limitzhekoucost" name="limitzhekoucost" value="<?php echo $_smarty_tpl->tpl_vars['cxinfo']->value['limitzhekoucost'];?>
" >元
                        </div>
                        <div class="cl"></div>
                    </div>	
					
                       <div class="serxuanze" id="showdefualt">
                    	<div class="xuanze_left">
                        	<span><font id="cctitle">xxx</font>：</span>
                        </div>
                        <div class="xuanze_right">
                        	<input id="controlcontent" name="controlcontent" value="<?php echo $_smarty_tpl->tpl_vars['cxinfo']->value['controlcontent'];?>
" class="ttext" type="text" style="width:50px;margin-top:5px;height:30px;line-height:30px;"><font id="ccmiaoshu">xxx</font>
                        </div>
                        <div class="cl"></div>
                    </div>
                       
                       
                      
                      <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>生效时间：</span>
                        </div>
                        <div class="xuanze_right">
                        从 <input class="Wdate datefmt" type="text" name="starttime" id="starttime" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['cxinfo']->value['starttime'],"%Y-%m-%d");?>
"  onFocus="WdatePicker({isShowClear:false,readOnly:true});" />
                        	至 <input class="Wdate datefmt" type="text" name="endtime" id="endtime" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['cxinfo']->value['endtime'],"%Y-%m-%d");?>
"  onFocus="WdatePicker({isShowClear:false,readOnly:true});" />
                            
                        </div>
                        <div class="cl"></div>
                    </div>
                      
                      <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>是否启用：</span>
                        </div>
                        <div class="xuanze_right">
                        	<input type="radio" name="status" value="1" checked>已启用
                        	<input type="radio" name="status" value="0" <?php if ($_smarty_tpl->tpl_vars['cxinfo']->value['status']==0){?>checked<?php }?>>未启用
                        </div>
                        <div class="cl"></div>
                    </div>
                      
      
                    
                   <input type="hidden" name="cxid" value="<?php echo $_smarty_tpl->tpl_vars['cxinfo']->value['id'];?>
">
                     
                  	 <div class="settijiao">
                    	
                          <div class="xuanze_right hc_login_btn_div"></div>
                         
                     
                        <div class="cl"></div>
                    </div>
                    
                    
       			 </div>
       			 </form>
             
                
                
        </div>
        <div class="cl"></div>
        
        
        

<script type="text/javascript">
	$(function(){ 
		$("input[name='limittype']:checked").trigger("click"); 
		$('#controltype').trigger('change'); 
	});
	function addtimedo(obj){
		var contentdata = '<div class="serxuanze"><div class="xuanze_left"><span>时间段：</span></div>   <div class="xuanze_right">   从<input  name="limittime2[]" value="" class="ttext" type="text" style=" background:#e0f5ff;width:55px; height:20px;"> 至<input  name="limittime22[]" value="" class="ttext" type="text" style=" background:#e0f5ff;width:55px; height:20px;"><a href="#" onclick="removetime2(this);" style="color:#0989d8;">移除</a>  </div>  <div class="cl"></div>  </div>';
		$('#addduan').before(contentdata);		
	}
	function removetime2(obj){
		$(obj).parent().parent().remove();
	}
	$("input[name='limittype']").click(function(){
		var dovalue = $(this).val();
		if(dovalue ==  2){
			 $('#limittime1').show();
			 $('#limittime2').show();
		}else{
			 if(dovalue == 3){
			 $('#limittime1').hide();
			  $('#limittime2').show();
		}else{
			 $('#limittime1').hide();
			  $('#limittime2').hide();
		  } 
		}
	});
    function changetxt(obj){
        var findvalue = $(obj).find("option:selected").val();
        var doobj = $(obj).find("option:selected");
        $('#showdefualt').show();
        /*	if(findvalue == 1){
         $('#showpresenttitle').show();
         }else{
         $('#showpresenttitle').hide();
         }*/
        if(findvalue == 2){
            $('#manjianset').show();
            $('#zhekouset').hide();
        }
        if(findvalue == 3){
            $('#manjianset').hide();
            $('#zhekouset').show();
        }
        if(findvalue == 4){
            $('#manjianset').hide();
            $('#zhekouset').hide();
            $('#showdefualt').hide();
        }else{
            $('#cctitle').text($(doobj).attr('data1'));
            $('#ccmiaoshu').text($(doobj).attr('data'));
        }
    }
	$('.hc_login_btn_div').click(function(){ 
		//$('#loginForm').submit();
	  subform('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/setshophui"),$_smarty_tpl);?>
',$('#loginForm')); 
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