<?php
class method   extends areaadminbaseclass
{
	 
	 
	 function wxkefu(){
		$cityid = $this->admin['cityid'];
		$countyid = $this->admin['countyid'];
		$platpssetinfo = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."platpsset  where countyid = '".$countyid."'  ");
  		$data['station'] = $platpssetinfo;
		Mysite::$app->setdata($data); 
	}
	 function savewxkefu(){
		 
		 $cityid = $this->admin['cityid'];
		 $countyid = $this->admin['countyid'];
	 	 $platpssetinfo = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."platpsset  where cityid='".$cityid."' and  countyid = '".$countyid."'  ");
		 
	     $data['wxkefu_open'] =  intval(IFilter::act(IReq::get('wxkefu_open'))); 
	     $data['wxkefu_ewm'] =  trim(IFilter::act(IReq::get('wxkefu_ewm'))); 
	     $data['wxkefu_phone'] =  trim(IFilter::act(IReq::get('wxkefu_phone'))); 
		 if( !empty($platpssetinfo) ){
			 $this->mysql->update(Mysite::$app->config['tablepre'].'platpsset',$data,"cityid='".$cityid."' and countyid='".$countyid."'");	 
		 } else{
			 $data['cityid'] = $cityid;
			 $data['countyid'] = $countyid;
			  $this->mysql->insert(Mysite::$app->config['tablepre'].'platpsset',$data);  
		} 
	    $this->success('success'); 
		 
	 }

	 
	 
	 public function adminupload()
	 {
	 	 $func = IFilter::act(IReq::get('func'));
		 $obj = IReq::get('obj');
		 $uploaddir =IFilter::act(IReq::get('dir'));
		if(is_array($_FILES)&& isset($_FILES['imgFile']))
		{
	   	  $uploaddir = empty($uploaddir)?'goods':$uploaddir;
	  	  $json = new Services_JSON();
          $uploadpath = 'upload/'.$uploaddir.'/';
		   $filepath = '/upload/'.$uploaddir.'/';
         $upload = new upload($uploadpath,array('gif','jpg','jpge','doc','png'));//upload 自动生成压缩图片
         $file = $upload->getfile();
         if($upload->errno!=15&&$upload->errno!=0){
		     echo "<script>parent.".$func."(true,'".$obj."','".json_encode($upload->errmsg())."');</script>";
		   }else{
		      echo "<script>parent.".$func."(false,'".$obj."','".$filepath.$file[0]['saveName']."');</script>";

		   }
		   exit;
	   }
	   $data['obj'] = $obj;
	   $data['uploaddir'] = $uploaddir;
	   $data['func'] = $func;
	   Mysite::$app->setdata($data);
	 }

	public function uploadapp(){
		$func = IFilter::act(IReq::get('func'));
		$obj = IReq::get('obj');
		$uploaddir =IFilter::act(IReq::get('dir'));
		if(is_array($_FILES)&& isset($_FILES['imgFile']))
		{
			$uploaddir = empty($uploaddir)?'goods':$uploaddir;
			$json = new Services_JSON();
			$uploadpath = 'upload/'.$uploaddir.'/';
			$filepath = '/upload/'.$uploaddir.'/';
			$upload = new upload($uploadpath,array('gif','jpg','jpge','doc','png'));//upload 自动生成压缩图片
			$file = $upload->getfile();
			if($upload->errno!=15&&$upload->errno!=0){
				echo "<script>parent.".$func."(true,'".$obj."','".json_encode($upload->errmsg())."');</script>";
			}else{
				echo "<script>parent.".$func."(false,'".$obj."','".$filepath.$file[0]['saveName']."');</script>";

			}
			exit;
		}
		$data['obj'] = $obj;
		$data['uploaddir'] = $uploaddir;
		$data['func'] = $func;
		Mysite::$app->setdata($data);
	}

	public function saveupload()
	 {
		  $json = new Services_JSON();
      $uploadpath = 'upload/goods/';
		  $filepath = '/upload/goods/';
      $upload = new upload($uploadpath,array('gif','jpg','jpge','png'));//upload
      $file = $upload->getfile();
     if($upload->errno!=15&&$upload->errno!=0) {
			$msg = $json->encode(array('error' => 1, 'message' => $upload->errmsg()));

		  }else{
			$msg = $json->encode(array('error' => 0, 'url' => $filepath.$file[0][saveName], 'trueurl' => $upload->returninfo['name']));
		 }
		 echo $msg;
		 exit;
	 }

	 
   function addspecialpage(){  //添加或者编辑 专题页
	   
		$id = intval(IReq::get('id'));
		$data['info'] = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."specialpage where id=".$id."  ");
	 

	 	Mysite::$app->setdata($data);
	}
	 function savespecialpage(){  // 保存或者更新 专题页
		$id = IReq::get('ztyid');
	 
 	   	$data['name'] = IReq::get('name');
		$data['indeximg'] = IReq::get('indeximg');
		$data['imgwidth'] = IReq::get('imgwidth');
		$data['imgheight'] = IReq::get('imgheight');
		$data['specialimg'] = IReq::get('specialimg');
	   	$data['color'] = IReq::get('color');
	   	$data['is_custom'] = intval(IReq::get('is_custom'));
	   	$data['showtype'] = intval(IReq::get('showtype'));
	   	$shopcx_type = intval(IReq::get('shopcx_type'));
	   	$goodscx_type = intval(IReq::get('goodscx_type'));
		$data['addtime'] = time();
		if($data['showtype'] == 0 ){
			$data['cx_type'] = $shopcx_type;
		}
		if($data['showtype'] == 1 ){
			$data['cx_type'] = $goodscx_type;
		}
	 
	   	$data['is_show'] = intval(IReq::get('is_show'));
	   	$data['orderid'] = intval(IReq::get('orderid'));
	   	$data['ruleintro'] = IReq::get('ruleintro');
		
		 $data['cityid']	= $this->admin['cityid'];
		 
		 if(empty($id)){
			 $linkurl = IUrl::creatUrl('areaadminpage/other/module/specialpage');
		 }else{
			 
			 $linkurl =  IUrl::creatUrl('areaadminpage/other/module/addspecialpage/id/'.$id); 
			 
		 }
		 
		if(empty($data['name'])) $this->message('名称不能为空',$linkurl);
		if(empty($data['indeximg'])) $this->message('首页显示图片不能为空',$linkurl);
		if(empty($data['color'])) $this->message('专题页背景色调不能为空',$linkurl);
		if( $data['is_custom'] !=0 && $data['is_custom'] !=1) $this->message('请选择活动格式',$linkurl);
		 
		if( $data['showtype'] !=0 && $data['showtype'] !=1  ) $this->message('请选择活动针对对象',$linkurl);
		if( $data['is_custom'] == 1 ){
			if($data['cx_type'] <=0 && $data['cx_type'] >1) $this->message('请选择对象对应活动类型',$linkurl);
		}
		if($data['is_custom'] == 0){
			$data['cx_type'] = 0;
		}
	   	if(empty($id))
	   	{
			$link = IUrl::creatUrl('areaadminpage/other/module/specialpage'); 
	   		$this->mysql->insert(Mysite::$app->config['tablepre'].'specialpage',$data);
	 	$this->success('success',$link);
	   	}else{
	    	$link = IUrl::creatUrl('areaadminpage/other/module/addspecialpage/id/'.$id); 
			$this->mysql->update(Mysite::$app->config['tablepre'].'specialpage',$data,"id='".$id."'");
			$this->success('success',$link);
	   	}
	//   	$link = IUrl::creatUrl('areaadminpage/other/module/specialpage');	 
	 //   $this->success('success',$link);
	    
   } 
   
    function delspecialpage(){  //删除专题页
		$this->message("您暂无权限删除，请联系管理员");
	
		$id = IReq::get('id');
		if(empty($id))  $this->message('未选中');
		$ids = is_array($id)? join(',',$id):$id;
		$this->mysql->delete(Mysite::$app->config['tablepre'].'specialpage'," id in($ids) ");
		$this->success('success');
	}
	function setstatus(){
	    $data['shoptype'] = array('0'=>'外卖','1'=>'超市');
	   Mysite::$app->setdata($data);
	}
	function selectztyobj(){	//专题页选择对象
	    $this->setstatus();
	    $where = '';
	    $goodswhere = '';
	     
	    
	    $data['shopname'] =  trim(IReq::get('shopname'));
	    $data['name'] =  trim(IReq::get('name'));
	   $data['username'] =  trim(IReq::get('username'));
	 	 $data['phone'] = trim(IReq::get('phone'));
	 	 if(!empty($data['shopname'])){
 		    $where .= " and shopname like '%".$data['shopname']."%'";
	 	 }
	 	 if(!empty($data['username'])){
	 	   $where .= " and uid in(select uid from ".Mysite::$app->config['tablepre']."member where username='".$data['username']."')";
	 	 }
	 	 if(!empty($data['phone'])){
	 	    $where .=" and phone='".$data['phone']."'";
	 	 }
	 	 
	 	 //构造查询条件
	 	 $data['where'] = $where; 
	    
		
		 if(!empty($data['shopname'])){
 		    $goodswhere .= " and shopname like '%".$data['shopname']."%'";
	 	 }
		 if(!empty($data['name'])){
	 	    $goodswhere .= " and name like '%".$data['name']."%'";
	 	 }
		
		
		$id = IReq::get('id');
		$data['id'] = $id;
		$ztyinfo = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."specialpage where id=".$id."  ");
		$data['ztyinfo'] = $ztyinfo;
		
		$this->pageCls->setpage(intval(IReq::get('page')),60); 
	   
	  if($ztyinfo['showtype'] ==0){ 
 			$selectlist = $this->mysql->getarr("select * from ".Mysite::$app->config['tablepre']."shop  where is_pass = 1 ".$where."  order by sort asc  limit ".$this->pageCls->startnum().", ".$this->pageCls->getsize()."  ");
 			$shuliang  = $this->mysql->counts("select * from ".Mysite::$app->config['tablepre']."shop  where is_pass = 1 ".$where." ");
	  }     
	   
	   if($ztyinfo['showtype'] == 1){
 			$selectlist = $this->mysql->getarr("select a.*,b.shopname from ".Mysite::$app->config['tablepre']."goods as a left join  ".Mysite::$app->config['tablepre']."shop as b  on a.shopid = b.id where a.id > 0 and b.id > 0 ".$goodswhere."  order by a.good_order asc  limit ".$this->pageCls->startnum().", ".$this->pageCls->getsize()." ");
			
			$shuliang  = $this->mysql->counts("select a.*,b.shopname from ".Mysite::$app->config['tablepre']."goods as a left join  ".Mysite::$app->config['tablepre']."shop as b  on a.shopid = b.id where a.id > 0 ".$goodswhere."  ");
		 
	   }
	  #  print_r($selectlist);
	   $this->pageCls->setnum($shuliang); 
	  $data['pagecontent'] = $this->pageCls->getpagebar();
 		$data['selectlist'] = $selectlist;
 
	    Mysite::$app->setdata($data);
	    
	}
	function saveselectztyobj(){	//选择专题页对象 集
		$id = IReq::get('id');
		$zjtype = IReq::get('zjtype');
		
		
		$selectobjids = IReq::get('selectobjids');  //160,156, 
		$temparray  = explode(',',$selectobjids);
	/* 	$seobjids = implode(',',$temparray); // 160,156 */
		
		$checkinfo = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."specialpage where id=".$id."  ");
		if(!empty($checkinfo)){
			
			
			$yuanlaiids = explode( ',',$checkinfo['listids'] );
		    $tempids = array_diff($yuanlaiids,$temparray);
		 
			if($zjtype == 1){
				foreach($temparray as $key=>$value){
						$tempids[] = $value;
				}
			
			}
			 $templistids = array();
			foreach($tempids as  $key=>$value){
				if(!empty($value)){
					$templistids[] = $value;
				}
			}
			
			$data['listids'] = count($templistids >0)? join(',',$templistids):'';
			
			$this->mysql->update(Mysite::$app->config['tablepre'].'specialpage',$data,"id='".$id."'");
			$this->success('success');
		}
		
	}
	 
	
	
}
