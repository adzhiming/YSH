<?php
 $url = "https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token=ACCESS_TOKEN";
			   $data="";
			   $cookie="";
			     $curl = curl_init(); // ����һ��CURL�Ự
    curl_setopt($curl, CURLOPT_URL, $url); // Ҫ���ʵĵ�ַ
     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // ����֤֤����Դ�ļ��
   // curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 1); // ��֤���м��SSL�����㷨�Ƿ����
    curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // ģ���û�ʹ�õ������
    curl_setopt($curl, CURLOPT_COOKIE, $cookie);
    curl_setopt($curl, CURLOPT_REFERER,'');// ����Referer
    curl_setopt($curl, CURLOPT_POST, 1); // ����һ�������Post����
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data); // Post�ύ�����ݰ�
    curl_setopt($curl, CURLOPT_TIMEOUT, 30); // ���ó�ʱ���Ʒ�ֹ��ѭ��
    curl_setopt($curl, CURLOPT_HEADER, 0); // ��ʾ���ص�Header��������
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // ��ȡ����Ϣ���ļ�������ʽ����
    $tmpInfo = curl_exec($curl); // ִ�в���
    if (curl_errno($curl)) {
       echo 'Errno'.curl_error($curl);//��ץ�쳣
    }
    curl_close($curl); // �ر�CURL�Ự
    print_r($tmpInfo);
	
	
	 

?>