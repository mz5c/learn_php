<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/1
 * Time: 14:49
 */
class MyClass{
    static $count = 0;
    function __construct(){
        self::$count++;
    }
    static function getCount(){
        return self::$count;
    }
}
$a = new MyClass();
$b = new MyClass();
$c = new MyClass();

echo MyClass::getCount();
echo '<br>';
echo $a->getCount();