<?php
function fin_no_repeat($word){
    $char = null;
    for($i = 0; $i<= strlen($word); $i++){
        if(substr_count($word, substr($word, $i,1)) ==1){
            return substr($word,$i,1);
        }
    }
}
echo find_no_repeat(Green) ."\n";
echo find_no_repeat(abcdea) . "\n";
?>