<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/7
 * Time: 10:46
 */
$a = array('name'=>'rico','age'=>23);
var_dump($a);
echo '<br>';
$a = json_encode($a);
var_dump($a);
echo '<br>';
$b = json_decode($a,true);
var_dump($b);