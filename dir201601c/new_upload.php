<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/5
 * Time: 17:34
 */
require 'fileupload.class.php';

$up = new FileUpload();
$up->set('path','../upload')
    ->set('size',1000000)
    ->set('allowtype',array('jpg','png','gif','txt'))
    ->set('israndname',false);

if($up->upload('myfile')){
    print_r($up->getFileName());
}else{
    print_r($up->getErrorMsg());
}