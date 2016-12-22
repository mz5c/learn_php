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
    <?php $arr = array(1,2,3,4,5,6,7,8,9);?>
    <?php for($i=0;$i<10;$i++){?>
        <p><?php echo $i;?></p>
    <?php }?>
</div>
</body>
</html>