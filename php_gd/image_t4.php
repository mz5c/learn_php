<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/11
 * Time: 10:21
 */
function image($filename,$string){
    list($width,$height,$type) = getimagesize($filename);
    $types = array(1=>'gif',2=>'jpeg',3=>'png');
    $createfrom = 'imagecreatefrom'.$types[$type];
    $image = $createfrom($filename);
    $x = ($width - imagefontwidth(5)*strlen($string)) / 2;
    $y = ($height - imagefontheight(5)) / 2;
    $textcolor = imagecolorallocate($image,255,0,0);
    imagestring($image,5,$x,$y,$string,$textcolor);
    $output = 'image'.$types[$type];
    $output($image,'test.png');
    imagedestroy($image);
}
image('../upload/abcdefg.jpeg','none...');