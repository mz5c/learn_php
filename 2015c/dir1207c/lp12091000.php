<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/9
 * Time: 10:00
 */
//$a = microtime(true);sleep(1);
//echo microtime(true)-$a;
$a = array('http://wk[','343fd.d3','32.d');
$res = preg_grep("|[a-zA-Z]+://[^\s]*|",$a);
var_dump($res);