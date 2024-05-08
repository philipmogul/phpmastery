<?php 


function maxSubString($string)
{
    $n = strlen($string);
    $map = [];
    $maxlen = 0;

    for( $i = 0, $j = 0; $j < $n; $j++ )
    {
        if( isset($map[$string[$j]]) )
        {
            $i = max($map[$string[$j]] + 1, $i);
        }
        $maxlen = max($maxlen, $j - $i + 1);
        $map[$string[$j]] = $j;

    }
    return $maxlen;

}

$str = "abcabcbb";
echo maxSubString($str);