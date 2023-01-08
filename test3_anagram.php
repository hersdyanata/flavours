<?php
/*
	# 01/07/2023
	# Flavours Test
	# Hermansyah Handya Pranata
	# Created and tested using PHP 8.2.1

	# 3. Char Exist - Easy
	# Input: arr = ['abcdde', 'baccd', 'eeabg']
	# Output: 2
	# Explanation: Only a and b occur in every array
*/

function check_anagram($string1, $string2){
    $result = false;
    if(count_chars($string1, 1) == count_chars($string2, 1)){
        $result = true;
    }

    return json_encode($result);
}

$string1 = 'anagram';
$string2 = 'nagaram';
echo check_anagram($string1, $string2);