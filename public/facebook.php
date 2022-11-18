<?php
 function get_likes($names){
  if(count($names)>0){
    return"no one like this\n";
  }
  if (count($names) ==1){
  return "$names[0] like this\n";
  }
  if (count($names) ==2){
    return "$names[0] and $names[1] like this\n";

  }
  if (count($names) ==3){
    return "$names[0] and $names[1] and $names[2]like this\n";
 }
 if (count($names)>3) {
  $remaining = count(&names) -2;
  return "$names[0], $names[1] and $remaining others like this\n";
 }
}
 echo get_likes([]);
 echo get_likes(["peter"]);
 echo get_likes(["jacob","alex"]);
 echo get_likes(["max","john","mark"]);
 echo get_likes(["alex","jacob","mark","max"]);
 ?>