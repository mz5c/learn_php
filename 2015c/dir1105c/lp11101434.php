<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/10
 * Time: 14:34
 */
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"http://www.baidu.com");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HEADER,0);
$res = curl_exec($ch);
curl_close($ch);
print_r($res);