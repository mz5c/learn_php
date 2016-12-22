<?php
/**
 * Created by PhpStorm.
 * User: mz5c
 * Date: 2015/11/6
 * Time: 21:53
 */
$search_array = array('first' => 1,'second' => 4);
echo var_dump(array_key_exists('first',$search_array)).'<br>';//array_key_exists()检测指定值是否为数组中的键名

$a = array('a' => 1,'b' => 2,'c' => 3);
print_r(array_flip($a));//array_flip()交换数组键和值，返回新数组
echo '<br>';
$b = array('a' => 1,'b' => 1,'c' => 2);
print_r(array_flip($b));//冲突处理
echo '<br>';

$lamp = array('l' => 'linux','a' => 'apache','m' => 'mysql','p' => 'php');
print_r(array_reverse($lamp));//array_reverse()翻转原数组元素顺序返回新数组
