<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/11
 * Time: 17:47
 */
try{
    include_once 'mysql_connect.php';
    $dbh->beginTransaction();
    $dbh->exec("insert into user (name,age) values('test3',23);");
    $dbh->exec("insert into user (nbme,age) values('test4',23);");
    $dbh->commit();
}catch (Exception $e){
    $dbh->rollBack();
    echo 'failed : '.$e->getMessage().'<br>';
    die;
}
echo 'no error';