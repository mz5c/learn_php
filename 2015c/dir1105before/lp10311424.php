<?php
/**
 * Created by PhpStorm.
 * User: mz5c
 * Date: 2015/10/31
 * Time: 14:24
 */
//php字符串常用函数
$str = 'hello world!';
echo $str.'<br>';
echo chop($str,'world!');//chop用于删除字符串右侧多余空格或指定字符串
echo '<br>';
$str = ',hello,';
echo rtrim($str,',').'<br>';//rtrim用于删除字符串右侧多余空格或其他字符
echo ltrim($str,',').'<br>';//ltrim用于删除字符串左侧多余空格或其他字符
echo trim($str,',').'<br>';//trim用于删除字符串两侧多余空格或其他字符
echo md5($str).'<br>';//md5用于计算字符串的md5散列
$str = 'hello world';
var_dump(explode(' ',$str));//explode用于将字符串按指定条件转换成数组
echo '<br>';
echo implode(' ',array('hello','world')).'<br>';//implode用于将数组组成字符串，join也可以
$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($str).'<br>';//将预定义字符转换成HTML实体
$str = 'hello world';
echo str_shuffle($str).'<br>';//str_shuffle随机打乱字符串排列
var_dump(str_split($str,2));//str_split将字符串分割成数组,可按长度分割默认为1
echo '<br>';
echo str_repeat('hello',3).'<br>';//str_repeat重复指定次数字符串
echo strcmp('abc','abd');// strcmp字符串比较相等返回0，前者大于返回正，小于返回负
echo '<br>';
echo strtolower('ABC').'<br>';//strtolower大写转小写
echo strtoupper('abc').'<br>';//strtoupper小写转大写
echo substr('abcdefg',0,3);//substr字符串切割
echo '<br>'.ucfirst('abc d').'<br>';//ucfirst首字母大写
echo wordwrap('123456789',3,'<br>',true);//wordwrap字符串折行
//其他字符串函数参考 http://www.w3school.com.cn/php/php_ref_string.asp
