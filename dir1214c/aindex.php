<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>图形计算（使用面向对象技术开发）</title>
</head>
<body>
<div style="text-align: center;">
    <h1>图形（周长&面积）计算器</h1>
    <a href="aindex.php?action=rect">矩形</a> ||
    <a href="aindex.php?action=triangle">三角形</a> ||
    <a href="aindex.php?action=circle">圆形</a>
    <?php
    error_reporting(E_ALL & ~E_NOTICE);

    function __autoload($className){
        include strtolower($className).".class.php";
    }

    echo new Form("aindex.php");
    if(isset($_POST['sub'])){
        echo new Result();
    }
    ?>
</div>
</body>
</html>