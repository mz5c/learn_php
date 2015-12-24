<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/23
 * Time: 11:22
 */
include_once 'test.php';
echo strtolower('LKsfdJFD').'<br>';
try{
    throw new Exception('test');
    echo $a;
}catch (Exception $e){
    echo $e->getMessage();
    echo 'tst';
}