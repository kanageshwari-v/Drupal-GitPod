<?php
$data1 = [ [10,0],[3,5],[5,8]];
$data2 = [[3,0],[9,1],[4,10],[12,2],[6,1],[7,10]];
$data3 = [[3,0],[9,1],[4,8],[12,2],[6,1],[7,8]];
function count_people_in_bus1($data1) {
    $count = 0;
    foreach($data1 as $stop){
        $count = $count + $stop[0];
        $count = $count - $stop[1];
    }
    return $count;
}
function count_people_in_bus2($data2) {
    $count = 0;
    foreach($data2 as $stop){
        $count = $count + $stop[0];
        $count = $count - $stop[1];
    }
    return $count;
}
function count_people_in_bus3($data3) {
    $count = 0;
    foreach($data3 as $stop){
        $count = $count + $stop[0];
        $count = $count - $stop[1];
    }
    return $count;
}
echo count_people_in_bus1($data1);
echo count_people_in_bus2($data2);
echo count_people_in_bus3($data3);
?>