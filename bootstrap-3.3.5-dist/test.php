<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/6
 * Time: 15:08
 */
header('Content-Type:application/json;charset=utf8');
$callback = $_GET['callback'];
$a = $_POST['a'];
$b = $_POST['b'];
echo $callback . '(' . json_encode([$callback, $a, $b]) . ')';