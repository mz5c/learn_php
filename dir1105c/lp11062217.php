<?php
/**
 * Created by PhpStorm.
 * User: mz5c
 * Date: 2015/11/6
 * Time: 22:18
 */
$a = array('h','e','l','l','o');
echo count($a).'<br>';//统计数组中元素数目或对象中的属性个数
$b = array('w','o','r','d',array('l','a'));
echo count($b,1).'<br>';//第二个参数可选，默认为0，为1时计算多维数组中元素的数目

$c = array(1,2,1,3,2);
$d = array_count_values($c);//统计数组中所有值出现的次数
print_r($d);
echo '<br>';

$e = array(1,1,1,2,2,3);
print_r(array_unique($e));//删除数组中重复的值，返回新数组