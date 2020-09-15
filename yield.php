<?php
function myGenerator() {
	yield 'value1';
	yield 'value2';
	yield 'value3';
}

foreach (myGenerator() as $value) {
	echo $value, PHP_EOL;
}

$stime=microtime(true);

// 执行时间约7秒
// function makeRange($length) {
// 	$dataset = [];
// 	for ($i = 0; $i < $length; $i++) {
// 		$dataset[] = $i;
// 	}

// 	return $dataset;
// }

// $customRange = makeRange(1000000);
// foreach ($customRange as $value) {
// 	echo $value, PHP_EOL;
// }

// 执行时间约3秒
function makeRange($length) {
	for ($i = 0; $i < $length; $i++) {
		yield $i;
	}
}

foreach (makeRange(1000000) as $value) {
	echo $value, PHP_EOL;
}

$etime=microtime(true);//获取程序执行结束的时间
$total=$etime-$stime;   //计算差值
echo "<script>alert('当前页面执行时间为：{$total} 秒');</script>";
?>