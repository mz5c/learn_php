<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/11
 * Time: 17:39
 */
$dbhm = 'mysql:host=localhost;dbname=rico';
$user = 'root';
$passwd = 'root';
$dbh = new PDO($dbhm,$user,$passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$dbh->exec('set names utf8');