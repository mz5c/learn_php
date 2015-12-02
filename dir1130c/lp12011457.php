<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/1
 * Time: 14:57
 */
//单例模式演示
class DB{
    private static $obj = null;
    public $age = 23;

    private function __construct(){
        echo 'connect success<br>';
    }

    static function getInstance(){
        if(is_null(self::$obj)){
            self::$obj = new self();
        }
        return self::$obj;
    }

    function query($sql){
        echo $sql;
    }
}
$db = DB::getInstance();
$db->query("select * from user");
echo '<br>';echo $db->age.'<br>';
$a = clone $db;
$a->age = 24;
echo $db->age;
echo $a->age;
