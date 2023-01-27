<?php
for($i = 0; $i < 7; $i++){
    for($j = o; $j < 7; $j++){
        if($j == 1){
            echo str_pad($i*$j, 2, "",STR_PAD_LIFT);

        
        }else{
            echo str_pad($i*$j, 4, STR_PAD_LIFT);
        }

    }
    echo "\n";
}
?>