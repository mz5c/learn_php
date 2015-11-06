<?php
/**
 * Created by PhpStorm.
 * User: mz5c
 * Date: 2015/11/5
 * Time: 23:32
 */
$os = array('Mac','NT','Linux','Windows');
//in_array()简单使用形式
if(in_array('Windows',$os)){
    echo 'in array'.'<br>';
}
if(!in_array('hello',$os)){
    echo 'not in array'.'<br>';
}

$a = array('1',2,3.3);
//in_array()第三个参数可选默认为false，为true时元素类型一致返回true
if(!in_array('2',$a,true)){
    echo 'not in array'.'<br>';
}
if(in_array(1,$a)){
    echo 'in array'.'<br>';
}

$lamp = array('a' => 'apache','l' => 'linux','m' => 'mysql','p' => 'php');
echo array_search('php',$lamp).'<br>';//array_search()与in_array()的参数相同，根据指定值搜索存在则返回相应键名，也支持对数据类型的严格判断
$a = array('a' => '8','b' => 8,'c' => '8');
echo array_search(8,$a,true);