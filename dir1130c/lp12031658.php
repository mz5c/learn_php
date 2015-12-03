<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/3
 * Time: 16:58
 */
$handle = fopen('count.txt','w');
$n = 10;
while($n>0){
    fwrite($handle,$n);
    $n--;
}
fclose($handle);
$str = file_get_contents('count.txt');
echo $str;
echo '<hr>';
$handle = fopen('count.txt','r');
$str = fgets($handle,20);
echo $str;