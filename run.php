<?php
 
header("Content-Type:text/html;charset=utf-8"); 
define('hopedir', dirname(__FILE__).DIRECTORY_SEPARATOR);  
$config = hopedir."config/hopeconfig.php";   
$cfg = include($config); 
 
$lnk = mysql_connect($cfg['dbhost'], $cfg['dbuser'], $cfg['dbpw']) or die ('Not connected : ' . mysql_error()); 
$version = mysql_get_server_info(); 
if($version > '4.1' && $cfg['dbcharset']) {
				mysql_query("SET NAMES '".$cfg['dbcharset']."'");
} 
if($version > '5.0') {
				mysql_query("SET sql_mode=''");
}
												
if(!@mysql_select_db($cfg['dbname'])){ 
				if(@mysql_error()) {
					echo '数据库连接失败';exit;
				} else {
					mysql_select_db($cfg['dbname']);
				}
}


	
	
	mysql_query("ALTER TABLE  `".$cfg['tablepre']."order` CHANGE  `shopdowncost`  `shopdowncost` VARCHAR( 30 ) NULL DEFAULT  '0' COMMENT  '促销金额中平台承担的部分'");

	 mysql_query(' DROP TRIGGER IF EXISTS `orderJs` ');
	 
	 mysql_query("
	
	CREATE TRIGGER `orderJs` AFTER UPDATE ON `".$cfg['tablepre']."order`
 FOR EACH ROW begin
 
  
 
 if old.paystatus = 0 && new.paystatus = 1 then
	if old.pstype = 0 && old.is_goshop =0 && old.shoptype != 100 &&  old.is_make = 1 then 
  		  insert into `".$cfg['tablepre']."orderps`(`orderid`,`shopid`,`psuid`,`psusername`,`psemail`,`status`,`dno`,`addtime`,`pstime`,`psycost`,`picktime`,`dotype`)
               		  values(old.id,new.shopid,0,'','',0,new.dno,unix_timestamp(),new.posttime,0,0,1);  
	end if; 
end if;
#当商家确认制作后执行
if old.is_make = 0 && new.is_make = 1 then
	if old.pstype = 0 && old.is_goshop =0 && old.shoptype != 100  then 
	 
  		  insert into `".$cfg['tablepre']."orderps`(`orderid`,`shopid`,`psuid`,`psusername`,`psemail`,`status`,`dno`,`addtime`,`pstime`,`psycost`,`picktime`,`dotype`)
               		  values(old.id,new.shopid,0,'','',0,new.dno,unix_timestamp(),new.posttime,0,0,1);  
	end if;
 
end if;
 
 
set @dotime = unix_timestamp();
 
IF old.status <> 3 && new.status = 3 then
select id into @cf_id from ".$cfg['tablepre']."shopjs where orderid=old.id;
    IF @cf_id is null then 

            select id,shoptype,yjin,uid into @cf_shopid,@cf_shoptype,@cf_yjin,@cf_uid from ".$cfg['tablepre']."shop where id=old.shopid;
            IF @cf_shoptype = 1 then
                    select sendtype into @cf_sendtype from ".$cfg['tablepre']."shopmarket where shopid=@cf_shopid;
                    
            ELSE         
                    select sendtype into @cf_sendtype from ".$cfg['tablepre']."shopfast where shopid=@cf_shopid;
            END IF;
            
            IF old.paytype =1 then 
            	set @onlinecost = old.allcost;
                set @onlinecount = 1;
                set @unlinecost = 0;
                set @unlinecount = 0;
				
            ELSE
            	set @onlinecost = 0;
                set @onlinecount = 0;
                set @unlinecost = old.allcost;
                set @unlinecount = 1;
            END IF;
            
            IF @cf_sendtype = 1 then
            	set @yjcost = (old.shopcost+old.bagcost+old.shopps-(old.cxcost-old.shopdowncost))*(@cf_yjin*0.01);
				set @acountcost = (old.shopcost+old.bagcost+old.shopps-(old.cxcost-old.shopdowncost))*(1-@cf_yjin*0.01);
                
		   ELSE
            	set @yjcost = (old.shopcost+old.bagcost-(old.cxcost-old.shopdowncost))*(@cf_yjin*0.01);
            	set @acountcost = (old.shopcost+old.bagcost-(old.cxcost-old.shopdowncost))*(1-@cf_yjin*0.01);
                
			END IF;
    	    
            insert into ".$cfg['tablepre']."shopjs(onlinecount,onlinecost,unlinecount,unlinecost,yjb,acountcost,yjcost,pstype,shopid,shopuid,addtime,jstime,orderid) values (@onlinecount,@onlinecost,@unlinecount,@unlinecost,@cf_yjin,@acountcost,@yjcost,@cf_sendtype,@cf_shopid,@cf_uid,@dotime,@dotime,old.id);  
            
			
			select max(id) into @n from `".$cfg['tablepre']."shopjs`;
			
			if @n is null  then
				set @n=1;
			else
				set @n=@n+1;
			end if;
			
			select shopcost into @cf_shopcost from ".$cfg['tablepre']."member where uid=@cf_uid;
			set @add_cost = @cf_shopcost+@acountcost;
			insert into ".$cfg['tablepre']."shoptx(cost,type,status,addtime,shopid,shopuid,name,yue,jsid) values (@acountcost,3,2,@dotime,@cf_shopid,@cf_uid,'订单结算转入',@add_cost,@n);
			
			UPDATE  `".$cfg['tablepre']."member` SET `shopcost` = `shopcost`+@acountcost  WHERE `uid`=@cf_uid;  
        
	 
     END IF;
     ELSEIF old.is_reback = 1 && new.is_reback = 2 then
		IF  old.status = 3   then  
			select id,onlinecost,onlinecount,unlinecount,unlinecost,yjb,yjcost,pstype,shopid,shopuid,acountcost,jsid,orderid into @cf_id,@cf_onlinecost,@cf_onlinecount,@cf_unlinecount,@cf_unlinecost,@cf_yjb,@cf_yjcost,@cf_pstype,@cf_shopid,@cf_shopuid,@cf_acountcost,@cf_jsid,@cf_orderid from ".$cfg['tablepre']."shopjs where orderid=old.id;
			IF @cf_id is null then 
				set @X = 1;
			ELSE			 
				select shopcost into @cf_shopcost from ".$cfg['tablepre']."member where uid=@cf_shopuid;
				set @jian_cost = @cf_shopcost-@cf_acountcost;
				insert into ".$cfg['tablepre']."shoptx(cost,type,status,addtime,shopid,shopuid,name,yue,jsid) values (@cf_acountcost,3,2,@dotime,@cf_shopid,@cf_shopuid,'订单退款扣款',@jian_cost,@cf_id);
				
				UPDATE  `".$cfg['tablepre']."member` SET `cost` = `cost`-@cf_acountcost  WHERE `uid`=@cf_shopuid;
			
			END IF;
		END IF;
ELSE	 
	 set @X = 1;
END IF;
end;
	
	 ");
	  

echo mysql_error();
mysql_close($lnk);		 
echo 'ok';
exit;		
?>