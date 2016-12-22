<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/1
 * Time: 13:57
 */
$str = 'abcdefghijklmnopqrstuvwxyz0123456789';
$res = array();
$n = 10;
function makePasswd($str,&$res,$n){
    while($n > 0){
        $str2 = substr(str_shuffle($str),14,8);
        if(in_array($str2,$res)){
            continue;
        }else{
            $res[] = $str2;
            $n--;
        }
    }
}
makePasswd($str,$res,$n);
echo '<xmp>';
var_dump($res);
var_dump(1=='1',2=='2');

/**
 * OOP
 * Object Oriented Programming
 */