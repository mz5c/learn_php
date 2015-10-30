<?php
/**
 * Created by PhpStorm.
 * User: mz5c
 * Date: 2015/10/31
 * Time: 0:33
 */
$x=5; // 全局作用域

function myTest() {
    $y=10; // 局部作用域
    echo "<p>测试函数内部的变量：</p>";
    echo "变量 x 是：$x";
    echo "<br>";
    echo "变量 y 是：$x";
}

myTest();

echo "<p>测试函数之外的变量：</p>";
echo "变量 x 是：$x";
echo "<br>";
echo "变量 y 是：$x";
/**
 * php变量作用域只在当前代码块中
 * 全局变量 局部变量
 * global $x
 * $GLOBAL['x']
 * static $x = 0 静态变量声明只执行一次
 *
 * include 和 require 区别
 * include可用于在选择结构中执行 require在代码中任何地方都会执行
 * 都可能会导致文件多次被包含
 * include_once 和 require_once 区别
 * 和上述差不多 但两者都会验证包含文件是否已经被包含 若已包含则不处理
 * 建议使用 require_once
 */
include 'test.php';
include_once 'test.php';
require 'test.php';
require_once 'test.php';