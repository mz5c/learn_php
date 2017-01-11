<?php
class Sort
{
	public static function test()
	{
		echo json_encode(range(1,10));
	}

	public static function InsertSort($arr)
	{
		$start = microtime(1);
		$zzz = 0;
		$n = count($arr);
		for ($i = 1; $i < $n; $i++) {
			if ($arr[$i] < $arr[$i - 1]) {
				$zzz++;
				$x = $arr[$i];
				$arr[$i] = $arr[$i - 1];
				$j = $i - 2;
				while ($j >= 0 && $x < $arr[$j]) {
					$zzz++;
					$arr[$j + 1] = $arr[$j];
					$j--;
				}
				$arr[$j + 1] = $x;
			}
		//	echo json_encode($arr) . "\n";
		}
		echo '-----InsertSort-----' . "\n";
	//	echo json_encode($arr) . "\n";
	//	echo $zzz . "\n";
		echo microtime(1) - $start;
		echo "\n";
	}

	public static function ShellSort($arr)
	{
		$start = microtime(1);
		$zzz = 0;
		$n = count($arr);
		$dk = floor($n / 2);
		while ($dk >= 1) {
			for ($i = $dk; $i < $n; $i++) {
				if ($arr[$i] < $arr[$i - $dk]) {
					$zzz++;
					$x = $arr[$i];
					$arr[$i] = $arr[$i - $dk];
					$j = $i - $dk;
					while ($j >= 0 && $x < $arr[$j]) {
						$zzz++;
						$arr[$j + $dk] = $arr[$j];
						$j -= $dk;
					}
					$arr[$j + $dk] = $x;
				}
//				echo json_encode($arr) . "\n";
			}
			$dk = floor($dk / 2);
		}
		echo '-----ShellSort-----' . "\n";
	//	echo json_encode($arr) . "\n";
	//	echo $zzz. "\n";
		echo microtime(1) - $start;
		echo "\n";
	}

	public static function SelectSort($arr)
	{
		$start = microtime(1);
		$zzz = 0;
		$n = count($arr);
		for ($i = 0; $i < $n - 1; $i++) {
			$k = $i;
			for ($j = $i + 1; $j < $n; $j++) {
				$zzz++;
				if ($arr[$j] < $arr[$k]) {
					$k = $j;
				}
			}
			if ($k != $i) {
				$tmp = $arr[$k];
				$arr[$k] = $arr[$i];
				$arr[$i] = $tmp;
			}
			$zzz++;
			//echo json_encode($arr) . "\n";
		}
		echo '-----SelectSort-----' . "\n";
	//	echo json_encode($arr) . "\n";
	//	echo $zzz. "\n";
		echo microtime(1) - $start;
		echo "\n";
	}

	public static function SelectSort2($arr)
	{
		$start = microtime(1);
		$zzz = 0;
		$n = count($arr);
		for ($i = 0; $i < $n/2; $i++) {
			$zzz++;
			$min = $i;
			$max = $n - 1 - $i;
			for ($j = $i + 1; $j < $n - $i - 1; $j++) {
				$zzz++;
				if ($arr[$j] < $arr[$min]) {
					$min = $j;
				}
				if ($arr[$j] > $arr[$max]) {
					$max = $j;
				}
			}
			if ($min != $i) {
				$tmp = $arr[$i];
				$arr[$i] = $arr[$min];
				$arr[$min] = $tmp;
			}
			if ($max != $n - 1 - $i) {
				$tmp = $arr[$n - 1 - $i];
				$arr[$n - 1 - $i] = $arr[$max];
				$arr[$max] = $tmp;
			}
			//echo json_encode($arr) . "\n";
		}
		echo '-----SelectSort2-----' . "\n";
	//	echo json_encode($arr) . "\n";
	//	echo $zzz . "\n";
		echo microtime(1) - $start;
		echo "\n";
	}

	public function HeapAdjust(&$arr, $s, $count)
	{
		$tmp = $arr[$s];
		$child = 2 * $s + 1;
		while ($child < $count) {
			if ($child + 1 < $count && $arr[$child] < $arr[$child + 1]) {
				$child++;
			}
			if ($arr[$s] < $arr[$child]) {
				$arr[$s] = $arr[$child];
				$s = $child;
				$child = 2 * $s + 1;
			} else {
				break;
			}
			$arr[$s] = $tmp;
		}
	}

	public function BuildingHeap(&$arr)
	{
		for ($i = floor((count($arr) - 1)/2); $i >= 0; $i--) {
			$this->HeapAdjust($arr, $i, count($arr));
		}
	}

	public function HeapSort($arr)
	{
		$start = microtime(1);
		$this->BuildingHeap($arr);
		for ($i = count($arr) - 1; $i > 0; $i--) {
			$tmp = $arr[$i];
			$arr[$i] = $arr[0];
			$arr[0] = $tmp;
			$this->HeapAdjust($arr, 0, $i);
		}
		echo '-----HeapSort-----' . "\n";
		echo microtime(1) - $start;
		echo "\n";
		//echo json_encode($arr) . "\n";
	}
}
