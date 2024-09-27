<?php
function str2_in_str1($str1,$str2){
    $p_len = strlen($str2);
    $w_len = strlen($str1);
    $word_strat = $w_len-$p_len-1;
    if(substr($str1, $w_len-$p_len,$p_len) == $str2){
        return "true";
    }else{
        return "false";
    }

}
echo str2_in_str1("python","on") ."\n";
echo str2_in_str1("javascript","php");
?>