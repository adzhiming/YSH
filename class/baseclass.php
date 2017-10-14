<?php 

/**
 * @class baseclass 
 * @描述   基础类
 */
class baseclass
{
	 public $mysql;
	 public $memberCls;
	 public $member;
	 public $pageCls;
	 public $admin;
	 public $digui;
	 public $CITY_ID;
	 public $CITY_NAME;
	 public $platpsinfo;
 	 function init(){
	 	     //主要是检测权限 
	 	     $controller = Mysite::$app->getController();
			 $action = Mysite::$app->getAction(); 
	 	     $this->mysql =  new mysql_class(); 
	 	     $this->memberCls = new memberclass($this->mysql); 
	 	     $this->member = $this->memberCls->getinfo();  
	 	     $this->pageCls = new page();
	 	     $this->admin =  $this->memberCls->getadmininfo();  
	 	     $this->digui = array();//递归处理数组
	 	     $data['member'] = $this->member; 
	 	     $data['admininfo'] = $this->admin; 
			 
			$cityId = 0;
			$CITY_ID = ICookie::get('CITY_ID');
			if( !empty($CITY_ID) ){
				$CITY_IDArr = explode('_',$CITY_ID);
				$cityId = $CITY_IDArr[2];
			}
			if(  ( $controller == 'site' && $action == 'index' )    ||   ( $controller == 'market' && $action == 'index' )   ||   ( $controller == 'site' && $action == 'showcart' )   ||   ( $controller == 'shop' && $action == 'index' )   ) {   
				if( empty($cityId)  ) {
 					$link = IUrl::creatUrl('site/guide'); 
					$this->message('',$link);
				}
			}
			$this->CITY_ID = $cityId;
			$CITY_NAME = ICookie::get('CITY_NAME');
			if( !empty($CITY_NAME) ){
				$CITY_NameArr = explode('_',$CITY_NAME);
				$CITY_NAME = $CITY_NameArr[2];
			}
			$this->CITY_NAME = $CITY_NAME;
			$data['CITY_ID'] = $this->CITY_ID;
			$data['CITY_NAME'] = $this->CITY_NAME;
			 
	 	     $platpsinfo =  $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."platpsset  where cityid='".$cityId."' ");   
			 $this->platpsinfo = $platpsinfo;
			 $data['platpsinfo'] = $platpsinfo;
 			 
