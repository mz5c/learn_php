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
if(!in_array('2',$a,true)){
    echo 'not in array'.'<br>';
}
if(in_array(1,$a)){
    echo 'in array'.'<br>';
}