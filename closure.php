<?php
// 闭包
$closure = function ($name) {
	return sprintf('Hello %s', $name);
};
echo $closure("josh");

$numbersPlusOne = array_map(function ($number) {
	return $number + 1;
}, [4,5,6]);
print_r($numbersPlusOne);

function incrementNumber($number) {
	return $number + 1;
}

$numbersPlusOne = array_map('incrementNumber', [1,2,3]);
print_r($numbersPlusOne);

function enclosePerson($name) {
	return function ($doCommand) use ($name) {
		return sprintf('%s, %s', $name, $doCommand);
	};
}

$clay = enclosePerson('Clay');
echo $clay('get me sweet tea!');
?>