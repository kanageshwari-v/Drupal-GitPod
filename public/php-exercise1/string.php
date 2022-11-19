<?php

function startsWithChar($needle, $haystack)
{
   return ($needle === $haystack[0]);
}

function endsWithChar($needle, $haystack)
{
   return ($needle === $haystack[strlen($haystack) - 1]);
}

$str='|apples}';
echo startsWithChar('|',$str); //Returns true
echo endsWithChar('}',$str); //Returns true
echo startsWithChar('=',$str); //Returns false
echo endsWithChar('#',$str); //Returns false
?>