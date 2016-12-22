<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/7
 * Time: 17:19
 */
$im = imagecreatetruecolor(300,300);
$bg = imagecolorallocate($im,205,205,205);
$black = imagecolorallocate($im,0,0,0);
imagefill($im,0,0,$bg);
$string = 'hello world';
imagestring($im,3,20,20,$string,$black);
imagestringup($im,3,240,240,$string,$black);
header('Content-type: image/jpeg');
imagejpeg($im);