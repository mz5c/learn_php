<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/1
 * Time: 16:24
 */
require 'person.class.php';

$person_string = file_get_contents('file.txt');

$person = unserialize($person_string);

$person->say();