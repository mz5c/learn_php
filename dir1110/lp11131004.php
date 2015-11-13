<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/13
 * Time: 10:04
 */
function foo(){
    echo 'hello<br>';
}
function bar($hello = 'none'){
    echo $hello.' world<br>';
}
$a = 'foo';
$a();

$b = 'bar';
$b('hello');