<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/9
 * Time: 15:38
 */
function my_scandir($dir){
    $files = array();
    if(is_dir($dir)){
        if($handle = opendir($dir)){
            while(($file = readdir($handle)) !== false){
                if($file != "." && $file != ".."){
                    if(is_dir($dir."/".$file)){
                        echo $dir."/".$file."<br>";
                        $files[$file] = my_scandir($dir."/".$file);
                    }else{
                        //$files[] = $dir."/".$file;
                        echo $dir."/".$file."<br>";
                    }
                }
            }
        }
    }
    closedir($handle);
    return $files;
}
//print_r(my_scandir("d:/xampp/htdocs/learn_php"));
my_scandir("d:/xampp/htdocs/learn_php");