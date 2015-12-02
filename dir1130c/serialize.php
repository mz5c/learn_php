<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/1
 * Time: 16:21
 */
require 'person.class.php';

$person = new Person('rico','male',23);

$person_string = serialize($person);

file_put_contents('file.txt',$person_string);