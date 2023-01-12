<?php
$arr = [10, 2, 3, 1, 1, 4, 1, 2, 32, 41, 22, 10, 2, 4];
function group_same_numbers($arr) {
    $result = [];
    $count = count($arr);
    for ($i = 0; $i < $count; $i++) {
        $result[$arr[$i]] = $result[$arr[$i]] + 1;
    }
    ksort($result);
    $result_arr = [];
    foreach ($result as $key => $value) {
        for ($i = 0; $i < $value; $i++) {
            $result_arr[] = $key;
        }
    }
    return $result_arr;
}

echo(group_same_numbers($arr));
?>