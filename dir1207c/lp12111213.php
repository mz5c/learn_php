<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/11
 * Time: 12:13
 */
$content = file_get_contents('test_preg.txt');
$res = array();
//preg_match('#var\ssn\s=\s"([^\s]*)"#',$content,$res);
preg_match_all('#var msg_cdn_url = "([^\r\n]*)"#',$content,$res);
echo '<xmp>';var_dump($res);die;