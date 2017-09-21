<?php  
 $alipay_config['partner']		= '2088221660622072';
 $alipay_config['key']			= 'wvxwp6j53cihewffvlbyy5wk67c7f7zh';
 $alipay_config['sign_type']    = strtoupper('MD5');
 $alipay_config['input_charset']= strtolower('utf-8');
 $alipay_config['transport'] = 'http';
 $alipay_config['cacert']    = getcwd().'\\cacert.pem';
 $notify_url= 'http://wm86.zh0875.com/plug/pay/alipay/notify_url.php';
 $return_url= 'http://wm86.zh0875.com/plug/pay/alipay/return_url.php';
 $seller_email= 'zhtcdsw@126.com';
?>