<?php 

// Valid Parentheses:

function isValid($s) {
    $stack = [];
    $parenthesesMap = [
        ')' => '(',
        ']' => '[',
        '}' => '{'
    ];
    for ($i = 0; $i < strlen($s); $i++) 
    {
        $char = $s[$i];
        if (array_key_exists($char, $parenthesesMap)) 
        {
            $topElement = (empty($stack)) ? '#' : array_pop($stack);
            if ($topElement !== $parenthesesMap[$char]) 
            {
                return false;
            }
        } 
        else 
        {
            array_push($stack, $char);
        }
    }
    return empty($stack);
}

// Example usage:
$s = "()[]{}";
echo isValid($s) ? "Valid" : "Invalid"; // Output: Valid

