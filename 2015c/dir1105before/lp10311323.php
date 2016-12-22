<?php
/**
 * Created by PhpStorm.
 * User: mz5c
 * Date: 2015/10/31
 * Time: 13:23
 */
$x = 1.23;
var_dump($x);
echo '<br>';
$y = 1.2e3;
var_dump($y);
echo '<br>';
$z = 8E-3;
var_dump($z);
echo '<br>';
$xyz = array('a','b','c');
var_dump($xyz);
/**
 * 多用var_dump()，可用于打印变量类型及内容
 * 结合die，可用于调试代码解决bug
 */