<?php
function train_track($pairs){
    $upper_case=strtoupper($pairs);
    $mod_pairs=explode(" ",$upper_case);
    $mod_string=join("",$mod_pairs);
    //echo $mod_string;
    $x=substr_count ($mod_string,"F");
    $y=substr_count ($mod_string,"M");
    if ($x==$y){
        return "LOOP<br>";
    } else {
        return "NO LOOP<br>";
    }

}
echo train_track("MF MF");
echo train_track("FM FF MF MM");
echo train_track("MM FF");
echo train_track("MF MF MF MF FF");
echo train_track("mm ff ff MM");
?>