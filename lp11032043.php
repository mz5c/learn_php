<?php
/**
 * Created by PhpStorm.
 * User: mz5c
 * Date: 2015/11/3
 * Time: 20:43
 */
session_start();//开启session
if(!isset($_COOKIE['user'])){
    setcookie("user","wucheng",time()+3600);//设置cookie
}else{
    echo $_COOKIE['user'].'<br>';
}
//setcookie("user","",time()-3600);//删除cookie

if(isset($_SESSION['views'])){
    $_SESSION['views']++;
}else{
    $_SESSION['views'] = 1;
}
echo $_SESSION['views'].'<br>';
/**
 * Session 的工作机制是：为每个访问者创建一个唯一的 id (UID)，
 * 并基于这个 UID 来存储变量。UID 存储在 cookie 中，亦或通过 URL 进行传导。
 * unset用于删除session变量
 * session_destroy()彻底终结session
 */