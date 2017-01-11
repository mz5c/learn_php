<?php
require_once 'sort.php';
$arr = range(1, 2000);
shuffle($arr);
Sort::ShellSort($arr);
Sort::InsertSort($arr);
Sort::SelectSort($arr);
Sort::SelectSort2($arr);
$a = new Sort();
$a->HeapSort($arr);
