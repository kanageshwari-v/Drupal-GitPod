<?php
$array("[1,2,3,4,5]");
$array1("[1,-2,3,-4,5]");

function invert($array) {
    return array.map(num => num * -1)
 }
echo invert(array);
function invert1($array) {
    return array.map(num =>   {
      return num * -1
    })
 }
echo invert1(array);
?>