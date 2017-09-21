<?php /* Smarty version Smarty-3.1.10, created on 2017-09-21 01:14:56
         compiled from "F:\www\YSH\module\wxsite\template\reg.html" */ ?>
<?php /*%%SmartyHeaderCode:2110159c2a210509c73-07777344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93d6414e528c63410e8fd5ab4bf1629c0531785f' => 
    array (
      0 => 'F:\\www\\YSH\\module\\wxsite\\template\\reg.html',
      1 => 1483088266,
      2 => 'file',
    ),
    '4ca7bead5fb5cce761cd65f9a0748f8ed2a01e92' => 
    array (
      0 => 'F:\\www\\YSH\\templates\\m7\\public\\wxsite.html',
      1 => 1503568486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2110159c2a210509c73-07777344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tempdir' => 0,
    'siteurl' => 0,
    'color' => 0,
    'is_static' => 0,
    'Taction' => 0,
    'https' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_59c2a2110ee932_95962078',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2a2110ee932_95962078')) {function content_59c2a2110ee932_95962078($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="MobileOptimized" content="320">
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta name="HandheldFriendly" content="true">
<meta name="author" content="johnye">
<meta name="shenma-site-verification" content="f28da5e2e3fb6e2afd372a3eedfda998">
<meta name="baidu-site-verification" content="eafwEzRbnz">
<title><?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
</title> 
<link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/css/public1.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/css/newweixin.css"> 
  <link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/newcss/index.css">
  <link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/newcss/font-awesome.min.css">
    <link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/css/scrllo_function.css">
<?php if ($_smarty_tpl->tpl_vars['color']->value=="green"){?>
<link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/newcss/green.css"> 
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['color']->value=="yellow"){?>
<link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/newcss/yellow.css"> 
<?php }?>

  
 <link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/css/gift.css">

	<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/jquery.js"></script> 
  <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/public.js"></script>  
  <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/adminpage/public/js/allj.js"></script>  
   <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/swipe.js"></script> 
  <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/iscroll.js"></script> 
    <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/newiscroll.js"></script>  
	    <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/scrllo_function.js"></script>  
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/jquery.cookie.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquery.lazyload.min.js" type="text/javascript" language="javascript"></script> 

 
  <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/template.min.js"></script>    

<script> 
	var siteurl = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
";
	var is_static ="<?php echo $_smarty_tpl->tpl_vars['is_static']->value;?>
";
	var taction = "<?php echo $_smarty_tpl->tpl_vars['Taction']->value;?>
"; 
	var https = '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['https']->value)===null||$tmp==='' ? '' : $tmp);?>
';
$(function() { 
$("img").lazyload({ 
effect : "fadeIn" 
}); 
}); 
</script>

 <script>
 	$(function(){  		
 	   $('#loading').hide(); 
  });
  </script>


<script> 
		var myScroll;
function loaded() {
	myScroll = new iScroll('wrapper', {
		useTransform: false,
		onBeforeScrollStart: function (e) {
			var target = e.target;
			while (target.nodeType != 1) target = target.parentNode;

			if (target.tagName != 'SELECT' && target.tagName != 'INPUT' && target.tagName != 'TEXTAREA')
				e.preventDefault();
		}
	});
}
document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false); 
document.addEventListener('DOMContentLoaded', function () { setTimeout(loaded, 200); }, false);
</script> 
 	 
<script> 
	function savereg(){  
		   $('#loading').show();
      var info = {'phone':$('#phone').val(),'phoneyan':$('#phoneyan').val(),'tname':$('#uname').val(),'email':$('#email').val(),'pwd':$('#pwd').val(),'pwd2':$('#spwd').val(),'checklogin':'html5'};
		  var url = '<?php echo FUNC_function(array('type'=>'url','link'=>"/member/saveregester/random/@random@/datatype/json"),$_smarty_tpl);?>
'; 
		  var backdata = ajaxback(url,info); 
		  if(backdata.flag == false){ 
					var goPrevUrl = $.cookie('wxCurUrl');
 					 if( goPrevUrl != null && goPrevUrl != '' && goPrevUrl != undefined ){
						window.location.href= goPrevUrl;
					 }else{
						window.location.href= siteurl+'/index.php?ctrl=wxsite&action=member';
					}
		  }else{
		  	$('#loading').hide();
		     Tmsg(backdata.content);
		  }
		  
	}
</script>

 
<?php if (!empty($_smarty_tpl->tpl_vars['https']->value)){?>  
<iframe id="iframe1" name="iframe1" src="<?php echo $_smarty_tpl->tpl_vars['https']->value;?>
/frmeload.html" style="display:none;"></iframe>
<?php }?> 
 
</head>
<body> 
<style>
.page-app{ background:#f0f0f0;}
body{background:#f0f0f0;}
 #loading{text-align:center; wdith:80px; height:90px; margin-left:-40px; margin-top:-45px;  position:absolute;top:50%;left:50%;z-index:99999999; }
#loading .refuImg{  padding: 0px; margin: 0px;  height: 56px;}
#loading .refuImg img{    width: 50px; height: 50px;  margin-top: 3px;}
#loading .refuFang{width: 80px;font-size: 12px; height: 20px; line-height: 20px; padding: 0px;  margin: 0px auto; 
   margin-bottom:3px; color:#323233; text-align: center;}
</style>
  <div id="loading"  style="display: block;">
	<p class="refuImg"><img   src="/upload/images/wmrloading.gif"  ></p>
	<p class="refuFang" >努力加载中...</p>
</div>
 
 
	
<div class="toptitCon">
 <div class="toptitBox">
  <div class="toptitL"><i></i></div>
  <div class="toptitC"><h3>注册</h3></div>
 </div>
</div>

	
	 
 <div id="wrapper" style="top:40px;"> 
	<div id="scroller">
		
 
 
<div class="signinregistertit">
 <ul>
  <li   onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/login"),$_smarty_tpl);?>
');">账号登录</li>
  <li class="ainregaA">账号注册</li>
 </ul>
</div>
<!--帐号注册-->
<div class="signininput">
 <ul>
  <li><i class="signinuser"></i><input type="text" id="uname" value="" placeholder="请输入用户名"></li>
  <li><i class="signinpho"></i><input type="text" id="phone" value="" placeholder="请输入手机号"></li>
    <li id="showgetcode" class="signmehide"><i class="signinmess"></i><input type="text" name="phoneyan" id="phoneyan"   value="" placeholder="输入短信验证码"><input type="button"  onclick="clickyanzheng();"   time="0" id="dosendbtn"  value="发送到手机" class="signmeinput"></li>

  <li><i class="signinpassw"></i><input type="password" id="pwd" value="" placeholder="请输入密码"></li>
  <li><i class="signinqrpas"></i><input type="password" id="spwd"  value="" placeholder="请确认密码"></li>
  <li class="signmehide"><i class="signinmess"></i><input type="text"  placeholder="输入短信验证码"><input type="button" value="剩余120秒" class="signmeinput signmebg1"></li>
 </ul>
</div>
<div class="intexchabutt"><input type="button" value="立即注册" onclick="savereg();" class="intexbg1"><span class="signintyxy"><i class="signinbut"></i><input type="checkbox"><b>点击立即注册即表示同意用户注册协议</b></span></div>




		 <div style="height:10px;"></div>
	</div>
</div>
<script>
 var regestercode = '<?php echo $_smarty_tpl->tpl_vars['regestercode']->value;?>
';
 $(function(){    
    if(regestercode ==  1){
    	$('#showgetcode').show();
     
    } 
}); 
function noshow(msg){  
    	Tmsg(msg);
}
//获取手机验证码
function clickyanzheng(){ 
 
        var tempurl = siteurl+'/index.php?ctrl=member&action=regesterphone&random=@random@&phone=@phone@';
   	 	     tempurl = tempurl.replace('@random@', 1+Math.round(Math.random()*1000)).replace('@phone@',$('#phone').val());
	         $.getScript(tempurl);    
	 
}
function showsend(phone,time){  
  	    $('input[name="phone"]').val(phone);
        $('#dosendbtn').attr('time',time);
        setTimeout("btntime();",1000);   
} 
	function  btntime(){
  
	   var nowtime = Number($('#dosendbtn').attr('time'));
	   if(nowtime > 0){
	      $('#dosendbtn').attr('disabled',true);
	      $('#dosendbtn').addClass('signmebg1');
	      var c = Number(nowtime)-1;
	       $('#dosendbtn').attr('time',c);
	       var  mx = 120-(120 - Number(c));
	        $('#dosendbtn').attr('value','剩余'+mx+'秒');
	         setTimeout("btntime();",1000);
	   }else{
	   	 $('#dosendbtn').attr('disabled',false);
		  $('#dosendbtn').removeClass('signmebg1');
	   	 $('#dosendbtn').attr('value','重新发送');
     }
  
}
	
	
	

 </script>
 
 
 
 
 
     <div class="bottom-bar-warp">
        <div class="bottom-bar" id="bottom-bar">
            <div class="bbar-btn tap-click" onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/index"),$_smarty_tpl);?>
');"  ><i  class="icon icon_home"></i><div class="text" style="margin-top:-8px;">首页</div></div>
            <div class="bbar-btn tap-click" onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/shopSettled"),$_smarty_tpl);?>
');" ><i class="icon icon_user"></i><div class="text" style="margin-top:-8px;">商家入驻</div></div>
     
            <div class="bbar-btn tap-click" onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/togethersay"),$_smarty_tpl);?>
');"  ><i class="icon icon_order"></i><div class="text" style="margin-top:-8px;">一起说</div></div>
            <div class="bbar-btn"  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/member"),$_smarty_tpl);?>
');"><i class="icon icon_phone" style="margin-top: 8px;"></i></a><a class="text"  style="margin-top:-10px;">个人中心</div>
        </div>
    </div>




    
<?php if ($_smarty_tpl->tpl_vars['color']->value=="green"){?>
<script>
	$(function(){
		if( taction  == 'index' ){          	
			$(".icon_home").next().css('color','#00cd85');			
			$(".icon_home").css('backgroundPosition','0px -23px');		
		}
		if( taction  == 'member' ){		
			$(".icon_phone").next().css('color','#00cd85');
			$(".icon_phone").css('backgroundPosition','-92px -23px');		
		}
		if( taction  == 'order' ){		
			$(".icon_user").next().css('color','#00cd85');
			$(".icon_user").css('backgroundPosition','-23px -23px');		
		}
			if( taction  == 'togethersay' ){		
			$(".icon_order").next().css('color','#00cd85');
			$(".icon_order").css('backgroundPosition','-69px -23px');		
		}
	});
</script>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['color']->value=="yellow"){?>
<script>
	$(function(){
		if( taction  == 'index' ){          	
			$(".icon_home").next().css('color','#ff7600 ');			
			$(".icon_home").css('backgroundPosition','0px -23px');		
		}
		if( taction  == 'member' ){		
			$(".icon_phone").next().css('color','#ff7600 ');
			$(".icon_phone").css('backgroundPosition','-92px -23px');		
		}
		if( taction  == 'order' ){		
			$(".icon_user").next().css('color','#ff7600 ');
			$(".icon_user").css('backgroundPosition','-23px -23px');		
		}
			if( taction  == 'togethersay' ){		
			$(".icon_order").next().css('color','#ff7600 ');
			$(".icon_order").css('backgroundPosition','-69px -23px');		
		}
	});
</script>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['color']->value=="red"||empty($_smarty_tpl->tpl_vars['color']->value)){?>
<script>
	$(function(){
		if( taction  == 'index' ){          	
			$(".icon_home").next().css('color','#ff6e6e');			
			$(".icon_home").css('backgroundPosition','0px -23px');		
		}
		if( taction  == 'member' ){		
			$(".icon_phone").next().css('color','#ff6e6e');
			$(".icon_phone").css('backgroundPosition','-92px -23px');		
		}
		if( taction  == 'order' ){		
			$(".icon_user").next().css('color','#ff6e6e');
			$(".icon_user").css('backgroundPosition','-23px -23px');		
		}
			if( taction  == 'togethersay' ){		
			$(".icon_order").next().css('color','#ff6e6e');
			$(".icon_order").css('backgroundPosition','-69px -23px');		
		}
	});
</script>
<?php }?>
 
  
</body>
</html>
 <?php }} ?>