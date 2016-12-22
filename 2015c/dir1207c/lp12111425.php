<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/11
 * Time: 14:25
 */
$arr = array("linux redhat9.0","apache2.29","mysql5.0.51","php5.2.6","lamp1..","100");
$res = preg_grep('#^[a-zA-Z]+(\d|\.)+$#',$arr);
print_r($res);
echo '<hr>';
echo strstr("this is a test!","i");
echo '<br>';
echo strstr("this is a test!",97);
echo '<br>';
echo substr("this is a test!",1,3);
echo '<br>';
echo str_replace(' ',',',"this is a test!");
echo '<br>';
$pattern = "#<[/!]*?[^<>]*?>#";
$text = "hello<b>world</b>you<u>he</u>";
echo preg_replace($pattern,"",$text);
echo '<br>';
preg_match_all('#(h?[a-zA-z]+o)#',$text,$res);
print_r($res);