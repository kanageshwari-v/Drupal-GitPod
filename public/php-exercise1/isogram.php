<?php
function isogram($names){
    $result=[];
    $name=strtoupper($names);
    $new_name=str_split($name);
   foreach ($new_name as $new){
    $x=substr_count ($name,$new);
    if ($x==1){
        array_push($result,$new);
    }
   }
   $y=count($result);
   $z=strlen($name);
   if ($y==$z){
    return "True<br>";} else{
        return "False<br>";
    }
   }
echo isogram("Dermatoglyphics");
echo isogram("aba");
echo isogram("moOse")
?>