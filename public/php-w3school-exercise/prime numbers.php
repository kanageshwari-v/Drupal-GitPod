<?php
$primes = array();
$is_prime_number = "false";
for($i=2; $i<100;$i++){
    $is_prime_number = "true";
       for($j= 2; $j<($i/2); $j++){
        if($i%$j==0){
            $is_prime_number =="false";
            breake;
        }
       }
       if($is_prime_number){
        array_push($primes, $i);
       }
       if(count($primes)==100){
        breake;

       }
}
echo array_sum($primes). "\n";
?>