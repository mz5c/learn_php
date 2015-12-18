<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/17
 * Time: 16:14
 */
function getUrlParam($url){
    $purl=parse_url($url);return $purl;
    $querys=explode('&',$purl['query']);
    for($i=0; $i<count($querys); $i++) {
        list($varname, $value)=explode('=', $querys[$i],2);
        $ret[$varname]= $value;
    }
    return $ret;
}
$url = 'http://mp.weixin.qq.com/s?__biz=MjM5MTUwNDAyMA==&mid=209810015&idx=1&sn=6205820a59bcf94bf7a9fd3d41119740&scene=4';
echo '<xmp>';var_dump(getUrlParam($url));