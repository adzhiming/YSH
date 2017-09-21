<?php /* Smarty version Smarty-3.1.10, created on 2017-09-21 01:25:45
         compiled from "F:\www\YSH\module\wxsite\template\shopSettled.html" */ ?>
<?php /*%%SmartyHeaderCode:1175159c2a4993bcfc7-71498367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5f36c0326576ee819344119a663897005e26360' => 
    array (
      0 => 'F:\\www\\YSH\\module\\wxsite\\template\\shopSettled.html',
      1 => 1483088272,
      2 => 'file',
    ),
    '4ca7bead5fb5cce761cd65f9a0748f8ed2a01e92' => 
    array (
      0 => 'F:\\www\\YSH\\templates\\m7\\public\\wxsite.html',
      1 => 1503568486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1175159c2a4993bcfc7-71498367',
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
  'unifunc' => 'content_59c2a49992edd8_98831313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2a49992edd8_98831313')) {function content_59c2a49992edd8_98831313($_smarty_tpl) {?><!DOCTYPE html>
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
<title>商家入驻</title> 
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

 
 <style type="text/css">
     .hide{display:none;}
     .mesefillinfo img{vertical-align:middle;float:left;margin:0 5px;}
 </style>
 
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


 <script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/ajaxfileupload.js"> </script>
 
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
var scroll1, scroll2;
function loaded() { 
	scroll1 = new iScroll('wrapper',{
		useTransform: false,
		onBeforeScrollStart: function (e) {
			var target = e.target;
			while (target.nodeType != 1) target = target.parentNode;

			if (target.tagName != 'SELECT' && target.tagName != 'INPUT' && target.tagName != 'TEXTAREA'){
				e.preventDefault();
				}
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
 
 
	
<div class="toptitCon">
 <div class="toptitBox">
  <div class="toptitL"><i></i></div>
  <div class="toptitC"><h3>商家入驻</h3></div>
 </div>
</div>

	
	   
 <div id="wrapper" style="top:40px;">
	<div id="scroller">
 
	
<!--------信息进度-------->
<div class="processCon">
 <i class="pro_01"></i>
 <span class="proaL proaA">商家资料</span>
 <span class="proaC">账户信息</span>
 <span class="proaR">网站审核</span>
</div>
<!--------提示信息-------->
<div class="mesepromptCon">
 <ul>
  <li>1.完善店铺资料，以便于我们了解您的情况。</li>
  <li>2.认证所需资料不公开给任何组织和个人。</li>
  <li>3.审核通过的信息无法修改，如需帮助请致电客服：<?php echo $_smarty_tpl->tpl_vars['litel']->value;?>
</li>
 </ul>
</div>
<!--------填写信息-------->
<div class="mesefillinfo">
 <ul>
   <li><span>联系电话：</span><input type="text" id="shopphone" value=""  placeholder="请输入电话"></li>
  <li><span>店铺名称：</span><input type="text" id="shopname" value=""  placeholder="请输入店铺名称"></li>
  <li><span>店铺地址：</span><input type="text" id="shopaddress" value="" placeholder="请输入店铺地址"></li>




  <li><span>店铺类型：</span>
<select name="shoptype" id="shoptype" style="width:50%;font-size:13px;" >
                 	<?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>
		 <option  value="<?php echo $_smarty_tpl->tpl_vars['itv']->value['cattype'];?>
_<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
"   ><?php echo $_smarty_tpl->tpl_vars['catarr']->value[$_smarty_tpl->tpl_vars['itv']->value['cattype']];?>
-<?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
</option>
													<?php } ?>
							
                      </select>	</li>
     <li style="line-height: 50px;">
         <span style="float:left;">营业执照：</span>
         <img src="" width=50px height=50px id="imgshow" class="hide"/>
         <form id="form1" name="form1" method="post"  enctype="multipart/form-data" target="ifr-headpic-upload" onsubmit="return checkImagetype('1');">

                 <input name="head" type="file" id="imgFile" style="width:70px;" name="imgFile" onchange="$('#input1').val($(this).val())"  class="curbtn">
                 <input id="submitImg" type="button" value="上传" class="ss_sc curbtn" style="border:1px solid #ccc;background-color:white;height:22px;width:40px;" >

         </form>
         <!--<div class="subfile">
         <input  onclick="uploads();" name="imgFile" style="width:50px;height:50px;opacity:0;vertical-align:middle;"/>
         </div>-->

          <input type="hidden"  id="shoplicense"/>
     </li>
 </ul>
</div>








<!--------确认支付-------->
<div class="mesedete" style="margin-top:20px; margin-bottom:20px;"><input type="button" onclick="nextSub();" value="下一步"></div>


  </div>
</div>

<script>
    $('#submitImg').click(function(){
        ajaxFileUpload();
    });
    function ajaxFileUpload()
    {
        $("#loading")
                .ajaxStart(function(){
                    $(this).show();
                })
                .ajaxComplete(function(){
                    $(this).hide();
                });

        $.ajaxFileUpload
        (
                {
                    url:'<?php echo FUNC_function(array('type'=>'url','link'=>"/other/userupload/type/shoplogo/datatype/json"),$_smarty_tpl);?>
',
                    secureuri:false,
                    fileElementId:'imgFile',
                    dataType: 'json',
                    data:{name:'logan', id:'id'},
                    success: function (data, status)
                    {
                        if(typeof(data.error) != 'undefined')
                        {
                            if(data.error == false)
                            {
                                $('#shoplicense').val(data.msg);
                                $('#imgshow').attr('src',data.msg);
                                $('#imgshow').show();
                            }else
                            {
                                alert(data.msg);
                            }
                        }else{
                            alert(data);
                        }
                    },
                    error: function (data, status, e)
                    {
                        alert(e);
                    }
                }
        )

        return false;

    }

    function nextSub(){

		  $('#loading').show();

		url = siteurl+'/index.php?ctrl=wxsite&action=sjapplyrz&datatype=json&random=@random@';
     	  url = url.replace('@random@', 1+Math.round(Math.random()*1000));
        $.ajax({         //script定义
                 url: url.replace('@random@', 1+Math.round(Math.random()*1000)),
                 dataType: "json",
                 async:true,
                 data:{'shopphone':$("#shopphone").val(),'shopname':$("#shopname").val(),'shopaddress':$('#shopaddress').val(),'shoptype':$('#shoptype').val(),'shoplicense':$('#shoplicense').val()},
                 success:function(content) { 
                 	if(content.error ==  false){
					
				 
					 window.location.href=  siteurl+'/index.php?ctrl=wxsite&action=shangjiaapply&shopphone='+content.msg.shopphone+'&shoplicense='+content.msg.shoplicense+'&shopname='+content.msg.shopname+'&shopaddress='+content.msg.shopaddress+'&shoptype='+content.msg.shoptype+'  ' ;
						 
							
                 	}else{
                 		Tmsg(content.msg);
                 	}
                  	$('#loading').toggle();
                 
                 },
                 error:function(){
                  $('#loading').toggle();
                 }
        }); 
		// setTimeout("myyanchi()", 500 ); 
	  $('#loading').show();
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