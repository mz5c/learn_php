<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/7
 * Time: 16:36
 */
//header('Content-type: image/png');
$im = @imagecreate(80,25);
$background_color = imagecolorallocate($im,255,255,255);
$text_color = imagecolorallocate($im,233,14,91);
imagestring($im,2,5,5,'hello_world',$text_color);
imagepng($im,'hello_world.png');
imagedestroy($im);