<?php 

function bubbleSort(&$arr) {
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
        // Last $i elements are already in place
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Swap if the element found is greater than the next element
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}

// Example usage
$nums = [5, 3, 8, 2, 1, 4];
bubbleSort($nums);
echo "Sorted array: [" . implode(", ", $nums) . "]";

