<?php
/**
 * Created by PhpStorm.
 * User: mz5c
 * Date: 2015/11/1
 * Time: 17:33
 */
echo 'Welcome '.$_POST['name'].'<br>';
echo 'Your email address is '.$_POST['email'].'<br>';
//$_GET 是通过 URL 参数传递到当前脚本的变量数组
//$_POST 是通过 HTTP POST 传递到当前脚本的变量数组
//GET POST的使用详情见http://www.w3school.com.cn/php/php_forms.asp