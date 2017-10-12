<?php
class method   extends baseclass
{
	
	    public function adminupload()  // 会员中心申请开店
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
	 public function userupload()
	 {
	 	  $link = IUrl::creatUrl('member/login');
	 	  if($this->member['uid'] == 0 && $this->admin['uid'] == 0)  $this->message('未登陆',$link);
	 	  $_FILES['imgFile'] = $_FILES['head'];
	 	  $type = IFilter::act(IReq::get('type'));
	 	  if(empty($type)) $this->message('未定义的操作');
			$json = new Services_JSON();
			$uploadpath = 'upload/user/';
		  $filepath ='/upload/user/';
      $upload = new upload($uploadpath,array('gif','jpg','jpge','png'));//upload
      $file = $upload->getfile();
      if($upload->errno!=15&&$upload->errno!=0) {
		      $this->message($upload->errmsg());
		  }else{
		  	  if($type == 'userlogo'){
		  	     $arr['logo'] = $filepath.$file[0]['saveName'];
		  	     $this->mysql->update(Mysite::$app->config['tablepre'].'member',$arr,'uid = '.$this->member['uid'].' ');
		  	  }elseif($type == 'goods'){
		  	  	 $shopid = ICookie::get('adminshopid');
		  	    $gid = intval(IFilter::act(IReq::get('gid')));
		  	     $data['img'] = $filepath.$file[0]['saveName'];
		        $this->mysql->update(Mysite::$app->config['tablepre'].'goods',$data,"id='".$gid."' and shopid='".$shopid."'");
		  	  }elseif($type == 'shoplogo'){
		  	  	$shopid = ICookie::get('adminshopid');
		  	  	if(!empty($shopid)){
		  	  		$data['shoplogo'] = $filepath.$file[0]['saveName'];
		  	  	    $this->mysql->update(Mysite::$app->config['tablepre'].'shop',$data,"id='".$shopid."'");
		  	    }
		  	  }
		      $this->success($filepath.$file[0]['saveName']);
		  }
	 }
	 
	 function ajaxuploadimg(){
	     $link = IUrl::creatUrl('member/login');
	     if($this->member['uid'] == 0 && $this->admin['uid'] == 0)  $this->message('未登陆',$link);
	     $shopid = ICookie::get('adminshopid');
	     $imgtype = IReq::get('imgtype');
	     if(empty($imgtype)) $this->message('未定义的操作');
	     $img = isset($_POST['file'])? $_POST['file'] : '';
	     // 获取图片
	     list($type, $data) = explode(',', $img);
	     // 判断类型
	     if(strstr($type,'image/jpeg')!=''){
	         $ext = '.jpg';
	     }elseif(strstr($type,'image/gif')!=''){
	         $ext = '.gif';
	     }elseif(strstr($type,'image/png')!=''){
	         $ext = '.png';
	     }
	     define('ROOT_PATH', str_replace("\\","/",realpath(dirname(dirname(__FILE__)).'/../')));
	     
	     // 生成的文件名
	     $photo = date("YmdHis",time()).rand(1000,9999).$ext;
	     if($imgtype == 'shoplogo'){
	         $uploadDir = "upload/shoplogo";
	        
	     }
	     if($imgtype == 'userlogo'){
	         $uploadDir = "upload/userlogo";
	     }
	     if($imgtype == 'goods' || $imgtype == 'addgoods'){
	         $uploadDir = "upload/goods";
	     }

	     mkdir($uploadDir);

	     $filepath ="/".$uploadDir."/".$photo;
	     // 生成文件
	     file_put_contents(ROOT_PATH.$filepath, base64_decode($data), true);
	    
	     if(!empty($shopid)){
	         $data = array();
	         if($imgtype == 'shoplogo'){
    	         $data['shoplogo'] = $filepath;
    	         $this->mysql->update(Mysite::$app->config['tablepre'].'shop',$data,"id='".$shopid."'");
	         }
	         if($imgtype == 'goods'){
	             $data['img'] = $filepath;
	             $this->mysql->update(Mysite::$app->config['tablepre'].'goods',$data,"shopid='".$shopid."'");
	         }
	     }
	     // 返回
	     header('content-type:application/json;charset=utf-8');
	     $ret = array('img'=>$filepath);
	     echo json_encode($ret);  
	     die;
	 }
	 
	 function goodsupload(){
	 	 $link = IUrl::creatUrl('member/login');
	 	  if($this->member['uid'] == 0&&$this->admin['uid'] == 0)  $this->message('未登陆',$link);
	 	 $type = IReq::get('type');
		 $goodsid =  intval(IReq::get('goodsid'));
		 $shopid = ICookie::get('adminshopid');
		 if($shopid < 0){
		   echo '无权限操作';
		   exit;
		 }
	   if(is_array($_FILES)&& isset($_FILES['imgFile']))
	   {

	  	$json = new Services_JSON();
      $uploadpath = 'upload/shop/';
		  $filepath ='/upload/shop/';
      $upload = new upload($uploadpath,array('gif','jpg','jpge','doc','png'));//upload
      $file = $upload->getfile();
      if($upload->errno!=15&&$upload->errno!=0) {
		   echo "<script>parent.uploaderror('".json_encode($upload->errmsg())."');</script>";
		  }else{
		     	 if($goodsid > 0&& $shopid > 0){
		     	 	  $data['img'] = $filepath.$file[0]['saveName'];
		          $this->mysql->update(Mysite::$app->config['tablepre'].'goods',$data,"id='".$goodsid."' and shopid='".$shopid."'");
		     	 }
		       echo "<script>parent.uploadsucess('".$filepath.$file[0]['saveName']."');</script>";
		  }
		  exit;
	   }
	   $imgurl ='';
	   if($goodsid > 0 && $type == 'goods'){
	  	  $temp = $this->mysql->select_one("select img from ".Mysite::$app->config['tablepre']."goods where id='".$goodsid."' and shopid='".$shopid."'");
	  	  $imgurl = $temp['img'];
	   }
	    Mysite::$app->setdata(array('type'=>$type,'goodsid'=>$goodsid,'imgurl'=>$imgurl));
	 }
	 
	 function mkdirs($dir, $mode = 0777)
	 {
	     if (is_dir($dir) || @mkdir($dir, $mode)) return TRUE;
	     if (!mkdirs(dirname($dir), $mode)) return FALSE;
	     return @mkdir($dir, $mode);
	 } 
}



?>