<?php
function swap(&$a, &$b)
{
	$tmp = $a;
	$a   = $b;
	$b   = $tmp;
}
$a[0] = 12;
$a[1] = 21;
echo $a[0].$a[1]."\n";
swap($a[0], $a[1]);
echo $a[0].$a[1];
