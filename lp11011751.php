<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>hello world</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    Name:<input type="text" name="name"><br>
    E-mail:<input type="text" name="email"><br>
    Website:<input type="text" name="website"><br>
    Comment:<textarea name="comment" rows="5" cols="40"></textarea>
    <input type="submit">
</form>
<?php
echo '<h1>your input</h1>'.'<br>';
if(isset($_POST['name'])){
    echo 'Name: '.$_POST['name'].'<br>';
}
if(isset($_POST['email'])){
    echo 'E-mail: '.$_POST['email'].'<br>';
}
if(isset($_POST['website'])){
    echo 'Website: '.$_POST['website'].'<br>';
}
if(isset($_POST['comment'])){
    echo 'Comment: '.$_POST['comment'].'<br>';
}
//$_SERVER['PHP_SELF']能够被黑客利用执行跨站点脚本XSS
//善用htmlspecialchars
?>
</body>
</html>