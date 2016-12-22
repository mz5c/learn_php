<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/11
 * Time: 17:33
 */
try{
    include_once 'mysql_connect.php';
    $sql = "update user set sex = :sex where id = :id";
    $res = $dbh->prepare($sql);
    $res->execute(array(':sex' => 'female',':id' => 7));
    echo $res->rowCount();
    echo '<br>';
    //throw new Exception('hello');
}catch (Exception $e){
    echo 'error : '.$e->getMessage().'<br>';
    die;
}
echo 'no error';