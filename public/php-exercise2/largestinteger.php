<?php
$a = [19, 5, 42, 2, 77];
function largest_2($a){
    $max = $a[0];
foreach($a as $x){
    if($x < $max){
        $max = $x;
    }
}
return $max;
}
echo largest_2($a)
?>