<?php

function stringBetween($string, $startingWords, $endingWords) {
    foreach ($startingWords as $startingWord) {
        $subtringStart = strpos($string, $startingWord);
        
        if ($subtringStart > 0) {
            foreach ($endingWords as $endingWord){
                $size = strpos($string, $endingWord, $subtringStart) - $subtringStart + strlen($endingWord);
                if ($size > 0) {
                    break;
                }
            }
            if ($size > 0) {
                return substr($string, $subtringStart, $size);
            }
        }
    }
    return null;
}

$startArr = array('the', 'amen'); // Starting strings
$endArr = array('.', ','); // Ending strings
$str = "Hello, the world. Then, it is over.";

echo stringBetween($str, $startArr, $endArr); // the world.
?>