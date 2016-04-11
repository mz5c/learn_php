<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/7
 * Time: 18:15
 */
session_start();
require_once 'vcode.class.php';
echo new Vcode();