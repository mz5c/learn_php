<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/18
 * Time: 11:03
 */
class SimpleClass{
    public $var = 'hello';
    public function sayHello(){
        echo $this->var.'<br>';
    }
}
$a = new SimpleClass();
$a->sayHello();
var_dump($a instanceof SimpleClass);
echo '<br>';
$b = $a;
$c = &$a;
$a->sayHello();
$b->sayHello();
$c->sayHello();
$a->var = 'hello rico';
$a->sayHello();
$b->sayHello();
$c->sayHello();
$a = null;
var_dump($a);echo '<br>';
var_dump($b);echo '<br>';
var_dump($c);