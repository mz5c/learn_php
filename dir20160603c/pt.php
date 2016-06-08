<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/3
 * Time: 17:28
 */

function my_curl_ftp($local_file_path, $local_file, $server_dir){
    $fp = fopen ($local_file_path, "r");
    $ftp = 'ftp://xxx.xxx.xxx.xxx/'.$server_dir.'/'.$local_file;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_USERPWD, 'xxx:xxx');
    curl_setopt($ch, CURLOPT_URL, $ftp);
    curl_setopt($ch, CURLOPT_PUT, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_INFILE, $fp);
    curl_setopt($ch, CURLOPT_INFILESIZE, filesize($local_file_path));
    $http_result = curl_exec($ch);
    $error = curl_error($ch);
    echo $error."<br>";
    $http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
    echo $http_code;
    curl_close($ch);
    fclose($fp);
    if($http_result === false){
        return false;
    }else{
        return true;
    }
}

$local_file_path = '../upload/abcdefg.jpeg';
$local_file = 'desktop.jpg';
$server_dir = 'none';
var_dump(my_curl_ftp($local_file_path,$local_file,$server_dir));