<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/19
 * Time: 10:27
 */
$sysos = $_SERVER['SERVER_SOFTWARE'];
$sysversion = PHP_VERSION;

mysql_connect("localhost",'root','root');
$mysqlinfo = mysql_get_server_info();

if(function_exists('gd_info')){
    $gd = gd_info();
    $gdinfo = $gd['GD Version'];
}else{
    $gdinfo = 'none';
}

$freetype = $gd['FreeType Support']? 'y':'n';
$allowurl = ini_get('allow_url_fopen')? 'y':'n';
$max_upload = ini_get('file_uploads')? ini_get('upload_max_filesize'):'disabled';
$max_ex_time = ini_get('max_execution_time').'second';
date_default_timezone_get('Etc/GMT-8');
$systemtime = date('Y-m-d H:i:s',time());

echo <<<end
<table align=center cellspacing=0 cellpadding=0>
    <caption><h2>info</h2></caption>
    <tr><td>web service</td><td>$sysos</td></tr>
    <tr><td>php version</td><td>$sysversion</td></tr>
    <tr><td>mysql version</td><td>$mysqlinfo</td></tr>
    <tr><td>gd info</td><td>$gdinfo</td></tr>
    <tr><td>freetype</td><td>$freetype</td></tr>
    <tr><td>get remote file</td><td>$allowurl</td></tr>
    <tr><td>max upload</td><td>$max_upload</td></tr>
    <tr><td>max exec time</td><td>$max_ex_time</td></tr>
    <tr><td>time</td><td>$systemtime</td></tr>
end;
