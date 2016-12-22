<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/25
 * Time: 16:35
 */

session_start();
require_once 'vcode.class.php';

echo new Vcode();