<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>hello world</title>
    <script>
        window.onload(printdate());
        function printdate(){
            alert(new Date());
        }
    </script>
</head>
<body>
<h1>hello world</h1>
<?php
echo 'yesterday '.date('Y-m-d H:i:s',strtotime('-1 day')).'<br>';
echo 'today     '.date('Y-m-d H:i:s').'<br>';
?>
</body>
</html>