<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/15
 * Time: 15:22
 */
$handle = fopen('test.txt','w');
fwrite($handle,0);
fclose($handle);
$res = (int)file_get_contents('test.txt');
var_dump($res);phpinfo();