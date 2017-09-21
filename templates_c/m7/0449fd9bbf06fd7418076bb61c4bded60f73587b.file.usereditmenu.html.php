<?php /* Smarty version Smarty-3.1.10, created on 2017-09-21 01:22:06
         compiled from "F:\www\YSH\templates\m7\shopcenter\usereditmenu.html" */ ?>
<?php /*%%SmartyHeaderCode:3259c2a3be310a05-27458597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0449fd9bbf06fd7418076bb61c4bded60f73587b' => 
    array (
      0 => 'F:\\www\\YSH\\templates\\m7\\shopcenter\\usereditmenu.html',
      1 => 1483090808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3259c2a3be310a05-27458597',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urlshort' => 0,
    'siteurl' => 0,
    'tempdir' => 0,
    'shopinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_59c2a3be67fef7_55635902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2a3be67fef7_55635902')) {function content_59c2a3be67fef7_55635902($_smarty_tpl) {?> <div class="waimaiset"> 
	<div class="jbset <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='shopcenter/useredit'){?> onset<?php }?>" onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/useredit"),$_smarty_tpl);?>
');">
                	<img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/jbBg.png" /><span>基本设置</span>
                </div>
                <?php if (empty($_smarty_tpl->tpl_vars['shopinfo']->value['shoptype'])){?>
                <div  class="jbset <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='shopcenter/usershopfast'){?> onset<?php }?>" onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/usershopfast"),$_smarty_tpl);?>
');" >
                	<img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/wmset.png" /><span>外卖设置</span>
                </div>
                <?php }else{ ?>
                <div  class="jbset <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='shopcenter/usershopmarket'){?> onset<?php }?>"   onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/usershopmarket"),$_smarty_tpl);?>
')">
                	<img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/wmset.png" /><span>超市市场</span>
                </div>
                
                <?php }?> 
                <div class="jbset <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='shopcenter/usershopinstro'){?> onset<?php }?>" onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/usershopinstro"),$_smarty_tpl);?>
');">
                	<img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/dianpujieshao.png" /><span>店铺介绍</span>
                </div>
                <div class="jbset <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='shopcenter/usershopnotice'){?> onset<?php }?>" onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/usershopnotice"),$_smarty_tpl);?>
');">
                	<img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/gonggao.png" /><span>店铺公告</span>
                </div>
                 <div class="jbset <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='shopcenter/usershopreal'){?> onset<?php }?>" onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/usershopreal"),$_smarty_tpl);?>
');">
                 <img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/dianpujieshao.png" /><span>商家实景</span>
                 </div>
              </div>
<script>       	
				$(function(){
					$(".waimaiset .jbset").click(function(){
						$(this).css('background','#ec7501').siblings().css('background','');
						
					});	
					
				});
 </script>
       	 
       		 <?php }} ?>