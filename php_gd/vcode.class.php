<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/7
 * Time: 17:46
 */
class Vcode{
    private $width;
    private $height;
    private $codeNum;
    private $disturbColorNum;
    private $checkCode;
    private $image;

    function __construct($width=120,$height=30, $codeNum=4){
        $this->width = $width;
        $this->height = $height;
        $this->codeNum = $codeNum;
        $number = floor($height*$width/15);
        if($number > 240-$codeNum){
            $this->disturbColorNum = 240-$codeNum;
        }else{
            $this->disturbColorNum = $number;
        }
        $this->checkCode = $this->createCheckCode();
    }

    function __toString(){
        $_SESSION['code'] = strtolower($this->checkCode);
        $this->outImg();
        return '';
    }

    private function outImg(){
        $this->getCreateImage();
        $this->setDisturbColor();
        $this->outputText();
        $this->outputImage();
    }

    private function getCreateImage(){
        $this->image = imagecreatetruecolor($this->width,$this->height);
        $bg = imagecolorallocate($this->image,rand(225,255),rand(225,255),rand(225,255));
        @imagefill($this->image,0,0,$bg);
        $border = imagecolorallocate($this->image,0,0,0);
        imagerectangle($this->image,0,0,$this->width-1,$this->height-1,$border);
    }

    private function createCheckCode(){
        $code = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $ascii = '';
        for($i = 0; $i < $this->codeNum; $i++){
            $char = $code{rand(0,strlen($code)-1)};
            $ascii .= $char;
        }
        return $ascii;
    }

    private function setDisturbColor(){
        for($i = 0; $i <= $this->disturbColorNum; $i++){
            $color = imagecolorallocate($this->image,rand(0,255),rand(0,255),rand(0,255));
            imagesetpixel($this->image,rand(1,$this->width-2),rand(1,$this->height-2),$color);
        }
        for($i = 0; $i < 10; $i++){
            $color = imagecolorallocate($this->image,rand(0,255),rand(0,255),rand(0,255));
            imagearc($this->image,rand(-10,$this->width),rand(-10,$this->height),rand(30,300),rand(20,200),55,44,$color);
        }
    }

    private function outputText(){
        for($i = 0; $i < $this->codeNum; $i++){
            $fontcolor = imagecolorallocate($this->image,rand(0,128),rand(0,128),rand(0,128));
            $fontsize = rand(3,5);
            $x = floor($this->width/$this->codeNum)*$i+10;
            $y = rand(3,$this->height-3-imagefontheight($fontsize));
            imagechar($this->image,$fontsize,$x,$y,$this->checkCode{$i},$fontcolor);
        }
    }

    private function outputImage(){
        header('Content-type:image/png');
        imagepng($this->image);
    }

    function __destruct(){
        imagedestroy($this->image);
    }
}