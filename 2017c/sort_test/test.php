<?php
require_once 'sort.php';
$arr = range(1, 10000);
shuffle($arr);
//Sort::ShellSort($arr);
//Sort::InsertSort($arr);
//Sort::SelectSort($arr);
//Sort::SelectSort2($arr);
$a = new Sort();
//$a->HeapSort($arr);
//$a->BubbleSort($arr);
//$a->BubbleSort2($arr);
$a->QuickSort($arr);
