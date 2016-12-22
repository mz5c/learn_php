<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/23
 * Time: 10:48
 */
$my_array = array('dog','cat','horse');
list($a,$b,$c) = $my_array;
echo $a.' '.$b.' '.$c.'<br>';
list($d,,$e) = $my_array;
echo $d.' '.$e;