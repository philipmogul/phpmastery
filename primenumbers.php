<?php
// prime numbers 

function is_prime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function find_primes($limit) {
    $primes = array();
    for ($i = 2; $i <= $limit; $i++) {
        if (is_prime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}

$limit = 100; // Change this limit as needed
$prime_numbers = find_primes($limit);

echo "Prime numbers up to $limit are: " . implode(", ", $prime_numbers);
?>

