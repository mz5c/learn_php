<?php
/**
 * Created by PhpStorm.
 * User: mz5c
 * Date: 2015/10/31
 * Time: 13:30
 */
class Car{
    var $color;
    function Car($color = 'green'){
        $this->color = $color;
    }
    function what_color(){
        return $this->color;
    }
}

$mycar = new Car('white');
var_dump($mycar);
echo '<br>';
echo 'mycar is '.$mycar->what_color();
/**
 * php对象需要先声明一个类包含属性和方法
 * 使用则需要实例化一个该类的对象
 */