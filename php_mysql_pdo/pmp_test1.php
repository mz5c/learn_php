<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/11
 * Time: 16:16
 */
$dbhm = 'mysql:host=localhost;dbname=rico';
$user = 'root';
$passwd = 'root';
$dbh = new PDO($dbhm,$user,$passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$dbh->exec('set names utf8');

//insert
/*$sql = "insert into user(name,sex,age,account,passwd) values(:name,:sex,:age,:account,:passwd);";
$res = $dbh->prepare($sql);
$res->execute(array(':name' => 'hello',
                    ':sex' => 'female',
                    ':age' => 18,
                    ':account' => 'world',
                    ':passwd' => 'program'));
echo $dbh->lastInsertId();*/

//update
/*$sql = "update user set name = :name,age = :age where id = :id;";
$res = $dbh->prepare($sql);
$res->execute(array(':name' => 'seven',':age' => 7,':id' => 7));
echo $res->rowCount();*/

//delete
/*$sql = "delete from user where id = :id";
$res = $dbh->prepare($sql);
$res->execute(array(':id' => 8));
echo $res->rowCount();*/

//query
$sql = "select name,sex,age from user where sex = :sex";
$res = $dbh->prepare($sql);
$res->execute(array(':sex' => 'male'));
//print_r($res->fetchAll(PDO::FETCH_ASSOC));
//var_dump($res->fetchAll(PDO::FETCH_ASSOC));die;
while($row = $res->fetch(PDO::FETCH_ASSOC)){
    print_r($row);
    echo '<br>';
}