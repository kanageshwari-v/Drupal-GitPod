<?php

$str = ("bitcoin take over the world maybe who knows perhaps");

function findShort($str){
  $words = explode(" ", $str);
  
  $shortest = strlen($words[0]);
  
  foreach($words as $word){
    $len = strlen($word);
    if($len<$shortest){
      $shortest = $len;
    }
  }
  
  return $shortest;
}
?>