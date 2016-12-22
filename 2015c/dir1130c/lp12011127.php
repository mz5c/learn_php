<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/1
 * Time: 11:27
 */
function myfun1($value,$key){
    echo "the key $key has the value $value<br>";
}

$arr = array('a'=>1,'b'=>2,'c'=>3);

array_walk($arr,'myfun1');
echo '<hr>';
function myfun2($value,$key,$p){
    echo "the key $key $p $value<br>";
}

array_walk($arr,'myfun2','has the value');
echo '<hr>';
function myfun3(&$value,$key){
    $value = 5;
}
array_walk($arr,'myfun3');
var_dump($arr);