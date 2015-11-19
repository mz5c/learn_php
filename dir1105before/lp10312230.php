<?php
/**
 * Created by PhpStorm.
 * User: mz5c
 * Date: 2015/10/31
 * Time: 22:30
 */
$arr = array('f','c','b',array('e','d'),'a',1);
var_dump($arr);
echo '<br>'.count($arr).'<br>';
echo count($arr,1).'<br>';//count统计数组长度，第二个参数可选默认为0,位1时检测多维数组，sizeof作用相同
var_dump(in_array('1',$arr));
echo '<br>';
var_dump(in_array('1',$arr,true));//in_array检测指定数据是否在数组中，第三个参数默认false，为true时，数据类型一致返回true
echo '<br>';
/**
 * sort() - 以升序对数组排序
 * rsort() - 以降序对数组排序
 * asort() - 根据值，以升序对关联数组进行排序
 * ksort() - 根据键，以升序对关联数组进行排序
 * arsort() - 根据值，以降序对关联数组进行排序
 * krsort() - 根据键，以降序对关联数组进行排序
 */
sort($arr);
var_dump($arr);
echo '<br>';
rsort($arr);
var_dump($arr);
echo '<br>';
asort($arr);
var_dump($arr);
echo '<br>';
arsort($arr);
var_dump($arr);
echo '<br>';
ksort($arr);
var_dump($arr);
echo '<br>';
krsort($arr);
var_dump($arr);
echo '<br>';