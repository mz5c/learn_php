<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/1
 * Time: 10:17
 */
function test($n){
    echo $n.' ';
    if($n > 0){
        test($n-1);
    }else{
        echo '<--> ';
    }
    echo $n.' ';
}
test(10);