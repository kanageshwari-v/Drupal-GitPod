<?php
$array_a =array('the','amen');
$array_b =array(',','.', '#');
$str = "Hello, the world. Then, it is over.";

function earchString($str, $array_a, $array_b) {
    forEach($array_a as $test) {
        $pos = strpos($str, $test);
        if ($pos===false) continue;
        $found = [];
        forEach($array_b as $test2) {
            $posStart = $pos+strlen($test);
            $pos2 = strpos($str, $test2, $posStart);
            $found[] = ($pos2!==false) ? $pos2 : INF;
        }
        $min = min($found);
        if ($min !== INF)
            return substr($str,$pos,$min-$pos) .$str[$min];
    }
    return '';
}

echo earchString($str, $array_a, $array_b);
?>