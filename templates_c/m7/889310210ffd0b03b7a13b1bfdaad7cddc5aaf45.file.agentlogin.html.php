<?php /* Smarty version Smarty-3.1.10, created on 2017-09-21 01:20:55
         compiled from "F:\www\YSH\templates\m7\member\agentlogin.html" */ ?>
<?php /*%%SmartyHeaderCode:1855859c2a3776f0b44-80852153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '889310210ffd0b03b7a13b1bfdaad7cddc5aaf45' => 
    array (
      0 => 'F:\\www\\YSH\\templates\\m7\\member\\agentlogin.html',
      1 => 1483089130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1855859c2a3776f0b44-80852153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'siteurl' => 0,
    'tempdir' => 0,
    'sitelogo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_59c2a377823256_88373797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2a377823256_88373797')) {function content_59c2a377823256_88373797($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>分站管理系统</title>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquery.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/areaadminpage/public/js/artdialog/artDialog.js?skin=wmrPopup" type="text/javascript" language="javascript"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/areaadminpage/public/css/index.css">  
   <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/allj.js" type="text/javascript" language="javascript"></script>
 </head>
<body class="sereCon" style="background-size: cover;">

<div >
	<div class="sereBox">
	<form class="signup_form_form" id="signup_form" method="post" action="" >
		<div class="sereTop">
			<div class="sereImg"><h1><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['sitelogo']->value;?>
"></a></h1></div>
			<div class="sereTit"><h2>分站管理系统</h2></div>
		</div>
		<div class="sereBot">
			<div class="sereInp"><i class="icon icon_user"></i><input type="text"  name="signup_name"   id="signup_name"  placeholder="用户名/手机号"></div>
			<div class="sereInp"><i class="icon icon_pass"></i><input type="password" name="signup_password"  id="signup_password"  placeholder="输入密码"></div>
 			<div class="sereBut"><input type="button" onclick="loginin();" value="登录"></div>
		</div>
		 </form>
	</div>
</div>

 
</body>

<script type="text/javascript">

$(function(){
$("#signup_name").keyup(function(){
        if(event.keyCode == 13){
           loginin();
        }
    });
$("#signup_password").keyup(function(){
        if(event.keyCode == 13){
           loginin();
        }
    });

    $('.rem').click(function(){
        $(this).toggleClass('selected');
    })
    $('#signup_name').focus(function(){
    	$('#signup_name_tip').removeClass();
     })
     $('#signup_password').focus(function(){
    	$('#signup_password_tip').removeClass();
     })
    $('#signup_select').click(function(){
        $('.form_row ul').show();
        event.cancelBubble = true;
    })

    $('#d').click(function(){
        $('.form_row ul').toggle();
        event.cancelBubble = true;
    })

    $('body').click(function(){
        $('.form_row ul').hide();
    })

    $('.form_row li').click(function(){
        var v  = $(this).text();
        $('#signup_select').val(v);
        $('.form_row ul').hide();
    })  
})
function loginin()
{
 
	var url = '<?php echo FUNC_function(array('type'=>'url','link'=>"/member/saveagentlogin/datatype/json"),$_smarty_tpl);?>
'; 
	 $.ajax({
     type: 'post',
     async:false,
     data:$('#signup_form').serialize(),
     url: url.replace('@random@', 1+Math.round(Math.random()*1000)), 
     dataType: 'json',success: function(content) {   
     	//diaerror(content.msg);
     	//signup_name_tip
     	if(content.error == false){ 
      		 window.location.href='<?php echo FUNC_function(array('type'=>'url','link'=>"/areaadminpage/system/module/index"),$_smarty_tpl);?>
';
     		//diasucces('操作成功','');
     	}else{
     		if(content.error == true)
     		{
       			diaerror(content.msg); 
     		}else{
     			diaerror(content); 
     		}
     	}
      // diaerror(content); 
		},
    error: function(content) {  
    	diaerror('请输入用户名和密码！'); 
	  }
   });  
}
</script>

</html><?php }} ?>