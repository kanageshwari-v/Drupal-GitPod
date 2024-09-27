<?php
$str = "simple', 'is', 'better', 'than', 'complex";
function findLongestWordLength($str) {
    $arr = explode(" ", $str);
    $max = 0;
    foreach ($arr as $word) {
        if (strlen($word) > $max) {
            $max = strlen($word);
        }
    }
    return $max;
}
echo findlongstword($str);
?>