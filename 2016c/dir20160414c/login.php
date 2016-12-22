<?php
function clearCookies(){
    setcookie('username','',time()-3600);
    setcookie('isLogin','',time()-3600);
}

if(isset($_GET['action'])&&$_GET['action']=='login'){
    clearCookies();
    if($_POST['username']=='admin' && $_POST['password']=='123456'){
        setcookie('username',$_POST['username'],time()+300);
        setcookie('isLogin','1',time()+300);
        header('Location:index.php');
    }else{
        echo '<script>alert("wrong username or password!");</script>';
    }
}else if(isset($_GET['action'])&&$_GET['action']=='logout'){
    clearCookies();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <script src="../bootstrap-3.3.5-dist/jquery-2.1.4.min.js"></script>
    <script src="../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h1>Login</h1>
    <form role="form" action="login.php?action=login" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>user_name</label>
            <input class="form-control" type="text" name="username">
        </div>
        <div class="form-group">
            <label>password</label>
            <input class="form-control" type="password" name="password">
        </div>
        <div class="form-group">
            <input class="form-control" type="submit" value="submit">
        </div>
    </form>
</div>
</body>
</html>