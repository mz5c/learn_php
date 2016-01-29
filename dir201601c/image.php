<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/25
 * Time: 15:46
 */

$image = imagecreatetruecolor(100,100);

$white = imagecolorallocate($image,0xff,0xff,0xff);
$gray = imagecolorallocate($image,0xc0,0xc0,0xc0);
$darkgray = imagecolorallocate($image,0x90,0x90,0x90);
$navy = imagecolorallocate($image,0x00,0x00,0x80);
$darknavy = imagecolorallocate($image,0x00,0x00,0x50);
$red = imagecolorallocate($image,0xff,0x00,0x00);
$darkred = imagecolorallocate($image,0x90,0x00,0x00);

imagefill($image,0,0,$white);

for($i = 60; $i > 50; $i--){
    imagefilledarc($image,50,$i,100,50,-160,40,$darknavy,IMG_ARC_PIE);
    imagefilledarc($image,50,$i,100,50,40,75,$darkgray,IMG_ARC_PIE);
    imagefilledarc($image,50,$i,100,50,75,200,$darkred,IMG_ARC_PIE);
}

imagefilledarc($image,50,$i,100,50,-160,40,$navy,IMG_ARC_PIE);
imagefilledarc($image,50,$i,100,50,40,75,$gray,IMG_ARC_PIE);
imagefilledarc($image,50,$i,100,50,75,200,$red,IMG_ARC_PIE);

imagestring($image,1,15,55,'34.7%',$white);
imagestring($image,1,45,35,'55.5%',$white);

header('Content-type:image/png');
imagepng($image);
imagedestroy($image);