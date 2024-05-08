<?php 
// Palindromes
// strrev & iterations 

// using strrev 
function palindromesA($str)
{
	return strrev($str);
}

$str = "aalaa";
echo palindromesA($str) ? 'Is a Palindrome ' : ' Not a Palindrome ';

echo "<br />";

// using iterations 
function palindromesB($string)
{
	$val = '';
	for( $i = strlen($string) - 1; $i >= 0; $i-- )
	{
		$val .= $string[$i];
	}
	if( $val == $string )
	{
		echo "Is a Palindrome";
	}
	else
	{
		echo "Not a Palindrome";
	}
}
$str2 = "aalaa";
palindromesB($str2); 

