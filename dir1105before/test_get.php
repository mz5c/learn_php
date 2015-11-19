<?php
/**
 * Created by PhpStorm.
 * User: mz5c
 * Date: 2015/11/1
 * Time: 0:05
 */
//$_GET 也可用于收集提交 HTML 表单 (method="get") 之后的表单数据
//$_GET 也可以收集 URL 中的发送的数据
echo "Study " . $_REQUEST['subject'] . " at " . $_GET['web'];