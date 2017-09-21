<?php
$hopedir = '../../../';
$config = $hopedir."config/hopeconfig.php";   
$cfg = include($config);  
$paydir = $hopedir."/plug/pay/alimobile"; 
require_once($paydir."/alipay.config.php"); 
require_once($paydir."/lib/alipay_notify.class.php");
logResult("错误日志:".json_encode($_POST));
echo 'жуж╧ж╖╦╤';
exit;

?>