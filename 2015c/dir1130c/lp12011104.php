<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/1
 * Time: 11:04
 */
$contact = array('id'=>1,'name'=>'gao','company'=>'tidy','address'=>'shanghai');
$id = each($contact);
print_r($id);
echo '<hr>';
list($key,$value) = $id;
echo $key.' '.$value;
echo '<hr>';
echo '<xmp>';
//var_dump($_SERVER);
var_dump($_ENV);