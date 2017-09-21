<?php /* Smarty version Smarty-3.1.10, created on 2017-09-21 01:24:37
         compiled from "F:\www\YSH\module\wxsite\template\togethersaydata.html" */ ?>
<?php /*%%SmartyHeaderCode:2039059c2a4552beaa1-63079636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70d906122b5d584300011dbea91f33ff8ff5a4fb' => 
    array (
      0 => 'F:\\www\\YSH\\module\\wxsite\\template\\togethersaydata.html',
      1 => 1488789254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2039059c2a4552beaa1-63079636',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'togethersaylist' => 0,
    'items' => 0,
    'siteurl' => 0,
    'tempdir' => 0,
    'member' => 0,
    'zanmuyou' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_59c2a4557a8b70_95877987',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2a4557a8b70_95877987')) {function content_59c2a4557a8b70_95877987($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\www\\YSH\\lib\\Smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_load_data')) include 'F:\\www\\YSH\\lib\\Smarty\\libs\\plugins\\function.load_data.php';
?><?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['togethersaylist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
<li class="wxusersay_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
">
	<div class="wxusercontent">
		<div class="wxuserinfo">
			<span><img class="userlogo" src="<?php echo $_smarty_tpl->tpl_vars['items']->value['logo'];?>
" /></span>
						<span style="margin-left:7px;display:block;">
							<p class="wxusername <?php if ($_smarty_tpl->tpl_vars['items']->value['sex']==1){?> wxnan <?php }elseif($_smarty_tpl->tpl_vars['items']->value['sex']==2){?> wxnv <?php }else{ ?><?php }?>"><?php echo $_smarty_tpl->tpl_vars['items']->value['username'];?>
</p>
							<p class="wxuserxx"><?php echo $_smarty_tpl->tpl_vars['items']->value['streetname'];?>
&nbsp;&nbsp;&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['addtime'],"%m-%d %H:%M");?>
</p>
						</span>
		</div>
		<div class="clear"></div>

		<div  onclick="caozuousercont(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);" class="wxusercontdr"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/images/iconfont-chevron-down.png" /></div>
		<div <?php if ($_smarty_tpl->tpl_vars['items']->value['uid']==$_smarty_tpl->tpl_vars['member']->value['uid']){?>onclick="wxuserdel(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);"<?php }else{ ?>onclick="wxuserjubao(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
);"<?php }?> class="wxusercomfir wxusercomfir_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" style="display:none;">
		<span panduanattr="<?php if ($_smarty_tpl->tpl_vars['items']->value['uid']==$_smarty_tpl->tpl_vars['member']->value['uid']){?>shanchu<?php }else{ ?>jubao<?php }?>"  class="jubaouser"><?php if ($_smarty_tpl->tpl_vars['items']->value['uid']==$_smarty_tpl->tpl_vars['member']->value['uid']){?>删除<?php }else{ ?>举报<?php }?></span>
	</div>

	<div class="yiqisayusercont">
		<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['items']->value['usercontent']);?>

	</div>
	<?php if ($_smarty_tpl->tpl_vars['items']->value['wxuserimgarr'][0]!=''){?>
	<div class="yiqisayuserimgs" style="height:205px; position:relative; overflow:hidden; margin-bottom:5px;" >

		<img  class="previewImage" dataattr="<?php echo $_smarty_tpl->tpl_vars['items']->value['userimg'];?>
"  sayid="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['items']->value['wxuserimgarr'][0];?>
" />

		<div style="width:100%;background:#000; opacity:0.7;filter:alpha(opacity=70);  position:absolute; bottom:0px;right:0px; height:28px; line-height:28px; ">

		</div>
		<div style="position:absolute; color:#ffffff; right:15px; bottom:2px; font-size:14px; ">
			共<?php echo count($_smarty_tpl->tpl_vars['items']->value['wxuserimgarr']);?>
张
		</div>

	</div>
	<?php }?>
	<div style="height:22px; ">
		<div   onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/commentwxuser/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
');"  class="zzshuliang  zongmsg"><?php echo $_smarty_tpl->tpl_vars['items']->value['pingjiazongshu'];?>
</div>
	<?php echo smarty_function_load_data(array('assign'=>"zanmuyou",'table'=>"wxpjzan",'type'=>"one",'where'=>"commentid=".((string)$_smarty_tpl->tpl_vars['items']->value['id'])." and uid=".((string)$_smarty_tpl->tpl_vars['member']->value['uid'])." ",'fileds'=>"*"),$_smarty_tpl);?>

	<div   zanidattr="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" pingjiaattr="<?php if ($_smarty_tpl->tpl_vars['zanmuyou']->value==''){?>0<?php }else{ ?>1<?php }?>" class="zongzanshuliang zongzanshuliang_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
 zzshuliang <?php if ($_smarty_tpl->tpl_vars['zanmuyou']->value==''){?> zongzanshu <?php }else{ ?> zongzanshucur <?php }?>"><?php echo $_smarty_tpl->tpl_vars['items']->value['zongzanshu'];?>
</div>
	</div>

	</div>
</li>
<?php } ?><?php }} ?>