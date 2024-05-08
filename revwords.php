<?php 
// reversing words 
// implode & iterations 

$str = "Words to be reversed";


// iterations
function revWordsA($Str)
{
	$newstr = "";
	$len = strlen($Str);
	$start = $len - 1;
	$end = $len - 1;

	while( $start >= 0 )
	{

		while( $start >= 0 && $Str[$start] != ' ' )
		{
			$start--;
		}

		$newstr .= substr($Str, $start + 1, $end - $start). ' ';

		while( $start >= 0 && $Str[$start] == ' ' )
		{
			$start--;
		}
		$end = $start;
	}
	return $newstr;

}


echo "<br />Original Words = ".$str;
echo "<br />Reversed words = ".revWordsA($str);


// using implode
function revWordsB($Str)
{
	echo "<br/>Original Words = ". $Str;
	echo "<br/>Reversed words = ";
	echo implode(" ", array_reverse(explode(" ", $Str)));
}
revWordsB($str);
echo "<br /><br />";