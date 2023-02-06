<?php

function odd_numbers($start, $end){
    if($start > $end) 
        return;
    if($start % 2 != 0){
        echo $start. " ";
    }
    odd_numbers($start + 1, $end);
}
odd_numbers(1, 20);

?>