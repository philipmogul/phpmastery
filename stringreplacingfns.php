<?php 

// string replaceing i with a : str_replace and str_split + str_replace

function method1($string)
{
	echo "<h3>Method 1</h3>";
	echo "Original string = {$string} <br />";
	$string = str_replace('i','a', $string);
    echo "Final string = {$string}";
}

function method2($string)
{
	echo "<h3>Method 2</h3>";
	echo "Original string = {$string} <br />";
	$val = str_split($string);
    foreach( $val as &$values )
    {
    	$values = str_replace('i','a',$values);
    }
    $res = implode("", $val);
    echo "Final string = {$res}";
}

$str = "Philip is a great programmer replacing iiiiii with aaaaa";
method1($str);
echo "<hr />";
method2($str);



