<?php
/**
 * Created by PhpStorm.
 * User: mz5c
 * Date: 2015/11/5
 * Time: 23:06
 */
$arr = array(
    'a' => 'aa',
    'b' => 'bb',
    'c' => 'cc',
    'e' => 'ee',
    'f' => 'ff'
);
print_r($arr);
echo '<br>';
print_r(array_values($arr));//array_value传入一个数组重新索引返回一个新数组
var_dump($arr);
echo '<br>';