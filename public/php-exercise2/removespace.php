<?php
 $str = 'This Is New Method Ever';
  $newstr = preg_replace([[:space:]])+', '',  trim($str));
 echo $newstr
?>