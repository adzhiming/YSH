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

mysql_query(" ALTER TABLE `xiaozu_order` ADD `psbflag` int(1)  DEFAULT '0' ");

//mysql_query(" ALTER TABLE `xiaozu_juanrule` ADD `paytype` varchar(20) NULL ");

 

//mysql_query("ALTER TABLE  `xiaozu_goods` ADD  `is_live` CHAR(1) NOT NULL DEFAULT '1' COMMENT  '上、下架'; ");
//
//mysql_query(" ALTER TABLE `xiaozu_orderdet` ADD  `typeid` VARCHAR( 100 )  NULL ");
//
//
// mysql_query("ALTER TABLE `xiaozu_member` ADD `md_flag` INT( 1 ) NOT NULL DEFAULT '0' COMMENT '分钟数';");
// mysql_query("ALTER TABLE `xiaozu_onlinelog` ADD `paydotype` VARCHAR( 100 ) NOT NULL ");
// mysql_query("ALTER TABLE `xiaozu_orderps` ADD `dotype` INT( 1 ) NOT NULL DEFAULT '1'");
#mysql_query("delete from  `xiaozu_member` where uid = 275");





echo mysql_error();
mysql_close($lnk);		 
echo 'ok';
exit;		
?>