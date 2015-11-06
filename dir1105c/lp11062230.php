<?php
/**
 * Created by PhpStorm.
 * User: mz5c
 * Date: 2015/11/6
 * Time: 22:30
 */
function myfunc($var){
    if($var % 2 == 0){
        return true;
    }
}
$arr = array('a' => 1,'b' => 2,'c' => 3,'d' => 4,'e' => 5);
print_r(array_filter($arr,'myfunc'));
/**
 * array_filter()函数用回调函数过滤数组中的元素，返回按用户自定义函数过滤后的新数组
 */