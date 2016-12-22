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
<?php
$mess = '';
if(isset($_POST['opt'])){
    if($_POST['num1'] == ''){
        $mess .= 'first num can not be null<br>';
    }else{
        if(!is_numeric($_POST['num1'])){
            $mess .= 'first one must be a number<br>';
        }
    }
    if($_POST['num2'] == ''){
        $mess .= 'first num can not be null<br>';
    }else{
        if(!is_numeric($_POST['num2'])){
            $mess .= 'seconde one must be a number<br>';
        }else{
            if(($_POST['opt'] == '/' || $_POST['opt'] == '%') && $_POST['num2'] == 0){
                $mess .= 'second one can not be 0';
            }
        }
    }
}else{
    $_POST['opt'] = '+';
    $_POST['num1'] = 0;
    $_POST['num2'] = 0;
}
?>
<table border="1" align="center" width="400">
    <form action="" method="post">
        <caption><h1>calculator</h1></caption>
        <tr>
            <td>
                <input type="text" size="4" name="num1" value="<?php echo $_POST['num1'];?>">
            </td>
            <td>
                <select name="opt">
                    <option value="+" <?php echo $_POST['opt']=='+'? 'selected':'';?>>+</option>
                    <option value="-" <?php echo $_POST['opt']=='-'? 'selected':'';?>>-</option>
                    <option value="x" <?php echo $_POST['opt']=='x'? 'selected':'';?>>x</option>
                    <option value="/" <?php echo $_POST['opt']=='/'? 'selected':'';?>>/</option>
                    <option value="%" <?php echo $_POST['opt']=='%'? 'selected':'';?>>%</option>
                </select>
            </td>
            <td>
                <input type="text" size="4" name="num2" value="<?php echo $_POST['num2'];?>">
            </td>
            <td>
                <input type="submit" name="sub" value="calculate">
            </td>
        </tr>
    </form>
    <?php
    if(isset($_POST['sub'])){
        echo '<tr><td colspan="4">';
        if(!$mess){
            $sum = 0;
            switch($_POST['opt']){
                case '+':
                    $sum = $_POST['num1'] + $_POST['num2'];break;
                case '-':
                    $sum = $_POST['num1'] - $_POST['num2'];break;
                case 'x':
                    $sum = $_POST['num1'] * $_POST['num2'];break;
                case '/':
                    $sum = $_POST['num1'] / $_POST['num2'];break;
                case '%':
                    $sum = $_POST['num1'] % $_POST['num2'];break;
            }
            echo 'result: '.$_POST['num1'].' '.$_POST['opt'].' '.$_POST['num2'].' = '.$sum;
        }else{
            echo $mess;
        }
        echo '</td></tr>';
    }
    ?>
</table>
</body>
</html>