<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/30
 * Time: 15:51
 */
function more_args(){
    $args = func_get_args();
    for($i = 0; $i < count($args); $i++){
        echo ($i+1).' '.$args[$i].'<br>';
        echo ($i+1).' '.func_get_arg($i).'<br>';
    }
}
more_args(1,2,3,4,5,6);