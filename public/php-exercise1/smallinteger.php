<?php
$a = [34,2,6,72,-2];
function smallest_2($a){
    $min = $a[0];
foreach($a as $x){
    if($x < $min){
        $min = $x;
    }
}
return $min;
}
echo smallest_2($a)
?>