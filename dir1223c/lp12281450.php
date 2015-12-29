<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/28
 * Time: 14:50
 */
$str = "只差一厘米&quot;害了她一生&nbsp;&nbsp;  &lt;    余氏身高预测法成就了“泳神”孙杨,也可以成就你的孩子！";
echo htmlspecialchars_decode($str);

echo str_replace('&nbsp;','3',$str);