<?php
$data = [[2, 5], [3, 4], [8, 7]];
function list_data($data){
    $count = 0;
    foreach($data as $x){

        $count = $count - $x[0];
        $data = $data * $x;
    }
}
echo($data);
?>