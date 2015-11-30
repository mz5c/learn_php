<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/30
 * Time: 15:11
 */
$statDate=date("Y-m-d",strtotime("-1 day"));
var_dump($statDate);echo '<br>';
var_dump(time());echo '<hr>';

function one($num){
    return $num%3 != 0;
}

function two($num){
    return $num != strrev($num);
}

function filter($func){
    for($i = 0; $i <= 100; $i++){
        if($func($i)){
            continue;
        }else{
            echo $i.'<br>';
        }
    }
}

filter('one');
echo '<hr>';
filter('two');