<?php
/*
	# 01/07/2023
	# Flavours Test
	# Hermansyah Handya Pranata
	# Created and tested using PHP 8.2.1

	# 3. Anagram - Medium
	# Input: a = "anagram", b = "nagaram"
	# Output: true
	# Explanation: An Anagram is a word or phrase formed by rearranging the letters of a different word or phrase, typically using all the original letters exactly once.
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