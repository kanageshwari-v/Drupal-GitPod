<?php
function printEven($x)
{
  if($x > 0){

    printEven($x-2); 
    echo $x."<br />";
  }
}

$num = 10;
echo "Even numbers are:<br />";
printEven($num);
?>