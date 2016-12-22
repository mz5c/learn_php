<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/1
 * Time: 11:20
 */
// htdocs/learn_php/dir1130c/lp12011120.php?id=1&name=rico&age=12
foreach($_GET as $key => $value){
    echo $key.' : '.$value.'<br>';
}