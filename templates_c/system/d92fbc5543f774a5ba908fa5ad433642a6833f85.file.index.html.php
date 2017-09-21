<?php /* Smarty version Smarty-3.1.10, created on 2017-09-21 01:10:52
         compiled from "F:\www\YSH\module\wxsite\template\index.html" */ ?>
<?php /*%%SmartyHeaderCode:822759c2a11c3d5d26-11214511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd92fbc5543f774a5ba908fa5ad433642a6833f85' => 
    array (
      0 => 'F:\\www\\YSH\\module\\wxsite\\template\\index.html',
      1 => 1494070422,
      2 => 'file',
    ),
    '4ca7bead5fb5cce761cd65f9a0748f8ed2a01e92' => 
    array (
      0 => 'F:\\www\\YSH\\templates\\m7\\public\\wxsite.html',
      1 => 1503568486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '822759c2a11c3d5d26-11214511',
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
  'unifunc' => 'content_59c2a11d86eef0_53609379',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2a11d86eef0_53609379')) {function content_59c2a11d86eef0_53609379($_smarty_tpl) {?><!DOCTYPE html>
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
/public/wxsite/css/weixinlunbo.css">
  <link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/css/swiper-3.4.1.min.css">
  <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/js/Swiper/idangerous.swiper.js"></script>
 
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
		var myScroll;
		
function loaded() {
	myScroll = new iScroll('wrapper', {
		useTransform: false,
		onBeforeScrollStart: function (e) {
			var target = e.target;
			while (target.nodeType != 1) target = target.parentNode;

			if (target.tagName != 'a' && target.tagName != 'span')
				e.preventDefault();
		}
	});
	 

}
$(function(){ 

document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false); 
document.addEventListener('DOMContentLoaded', function () { setTimeout(loaded, 200); }, false);
});
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
 
 
	
<div class="homescreenadd"   onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/choice"),$_smarty_tpl);?>
');"  ><i class="homescreendw"></i><span lag="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['lat']->value)===null||$tmp==='' ? 0 : $tmp);?>
" lat="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['lng']->value)===null||$tmp==='' ? 0 : $tmp);?>
" id="showareainfo"><?php if ($_smarty_tpl->tpl_vars['areaid']->value>0){?><?php echo $_smarty_tpl->tpl_vars['mapname']->value;?>
<?php }else{ ?>定位中...<?php }?></span><i class="fa fa-angle-right"></i></div>
<div class="homscrsear"  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/search"),$_smarty_tpl);?>
');"   ><input style="    background-position: 3% center;" readonly type="text" placeholder="请输入店铺名、商品名"></div>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['CITY_ID']->value;?>
" />

	
	  
<div id="locationing" style="display: block;">
	<p class="refuImg"><img style="width:65px;"	src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/images/locationing.gif"></p>
	<p class="refuFang">定位中...</p>
</div>

<div id="loadindecContent">
	 
</div>
 
 
<div id="nearnoshop" style="display:none;">
<div id="nearnoshopshowBox" style="background: #fff;"  > 
		<center>
			<div id="noshop1" style="margin-bottom: 0px;height: 115px;width: 250px;"><img style="height: 115px;width: 250px;" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/images/nearnoshop.png"></div>
			<div id="noshop2" style="margin-bottom: 50px;height:25px;line-height:25px;color: #7a7a7a;font-size: 14px;">您所在城市暂无开通</div>
			<div id="noshop3" style="width: 110px;height:38px;line-height:38px;background: #ff6e6e;text-align:center;border-radius: 5px;" onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/choice"),$_smarty_tpl);?>
');"><span style="color:#fff;">切换城市</span></div>
		</center>
</div>
</div>
 
 <script>
 $("#loading").hide(); 
var can_show = true;
 var catid = <?php echo (($tmp = @$_smarty_tpl->tpl_vars['typeid']->value)===null||$tmp==='' ? 0 : $tmp);?>
;
var order = 0;
var qsjid = 0;
var typeid = <?php echo (($tmp = @$_smarty_tpl->tpl_vars['typeid']->value)===null||$tmp==='' ? 0 : $tmp);?>
;
var myaddress = '<?php echo $_smarty_tpl->tpl_vars['myaddress']->value;?>
';
var search_input = '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['search_input']->value)===null||$tmp==='' ? '' : $tmp);?>
';
var shopshowtype  = '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shopshowtype']->value)===null||$tmp==='' ? '0' : $tmp);?>
';
var checknext = false;
var lat = '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['lat']->value)===null||$tmp==='' ? 0 : $tmp);?>
';
var lng = '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['lng']->value)===null||$tmp==='' ? 0 : $tmp);?>
';
var addressname = '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['addressname']->value)===null||$tmp==='' ? '' : $tmp);?>
';
var CITY_ID = '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['CITY_ID']->value)===null||$tmp==='' ? 0 : $tmp);?>
';
var is_loading = false; 
var html5_config = {'showheader':true,'showfooter':true,'bodyscller':true,'Canfresh':false,'CanloadMore':true,'titilename':'外卖频道'};  
$(function(){    
 	  <?php if (!empty($_smarty_tpl->tpl_vars['lng']->value)&&!empty($_smarty_tpl->tpl_vars['lat']->value)&&!empty($_smarty_tpl->tpl_vars['addressname']->value)){?>
		$('#showareainfo').text(addressname);
 		loadindexcontent();
   <?php }else{ ?>   
		if(https == ''){
			getLocation(); 
		}else{
		} 
		
	
    <?php }?> 
	//方便演示测试地址 函数

	 
	 
});
function getLocation(){
     if (navigator.geolocation)
    { 
       navigator.geolocation.getCurrentPosition(showPosition,showError);
    }
   else{
     $('#showareainfo').text("浏览器不支持定位");
	 setTimeout('goChoiceAdr()',1000);
	 loadindexcontent();
   }
}  
function showPosition(position)
{  
	gpstolng(position.coords.latitude,position.coords.longitude);
}
function gpstolng(lat,lng){
	var changelnglaturl = '<?php echo $_smarty_tpl->tpl_vars['map_comment_link']->value;?>
restapi.amap.com/v3/assistant/coordinate/convert?locations='+lng+','+lat+'&coordsys=gps&output=json&key=<?php echo $_smarty_tpl->tpl_vars['map_webservice_key']->value;?>
&callback=changelnglat';
      $.getScript(changelnglaturl); 
} 
function changelnglat(datas){
 	if(datas.status == 1   && datas.info == 'ok' ) {
		var locations = datas.locations;
  		 var getaddurl = '<?php echo $_smarty_tpl->tpl_vars['map_comment_link']->value;?>
restapi.amap.com/v3/geocode/regeo?output=json&location='+locations+'&key=<?php echo $_smarty_tpl->tpl_vars['map_webservice_key']->value;?>
&radius=1000&extensions=all&callback=newrenderReverse';
		$.getScript(getaddurl);
	} 
} 



function newrenderReverse(datas){
  	if(datas.status == 1   && datas.info == 'OK' ) {
	    var lnglat = '';
		var adcode = datas.regeocode.addressComponent.adcode;
		var aois = datas.regeocode.aois;
		var pois = datas.regeocode.pois;
		var roads = datas.regeocode.roads;
		if( aois.length > 0 ){ 
			var lnglat  = aois[0].location; 
			var formatted_address = aois[0].name;
		}else if( pois.length > 0 ){
			var lnglat  = pois[0].location; 
			var formatted_address = pois[0].address;
		}else if( roads.length > 0 ){
			var lnglat  = roads[0].location; 
			var formatted_address = roads[0].name;
		} 
		if( lnglat != '' ){
				var lnglatarr = lnglat.split(',');
				lng = lnglatarr[0];
				lat = lnglatarr[1];
		}  
		$("#showareainfo").attr('lng',lng);
		$("#showareainfo").attr('lat',lat);
		$("#showareainfo").text(formatted_address);  
		 $.ajax({
           type: 'GET', 
           url: '<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/saveloation/datatype/json"),$_smarty_tpl);?>
',
           async:false,
 		   data: {'lat':lat,'lng':lng,'addressname':formatted_address,'adcode':adcode},
           dataType: 'json',success: function(content) { 
               if(content.error == false){ 
					 var areainfo = content.msg.areainfoone;
  					 if( areainfo == '' || areainfo.name == undefined ){
						 setTimeout('goChoiceAdr()',1000);
					 }else{
						CITY_ID = areainfo.adcode;
						loadindexcontent();
					 }
					 
             }else{
             	  loadindexcontent();
             }
	    	  },
           error: function(content) { 
				loadindexcontent();
	        }
       });  
		 
	 }else{
		 $('#showareainfo').text('定位失败');
		 setTimeout('goChoiceAdr()',1000);
		 loadindexcontent();
 	 }
 } 

 
  function showError(error)
  { 
   $('#showareainfo').text(error.code); 
  	$('#showareainfo').text("定位失败");
  	Tmsg("定位失败,请手动选择"); 
   switch(error.code) 
    { 
    case error.PERMISSION_DENIED:
      //x.innerHTML="User denied the request for Geolocation."
    //  $('#showareainfo').text("User denied the request for Geolocation.");
      break;
    case error.POSITION_UNAVAILABLE:
     // x.innerHTML="Location information is unavailable."
      $('#showareainfo').text("Location information is unavailable.");
      break;
    case error.TIMEOUT:
    //  x.innerHTML="The request to get user location timed out."
    //$('#showareainfo').text("The request to get user location timed out.");
      break;
    case error.UNKNOWN_ERROR:
     // x.innerHTML="An unknown error occurred."
     //  $('#showareainfo').text("An unknown error occurred.");
      break;
    } 
	setTimeout('goChoiceAdr()',1000);
    loadindexcontent();    
	
	
  } 
  
  function loadindexcontent(){
		$("#locationing").hide();  
		 
		if( CITY_ID <= 0 ){ 
			  var winHeight = $(window).height()-40-33-46-40;
 			  var allHeight = 115+25+50+38;
 			  var paddHeight = (winHeight-allHeight)/2;
  			  $('#nearnoshopshowBox').css({'height':winHeight+'px','paddingTop':paddHeight+'px'});
			  $('#loadindecContent').html("");
			  $('#loadindecContent').html( $("#nearnoshop").html() );
		}else{
				var ajaxurl = '<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/loadindexcontent"),$_smarty_tpl);?>
'; 
				$.ajax({
				   type: 'POST',
				   async:true,
				   url: ajaxurl,
				   data: {},
				  dataType: 'html',success: function(content) {  
						$('#loadindecContent').html(content);  
						if(typeof html5_config == 'undefined'){
							newTmsg('获取失败');
						}else{  
							if(html5_config.bodyscller == true){
								 setTimeout(function(){  
									$('#wrapper').show();    
									 addfresh();  
								 },500);
							} 
						}
						
				  },
				  error: function(content) { 
						console.log("加载失败");
				   }
				  });
		} 
   
		
		
		  
		 
		  
  }
  
   
function htmlback(url,info)
{
	var backmessage = {'flag':true,'content':''};
	$.ajax({
       type: 'POST',
       async:false,
       url: url.replace('@random@', 1+Math.round(Math.random()*1000)),
       data: info,
      dataType: 'html',success: function(content) {  
	   backmessage['flag'] = false;
      	   backmessage['content'] = content; 
		  },
      error: function(content) { 
      backmessage['content'] = '获取失败';
	   }
   });  
   return backmessage;
}

function goChoiceAdr(){
	 //location.href = '<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/choice"),$_smarty_tpl);?>
';
	 $("#locationing").hide();
	 var winHeight = $(window).height()-40-33-46-40;
 			  var allHeight = 115+25+50+38;
 			  var paddHeight = (winHeight-allHeight)/2;
  			  $('#nearnoshopshowBox').css({'height':winHeight+'px','paddingTop':paddHeight+'px'});
			  $('#loadindecContent').html("");
			  $('#loadindecContent').html( $("#nearnoshop").html() );
}  
</script>
<?php if (!empty($_smarty_tpl->tpl_vars['https']->value)){?>
<script type="text/javascript"> 
function receiveMessage(e) { 
	var newdata = e.data;
	<?php if (!empty($_smarty_tpl->tpl_vars['lng']->value)&&!empty($_smarty_tpl->tpl_vars['lat']->value)&&!empty($_smarty_tpl->tpl_vars['addressname']->value)){?>
		<?php }else{ ?>
			if(newdata.loadtion == 'success'){ 
				gpstolng(newdata.lat,newdata.lng);
			}else{
				setTimeout('goChoiceAdr()',1000);
				loadindexcontent();  
			} 
	<?php }?>
}
if (typeof window.addEventListener != 'undefined') {//使用html5 的postMessage必须处理的
	window.addEventListener('message', receiveMessage, false);
} else if (typeof window.attachEvent != 'undefined') {
	window.attachEvent('onmessage', receiveMessage);
}
</script> 
<?php }?>
 
 
  
 
 
 
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