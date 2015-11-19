<?php
/**
 * Created by PhpStorm.
 * User: mz5c
 * Date: 2015/10/31
 * Time: 18:24
 */
//函数的基础用法如下
function func1(){
    echo 'hello world'.'<br>';
}
function func2(){
    return 'hello world';
}
function func3($var = 'hello world'){
    echo $var.'<br>';
}
function func4($var, $var2 = 'hello world'){
    echo $var.' '.$var2.'<br>';
}
function func5(&$var){
    $var = 'this is me';
}
func1();
echo func2().'<br>';
func3();
func3('ni hao');
func4('ni hao');
func4('ni hao','en hai xing');
$var = 'who is that';
echo $var.'<br>';
func5($var);
echo $var.'<br>';