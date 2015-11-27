<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/27
 * Time: 17:23
 */
$ch = curl_init();
$url = "http://weixin.sogou.com/weixin?query=%E5%88%9B%E6%84%8F%E5%B9%BF%E5%91%8A&type=1&page=1&ie=utf8";
$cookie = "d:/hello.txt";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
//curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);//是否抓取跳转后的页面,1是自动跳转
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36');
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36');
//curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);//发送cookie文件
//curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch,CURLOPT_COOKIE,"ABTEST=0|1448016078|v1; IPLOC=CN3100; SUID=AB5851656B20900A00000000564EF8CE; SUIR=1448016078; SUID=AB58516566CA0D0A00000000564EF8CF; SUV=00E90EA1655158AB564EF8CFE4C23152; weixinIndexVisited=1; PHPSESSID=kcveaasu0i4g2m87u6lf1da0k4; SNUID=4DBEB483E5E0C365681F1E2AE605D2FC; wapsogou_qq_nickname=; LSTMV=95%2C74; LCLKINT=4045; sct=5");
$content = curl_exec($ch);
echo '<xmp>';var_dump($content);