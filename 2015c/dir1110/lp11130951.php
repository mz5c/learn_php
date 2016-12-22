<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/13
 * Time: 9:51
 */
declare(ticks=1);

function tick_handler(){
    echo "tick_handler() called<br>";
}

register_tick_function('tick_handler');

$a = 1;
$b = 1;

echo '<hr>';