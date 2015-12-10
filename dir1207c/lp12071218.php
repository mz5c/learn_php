<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/7
 * Time: 12:18
 */
$a = '..hello...';
echo $a.'<br>';
$b = trim($a,'.');
echo $b;
echo date("Y-m-d",strtotime("-1 day"));
echo '<hr>';
$handle = fopen('res.txt','a');
fwrite($handle,'a,');
fclose($handle);
$str = file_get_contents('res.txt');
echo $str;