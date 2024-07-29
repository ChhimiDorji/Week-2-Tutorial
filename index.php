<?php
function findSingleNumber($nums) {
    $singleNumber = 0;
    
    // XOR all elements in the array
    foreach ($nums as $num) {
        $singleNumber ^= $num;
    }
    
    return $singleNumber;
}

// Example usage:
$nums = array(5, 3, 4, 3, 4);
$single = findSingleNumber($nums);
echo "The single number in the array is: $single\n";
?>