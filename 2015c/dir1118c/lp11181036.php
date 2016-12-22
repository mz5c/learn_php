<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/18
 * Time: 10:36
 */
//phpinfo();echo getcwd();
echo preg_replace_callback('~-(a-z)~',function($match){return strtoupper($match[1]);},'hello-world');//can not understand
echo '<br>';
$a = function($name){
    echo 'hello '.$name;
};
$a('rico');
echo '<hr>';
$message = 'hello';
$example = function(){
    var_dump($message);
};
echo $example().'<br>';

$example = function() use($message){
    var_dump($message);
};
echo $example().'<br>';

$message = 'world';
echo $example().'<br>';

$example = function() use(&$message){
    var_dump($message);
};
echo $example().'<br>';

$example = function($arg) use($message){
    var_dump($arg.' '.$message);
};
echo $example('hello');