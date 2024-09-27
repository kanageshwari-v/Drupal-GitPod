<?php
function points($games) {
  $points = 0;
  foreach ($games as $game) {
    $score = explode(':', $game);
    if ($score[0] > $score[1]) {
      $points += 3;
    } else if ($score[0] == $score[1]) {
      $points += 1;
    }
  }
  return $points;
}

// Test
echo var_dump(points(["1:0","2:0","3:0","4:0","2:1","3:1","4:1","3:2","4:2","4:3"]) === 30);
echo var_dump(points(["1:1","2:2","3:3","4:4","2:2","3:3","4:4","3:3","4:4","4:4"]) === 10);
echo var_dump(points(["0:1","0:2","0:3","0:4","1:2","1:3","1:4","2:3","2:4","3:4"]) === 10);
?>