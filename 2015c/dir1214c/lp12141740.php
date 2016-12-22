<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/14
 * Time: 17:40
 */
$str = 'lamp';
$number = 123;

printf("%s book. page number %u <br>",$str,$number);
printf("%0.3f <br>",$number);
$format = "the %2\$s book contains %1\$d pages.
That is a nice %2\$s book full of %1\$d pages <br>";
printf($format,$number,$str);

$str = "123 This a test ...";
echo ltrim($str,'0..9').'<br>';
echo rtrim($str,'.').'<br>';
echo trim($str,'0..9 A..Z .').'<br>';

$str = 'rico';
echo str_pad($str,10).'<br>';
echo str_pad($str,10,'-=',STR_PAD_BOTH).'<br>';
echo str_pad($str,10,'-=',STR_PAD_LEFT).'<br>';
echo str_pad($str,10,'-=',STR_PAD_RIGHT).'<br>';

echo nl2br("jksf\nkfjs\njlskf\n");
echo htmlspecialchars("<h1>hello</h1>").'<br>';

$str = "<b>web</b> & 'linux' & 'apache'";
echo htmlspecialchars($str,ENT_QUOTES).'<br>';
echo htmlspecialchars($str,ENT_COMPAT).'<br>';
echo htmlspecialchars($str,ENT_NOQUOTES).'<br>';

$str = "a 'quote' is <b>bold</b>";
echo htmlentities($str).'<br>';
echo htmlentities($str,ENT_QUOTES);