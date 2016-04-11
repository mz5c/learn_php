<?php
session_start();
if(isset($_POST['code'])){
    if(strtolower(trim($_POST['code'])) == $_SESSION['code']){
        echo '<script>alert("success")</script>';
    }else{
        echo '<script>alert("failed")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>test</title>
    <link rel="stylesheet" href="../bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <script src="../bootstrap-3.3.5-dist/jquery-2.1.4.min.js"></script>
    <script src="../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <script>
        function newgdcode(obj,url){
            obj.src = url+'?nowtime='+new Date().getTime();
        }
    </script>
</head>
<body>
<div class="container">
    <h1>vcode</h1>
    <img src="imgcode.php" alt="change" style="cursor: pointer;" onclick="javascript:newgdcode(this,this.src);">
    <form role="form" action="image.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>input check_code</label>
            <input class="form-control" type="text" name="code">
        </div>
        <div class="form-group">
            <input class="form-control" type="submit" value="submit">
        </div>
    </form>
</div>
</body>
</html>
