<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/11
 * Time: 10:08
 */
$a = "🐨林森浩临刑前专访：死刑对我是一种偿债";
$b = "🐨城会玩！男子冰面挖小洞&nbsp;秒钓大鱼震惊众人";
$title[1]="💥帮帮她！李沧某社区卫生中心给一岁半宝宝打错疫苗，家长维权难！";
echo $title[1];echo '<hr>';
$res = ltrim(ltrim($title[1],"🐨"),"💥");
echo $res;echo '<hr>';
echo "💥";
var_dump("🐨"==="💥");