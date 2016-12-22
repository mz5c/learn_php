<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/14
 * Time: 16:58
 */
interface One{
    const RICO = 23;
    function sayHi();
}

class Test implements One{
    function sayHi(){
        echo 'hi';
    }
}

$a = new Test();
echo $a->sayHi();