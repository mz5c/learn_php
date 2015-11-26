<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/26
 * Time: 9:48
 */
echo rand()%10;
echo '<br>';
echo rand();
echo '<br>';
echo rand(1,5);
echo '<br>';
$a = 10;
$b = $a++ + ++$a;
echo $a.' '.$b;
echo '<br>';
$b = $a-- - --$a;
echo $a.' '.$b;