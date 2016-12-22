<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/7
 * Time: 16:51
 */
$im = imagecreatetruecolor(300,300);
$red = imagecolorallocate($im,255,0,0);
$green = imagecolorallocate($im,0,255,0);
$blue = imagecolorallocate($im,0,0,255);
$white = imagecolorallocate($im,255,255,255);
imagefill($im,0,0,$red);
imagesetpixel($im,50,50,$green);
imageline($im,10,10,90,25,$blue);
imagerectangle($im,15,15,35,25,$green);
imagefilledrectangle($im,55,30,95,70,$white);
//imagepolygon($im,array(100,20,150,12,173,22,161,41,135,55),5,$blue);
imagefilledpolygon($im,array(100,10,150,32,173,122,161,111,135,155),5,$white);
imageellipse($im,200,200,50,30,$green);
imagefilledellipse($im,100,200,30,50,$blue);
imagearc($im,150,250,60,90,0,200,$white);
imagefilledarc($im,120,120,55,90,0,60,$white,IMG_ARC_PIE);
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);