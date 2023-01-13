<?php
$numbers = array(10 ,2 ,3 ,1 ,1 ,4 ,1 ,2 ,32 ,41 ,22 ,10 ,2 ,4);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}
?>
