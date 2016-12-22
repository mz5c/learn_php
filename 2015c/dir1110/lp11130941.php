<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/13
 * Time: 9:41
 */
class MyClass{
    public function __toString(){
        return 'hello<br>';
    }
}
class NotMyClass{
    public function __toString(){
        return 'world<br>';
    }
}
$a = new MyClass();
echo $a;
echo '<br>';
var_dump($a instanceof MyClass);