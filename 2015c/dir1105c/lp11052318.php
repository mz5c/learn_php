<?php
/**
 * Created by PhpStorm.
 * User: mz5c
 * Date: 2015/11/5
 * Time: 23:18
 */
$lamp = array(
    'l' => 'Linux',
    'a' => 'Apache',
    'm' => 'MySQL',
    'p' => 'PHP'
);
print_r(array_keys($lamp));//array_keys()输出数组的所有键名
echo '<br>';
print_r(array_keys($lamp,'Linux'));//输出指定元素的键名
echo '<br>';

$a = array(1,2,3,'1');
print_r(array_keys($a,'1',false));
echo '<br>';
print_r(array_keys($a,'1'));
echo '<br>';
print_r(array_keys($a,'1',true));//array_keys()第三个参数可选，默认为false 为true时根据类型返回指定值的键名