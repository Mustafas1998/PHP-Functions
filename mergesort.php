
<?php
function mergeSort($array) {
    $length = count($array);

    if ($length <= 1) {
        return $array; 
    }

    $mid = (int)($length / 2);
    $left = array_slice($array, 0, $mid);
    $right = array_slice($array, $mid);

 
    $left = mergeSort($left);
    $right = mergeSort($right);

 
    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    $leftLength = count($left);
    $rightLength = count($right);
    $i = 0;
    $j = 0; 

    while ($i < $leftLength && $j < $rightLength) {
        if ($left[$i] <= $right[$j]) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    
    while ($i < $leftLength) {
        $result[] = $left[$i];
        $i++;
    }

    while ($j < $rightLength) {
        $result[] = $right[$j];
        $j++;
    }
    return $result;
}


$array = [2,5,3,1,7,8,3];
$array_merge = mergeSort($array);

print_r($array_merge);

