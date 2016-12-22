<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/17
 * Time: 18:31
 */
$url = "http://www.baidu.com";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_HEADER, 0);
//curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);//是否抓取跳转后的页面,1是自动跳转
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36');
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");//发送cookie文件
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
$content = curl_exec($ch);
curl_close($ch);
var_dump($content);