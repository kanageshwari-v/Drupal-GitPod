<?php

function maxProduct(&$arr, $n)
{
    if ($n < 2)
    {
        echo("No pairs exists\n");
        return;
    }
 
    if ($n == 2)
    {
        echo ($arr[0]);
        echo (" ");
        echo($arr[1]);
        echo("\n");
        return;
    }
}
    $posa = 0;
    $posb = 0;
 
    $nega = 0;
    $negb = 0;
    
    for ($i = 0; $i < $n; $i++)
    {

        if ($arr[$i] > $posa)
        {
            $posb = $posa;
            $posa = $arr[$i];
        }
        else if ($arr[$i] > $posb)
            $posb = $arr[$i];
 
        if ($arr[$i] < 0 &&
            abs($arr[$i]) > abs($nega))
        {
            $negb = $nega;
            $nega = $arr[$i];
        }
        else if($arr[$i] < 0 &&
            abs($arr[$i]) > abs($negb))
            $negb = $arr[$i];
    }
 
    if ($nega * $negb > $posa * $posb)
    {
        echo("Max product pair is {");
        echo $nega;
        echo(", ");
        echo ($negb);
        echo ("}");
    }
    else
    {
        echo("Max product pair is {");
        echo $posa;
        echo(", ");
        echo ($posb);
        echo ("}");
    }
$arr = array(1, 2, 3, 4, 5, 6 ,7);
$n = sizeof($arr);
maxProduct($arr, $n);
 ?>
