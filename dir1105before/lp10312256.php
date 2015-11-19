<?php
/**
 * Created by PhpStorm.
 * User: mz5c
 * Date: 2015/10/31
 * Time: 22:56
 */
//php超全局变量
//$GLOBALS 这种全局变量用于在 PHP 脚本中的任意位置访问全局变量（从函数或方法中均可）
$x = 75;
$y = 25;
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z.'<br>';
//$_SERVER 这种超全局变量保存关于报头、路径和脚本位置的信息。
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo '<br>';
echo $_SERVER['SERVER_ADDR'].'<br>';
echo $_SERVER['SERVER_NAME'].'<br>';
echo $_SERVER['HTTP_ACCEPT'].'<br>';
echo $_SERVER['REMOTE_ADDR'].'<br>';
echo $_SERVER['REMOTE_PORT'].'<br>';
echo $_SERVER['SERVER_PORT'].'<br>';