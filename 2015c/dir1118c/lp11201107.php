<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/20
 * Time: 11:07
 */
$a = 2147483647;
var_dump($a);
echo '<br>';
$b = 2147483648;
var_dump($b);
/**
 * php中整型最大为2147483647，最小-2147483648
 * 超出范围将被解释为float，计算结果超过integer范围同理
 */
echo '<hr>';
//定界符
$c = <<<d
ajkfsjkljfkdsjkf
ksljfdjklfdjfkldjk
klsdjjkfslkjlfsjkfds
lsjkfdkjlfsdjklfsdkj
d;
echo $c;
