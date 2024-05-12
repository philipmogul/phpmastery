<?php 

echo "<h2>VERSION 1 BUBBLESORT</h2>";

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

echo "<hr/> <h2>VERSION 2 BUBBLESORT</h2>";

<?php 
echo "<center><h3>Bubble sorting with php</h3></center><hr/>";


$arr = [12,3,45,6,67,8,1,2,0,6];

echo "Original Array: <pre>";
print_r($arr);
echo "</pre>";

for( $i = 0; $i < sizeof($arr) - 1; $i++ )
{
    for( $j = 0; $j < sizeof($arr) - $i - 1; $j++ )
    {
        if( $arr[$j] > $arr[$j + 1] )
        {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j+1] = $temp;
        }
    }
}

echo "<br />Bubble Sorted Array: <pre>";
print_r($arr);
echo "</pre>";