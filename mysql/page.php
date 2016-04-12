<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/12
 * Time: 11:26
 */
include_once 'page.class.php';
$page = new Page(1000);
$sql = "select * from article {$page->limit}";
echo 'sql = "'.$sql.'"<p>';
echo $page->fpage();