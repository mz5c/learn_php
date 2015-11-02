<?php
/**
 * Created by PhpStorm.
 * User: mz5c
 * Date: 2015/11/2
 * Time: 20:10
 */
echo 'today is '.date("Y.m.d").'<br>';
echo 'today is '.date("Y/m/d").'<br>';
echo 'today is '.date("Y-m-d H:i:s").'<br>';//输出今天日期
echo 'today is '.date("l").'<br>';//输出今天星期几
echo 'today is '.date("h:i:sa").'<br>';
echo 'today is '.date("Y-m-d H:i:s",time()).'<br>';//time()输出当前日期总秒数
$d = mktime(9,12,31,6,10,2015);
echo date("Y-m-d H:i:s",$d).'<br>';
$d = strtotime("tomorrow");
echo date("Y-m-d H:i:s",$d).'<br>';
$d = strtotime("+1 months");
echo date("Y-m-d H:i:s",$d).'<br>';