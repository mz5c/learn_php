<?php
header('Content-Type:image/png');
$ch = curl_init("http://weixin.sogou.com/antispider/util/seccode.php?tc=1448000189");
    //curl_setopt($ch,CURLOPT_COOKIEJAR, $cookieFile); // 把返回来的cookie信息保存在文件中
    curl_exec($ch);
    curl_close($ch);