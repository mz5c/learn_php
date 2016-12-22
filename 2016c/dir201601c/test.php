<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/25
 * Time: 11:52
 */

$uid = 20160125;
$appid = 201601251153;
$appkey = 'hello_world';
$time = time();

$sign = sha1($appid.$appkey.$time);

$token = base64_encode($uid.','.$appid.','.$time.','.$sign);
echo $token;