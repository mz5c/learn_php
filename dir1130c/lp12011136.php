<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/1
 * Time: 11:36
 */
function myfun1($v){
    if($v == 1){
        return 'rico';
    }else{
        return $v;
    }
}

$arr = array('a'=>1,'b'=>2,'c'=>3);
$res = array_map('myfun1',$arr);
var_dump($res);
echo '<hr>';

function myfun2($v1, $v2){
    if($v1 == $v2){
        return 'same';
    }else{
        return 'different';
    }
}
$a1 = array(1,2,3);
$a2 = array(2,3,3);
$res = array_map('myfun2',$a1,$a2);
var_dump($res);
echo '<hr>';
$res = array_map(null,$a1,$a2);
var_dump($res);