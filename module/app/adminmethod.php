<?php
class method   extends adminbaseclass
{
	function cateset(){
		$default_cityid = isset(Mysite::$app->config['default_cityid'])?Mysite::$app->config['default_cityid']:0;
 		$data['default_cityinfo'] = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."area  where adcode = '".$default_cityid."' ");
  	    
 			$catparent = $this->mysql->getarr("select * from ".Mysite::$app->config['tablepre']."shoptype  where  type='checkbox' order by cattype asc limit 0,100");
			$catlist = array();
			foreach($catparent as $key=>$value){
				$tempcat   = $this->mysql->getarr("select * from ".Mysite::$app->config['tablepre']."shoptype  where parent_id = '".$value['id']."'  limit 0,100");
				foreach($tempcat as $k=>$v){
					 $catlist[] = $v;
				}
			}
			$data['catarr'] = array('0'=>'外卖','1'=>'超市');
			$data['catlist'] = $catlist; 
			 
			 $data['appadvlist'] =  $this->mysql->getarr("select * from ".Mysite::$app->config['tablepre']."appadv  where cityid = '".$default_cityid."' or cityid = 0 order by orderid asc   limit 0,100");
		Mysite::$app->setdata($data); 
	}
	
	
	
	function savemodulepaixu(){  //新增首页模块排序
	limitalert();
		$orderid = intval(IFilter::act(IReq::get('orderid')));
		$name = trim(IFilter::act(IReq::get('name'))); 
		$data['orderid'] = $orderid;
		$this->mysql->update(Mysite::$app->config['tablepre'].'appmudel',$data,"name='".$name."'");
		$this->success('success');
	}
	  function appset(){
			
	
		 	$data['appmodulelist'] = $this->mysql->getarr("select * from ".Mysite::$app->config['tablepre']."appmudel where  FIND_IN_SET( name , 'collect,newuser,gift')  order by orderid asc  limit 0,100"); 
			$catparent = $this->mysql->getarr("select * from ".Mysite::$app->config['tablepre']."shoptype  where  type='checkbox' order by cattype asc limit 0,100");
			$catlist = array();
			foreach($catparent as $key=>$value){
				$tempcat   = $this->mysql->getarr("select * from ".Mysite::$app->config['tablepre']."shoptype  where parent_id = '".$value['id']."'  limit 0,100");
				foreach($tempcat as $k=>$v){
					 $catlist[] = $v;
				}
			}
			$data['catarr'] = array('0'=>'外卖','1'=>'超市');
			$data['catlist'] = $catlist; 
			 
			$data['appadvlist'] =  $this->mysql->getarr("select * from ".Mysite::$app->config['tablepre']."appadv   order by orderid asc   limit 0,100");
		    $config = new config('appset.php',hopedir);   
	     	$tempinfo = $config->getInfo(); 
			$data['appinfo'] = $tempinfo;
			//$config->write($test);
        	Mysite::$app->setdata($data); 
		 
	 }
	 //添加APP图片
	 function appmdimg(){
		 limitalert();
		 $mudulename =  trim(IFilter::act(IReq::get('mudulename')));
		 $checkinfomd =  $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."appmudel where name='".$mudulename."' limit 0,100");
		 if(empty($checkinfomd)){
			 $this->message('模块不存在'); 
		 }
		 $imgurl = trim(IFilter::act(IReq::get('imgurl')));
		 if(empty($imgurl)){
			 $this->message('图片不存在'); 
		 }
		 $data['imgurl'] = $imgurl;
		 $this->mysql->update(Mysite::$app->config['tablepre'].'appmudel',$data,"name='".$mudulename."'");
		 
		 $this->success('成功');
	 }
	 function docontroladv(){ 
	 limitalert();
		 $ctrlname = trim(IFilter::act(IReq::get('ctrlname')));
		 if($ctrlname == 'is_show'){//是否首页展示
		    $modulename = trim(IFilter::act(IReq::get('modulename')));
			if(empty($modulename)){
				$this->message('模块不存在');
			}
			$checkmodule =  $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."appmudel where name='".$modulename."' limit 0,100");
			if(empty($checkmodule)){
				$this->message('模块不存在');
			}
			$data['is_display'] = intval(IFilter::act(IReq::get('modulevalue')));
			 $this->mysql->update(Mysite::$app->config['tablepre'].'appmudel',$data,"name='".$modulename."'");
			 $this->success('成功');
		 }elseif($ctrlname == 'is_install'){
			 $modulename = trim(IFilter::act(IReq::get('modulename')));
			if(empty($modulename)){
				$this->message('模块不存在');
			}
			$checkmodule =  $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."appmudel where name='".$modulename."' limit 0,100");
			if(empty($checkmodule)){
				$this->message('模块不存在');
			}
			$data['is_install'] = intval(IFilter::act(IReq::get('modulevalue')));
			if($data['is_install'] == 0){
				$data['is_display'] = 0;
			}
			 $this->mysql->update(Mysite::$app->config['tablepre'].'appmudel',$data,"name='".$modulename."'");
			 $this->success('成功');
		 }
		 
		 // 'ctrlname':'is_show','modulename':$(this).attr('data'),'modulevalue',$("input[name='is_display']:checked").val()
		 exit;
	 }
    //保存固定类型  8.3新增到店消费  lzh
    function addgd(){
		limitalert();
        $this->limitalert();
        $cattypeid = IFilter::act(IReq::get('typeid'));//跳转属性指     typeid 为lifthelp时候是固定的生活服务 数字时候是分类
        $name = trim(IFilter::act(IReq::get('name')));// 跳转属性
        $appposition = intval(IFilter::act(IReq::get('appposition')));//1轮播图片可多个     2（固定展示区域）    3（自由展示区域 需要自定义内容）
        $id = intval(IFilter::act(IReq::get('id')));
        $orderid = intval(IFilter::act(IReq::get('orderid')));
        if(empty($cattypeid))$this->message('未选择模块');
        if(empty($name)) $this->message('未录入名称');
        if(empty($appposition))$this->message('未设置展示类型');
		
		$default_cityid = isset(Mysite::$app->config['default_cityid'])?Mysite::$app->config['default_cityid']:0;
		$data['cityid'] = $default_cityid;
		
		$where = "  and cityid = '".$default_cityid."'  " ;

        if( $cattypeid != 'lifehelp' && $cattypeid != 'shophui' && $cattypeid != 'paotui'){
            $checkinfo = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."shoptype  where  id='".$cattypeid."' order by cattype asc limit 0,100");
            if(empty($checkinfo)) $this->message('未查找到分类值');
            if($id > 0){
                $checkinfo2 = $this->mysql->select_one("select param from ".Mysite::$app->config['tablepre']."appadv  where id='".$id."'  ".$where." ");
                if($checkinfo2['param'] != $cattypeid) {
                    $checkaa = $this->mysql->counts("select id from " . Mysite::$app->config['tablepre'] . "appadv  where  param='" . $cattypeid . "' and  type = '".$appposition."'   ".$where." 		");
                    if ($checkaa > 0) $this->message('跳转页面分类选项不可重复选择');
                }
            }else {
                $checkinfo2 = $this->mysql->counts("select id from " . Mysite::$app->config['tablepre'] . "appadv  where  param='" . $cattypeid . "' and  type = '".$appposition."'   ".$where." 	 ");
                if ($checkinfo2 > 0) $this->message('跳转页面分类选项不可重复选择');
            }

            $data['activity'] =  empty($checkinfo['cattype'])?'waimai':'market';

        }else{
            if($cattypeid == 'lifehelp'){
                $data['activity'] =  'lifehelp';
            }
			if($cattypeid == 'shophui'){
                $data['activity'] =  'shophui';
            }
			if($cattypeid == 'paotui'){
                $data['activity'] =  'paotui';
            }

            if($id > 0){
                $checkinfo2 = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."appadv  where  id='".$id."'  ".$where."    ");
                if($checkinfo2['param'] != $cattypeid) {
                    $checkaa = $this->mysql->counts("select id from " . Mysite::$app->config['tablepre'] . "appadv  where  param='" . $cattypeid . "' and  type = '".$appposition. "'  ".$where."  ");
                    if ($checkaa > 0) $this->message('跳转页面分类选项不可重复选择');
                }

            }else{
                $checkinfo2 = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."appadv  where  param='".$cattypeid."' and type = '".$appposition."'  ".$where."   ");
                if (!empty($checkinfo2)) $this->message('跳转页面分类选项不可重复选择');
            }

        }


        $data['orderid'] = $orderid;
        $data['name'] = $name;
        $data['type'] = $appposition;
        $data['img'] = trim(IFilter::act(IReq::get('imgurl')));
        if(empty($data['img'])) $this->message('图片为空');
        //需要转换


        $data['param'] = $cattypeid;
        if($id > 0){
            $this->mysql->update(Mysite::$app->config['tablepre'].'appadv',$data,"id='".$id."'");
        }else{
            $this->mysql->insert(Mysite::$app->config['tablepre'].'appadv',$data);
        }
        $this->success('成功');
    }
	 function addad(){
		 limitalert();
		 $this->limitalert();
			$name = trim(IFilter::act(IReq::get('name')));// 跳转属性
			$appposition = intval(IFilter::act(IReq::get('appposition')));//1轮播图片可多个     2（固定展示区域）    3（自由展示区域 需要自定义内容） 
			$id = intval(IFilter::act(IReq::get('id')));
		 
			if(empty($name)) $this->message('未录入名称'); 
			if(empty($appposition))$this->message('未设置展示类型'); 
			
			$data['name'] = $name;
			$data['type'] = $appposition;
			$data['img'] = trim(IFilter::act(IReq::get('imgurl')));
			if(empty($data['img'])) $this->message('图片为空');
			//需要转换
			$data['activity'] ='';
			$data['param'] = 0; 
			if($id > 0){
				 $this->mysql->update(Mysite::$app->config['tablepre'].'appadv',$data,"id='".$id."'");
			}else{
				$this->mysql->insert(Mysite::$app->config['tablepre'].'appadv',$data); 
			}
			$this->success('成功'); 
	 }
	 function delappadv(){
		 limitalert();
		 $this->limitalert();
	    $id =  intval(IFilter::act(IReq::get('id')));
	    $this->mysql->delete(Mysite::$app->config['tablepre'].'appadv',"id  = '".$id."' "); 
	    $this->success('操作成功');
	 }
	function appindexshow(){
		limitalert();
	   #  $this->message('请联系管理员');
		  $config = new config('appset.php',hopedir);   
	     	$tempinfo = $config->getInfo();  
		$type =  trim(IFilter::act(IReq::get('type')));
		if($type == 'APPindex'){
			$APPindex = intval(IFilter::act(IReq::get('APPindex')));
			$tempinfo['APPindex'] = $APPindex;
		}elseif($type == 'apppayonline'){
			$apppayonline = intval(IFilter::act(IReq::get('apppayonline')));
			$tempinfo['apppayonline'] = $apppayonline;
		}elseif($type == 'apppayacount'){
			$apppayacount = intval(IFilter::act(IReq::get('apppayacount')));
			$tempinfo['apppayacount'] = $apppayacount;
		}elseif($type=='appdataver'){
			$appdataver = intval(IFilter::act(IReq::get('appdataver')));
			$tempinfo['appdataver'] = $appdataver;
		}else{
			$this->message('未定义的操作');
		}
		 $config->write($tempinfo);
		 $this->success('success');
		
	}
	 function saveappset(){
	limitalert();
 	$this->limitalert();
		$savedata['appsecret'] =  trim(IFilter::act(IReq::get('appsecret')));
		$savedata['appuser'] = trim(IFilter::act(IReq::get('appuser')));
		$savedata['xmbao'] = trim(IFilter::act(IReq::get('xmbao')));
		$savedata['xmtitle'] = trim(IFilter::act(IReq::get('xmtitle')));
		$savedata['miuiKey'] = trim(IFilter::act(IReq::get('miuiKey'))); 
		
		$savedata['appsecret2'] = trim(IFilter::act(IReq::get('appsecret2')));
		$savedata['appuser2'] = trim(IFilter::act(IReq::get('appuser2'))); 
		
		$savedata['xmbao2'] = trim(IFilter::act(IReq::get('xmbao2')));
		$savedata['xmtitle2'] = trim(IFilter::act(IReq::get('xmtitle2')));
		$savedata['miuiKey2'] = trim(IFilter::act(IReq::get('miuiKey2')));
		
		
		
		$savedata['appuser3'] = trim(IFilter::act(IReq::get('appuser3'))); 
		$savedata['appsecret3'] = trim(IFilter::act(IReq::get('appsecret3')));  
		$savedata['xmbao3'] = trim(IFilter::act(IReq::get('xmbao3')));
		$savedata['xmtitle3'] = trim(IFilter::act(IReq::get('xmtitle3')));
		$savedata['miuiKey3'] = trim(IFilter::act(IReq::get('miuiKey3'))); 
		
		
		$savedata['appvison1'] = intval(IFilter::act(IReq::get('appvison1')));  
		$savedata['appdownload1'] = IFilter::act(IReq::get('appdownload1'));
		 $savedata['appdownload1ios'] = IFilter::act(IReq::get('appdownload1ios'));
		$savedata['appvison2'] = intval(IFilter::act(IReq::get('appvison2')));  
		$savedata['appdownload2'] = IFilter::act(IReq::get('appdownload2'));
		 $savedata['appdownload2ios'] = IFilter::act(IReq::get('appdownload2ios'));
		$savedata['appvison3'] = intval(IFilter::act(IReq::get('appvison3')));  
		$savedata['appdownload3'] = IFilter::act(IReq::get('appdownload3'));
		 $savedata['appdownload3ios'] = IFilter::act(IReq::get('appdownload3ios'));
		$savedata['ymengkey'] = IFilter::act(IReq::get('ymengkey'));
		$savedata['qqshareappid'] = IFilter::act(IReq::get('qqshareappid'));
		$savedata['qqsharekey'] = IFilter::act(IReq::get('qqsharekey')); 
		$config = new config('hopeconfig.php',hopedir);
	    $config->write($savedata);
	    $this->success('success'); 
	} 
	function limitalert(){
	 #	$this->message("您暂无权限设置,如有疑问请联系QQ：375952873  Tel：18538930577");
	}
	function buyermsg(){  
		 
  }	
  function piliangmsg(){  
		$content = IFilter::act(IReq::get('content')); 
		$titlecontent =  IFilter::act(IReq::get('titlecontent')); 
		if(empty($titlecontent)){
			$this->message('定义标题不能为空');
		}
		if(empty($content)){
			$this->message('发送内容不能为空');
		}
		$this->pageCls->setpage(IReq::get('page'),15); 
		$psylist = $this->mysql->getarr("select * from ".Mysite::$app->config['tablepre']."appbuyerlogin  as a left join ".Mysite::$app->config['tablepre']."member as b on a.uid=b.uid    order by a.addtime   limit ".$this->pageCls->startnum().", ".$this->pageCls->getsize()."");
		if(empty($psylist) || count($psylist) == 0){
			$this->message('发送完毕');
		}
		$psCls = new appbuyclass(); 
		$psCls->SetUserlist($userlist)->sendNewmsg($titlecontent,$content); 
		if(count($userlist) > 0){
			$this->success('ok');
		}else{
		  $this->message('发送完毕');
		}
	   
  }
  function buyerapp(){
  	 
  	$where = "";
  	$searchvalue =  trim(IReq::get('searchvalue'));
    $data['searchvalue'] = '';
    $newlink="";
  	if(!empty($searchvalue)){
  	  $data['searchvalue'] = $searchvalue;
  	  $where = "  where   b.username like '%".$searchvalue."%' ";
  	  $newlink = "/searchvalue/".$searchvalue;
  	}
  	 
   
  	
   
  	$link = IUrl::creatUrl('/adminpage/app/module/buyerapp'.$newlink);
	   $this->pageCls->setpage(IReq::get('page'),15);
	    	
	    	 //order: id  dno 订单编号 shopuid 店铺UID shopid 店铺ID shopname 店铺名称 shopphone 店铺电话 shopaddress 店铺地址 buyeruid 购买用户ID，0未注册用户 buyername
	    	 //
	    	$data['list'] = $this->mysql->getarr("select * from ".Mysite::$app->config['tablepre']."appbuyerlogin  as a left join ".Mysite::$app->config['tablepre']."member as b on a.uid=b.uid  ".$where." order by a.addtime   limit ".$this->pageCls->startnum().", ".$this->pageCls->getsize()."");
	    	$shuliang  = $this->mysql->counts("select * from ".Mysite::$app->config['tablepre']."appbuyerlogin as a left join ".Mysite::$app->config['tablepre']."member as b on a.uid=b.uid   ".$where."   ");
	    	$this->pageCls->setnum($shuliang);
	    	
	    	$data['pagecontent'] = $this->pageCls->getpagebar($link);
   
  	Mysite::$app->setdata($data);
  }
  
  function delappbuyer(){
	  limitalert();
     $id = IFilter::act(IReq::get('id'));
     $ids = is_array($id)?join(',',$id):$id;
     if(empty($ids)) $this->message('删除id错误');
      
     $this->mysql->delete(Mysite::$app->config['tablepre'].'appbuyerlogin','uid in('.$ids.')');
  	 $this->success('success');
  }
  
  function sendmsg(){ 
	  $uid = intval(IFilter::act(IReq::get('uid')));
      $content = IFilter::act(IReq::get('content')); 
	  if(empty($uid)) $this->message('用户UID不能为空');
	  if(empty($content)) $this->message('信息内容不能为空');   
	  $appcheck =  $this->mysql->select_one("select *  from ".Mysite::$app->config['tablepre']."appbuyerlogin where uid = '".$uid."'   "); 
	  if(empty($appcheck)) $this->message('用户信息不存在');   
		$appCls = new appbuyclass(); 
		$tempuser[] = $appcheck;			
		$backinfo =$appCls->SetUserlist($tempuser)->sendNewmsg('管理员通知',$content); 
		if($backinfo == 'ok'){
			$this->success('success');
	   }else{
			$this->message($backinfo);
	   }
	           
  }
  function shopapp(){
  	 
  	$where = "";
  	$searchvalue =  trim(IReq::get('searchvalue'));
    $data['searchvalue'] = '';
    $newlink="";
  	if(!empty($searchvalue)){
  	  $data['searchvalue'] = $searchvalue;
  	  $where = "  where     b.username like '%".$searchvalue."%' ";
  	  $newlink = "/searchvalue/".$searchvalue;
  	}
  	 
   
  	
   
  	$link = IUrl::creatUrl('/adminpage/app/module/shopapp'.$newlink);
	   $this->pageCls->setpage(IReq::get('page'),15);
	    	
	    	 //order: id  dno 订单编号 shopuid 店铺UID shopid 店铺ID shopname 店铺名称 shopphone 店铺电话 shopaddress 店铺地址 buyeruid 购买用户ID，0未注册用户 buyername
	    	 //
	    	$data['list'] = $this->mysql->getarr("select * from ".Mysite::$app->config['tablepre']."applogin  as a left join ".Mysite::$app->config['tablepre']."member as b on a.uid=b.uid  ".$where." order by a.addtime   limit ".$this->pageCls->startnum().", ".$this->pageCls->getsize()."");
	    	$shuliang  = $this->mysql->counts("select * from ".Mysite::$app->config['tablepre']."applogin as a left join ".Mysite::$app->config['tablepre']."member as b on a.uid=b.uid   ".$where."   ");
	    	$this->pageCls->setnum($shuliang);
	    	
	    	$data['pagecontent'] = $this->pageCls->getpagebar($link);
   
  	Mysite::$app->setdata($data);
  }
  function delappshop(){
	  limitalert();
     $id = IFilter::act(IReq::get('id'));
     $ids = is_array($id)?join(',',$id):$id;
     if(empty($ids)) $this->message('删除id错误');
      
     $this->mysql->delete(Mysite::$app->config['tablepre'].'applogin','uid in('.$ids.')');
  	 $this->success('success');
  }
  function sendshopmsg(){
  	$uid = intval(IFilter::act(IReq::get('uid')));
  	$content = IFilter::act(IReq::get('content'));
      
	  if(empty($uid)) $this->message('用户UID不能为空');
	  if(empty($content)) $this->message('信息内容不能为空');   
	  $appcheck =  $this->mysql->select_one("select *  from ".Mysite::$app->config['tablepre']."applogin where uid = '".$uid."'   "); 
	  if(empty($appcheck)) $this->message('用户信息不存在');  
		$appCls = new appclass(); 
		$tempuser[] = $appcheck;			
		$backinfo =$appCls->SetUserlist($tempuser)->sendNewmsg('管理员通知',$content);      
	   if($backinfo == 'ok'){
	     $this->success('success');
	   }else{
	   $this->message($backinfo);
	   }
	           
  }
  function psapp(){
  	 
  	$where = "";
  	$searchvalue =  trim(IReq::get('searchvalue'));
    $data['searchvalue'] = '';
    $newlink="";
  	if(!empty($searchvalue)){
  	  $data['searchvalue'] = $searchvalue;
  	  $where = "  where     b.username like '%".$searchvalue."%' ";
  	  $newlink = "/searchvalue/".$searchvalue;
  	}
  	 
   
  	
   
  	$link = IUrl::creatUrl('/adminpage/app/module/psapp'.$newlink);
	   $this->pageCls->setpage(IReq::get('page'),15);
	    	
	    	 //order: id  dno 订单编号 shopuid 店铺UID shopid 店铺ID shopname 店铺名称 shopphone 店铺电话 shopaddress 店铺地址 buyeruid 购买用户ID，0未注册用户 buyername
	    	 //
	    	$data['list'] = $this->mysql->getarr("select * from ".Mysite::$app->config['tablepre']."apploginps  as a left join ".Mysite::$app->config['tablepre']."member as b on a.uid=b.uid  ".$where." order by a.addtime   limit ".$this->pageCls->startnum().", ".$this->pageCls->getsize()."");
	    	$shuliang  = $this->mysql->counts("select * from ".Mysite::$app->config['tablepre']."apploginps as a left join ".Mysite::$app->config['tablepre']."member as b on a.uid=b.uid   ".$where."   ");
	    	$this->pageCls->setnum($shuliang);
	    	
	    	$data['pagecontent'] = $this->pageCls->getpagebar($link);
   
  	Mysite::$app->setdata($data);
  }
  function delappps(){
	  limitalert();
     $id = IFilter::act(IReq::get('id'));
     $ids = is_array($id)?join(',',$id):$id;
     if(empty($ids)) $this->message('删除id错误');
      
     $this->mysql->delete(Mysite::$app->config['tablepre'].'apploginps','uid in('.$ids.')');
  	 $this->success('success');
  }
  function sendpsmsg(){
  	$uid = intval(IFilter::act(IReq::get('uid')));
  	$content = IFilter::act(IReq::get('content'));
      
	  if(empty($uid)) $this->message('用户UID不能为空');
	  if(empty($content)) $this->message('信息内容不能为空');   
	  $appcheck =  $this->mysql->select_one("select *  from ".Mysite::$app->config['tablepre']."apploginps where uid = '".$uid."'   "); 
	  if(empty($appcheck)) $this->message('用户信息不存在');  
	    $appCls = new apppsyclass(); 
	    $tempuser[] = $appcheck;			
		$backinfo = $appCls->SetUserlist($tempuser)->sendNewmsg('管理员通知',$content); 
		if($backinfo == 'ok'){
	     $this->success('success');
	   }else{
	   $this->message($backinfo);
	   }
	           
  }
   
}



?>