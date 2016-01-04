<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/31
 * Time: 11:21
 */
$a = rand(1,10);
echo $a.'<br>';
switch($a){
    case 1:
        echo 1;
        break;
    case 2:
        echo 2;
        break;
    case 3:
        echo 3;
        break;
    case 4:
    case 5:
        echo 45;
        break;
}