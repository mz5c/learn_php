<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/10
 * Time: 13:36
 */
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"http://www.baidu.com");
curl_setopt($ch,CURLOPT_HEADER,1);
$res = curl_exec($ch);
echo '<hr>';
var_dump($res);
echo '<hr>';
curl_close($ch);