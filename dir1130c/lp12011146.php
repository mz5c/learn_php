<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/1
 * Time: 11:46
 */
$a = array('abcde','djkf','dfj','djfk');
usort($a,'sortByLen');
var_dump($a);
function sortByLen($one,$two){
    if(strlen($one) == strlen($two)){
        return 0;
    }else{
        return strlen($one) > strlen($two) ? 1 : -1;
    }
}
echo '<hr>';
$data = array(
    array('id'=>1,'name'=>'b','rating'=>3),
    array('id'=>2,'name'=>'a','rating'=>1),
    array('id'=>3,'name'=>'b','rating'=>4),
    array('id'=>4,'name'=>'c','rating'=>2)
);
foreach ($data as $key => $value) {
    $name[$key] = $value['name'];
    $rating[$key] = $value['rating'];
}
array_multisort($name,$rating,$data);
echo '<xmp>';var_dump($data);
