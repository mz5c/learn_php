<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/1
 * Time: 15:34
 */
class DB{
    private $sql = array(
        'field' => '',
        'where' => '',
        'order' => '',
        'group' => '',
        'limit' => '',
        'having' => ''
    );

    function __call($methodName, $args){
        $methodName = strtolower($methodName);
        if(array_key_exists($methodName,$this->sql)){
            $this->sql[$methodName] = $args[0];
        }else{
            echo get_class($this).' not exist '.$methodName.'()';
        }
        return $this;
    }
    function select(){
        echo "select from {$this->sql['field']} user {$this->sql['where']} {$this->sql['order']} {$this->sql['limit']} {$this->sql['group']} {$this->sql['having']}";
    }
}

$db  = new DB();
$db->field('sex, count(sex)')->where('where sex in ("male", "female")')->group('group by sex')->having('having avg(age) > 25')->select();
echo '<br>';
$db->query();