	 	     $checkmodule =  $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."module  where name='".$controller."' and install=1 limit 0,20");  
	 	     if(empty($checkmodule) && !in_array($controller,array('site','market'))){ 
	 	         $this->message('未安装此模版'); 
	 	     }  
	 	     $openid =   IFilter::act(IReq::get('openid'));  //openid='.$this->obj->FromUserName.'&='.$time.'&= 
		   	  $actime =  IFilter::act(IReq::get('actime')); 
		   	  if(!empty($openid) && !empty($actime)){
		   	  	if($controller == 'wxsite'){
		   	     $sign =  IFilter::act(IReq::get('sign')); 
		   	    $mycode = Mysite::$app->config['wxtoken'];
		   	    $checkstr = md5($mycode.$actime);
		   	    $checkstr = substr($checkstr,3,15); 
		   	     
		   	    if($checkstr == $sign && !empty($openid)){
		   	   	 
		   	   	  $checkinfo = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."wxuser where openid ='".$openid."' ");
		   	   	  if(!empty($checkinfo)){
		   	   	       ICookie::set('logintype','wx',86400);
		   	   	       ICookie::set('wxopenid',$openid,86400);
		   	   	       $backinfo = IFilter::act(IReq::get('backinfo')); 
		   	   	       if(empty($backinfo)){
		   	   	       $link = IUrl::creatUrl('wxsite/index'); 
		   	   	      }else{
		   	   	        	$newtr = '';
		   	   	         
		   	   	        	$testinfo = explode(',',$backinfo); 
		   	   	        	
                       foreach($testinfo as $key=>$value){
                       	if(!empty($value)){
                            $newtr .= chr($value);
                          }
                       }
                  
		   	   	      	$link = $newtr;
		   	   	       
		   	   	      	if(empty($link)){
		   	   	      	   
		   	   	      		 $link = IUrl::creatUrl('wxsite/index'); 
		   	   	      	}
		   	   	      }
		   	   	       
		   	   	      $this->message('',$link);
		   	      } 
		   	    } 
		   	  }
		   	 }
		   	   
	 	      
	 	     $data['moduleid']= $checkmodule['id']; 
	 	     $data['moduleparent'] = $checkmodule['parent_id']; 
	 	     $id = intval(IFilter::act(IReq::get('id'))); 
	 	     $data['id'] = $id; 
	 	   
	 	     Mysite::$app->setdata($data);  
	 } 
	 public function checkadminlogin(){
	 	 $link = IUrl::creatUrl('member/adminlogin'); 
	 	 if($this->admin['uid'] == 0) $this->message('未登陆',$link); 
	 }
	 public function checkmemberlogin(){
	 	 $link = IUrl::creatUrl('member/login'); 
	 	 if($this->member['uid'] == 0) $this->message('未登陆',$link); 
	 }
	 public function checkshoplogin(){
	 	 $link = IUrl::creatUrl('member/shoplogin'); 
		 $agentadminuid = ICookie::get('agentadminuid');
	 	 if(  $this->member['uid'] == 0&&$this->admin['uid'] == 0 && $agentadminuid == 0  ) {
			 $this->message('未登陆',$link);
		 }  
	 	 $shopid = ICookie::get('adminshopid');
	 	 if(empty($shopid)) $this->message('未登陆',$link); 
	 }
	 public static function sqllink($where,$sqlkey,$sqlvalue,$fuhao){
	 	  if(empty($sqlvalue)){
	 	     return  $where;
	 	  }else{
	 	  	 if(empty($where)){
	 	  	   return  '`'.$sqlkey.'`'.$fuhao.'\''.$sqlvalue.'\'';
	 	  	 }else{
	 	  	 	 return $where.' and `'.$sqlkey.'`'.$fuhao.'\''.$sqlvalue.'\'';
	 	  	 }
	 	  }
	   
	 }
	 public static function message($msg,$link=''){
	 
	 		$datatype = IFilter::act(IReq::get('datatype')); 
	 		if($datatype == 'json'){
	 			 //languagecls
	 			 $lngcls = new languagecls();
	 			 $msg = $lngcls->show($msg);
	 			 echo json_encode(array('error'=>true,'msg'=>$msg));  
	       exit; 
	 		}else{   
         self::refunction($msg,$link);
	 		} 
   }
   public static function refunction($msg,$info=''){
   	  $newrul = empty($info)?Mysite::$app->config['siteurl']:$info;
	    header("Content-Type:text/html;charset=utf-8"); 
	    if(!empty($msg))
	    {
	    	 $lngcls = new languagecls();
	 			 $msg = $lngcls->show($msg);
			   echo '<script>alert(\''.$msg.'\');location.href=\''.$newrul.'\';</script>';
		  }else{
		     echo '<script>location.href=\''.$newrul.'\';</script>';
	  	}
      exit;
   }
   public static function success($msg,$link=''){
   	   $datatype = IFilter::act(IReq::get('datatype'));
	 		if($datatype == 'json'){
	 			 echo json_encode(array('error'=>false,'msg'=>$msg)); 
	             exit; 
	 		}else{
	 		   
	 			 self::refunction($msg,$link); 
	 		}
    	
   }

	public static function shopIsopen($is_open,$starttime,$is_orderbefore,$nowhour){
		$find = 0 ;
		$hfind =0;
		$gotime ='';
		$opentype = 0;
		$endtime = '';
		$checkstart = '';
		$checkend = '';
		if($is_open == 0){
			$opentype = 4;//店铺休息
		}else{
			if(empty($starttime)){
				$opentype = 1;//已打烊
			}else{
				$foo = explode('|',$starttime);
				$opentime=array();
				foreach($foo as $key=>$value){
					if(!empty($value)){
						$mytime = explode('-',$value);
						if(count($mytime) > 1){
							$time1 = strtotime($mytime[0]);
							$time2 = strtotime($mytime[1]);
							$opentime[]=$time1;
							if($nowhour >= $time1 && $nowhour <= $time2){
								$find = 1;
								$opentype = 2;//营业中
								$gotime = empty($gotime)?$mytime[0]:$gotime;
								$endtime = !empty($mytime[1])?strtotime($mytime[1]):$endtime;
							}
							if($nowhour <= $time2){
								//		 			$hfind = 1;
								$gotime = empty($gotime)?$mytime[0]:$gotime;
								$checkstart = empty($checkstart)?strtotime($mytime[0]):$checkstart;
								$checkend = !empty($mytime[1])?strtotime($mytime[1]):$checkend;
							}
						}
					}
				}
				if($nowhour < $opentime[0]){
					$hfind = 1;
				}
				if($opentype == 0){
					if($is_orderbefore == 1 && $hfind ==1){
						$opentype = 3;//3接受预定
					}
				}
			}
		}
		return array('opentype'=>$opentype,'newstartime'=>$gotime,'endtime'=>$endtime,'startoktime'=>$checkstart,'startendtime'=>$checkend);
	}
	
	
 public function pscost($shopinfo,$newlng,$newlat){
  	$backdata = array('pscost'=>0,'pstype'=>0,'canps'=>0,'juli'=>0);
		 
		if( $shopinfo['sendtype'] == 1 ){
				   $pradiusvalue =  unserialize($shopinfo['pradiusvalue']);
			  }else{
				  $pradiusvalue = unserialize($this->platpsinfo['radiusvalue']);
			  }
  		if(!empty($newlng) && !empty($newlat)){
			$lat = $newlat;
			$lng = $newlng;
		}else{
			$lat = ICookie::get('lat');
			$lng = ICookie::get('lng');
		}

		if(!empty($lat)){
  	       	  $lat = empty($lat)?0:$lat;
  	       	  $lng = empty($lng)?0:$lng;
  	       	  $shoplat = isset($shopinfo['lat'])?$shopinfo['lat']:0;
  	       	  $shoplng = isset($shopinfo['lng'])?$shopinfo['lng']:0;
  	       	  $juli =  $this->GetDistance($lat,$lng, $shoplat,$shoplng, 1);  
 			   
  	       	  $juliceshi = intval($juli/1000);
			   $backdata['juli'] = $juliceshi.'Km';
  	       	  if(is_array($pradiusvalue)){
  	       	  foreach($pradiusvalue as $key=>$value){
  	       	    if($juliceshi == $key){
  	       	        $backdata['pscost'] = $value;
  	       	        $backdata['canps'] = 1;
  	       	    }
  	       	  }
  	       	} 
  	  }
  	$backdata['pstype'] = $shopinfo['sendtype'];
    $checkpstype = Mysite::$app->config['psbopen']; 
	if($shopinfo['sendtype'] == 2){
		$backdata['pstype'] =$checkpstype == 1? 2:0;
	} 
  	return $backdata; 
  }

  function  getOpenPosttime($is_before,$starttime,$postdate,$minit,$befortime=0){ 
	    $backarray = array('is_opentime'=>0,'is_posttime'=>'','is_postdate'=>'','cost'=>0);
		$maxnowdaytime = strtotime(date('Y-m-d',time()));
		$daynottime = 24*60*60 -1; 
		$findpostime = false; 
		$posttime = time();
  		$miniday = $maxnowdaytime;
  		$maxday = $miniday+$daynottime; 
  	 
  		 
  	    $findps = false;
		$timelist = !empty($postdate)?unserialize($postdate):array();
		$data['pstimelist'] = array();
		$checknow = time();
		 $whilestatic = $befortime;
		$nowwhiltcheck = 0; 
		while($whilestatic >= $nowwhiltcheck){ 
		
		 
		    $nowstartcheck = $nowwhiltcheck*86400;
			foreach($timelist as $key=>$value){
				$docheck = $nowstartcheck+$value['s'];  
				if($docheck== $minit){
					$findps = true;
					$tempt['s'] = date('H:i',$miniday+$value['s']);
					$tempt['e'] = date('H:i',$miniday+$value['e']);
					$backarray['is_posttime'] = $nowstartcheck+$miniday+$value['s'];
					$backarray['is_postdate'] =  $tempt['s'] .'-'.$tempt['e'];
					$checkdotime = $nowstartcheck+$miniday+$value['e'];
					$backarray['cost'] = isset($value['cost'])?$value['cost']:0;
					if($checkdotime < $posttime){
						$backarray['is_opentime'] = 3; 
					}
					break;
				} 
			}
			$nowwhiltcheck = $nowwhiltcheck+1;
		}
		if($findps ==  false){
			$backarray['is_opentime'] = 2; 
		}
		 
		 return $backarray;
		 
		 
	}
  
  //发送通知信息
  
   public function checkpsinfo(){
	 	 $link = IUrl::creatUrl('member/login'); 
	 	 if($this->member['uid'] == 0) $this->message('未登陆',$link); 
	 	 $link = IUrl::creatUrl('member/base');
	 	 if($this->member['group'] != 2) $this->message('不是配送员',$link); 
	}
  
  
   function GetDistance($lat1, $lng1, $lat2, $lng2, $len_type = 1, $decimal = 2)
  {
     
    	 $earth = 6378.137;
    	 $pi = 3.1415926;
       $radLat1 = $lat1 * PI ()/ 180.0;   //PI()圆周率
       $radLat2 = $lat2 * PI() / 180.0;
       $a = $radLat1 - $radLat2;
       $b = ($lng1 * PI() / 180.0) - ($lng2 * PI() / 180.0);
       $s = 2 * asin(sqrt(pow(sin($a/2),2) + cos($radLat1) * cos($radLat2) * pow(sin($b/2),2)));
       $s = $s * EARTH_RADIUS;
       $s = round($s * 1000);
       if ($len_type > 1)
       {
           $s /= 1000;
       }
	 
       return round($s, $decimal);
   } 
}
?>