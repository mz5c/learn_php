<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>
<body>
<div style="text-align: center;">
    <h1>hello</h1>
</div>
<table align="center" border="1" width="600">
    <?php
    $out = 0;
    while($out < 10){
        $bgcolor = $out%2 == 0 ? '#ffffff' : '#dddddd';
        echo '<tr bgcolor='.$bgcolor.'>';
        $in = 0;
        while($in < 10){
            echo '<td>'.($out*10+$in).'</td>';
            $in++;
        }
        echo '</tr>';
        $out++;
    }
    ?>
</table>
</body>
</html>