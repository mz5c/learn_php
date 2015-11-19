<?php
/**
 * Created by PhpStorm.
 * User: mz5c
 * Date: 2015/10/31
 * Time: 15:33
 */

//define 用于定义常量自动全局 第三参数为true时 常量名大小写不敏感 默认为false
define('HW','Hello World!');
echo HW.'<br>';
define('NHW','New Hello World!',true);
echo nhw.'<br>';
/**
 * 运算符不做解释 若不清楚自行搜索
 * == 和 === 及 != 和 !==
 * ===完全相等时返回true
 * !== 完全不等时返回true
 */
echo date('Y-m-d H:i:s').'<br>';//输出当前时间，格式为字符串
/**
 * 条件选择结构如 if else while do_while switch for等不做解释
 * foreach只适用数组 用法foreach($arr as $key => $value){} $key可以省略
 */
$arr = array('a' => 'apple',
             'b' => 'banana',
             'c' => 'c_what');
foreach ($arr as $key => $var) {
    echo $key.' '.$var.'<br>';
}
