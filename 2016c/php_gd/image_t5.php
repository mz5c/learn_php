<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/11
 * Time: 10:46
 */

function thumb($filename,$width=200,$height=200){
    list($width_orig,$height_orig) = getimagesize($filename);
    if($width && ($width_orig < $height_orig)){
        $width = ($height / $height_orig) * $width_orig;
    }else{
        $height = ($width / $width_orig) * $height_orig;
    }
    $image_p = imagecreatetruecolor($width,$height);
    $image = imagecreatefromjpeg($filename);
    imagecopyresampled($image_p,$image,0,0,0,0,$width,$height,$width_orig,$height_orig);
    imagejpeg($image_p,'none.jpeg',100);
    imagedestroy($image);
    imagedestroy($image_p);
}
thumb('../upload/desktop.jpg',100,100);