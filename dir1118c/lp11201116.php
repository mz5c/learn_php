<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/20
 * Time: 11:16
 */
$file_handle = fopen('d:/mycookie.txt','w');
var_dump($file_handle);echo '<br>';

$dir_handle = opendir('d:/xampp');
var_dump($dir_handle);echo '<br>';

$link_mysql = mysql_connect('localhost','root','root');
var_dump($link_mysql);echo '<br>';

$img_handle = imagecreate(100,50);
var_dump($img_handle);echo '<br>';

$xml_handle = xml_parser_create();
var_dump($xml_handle);