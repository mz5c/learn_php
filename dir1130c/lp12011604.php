<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/1
 * Time: 16:04
 */
class Person{
    private $name;
    private $sex;
    private $age;

    function __construct($name='', $sex='', $age=''){
        $this->name = $name;
        $this->age =$age;
        $this->sex =$sex;
    }

    function say(){
        echo 'my name is '.$this->name.', sex is '.$this->sex.', age is '.$this->age.'<br>';
    }

    function __sleep(){
        $arr = array('name','age');
        return $arr;
    }

    function __wakeup(){
        $this->age = 40;
    }
}

$rico  = new Person('rico','male',20);
$person_string = serialize($rico);//串行化，序列化？
echo $person_string.'<br>';

$rico = unserialize($person_string);//反串行化，反序列化？
$rico->say();