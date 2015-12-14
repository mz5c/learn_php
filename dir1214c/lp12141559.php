<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/14
 * Time: 15:59
 */
error_reporting(E_ALL & ~E_NOTICE);
$passwd = "6343da24c58b87b741d0226094470962";
echo <<<hel
<form action="#" method="post">
    passwd:<input type="password" name="pw" value={$_POST['pw']}><br>
    <input type="submit">
</form>
hel;
echo '<br>';
if(!empty($_POST['pw'])){
    if($passwd == md5($_POST['pw'])){
        echo 'passwd correct';
    }else{
        echo 'passwd wrong';
    }
}