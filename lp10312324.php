<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>hello world</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname" value="hello">
    <input type="submit">
</form>

<?php
//$_REQUEST 用于收集 HTML 表单提交的数据
//$_POST 广泛用于收集提交 method="post" 的 HTML 表单后的表单数据。$_POST 也常用于传递变量
$name = '';
if(isset($_REQUEST['fname'])) {
    $name = $_REQUEST['fname'];
}
echo $name.' '.$_SERVER['PHP_SELF'];
?>
</body>
</html>