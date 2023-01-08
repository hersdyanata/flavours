<?php
/*
	# 01/08/2023
	# Flavours Test
	# Hermansyah Handya Pranata
	# Created and tested using PHP 8.2.1

	# 2. Char Exist - Easy
	# Input: arr = ['abcdde', 'baccd', 'eeabg']
	# Output: 2
	# Explanation: Only a and b occur in every array
*/

function check_popular($arr) {
    $length = count($arr) ;
    
    $letters = [] ;
    $count = 0;
    for ($i = 0; $i < strlen($arr[0]); $i++) {
        $countum = 1 ;
        for ($j = 1; $j < $length; $j++) {
            for ($k = 0; $k < strlen($arr[$j]); $k++) {
                
                if ($arr[0][$i] == $arr[$j][$k]) {
                    $countum += 1;
                    break ;
                }
            }
        }
        if ($countum == $length && !in_array($arr[0][$i], $letters)) {
            $count++;
            $letters[] = $arr[0][$i] ;
        } 
    }
    return $count ;
}

$input =  array("abcdde", "baccd", "eeabg");
$d = check_popular($input);

echo $d;