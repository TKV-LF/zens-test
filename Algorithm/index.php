<?php

    function miniMaxSum($arr) {
        // Find min and max, then sum all, then subtract min and max
        // Big O(n), n = number of elements in array, O(1) space, no extra space needed
        $min = 0;
        $max = 0;
        $sum = 0;
        foreach($arr as $value){
            $sum += $value;
            if ($value > $max){
                $max = $value;
            }
            if ($value < $min){
                $min = $value;
            }
        }
        $min = $sum - $max;
        $max = $sum - $min;
        echo $min." ".$max . "\n";
    }

    $input = trim(fgets(STDIN));
    $arr = array_map('intval', preg_split('/ /', $input, -1, PREG_SPLIT_NO_EMPTY));
    miniMaxSum($arr);

?>