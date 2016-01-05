<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/4
 * Time: 18:19
 */
$allowtype = array('gif', 'png', 'jpg');
$size = 1000000;
$path = '../upload';

if($_FILES['myfile']['error'] > 0){
    echo 'upload error:';
    switch($_FILES['myfile']['error']){
        case 1: die('error 1');
        case 2: die('error 2');
        case 3: die('error 3');
        case 4: die('error 4');
        default: die('error unknown');
    }
}

$hz = array_pop(explode('.',$_FILES['myfile']['name']));

if(!in_array($hz,$allowtype)){
    die('not allowed');
}

if($_FILES['myfile']['size'] > $size){
    die('over size');
}

$filename = date('YmdHis').rand(100,999).'.'.$hz;

if(is_uploaded_file($_FILES['myfile']['tmp_name'])){
    if(!move_uploaded_file($_FILES['myfile']['tmp_name'],$path.'/'.$filename)){
        die('can not move');
    }
}else{
    die('file not allowed');
}

echo 'upload success'.'<br>';
echo '<a href="uploadfile.html">back</a><br>';
echo '<a href="http://test.localhost.com/learn_php/upload/wu.jpg">download</a>';