<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/14
 * Time: 14:02
 */
class Result{
    private $action;

    function __construct(){
        $this->action = $_GET['action'];
    }

    function __toString(){
        $shape = 'get'.ucfirst($this->action);
        $res = $this->$shape();
        return $res;
    }

    private function getRect(){
        $input = '周长：'.($_POST['width']*2+$_POST['height']*2).'<br>';
        $input .= '面积：'.($_POST['height']*$_POST['width']).'<br>';
        return $input;
    }

    private function getTriangle(){
        $s = ($_POST['side1'] + $_POST['side2'] + $_POST['side3'])/2;
        $area = sqrt($s*($s - $_POST['side1'])*($s - $_POST['side2'])*($s - $_POST['side3']));
        $input = '周长：'.($_POST['side1'] + $_POST['side2'] + $_POST['side3']).'<br>';
        $input .= '面积：'.$area.'<br>';
        return $input;
    }

    private function getCircle(){
        $input = '周长：'.(pi()*$_POST['radius']*2).'<br>';
        $input .= '面积：'.($_POST['radius']*$_POST['radius']*pi());
        return $input;
    }
}