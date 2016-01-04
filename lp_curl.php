<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/15
 * Time: 10:44
 */

//https请求（支持GET和POST）
function https_request($url, $data = null) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    if (!empty($data)) {
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
}

$url = 'http://weixin.sogou.com/weixin?query=jkys2015&type=1&page=1';
//echo '<xmp>';var_dump(https_request($url));
$res = https_request($url);

$matchOpenid = array();$openids=array();
preg_match_all('|<div class="wx-rb bg-blue wx-rb_v1 _item" href="/gzh\?openid=([\S]+)&amp;ext=([\S]+)" target="_blank"|', $res, $matchOpenid);
echo '<xmp>';var_dump($matchOpenid);echo '<br>';
preg_match_all('|<label name="em_weixinhao">([\S]*)<\/label><\/span>|', $res, $openids);
echo '<xmp>';var_dump($openids);