<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/25
 * Time: 17:31
 */

$img = imagecreatetruecolor(100,30);
$backColor = imagecolorallocate($img,rand(225,255),rand(225,255),rand(225,255));
imagefill($img,0,0,$backColor);
$border = imagecolorallocate($img,0,0,255);
imagerectangle($img,0,0,99,29,$border);

for($i= 0; $i <= 150; $i++){
    $color = imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
    imagesetpixel($img,rand(1,98),rand(1,28),$color);
}

for($i = 0; $i < 10; $i++){
    $color = imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
    imagearc($img,rand(-10,100),rand(-10,30),rand(30,300),rand(20,200),55,44,$color);
}
$vcode = 'abcd';
for($i = 0; $i < 4; $i++){
    $fontcolor = imagecolorallocate($img,rand(0,128),rand(0,128),rand(0,128));
    $fontSize = rand(3,5);
    $x = floor(100/4)*$i+3;
    $y = rand(0,30-imagefontheight($fontSize));
    imagechar($img,$fontSize,$x,$y,$vcode{$i},$fontcolor);
}

header('Content-type: image/png');
imagepng($img);
imagedestroy($img);