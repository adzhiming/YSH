<?php  
$alipay_config['partner']		= '2088221660622072'; 
$alipay_config['key']			= 'wvxwp6j53cihewffvlbyy5wk67c7f7zh'; 
$alipay_config['private_key_path']	= '/www/wwwroot/www.zh0875.com/wm86/plug/pay/alimobile/key/rsa_private_key.pem';
$alipay_config['ali_public_key_path']= '/www/wwwroot/www.zh0875.com/wm86/plug/pay/alimobile/key/alipay_public_key.pem';
$alipay_config['sign_type']    = 'MD5';
$alipay_config['input_charset']= 'utf-8'; 
$alipay_config['cacert']    = getcwd().'\\cacert.pem';
$alipay_config['transport']    = 'http';
$alipay_config['notify_url'] = 'http://wm86.zh0875.com/plug/pay/alimobile/notify_url.php';
$alipay_config['return_url'] = 'http://wm86.zh0875.com/plug/pay/alimobile/call_back_url.php';
$alipay_config['error_url'] = 'http://wm86.zh0875.com/plug/pay/alimobile/error.php';
$alipay_config['seller_email'] = 'zhtcdsw@126.com';
?>