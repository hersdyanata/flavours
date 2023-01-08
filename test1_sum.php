<?php
/*
	# 01/07/2023
	# Flavours Test
	# Hermansyah Handya Pranata
	# Created and tested using PHP 8.2.1

    # 1. SUM - Easy
    # Input: arr = [2, 7, 11, 15], t = 17
    # Output: [0, 3]
    # Explanation: Because arr[0] + arr[3] == 17, we return [0, 3]
*/

function get_output($arr, $t){
	$output = array();
	for($i = 0; $i < count($arr); $i++){
	  for($r = 0; $r < count($arr); $r++){
	    if($arr[$i] + $arr[$r] == $t){
	      $output = [$r, $i];
	    }
	  }
	}
	return json_encode($output);
}

$array = [2,7,11,15];
$t = 17;
echo get_output($array, $t);