<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/10
 * Time: 14:49
 */
echo '<hr>';
//magic function
class Test{
    public function __get($key){
        echo $key.' not exists<br>';
    }
    public function __set($key,$val){
        echo $key.' not exists,can not be '.$val.'<br>';
    }
    public function __call($key,$args){
        echo $key.' not exists,args : ';
        print_r($args);
        echo '<br>';
    }
    public function __toString(){
        return 'print Test object<br>';
    }
    public function __clone(){
        echo 'Test be copied<br>';
    }
}
$test = new Test();
echo $test->name;
$test->sex = 'female';
$test->hello('d',2);
echo $test;
$t = clone $test;
echo '<hr>';
//magic variable
echo __LINE__.'<br>';
echo __FILE__.'<br>';
echo __DIR__.'<br>';
echo dirname(__FILE__).'<br>';
echo __FUNCTION__.'<br>';
echo __CLASS__.'<br>';
echo __TRAIT__.'<br>';
echo __METHOD__.'<br>';
echo __NAMESPACE__.'<br>';