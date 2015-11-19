<?php
/**
 * Created by PhpStorm.
 * User: mz5c
 * Date: 2015/10/31
 * Time: 14:00
 */
$str = 'hello world!';
echo strlen($str).'<br>';
for($i = 0; $i < strlen($str); $i++){
    echo $str[$i].'*';
}
echo '<br>';
//使类似'open_the_door'的字符串转换成'OpenTheDoor'
function getUcwords(&$str){
    $str = str_replace('_',' ',$str);
    $str = ucwords($str);
    $str = str_replace(' ','',$str);
}
$str = 'open_the_door';
echo $str.'<br>';
getUcwords($str);
echo $str.'<br>';
/**
 * 字符串本身可以当成字符数组，可以用下标去访问字符串中的单个字符
 * 字符串函数strlen用于返回字符串长度，常用于字符串处理
 * str_replace用于替换字符串中指定的字符
 * ucwords用于将以空格为分隔符的字符串的各子字符串的首字母大写
 */