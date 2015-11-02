<?php
/**
 * Created by PhpStorm.
 * User: mz5c
 * Date: 2015/11/2
 * Time: 20:33
 */
echo readfile('test.txt').'<br>';
$myfile = fopen('test.txt','r') or die('can not open');
echo fread($myfile,filesize('test.txt'));
fclose($myfile);
echo '<br>';

$myfile = fopen('test.txt','r') or die('can not open');
while(!feof($myfile)){
    echo fgets($myfile).'<br>';
}
fclose($myfile);

$myfile = fopen('test.txt','r') or die('can not open');
while(!feof($myfile)){
    echo fgetc($myfile);
}
fclose($myfile);

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Bill Gates\n";
fwrite($myfile, $txt);
$txt = "Steve Jobs\n";
fwrite($myfile, $txt);
fclose($myfile);
/**
 * php文件读写
 * fread,fwrite
 */