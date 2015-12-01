<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>
<body>
<div style="text-align: center;">
    <h1>hello</h1>
    <?php
    foreach($_POST as $key => $value){
        echo $key.' : '.$value.'<br>';
    }
    ?>
</div>
</body>
</html>