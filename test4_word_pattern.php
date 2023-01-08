<?php
/*
	# 01/08/2023
	# Flavours Test
	# Hermansyah Handya Pranata
	# Created and tested using PHP 8.2.1

	# 4. Word Pattern - Hard
	# Input: p = "abba", s = "hello world world hello"
	# Output: true
	# Explanation: a = "hello", b = "world", it false if s = "hello world world world" it same as "abbb"
*/

function check_pattern($pattern, $str){
	$data = [];
	$str_array = explode(' ', $str);
	if(strlen($pattern) !== count($str_array)){
		return false;
	}
	
	for($i = 0; $i < count($str_array); $i++){
		$current = substr($pattern, $i, 1);
		if(!array_key_exists($current, $data)){
			foreach($data as $k => $val){
				if($data[$k] == $str_array[$i]){
					return false;
				}
			}
			$data[$current] = $str_array[$i];
		}else{
			if($data[$current] !== $str_array[$i]){
				return false;
			}
		}
	}
	
	return true;
}

$p = 'abba';
$string = 'hello world world hello';
$ans = check_pattern($p, $string);
echo $ans;