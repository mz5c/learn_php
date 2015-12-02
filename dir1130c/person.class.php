<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/1
 * Time: 16:17
 */
class Person{
    private $name;
    private $sex;
    private $age;

    function __construct($name='none',$sex='unknow',$age=17){
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
    }

    function say(){
        echo 'my name is '.$this->name.', sex is '.$this->sex.', age is '.$this->age.'<br>';
    }
}