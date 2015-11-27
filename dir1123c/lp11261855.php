<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/26
 * Time: 18:55
 */
$coon = mysql_connect('localhost','root','root') or exit('connect database failed');
mysql_select_db('rico') or die('select db failed');
$res = mysql_query("select * from user;");
$res = mysql_fetch_array($res);
echo '<xmp>';var_dump($res);