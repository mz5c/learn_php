<?php
/**
 * Created by PhpStorm.
 * User: mz5c
 * Date: 2015/10/31
 * Time: 13:42
 */
$x = 'hello world';
var_dump($x);
echo '<br>';
$x = null;
var_dump($x);
echo '<br>';
var_dump(empty($x));
echo '<br>';
$x = 0;
var_dump(empty($x));
echo '<br>';
$x = '0';
var_dump(empty($x));
echo '<br>';
$x = false;
var_dump(empty($x));
echo '<br>';
$x = null;
var_dump(isset($x));
echo '<br>';
var_dump(isset($y));
var_dump($y);
/**
 * 关于null empty isset
 * null用于重置变量值，未定义变量值默认为null
 * empty 当参数为 0，'0'，false，null 时返回true
 * isset 当参数不为 null 时 返回true
 */