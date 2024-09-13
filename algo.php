<?php
/** 1 */
$str = 'NEGIE1';
$res = strrev($str);
$res = substr($res, 1) . $res[0];

echo '1. ' . $res . PHP_EOL;

/** 2 */
$str = "Saya sangat senang mengerjakan soal algoritma meng2rjakan";

function longest($str){
	$arr = explode(' ', $str);
	$max = '';
	foreach ($arr as $text){
		$length = strlen($text);
		if($length > strlen($max)) $max = $text;
	}
	return $max;
}
$long = longest($str); 
echo '2. ' . $long . ':' . strlen($long) . ' karakter' . PHP_EOL;

/** 3*/
$input = ['xc', 'dz', 'bbb', 'dz'];
$query = ['bbb', 'ac', 'dz'];

$res = [];
foreach ($query as $q){
	$count = 0;
	foreach ($input as $i){
		if($q == $i) $count++;
	}
	$res[] = $count;
}

$res = array_map(function ($item) use ($input) {
	$a = array_reduce($input, function ($i, $j) use ($item) {
		return (int)($item == $j) + $i;
	}, 0);
	return $a;
}, $query);
echo '3. ' . json_encode($res) . PHP_EOL;


/** 4 */
//diagonal pertama = 1 + 5 + 9 = 15
//diagonal kedua = 0 + 5 + 7 = 12
//
//maka hasilnya adalah 15 - 12 = 3

$matrix = [[1, 2, 0], [4, 5, 6], [7, 8, 9]];

$d1 = $d2 = 0;
$count = count($matrix) - 1;
foreach ($matrix as $k => $item){
	$d1 += $item[$k];
	$d2 += $item[$count--];
}
$res = $d1 - $d2;
echo '4. ' . $res . PHP_EOL;
