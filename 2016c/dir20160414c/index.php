<?php
if(!(isset($_COOKIE['isLogin'])&&$_COOKIE['isLogin']=='1')){
    header('Location:login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="../bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <script src="../bootstrap-3.3.5-dist/jquery-2.1.4.min.js"></script>
    <script src="../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h1>Index</h1>
    <?php echo $_COOKIE['username'];?>&nbsp;&nbsp;<a href="login.php?action=logout">logout</a>
</div>
</body>
</html>