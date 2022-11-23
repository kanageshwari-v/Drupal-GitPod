<?php

function tariff_plan($second){
    $seconds=explode(" ",$second);
    $mile=[];
    //$x=array_sum($seconds);
    foreach ($seconds as $sec){
        if ($sec <= 29){
            array_push($mile,10);
        }
        if ($sec>29){
            array_push($mile,10);
            $remaining=($sec-29);
            $y=$remaining/30;
            $addvalue=floor($y);
            $p=$addvalue*10;
            array_push($mile,$p);
            $z=$remaining%30;
            if (($z>0)and ($z<29)){
                array_push($mile,10);
            }
        }
    }
    $juice=[];
    foreach ($seconds as $sec){
        if ($sec <= 59){
            array_push($juice,15);
        }
        if ($sec>59){
            array_push($juice,15);
            $remainings=($sec-59);
            $xy=$remainings/60;
            $addvalues=floor($xy);
            $pj=$addvalues*15;
            array_push($juice,$pj);
            $xz=$remainings%60;
            if (($xz>0)and ($xz<=59)){
                array_push($juice,15);
            }
        }
    }
    $mile_sum= array_sum($mile);
    $juice_sum= array_sum($juice);
    $min=min($mile_sum,$juice_sum);
    if ($mile_sum==$juice_sum){
        return "Mile Juice " . " ".$juice_sum."<br>" ;
    }
    if ($juice_sum > $mile_sum){
        return "Mile"." " .$mile_sum."<br>";
    }
    if ($juice_sum < $mile_sum){
        return "Juice" . " " .$juice_sum."<br>";
    } 
}

echo tariff_plan("61 10") ;  
echo tariff_plan("40 40 40");
echo tariff_plan("60 65"); 
?>