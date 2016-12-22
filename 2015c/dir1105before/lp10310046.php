<?php
/**
 * Created by PhpStorm.
 * User: mz5c
 * Date: 2015/10/31
 * Time: 0:46
 */
echo "<h2>PHP is fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This", " string", " was", " made", " with multiple parameters.";
/**
 * echo 和 print 区别
 * echo 能够输出一个以上的字符串
 * print 只能输出一个，并且始终返回1
 * echo 比 print 稍快，因为它没有返回值
 */
$txt1="Learn PHP";
$txt2="W3School.com.cn";
$cars=array("Volvo","BMW","SAAB");
echo "<br>";
echo $txt1;
echo "<br>";
echo 'Study PHP at {$txt2}';
echo "<br>";
echo "My car is a $cars[0]";
/**
 * 字符串单引号和双引号的区别
 * 一般情况两者无异
 * 单引号下字符串中不能引用变量
 * 双引号下字符串中引用变量可用{}包围，也可不用，建议使用
 */