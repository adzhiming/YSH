<?php /* Smarty version Smarty-3.1.10, created on 2017-09-22 00:03:58
         compiled from "F:\www\YSH\module\wxsite\template\member.html" */ ?>
<?php /*%%SmartyHeaderCode:2376959c2a45984e638-07937411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6109d1320c24c4f74393043bdb13dc49303bbf38' => 
    array (
      0 => 'F:\\www\\YSH\\module\\wxsite\\template\\member.html',
      1 => 1506009834,
      2 => 'file',
    ),
    '4ca7bead5fb5cce761cd65f9a0748f8ed2a01e92' => 
    array (
      0 => 'F:\\www\\YSH\\templates\\m7\\public\\wxsite.html',
      1 => 1503568486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2376959c2a45984e638-07937411',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_59c2a45b2266b6_35746680',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2a45b2266b6_35746680')) {function content_59c2a45b2266b6_35746680($_smarty_tpl) {?><!DOCTYPE html>
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
/public/wxsite/css/new_shopshow.css">

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
/public/wxsite/js/wxshop.js"></script>

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
 
 
	
	
	
<div id="wrapper" style="top:0px;">
    <div id="scroller">


        <!-------------------------登录------------------------->
        <!--基本信息-->
        <div class="peceTopCon">
            <div class="peceTopImg" onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/myaccount"),$_smarty_tpl);?>
');">
            <?php if (!empty($_smarty_tpl->tpl_vars['member']->value['uid'])||$_smarty_tpl->tpl_vars['WeChatType']->value==1){?>
            <img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['member']->value['logo'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['userlogo']->value : $tmp);?>
" />
            <?php }else{ ?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/images/toux.png" />
            <?php }?>
            </div>
            <span>
                <?php if (!empty($_smarty_tpl->tpl_vars['member']->value['uid'])){?>
                <?php echo $_smarty_tpl->tpl_vars['member']->value['username'];?>

                 <?php }else{ ?>
                                    立即登录
                <?php }?>
            </span>
        </div>
    <!-----------------------账户信息----------------------->
    <div class="peceInfoCon">
        <ul>
            <li onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/memcard"),$_smarty_tpl);?>
');"><?php if (!empty($_smarty_tpl->tpl_vars['member']->value['uid'])||$_smarty_tpl->tpl_vars['WeChatType']->value==1){?><span style="color:#fe5858;font-size:16px;font-weight:bold;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['member']->value['cost'])===null||$tmp==='' ? '0' : $tmp);?>
</span> <?php }else{ ?><i class="icon icon_ye"></i> <?php }?><span>账号余额</span></li>
            <li onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/juan"),$_smarty_tpl);?>
');"><?php if (!empty($_smarty_tpl->tpl_vars['member']->value['uid'])||$_smarty_tpl->tpl_vars['WeChatType']->value==1){?><span style="color:#ff9500;font-size:16px;font-weight:bold;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['juanshu']->value)===null||$tmp==='' ? '0' : $tmp);?>
</span><?php }else{ ?> <i class="icon icon_yhq"></i><?php }?><span>优惠券</span></li>
            <li onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/gift"),$_smarty_tpl);?>
');"><?php if (!empty($_smarty_tpl->tpl_vars['member']->value['uid'])||$_smarty_tpl->tpl_vars['WeChatType']->value==1){?><span style="color:#5e5cdf;font-size:16px;font-weight:bold;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['member']->value['score'])===null||$tmp==='' ? '0' : $tmp);?>
</span><?php }else{ ?> <i class="icon icon_jf"></i><?php }?><span>积分</span></li>
        </ul>
    </div>
    <!-----------------------功能分类----------------------->
    <div class="peceFunclaCon">
        <ul class="peceFun">
            <li class="peceCla" onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/address"),$_smarty_tpl);?>
');">
            <i class="icon icon_dizhi"></i>
            <ul>
                <li style="border:none;"><span>管理收货地址</span><i class="fa fa-angle-right"></i></li>
            </ul>
            </li>
        </ul>
        <ul class="peceFun">
            <li class="peceCla" onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/order"),$_smarty_tpl);?>
');">
            <i class="icon icon_sjrz"></i>
            <ul>
                <li><span>我的订单</span><i class="fa fa-angle-right"></i></li>
            </ul>
            </li>
            <li class="peceCla" onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/collect"),$_smarty_tpl);?>
');">
            <i class="icon icon_shouc"></i>
            <ul>
                <li><span>我的收藏</span><i class="fa fa-angle-right"></i></li>
            </ul>
            </li>
            <li class="peceCla" onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/giftlist"),$_smarty_tpl);?>
');">
            <i class="icon icon_duih"></i>
            <ul>
                <li <?php if ($_smarty_tpl->tpl_vars['userextensionsharejuan']->value==0&&$_smarty_tpl->tpl_vars['WeChatType']->value==1){?><?php }else{ ?> style="border:none;"<?php }?>><span>兑换礼品</span><i class="fa fa-angle-right"></i></li>
            </ul>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['userextensionsharejuan']->value==0&&$_smarty_tpl->tpl_vars['WeChatType']->value==1){?>
            <li class="peceCla" onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/memsharej"),$_smarty_tpl);?>
');">
                <i class="icon icon_hongb"></i>
                <ul>
                    <li style="border:none;"><span>邀请好友送红包</span><i class="fa fa-angle-right"></i></li>
                </ul>
            </li>
            <?php }?>
        </ul>
        <ul class="peceFun">
            <li class="peceCla" onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/binding"),$_smarty_tpl);?>
');">
            <i class="icon icon_bdsjh"></i>
            <ul>
                <li><span>绑定手机号</span><b>（绑定后才能获取到红包哦）</b><i class="fa fa-angle-right"></i></li>
            </ul>
            </li>
			 <?php if ($_smarty_tpl->tpl_vars['WeChatType']->value==1){?>
            <?php if ($_smarty_tpl->tpl_vars['wxuserbangd']->value!=1){?>
            <li class="peceCla" onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/bangdmem"),$_smarty_tpl);?>
');">
            <i class="icon icon_bdzh"></i>
            <ul>
                <li><span>绑定账号</span><i class="fa fa-angle-right"></i></li>
            </ul>
            </li>
            <?php }?>
            <?php }?>
            <li class="peceCla" onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/shopSettled"),$_smarty_tpl);?>
');">
            <i class="icon icon_sjrz"></i>
            <ul>
                <li <?php if ($_smarty_tpl->tpl_vars['WeChatType']->value!=1&&!empty($_smarty_tpl->tpl_vars['member']->value['uid'])){?><?php }else{ ?>style="border:none;"<?php }?>><span>商家入驻</span><i class="fa fa-angle-right"></i></li>
            </ul>
            </li>
            <li class="peceCla">
               <i class="icon icon_sjrz"></i>
               <ul>
                <li>
               <span>管理店铺</span>
               </li>
               </ul>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['WeChatType']->value!=1&&!empty($_smarty_tpl->tpl_vars['member']->value['uid'])){?>
            <li class="peceCla" onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/loginout"),$_smarty_tpl);?>
');">
            <i class="icon icon_outlogin"></i>
            <ul>
                <li style="border:none;"><span>退出</span><i class="fa fa-angle-right"></i></li>
            </ul>
            </li>
            <?php }?>
        </ul>
    </div>


</div>
</div>

<script>
    $(function(){

        var cururl = window.location.href;
        $.cookie('wxCurUrl', cururl);

        function isWeiXin(){
            var ua = window.navigator.userAgent.toLowerCase();
            if(ua.match(/MicroMessenger/i) == 'micromessenger'){
                return true;
            }else{
                return false;
            }
        }

        var browser = {

            versions: function () {
                var u = navigator.userAgent, app = navigator.appVersion;

                return {
                    trident: u.indexOf('Trident') > -1, //IE内核
                    presto: u.indexOf('Presto') > -1, //opera内核
                    webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                    gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                    mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/), //是否为移动终端
                    ios: !!u.match(/(i[^;]+;(U;)? CPU.+Mac OS X)/), //ios终端
                    android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
                    iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, //是否为iPhone或者QQHD浏览器
                    iPad: u.indexOf('iPad') > -1, //是否iPad
                    webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
                };
            } (),
            language: (navigator.browserLanguage || navigator.language).toLowerCase()
        }
        if (browser.versions.mobile ) {


            if(isWeiXin()){
                $("#icon-bangdmem").show();
            <?php if ($_smarty_tpl->tpl_vars['wxLoginType']->value==1){?>
                $("#icon-exit").show();
            <?php }else{ ?>
                $("#icon-exit").hide();
            <?php }?>
            }else{

                //	$("#icon-bangdmem").hide();
                $("#icon-exit").show();

            }

        }

    })
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